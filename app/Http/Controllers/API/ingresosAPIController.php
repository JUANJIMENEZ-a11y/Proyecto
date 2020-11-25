<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateingresosAPIRequest;
use App\Http\Requests\API\UpdateingresosAPIRequest;
use App\Models\ingresos;
use App\Repositories\ingresosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ingresosController
 * @package App\Http\Controllers\API
 */

class ingresosAPIController extends AppBaseController
{
    /** @var  ingresosRepository */
    private $ingresosRepository;

    public function __construct(ingresosRepository $ingresosRepo)
    {
        $this->ingresosRepository = $ingresosRepo;
    }

    /**
     * Display a listing of the ingresos.
     * GET|HEAD /ingresos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $ingresos = $this->ingresosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($ingresos->toArray(), 'Ingresos retrieved successfully');
    }

    /**
     * Store a newly created ingresos in storage.
     * POST /ingresos
     *
     * @param CreateingresosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateingresosAPIRequest $request)
    {
        $input = $request->all();

        $ingresos = $this->ingresosRepository->create($input);

        return $this->sendResponse($ingresos->toArray(), 'Ingresos saved successfully');
    }

    /**
     * Display the specified ingresos.
     * GET|HEAD /ingresos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ingresos $ingresos */
        $ingresos = $this->ingresosRepository->find($id);

        if (empty($ingresos)) {
            return $this->sendError('Ingresos not found');
        }

        return $this->sendResponse($ingresos->toArray(), 'Ingresos retrieved successfully');
    }

    /**
     * Update the specified ingresos in storage.
     * PUT/PATCH /ingresos/{id}
     *
     * @param int $id
     * @param UpdateingresosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateingresosAPIRequest $request)
    {
        $input = $request->all();

        /** @var ingresos $ingresos */
        $ingresos = $this->ingresosRepository->find($id);

        if (empty($ingresos)) {
            return $this->sendError('Ingresos not found');
        }

        $ingresos = $this->ingresosRepository->update($input, $id);

        return $this->sendResponse($ingresos->toArray(), 'ingresos updated successfully');
    }

    /**
     * Remove the specified ingresos from storage.
     * DELETE /ingresos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ingresos $ingresos */
        $ingresos = $this->ingresosRepository->find($id);

        if (empty($ingresos)) {
            return $this->sendError('Ingresos not found');
        }

        $ingresos->delete();

        return $this->sendSuccess('Ingresos deleted successfully');
    }
}
