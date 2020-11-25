<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createdetalles_ventaRequest;
use App\Http\Requests\Updatedetalles_ventaRequest;
use App\Repositories\detalles_ventaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class detalles_ventaController extends AppBaseController
{
    /** @var  detalles_ventaRepository */
    private $detallesVentaRepository;

    public function __construct(detalles_ventaRepository $detallesVentaRepo)
    {
        $this->detallesVentaRepository = $detallesVentaRepo;
    }

    /**
     * Display a listing of the detalles_venta.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detallesVentas = $this->detallesVentaRepository->paginate(10);

        return view('detalles_ventas.index')
            ->with('detallesVentas', $detallesVentas);
    }

    /**
     * Show the form for creating a new detalles_venta.
     *
     * @return Response
     */
    public function create()
    {
        return view('detalles_ventas.create');
    }

    /**
     * Store a newly created detalles_venta in storage.
     *
     * @param Createdetalles_ventaRequest $request
     *
     * @return Response
     */
    public function store(Createdetalles_ventaRequest $request)
    {
        $input = $request->all();

        $detallesVenta = $this->detallesVentaRepository->create($input);

        Flash::success('Detalles Venta saved successfully.');

        return redirect(route('detallesVentas.index'));
    }

    /**
     * Display the specified detalles_venta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detallesVenta = $this->detallesVentaRepository->find($id);

        if (empty($detallesVenta)) {
            Flash::error('Detalles Venta not found');

            return redirect(route('detallesVentas.index'));
        }

        return view('detalles_ventas.show')->with('detallesVenta', $detallesVenta);
    }

    /**
     * Show the form for editing the specified detalles_venta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detallesVenta = $this->detallesVentaRepository->find($id);

        if (empty($detallesVenta)) {
            Flash::error('Detalles Venta not found');

            return redirect(route('detallesVentas.index'));
        }

        return view('detalles_ventas.edit')->with('detallesVenta', $detallesVenta);
    }

    /**
     * Update the specified detalles_venta in storage.
     *
     * @param int $id
     * @param Updatedetalles_ventaRequest $request
     *
     * @return Response
     */
    public function update($id, Updatedetalles_ventaRequest $request)
    {
        $detallesVenta = $this->detallesVentaRepository->find($id);

        if (empty($detallesVenta)) {
            Flash::error('Detalles Venta not found');

            return redirect(route('detallesVentas.index'));
        }

        $detallesVenta = $this->detallesVentaRepository->update($request->all(), $id);

        Flash::success('Detalles Venta updated successfully.');

        return redirect(route('detallesVentas.index'));
    }

    /**
     * Remove the specified detalles_venta from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detallesVenta = $this->detallesVentaRepository->find($id);

        if (empty($detallesVenta)) {
            Flash::error('Detalles Venta not found');

            return redirect(route('detallesVentas.index'));
        }

        $this->detallesVentaRepository->delete($id);

        Flash::success('Detalles Venta deleted successfully.');

        return redirect(route('detallesVentas.index'));
    }
}
