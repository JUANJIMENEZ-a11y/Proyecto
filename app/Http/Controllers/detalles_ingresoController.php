<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createdetalles_ingresoRequest;
use App\Http\Requests\Updatedetalles_ingresoRequest;
use App\Repositories\detalles_ingresoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class detalles_ingresoController extends AppBaseController
{
    /** @var  detalles_ingresoRepository */
    private $detallesIngresoRepository;

    public function __construct(detalles_ingresoRepository $detallesIngresoRepo)
    {
        $this->detallesIngresoRepository = $detallesIngresoRepo;
    }

    /**
     * Display a listing of the detalles_ingreso.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detallesIngresos = $this->detallesIngresoRepository->paginate(10);

        return view('detalles_ingresos.index')
            ->with('detallesIngresos', $detallesIngresos);
    }

    /**
     * Show the form for creating a new detalles_ingreso.
     *
     * @return Response
     */
    public function create()
    {
        return view('detalles_ingresos.create');
    }

    /**
     * Store a newly created detalles_ingreso in storage.
     *
     * @param Createdetalles_ingresoRequest $request
     *
     * @return Response
     */
    public function store(Createdetalles_ingresoRequest $request)
    {
        $input = $request->all();

        $detallesIngreso = $this->detallesIngresoRepository->create($input);

        Flash::success('Detalles Ingreso saved successfully.');

        return redirect(route('detallesIngresos.index'));
    }

    /**
     * Display the specified detalles_ingreso.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detallesIngreso = $this->detallesIngresoRepository->find($id);

        if (empty($detallesIngreso)) {
            Flash::error('Detalles Ingreso not found');

            return redirect(route('detallesIngresos.index'));
        }

        return view('detalles_ingresos.show')->with('detallesIngreso', $detallesIngreso);
    }

    /**
     * Show the form for editing the specified detalles_ingreso.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detallesIngreso = $this->detallesIngresoRepository->find($id);

        if (empty($detallesIngreso)) {
            Flash::error('Detalles Ingreso not found');

            return redirect(route('detallesIngresos.index'));
        }

        return view('detalles_ingresos.edit')->with('detallesIngreso', $detallesIngreso);
    }

    /**
     * Update the specified detalles_ingreso in storage.
     *
     * @param int $id
     * @param Updatedetalles_ingresoRequest $request
     *
     * @return Response
     */
    public function update($id, Updatedetalles_ingresoRequest $request)
    {
        $detallesIngreso = $this->detallesIngresoRepository->find($id);

        if (empty($detallesIngreso)) {
            Flash::error('Detalles Ingreso not found');

            return redirect(route('detallesIngresos.index'));
        }

        $detallesIngreso = $this->detallesIngresoRepository->update($request->all(), $id);

        Flash::success('Detalles Ingreso updated successfully.');

        return redirect(route('detallesIngresos.index'));
    }

    /**
     * Remove the specified detalles_ingreso from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detallesIngreso = $this->detallesIngresoRepository->find($id);

        if (empty($detallesIngreso)) {
            Flash::error('Detalles Ingreso not found');

            return redirect(route('detallesIngresos.index'));
        }

        $this->detallesIngresoRepository->delete($id);

        Flash::success('Detalles Ingreso deleted successfully.');

        return redirect(route('detallesIngresos.index'));
    }
}
