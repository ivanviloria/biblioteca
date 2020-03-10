<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateautoresRequest;
use App\Http\Requests\UpdateautoresRequest;
use App\Repositories\autoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class autoresController extends AppBaseController
{
    /** @var  autoresRepository */
    private $autoresRepository;

    public function __construct(autoresRepository $autoresRepo)
    {
        $this->autoresRepository = $autoresRepo;
    }

    /**
     * Display a listing of the autores.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $autores = $this->autoresRepository->paginate(10);

        return view('autores.index')
            ->with('autores', $autores);
    }

    /**
     * Show the form for creating a new autores.
     *
     * @return Response
     */
    public function create()
    {
        return view('autores.create');
    }

    /**
     * Store a newly created autores in storage.
     *
     * @param CreateautoresRequest $request
     *
     * @return Response
     */
    public function store(CreateautoresRequest $request)
    {
        $input = $request->all();

        $autores = $this->autoresRepository->create($input);

        Flash::success('Autores saved successfully.');

        return redirect(route('autores.index'));
    }

    /**
     * Display the specified autores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $autores = $this->autoresRepository->find($id);

        if (empty($autores)) {
            Flash::error('Autores not found');

            return redirect(route('autores.index'));
        }

        return view('autores.show')->with('autores', $autores);
    }

    /**
     * Show the form for editing the specified autores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $autores = $this->autoresRepository->find($id);

        if (empty($autores)) {
            Flash::error('Autores not found');

            return redirect(route('autores.index'));
        }

        return view('autores.edit')->with('autores', $autores);
    }

    /**
     * Update the specified autores in storage.
     *
     * @param int $id
     * @param UpdateautoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateautoresRequest $request)
    {
        $autores = $this->autoresRepository->find($id);

        if (empty($autores)) {
            Flash::error('Autores not found');

            return redirect(route('autores.index'));
        }

        $autores = $this->autoresRepository->update($request->all(), $id);

        Flash::success('Autores updated successfully.');

        return redirect(route('autores.index'));
    }

    /**
     * Remove the specified autores from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $autores = $this->autoresRepository->find($id);

        if (empty($autores)) {
            Flash::error('Autores not found');

            return redirect(route('autores.index'));
        }

        $this->autoresRepository->delete($id);

        Flash::success('Autores deleted successfully.');

        return redirect(route('autores.index'));
    }
}
