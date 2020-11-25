<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatearticulosAPIRequest;
use App\Http\Requests\API\UpdatearticulosAPIRequest;
use App\Models\articulos;
use App\Repositories\articulosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class articulosController
 * @package App\Http\Controllers\API
 */

class articulosAPIController extends AppBaseController
{
    /** @var  articulosRepository */
    private $articulosRepository;

    public function __construct(articulosRepository $articulosRepo)
    {
        $this->articulosRepository = $articulosRepo;
    }

    /**
     * Display a listing of the articulos.
     * GET|HEAD /articulos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $articulos = $this->articulosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($articulos->toArray(), 'Articulos retrieved successfully');
    }

    /**
     * Store a newly created articulos in storage.
     * POST /articulos
     *
     * @param CreatearticulosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatearticulosAPIRequest $request)
    {
        $input = $request->all();

        $articulos = $this->articulosRepository->create($input);

        return $this->sendResponse($articulos->toArray(), 'Articulos saved successfully');
    }

    /**
     * Display the specified articulos.
     * GET|HEAD /articulos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var articulos $articulos */
        $articulos = $this->articulosRepository->find($id);

        if (empty($articulos)) {
            return $this->sendError('Articulos not found');
        }

        return $this->sendResponse($articulos->toArray(), 'Articulos retrieved successfully');
    }

    /**
     * Update the specified articulos in storage.
     * PUT/PATCH /articulos/{id}
     *
     * @param int $id
     * @param UpdatearticulosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatearticulosAPIRequest $request)
    {
        $input = $request->all();

        /** @var articulos $articulos */
        $articulos = $this->articulosRepository->find($id);

        if (empty($articulos)) {
            return $this->sendError('Articulos not found');
        }

        $articulos = $this->articulosRepository->update($input, $id);

        return $this->sendResponse($articulos->toArray(), 'articulos updated successfully');
    }

    /**
     * Remove the specified articulos from storage.
     * DELETE /articulos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var articulos $articulos */
        $articulos = $this->articulosRepository->find($id);

        if (empty($articulos)) {
            return $this->sendError('Articulos not found');
        }

        $articulos->delete();

        return $this->sendSuccess('Articulos deleted successfully');
    }
}
