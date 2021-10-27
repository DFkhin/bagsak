<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLsiRequest;
use App\Http\Requests\UpdateLsiRequest;
use App\Repositories\LsiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LsiController extends AppBaseController
{
    /** @var  LsiRepository */
    private $lsiRepository;

    public function __construct(LsiRepository $lsiRepo)
    {
        $this->lsiRepository = $lsiRepo;
    }

    /**
     * Display a listing of the Lsi.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $lsis = $this->lsiRepository->all();

        return view('lsis.index')
            ->with('lsis', $lsis);
    }

    /**
     * Show the form for creating a new Lsi.
     *
     * @return Response
     */
    public function create()
    {
        return view('lsis.create');
    }

    /**
     * Store a newly created Lsi in storage.
     *
     * @param CreateLsiRequest $request
     *
     * @return Response
     */
    public function store(CreateLsiRequest $request)
    {
        $input = $request->all();

        $lsi = $this->lsiRepository->create($input);

        Flash::success('Lsi saved successfully.');

        return redirect(route('lsis.index'));
    }

    /**
     * Display the specified Lsi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lsi = $this->lsiRepository->find($id);

        if (empty($lsi)) {
            Flash::error('Lsi not found');

            return redirect(route('lsis.index'));
        }

        return view('lsis.show')->with('lsi', $lsi);
    }

    /**
     * Show the form for editing the specified Lsi.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lsi = $this->lsiRepository->find($id);

        if (empty($lsi)) {
            Flash::error('Lsi not found');

            return redirect(route('lsis.index'));
        }

        return view('lsis.edit')->with('lsi', $lsi);
    }

    /**
     * Update the specified Lsi in storage.
     *
     * @param int $id
     * @param UpdateLsiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLsiRequest $request)
    {
        $lsi = $this->lsiRepository->find($id);

        if (empty($lsi)) {
            Flash::error('Lsi not found');

            return redirect(route('lsis.index'));
        }

        $lsi = $this->lsiRepository->update($request->all(), $id);

        Flash::success('Lsi updated successfully.');

        return redirect(route('lsis.index'));
    }

    /**
     * Remove the specified Lsi from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lsi = $this->lsiRepository->find($id);

        if (empty($lsi)) {
            Flash::error('Lsi not found');

            return redirect(route('lsis.index'));
        }

        $this->lsiRepository->delete($id);

        Flash::success('Lsi deleted successfully.');

        return redirect(route('lsis.index'));
    }
}
