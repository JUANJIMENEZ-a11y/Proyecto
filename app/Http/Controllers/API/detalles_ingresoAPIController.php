<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createdetalles_ingresoAPIRequest;
use App\Http\Requests\API\Updatedetalles_ingresoAPIRequest;
use App\Models\detalles_ingreso;
use App\Repositories\detalles_ingresoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class detalles_ingresoController
 * @package App\Http\Controllers\API
 */

class detalles_ingresoAPIController extends AppBaseController
{
    /** @var  detalles_ingresoRepository */
    private $detallesIngresoRepository;

    public function __construct(detalles_ingresoRepository $detallesIngresoRepo)
    {
        $this->detallesIngresoRepository = $detallesIngresoRepo;
    }

    /**
     * Display a listing of the detalles_ingreso.
     * GET|HEAD /detallesIngresos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $detallesIngresos = $this->detallesIngresoRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($detallesIngresos->toArray(), 'Detalles Ingresos retrieved successfully');
    }

    /**
     * Store a newly created detalles_ingreso in storage.
     * POST /detallesIngresos
     *
     * @param Createdetalles_ingresoAPIRequest $request
     *
     * @return Response
     */
    public function store(Createdetalles_ingresoAPIRequest $request)
    {
        $input = $request->all();

        $detallesIngreso = $this->detallesIngresoRepository->create($input);

        return $this->sendResponse($detallesIngreso->toArray(), 'Detalles Ingreso saved successfully');
    }

    /**
     * Display the specified detalles_ingreso.
     * GET|HEAD /detallesIngresos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var detalles_ingreso $detallesIngreso */
        $detallesIngreso = $this->detallesIngresoRepository->find($id);

        if (empty($detallesIngreso)) {
            return $this->sendError('Detalles Ingreso not found');
        }

        return $this->sendResponse($detallesIngreso->toArray(), 'Detalles Ingreso retrieved successfully');
    }

    /**
     * Update the specified detalles_ingreso in storage.
     * PUT/PATCH /detallesIngresos/{id}
     *
     * @param int $id
     * @param Updatedetalles_ingresoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updatedetalles_ingresoAPIRequest $request)
    {
        $input = $request->all();

        /** @var detalles_ingreso $detallesIngreso */
        $detallesIngreso = $this->detallesIngresoRepository->find($id);

        if (empty($detallesIngreso)) {
            return $this->sendError('Detalles Ingreso not found');
        }

        $detallesIngreso = $this->detallesIngresoRepository->update($input, $id);

        return $this->sendResponse($detallesIngreso->toArray(), 'detalles_ingreso updated successfully');
    }

    /**
     * Remove the specified detalles_ingreso from storage.
     * DELETE /detallesIngresos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var detalles_ingreso $detallesIngreso */
        $detallesIngreso = $this->detallesIngresoRepository->find($id);

        if (empty($detallesIngreso)) {
            return $this->sendError('Detalles Ingreso not found');
        }

        $detallesIngreso->delete();

        return $this->sendSuccess('Detalles Ingreso deleted successfully');
    }
}
