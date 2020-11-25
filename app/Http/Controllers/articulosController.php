<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatearticulosRequest;
use App\Http\Requests\UpdatearticulosRequest;
use App\Repositories\articulosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class articulosController extends AppBaseController
{
    /** @var  articulosRepository */
    private $articulosRepository;

    public function __construct(articulosRepository $articulosRepo)
    {
        $this->articulosRepository = $articulosRepo;
    }

    /**
     * Display a listing of the articulos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $articulos = $this->articulosRepository->paginate(10);

        return view('articulos.index')
            ->with('articulos', $articulos);
    }

    /**
     * Show the form for creating a new articulos.
     *
     * @return Response
     */
    public function create()
    {
        return view('articulos.create');
    }

    /**
     * Store a newly created articulos in storage.
     *
     * @param CreatearticulosRequest $request
     *
     * @return Response
     */
    public function store(CreatearticulosRequest $request)
    {
        $input = $request->all();

        $articulos = $this->articulosRepository->create($input);

        Flash::success('Articulos saved successfully.');

        return redirect(route('articulos.index'));
    }

    /**
     * Display the specified articulos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $articulos = $this->articulosRepository->find($id);

        if (empty($articulos)) {
            Flash::error('Articulos not found');

            return redirect(route('articulos.index'));
        }

        return view('articulos.show')->with('articulos', $articulos);
    }

    /**
     * Show the form for editing the specified articulos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $articulos = $this->articulosRepository->find($id);

        if (empty($articulos)) {
            Flash::error('Articulos not found');

            return redirect(route('articulos.index'));
        }

        return view('articulos.edit')->with('articulos', $articulos);
    }

    /**
     * Update the specified articulos in storage.
     *
     * @param int $id
     * @param UpdatearticulosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatearticulosRequest $request)
    {
        $articulos = $this->articulosRepository->find($id);

        if (empty($articulos)) {
            Flash::error('Articulos not found');

            return redirect(route('articulos.index'));
        }

        $articulos = $this->articulosRepository->update($request->all(), $id);

        Flash::success('Articulos updated successfully.');

        return redirect(route('articulos.index'));
    }

    /**
     * Remove the specified articulos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $articulos = $this->articulosRepository->find($id);

        if (empty($articulos)) {
            Flash::error('Articulos not found');

            return redirect(route('articulos.index'));
        }

        $this->articulosRepository->delete($id);

        Flash::success('Articulos deleted successfully.');

        return redirect(route('articulos.index'));
    }
}
