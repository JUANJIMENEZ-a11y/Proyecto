<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecategoriasRequest;
use App\Http\Requests\UpdatecategoriasRequest;
use App\Repositories\categoriasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class categoriasController extends AppBaseController
{
    /** @var  categoriasRepository */
    private $categoriasRepository;

    public function __construct(categoriasRepository $categoriasRepo)
    {
        $this->categoriasRepository = $categoriasRepo;
    }

    /**
     * Display a listing of the categorias.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categorias = $this->categoriasRepository->paginate(10);

        return view('categorias.index')
            ->with('categorias', $categorias);
    }

    /**
     * Show the form for creating a new categorias.
     *
     * @return Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created categorias in storage.
     *
     * @param CreatecategoriasRequest $request
     *
     * @return Response
     */
    public function store(CreatecategoriasRequest $request)
    {
        $input = $request->all();

        $categorias = $this->categoriasRepository->create($input);

        Flash::success('Categorias saved successfully.');

        return redirect(route('categorias.index'));
    }

    /**
     * Display the specified categorias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categorias = $this->categoriasRepository->find($id);

        if (empty($categorias)) {
            Flash::error('Categorias not found');

            return redirect(route('categorias.index'));
        }

        return view('categorias.show')->with('categorias', $categorias);
    }

    /**
     * Show the form for editing the specified categorias.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categorias = $this->categoriasRepository->find($id);

        if (empty($categorias)) {
            Flash::error('Categorias not found');

            return redirect(route('categorias.index'));
        }

        return view('categorias.edit')->with('categorias', $categorias);
    }

    /**
     * Update the specified categorias in storage.
     *
     * @param int $id
     * @param UpdatecategoriasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecategoriasRequest $request)
    {
        $categorias = $this->categoriasRepository->find($id);

        if (empty($categorias)) {
            Flash::error('Categorias not found');

            return redirect(route('categorias.index'));
        }

        $categorias = $this->categoriasRepository->update($request->all(), $id);

        Flash::success('Categorias updated successfully.');

        return redirect(route('categorias.index'));
    }

    /**
     * Remove the specified categorias from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categorias = $this->categoriasRepository->find($id);

        if (empty($categorias)) {
            Flash::error('Categorias not found');

            return redirect(route('categorias.index'));
        }

        $this->categoriasRepository->delete($id);

        Flash::success('Categorias deleted successfully.');

        return redirect(route('categorias.index'));
    }
}
