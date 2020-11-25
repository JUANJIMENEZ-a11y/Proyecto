<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecategoriasAPIRequest;
use App\Http\Requests\API\UpdatecategoriasAPIRequest;
use App\Models\categorias;
use App\Repositories\categoriasRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class categoriasController
 * @package App\Http\Controllers\API
 */

class categoriasAPIController extends AppBaseController
{
    /** @var  categoriasRepository */
    private $categoriasRepository;

    public function __construct(categoriasRepository $categoriasRepo)
    {
        $this->categoriasRepository = $categoriasRepo;
    }

    /**
     * Display a listing of the categorias.
     * GET|HEAD /categorias
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $categorias = $this->categoriasRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($categorias->toArray(), 'Categorias retrieved successfully');
    }

    /**
     * Store a newly created categorias in storage.
     * POST /categorias
     *
     * @param CreatecategoriasAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecategoriasAPIRequest $request)
    {
        $input = $request->all();

        $categorias = $this->categoriasRepository->create($input);

        return $this->sendResponse($categorias->toArray(), 'Categorias saved successfully');
    }

    /**
     * Display the specified categorias.
     * GET|HEAD /categorias/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var categorias $categorias */
        $categorias = $this->categoriasRepository->find($id);

        if (empty($categorias)) {
            return $this->sendError('Categorias not found');
        }

        return $this->sendResponse($categorias->toArray(), 'Categorias retrieved successfully');
    }

    /**
     * Update the specified categorias in storage.
     * PUT/PATCH /categorias/{id}
     *
     * @param int $id
     * @param UpdatecategoriasAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecategoriasAPIRequest $request)
    {
        $input = $request->all();

        /** @var categorias $categorias */
        $categorias = $this->categoriasRepository->find($id);

        if (empty($categorias)) {
            return $this->sendError('Categorias not found');
        }

        $categorias = $this->categoriasRepository->update($input, $id);

        return $this->sendResponse($categorias->toArray(), 'categorias updated successfully');
    }

    /**
     * Remove the specified categorias from storage.
     * DELETE /categorias/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var categorias $categorias */
        $categorias = $this->categoriasRepository->find($id);

        if (empty($categorias)) {
            return $this->sendError('Categorias not found');
        }

        $categorias->delete();

        return $this->sendSuccess('Categorias deleted successfully');
    }
}
