<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createdetalles_ventaAPIRequest;
use App\Http\Requests\API\Updatedetalles_ventaAPIRequest;
use App\Models\detalles_venta;
use App\Repositories\detalles_ventaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class detalles_ventaController
 * @package App\Http\Controllers\API
 */

class detalles_ventaAPIController extends AppBaseController
{
    /** @var  detalles_ventaRepository */
    private $detallesVentaRepository;

    public function __construct(detalles_ventaRepository $detallesVentaRepo)
    {
        $this->detallesVentaRepository = $detallesVentaRepo;
    }

    /**
     * Display a listing of the detalles_venta.
     * GET|HEAD /detallesVentas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $detallesVentas = $this->detallesVentaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($detallesVentas->toArray(), 'Detalles Ventas retrieved successfully');
    }

    /**
     * Store a newly created detalles_venta in storage.
     * POST /detallesVentas
     *
     * @param Createdetalles_ventaAPIRequest $request
     *
     * @return Response
     */
    public function store(Createdetalles_ventaAPIRequest $request)
    {
        $input = $request->all();

        $detallesVenta = $this->detallesVentaRepository->create($input);

        return $this->sendResponse($detallesVenta->toArray(), 'Detalles Venta saved successfully');
    }

    /**
     * Display the specified detalles_venta.
     * GET|HEAD /detallesVentas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var detalles_venta $detallesVenta */
        $detallesVenta = $this->detallesVentaRepository->find($id);

        if (empty($detallesVenta)) {
            return $this->sendError('Detalles Venta not found');
        }

        return $this->sendResponse($detallesVenta->toArray(), 'Detalles Venta retrieved successfully');
    }

    /**
     * Update the specified detalles_venta in storage.
     * PUT/PATCH /detallesVentas/{id}
     *
     * @param int $id
     * @param Updatedetalles_ventaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updatedetalles_ventaAPIRequest $request)
    {
        $input = $request->all();

        /** @var detalles_venta $detallesVenta */
        $detallesVenta = $this->detallesVentaRepository->find($id);

        if (empty($detallesVenta)) {
            return $this->sendError('Detalles Venta not found');
        }

        $detallesVenta = $this->detallesVentaRepository->update($input, $id);

        return $this->sendResponse($detallesVenta->toArray(), 'detalles_venta updated successfully');
    }

    /**
     * Remove the specified detalles_venta from storage.
     * DELETE /detallesVentas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var detalles_venta $detallesVenta */
        $detallesVenta = $this->detallesVentaRepository->find($id);

        if (empty($detallesVenta)) {
            return $this->sendError('Detalles Venta not found');
        }

        $detallesVenta->delete();

        return $this->sendSuccess('Detalles Venta deleted successfully');
    }
}
