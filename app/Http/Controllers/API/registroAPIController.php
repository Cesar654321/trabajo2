<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateregistroAPIRequest;
use App\Http\Requests\API\UpdateregistroAPIRequest;
use App\Models\registro;
use App\Repositories\registroRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class registroController
 * @package App\Http\Controllers\API
 */

class registroAPIController extends AppBaseController
{
    /** @var  registroRepository */
    private $registroRepository;

    public function __construct(registroRepository $registroRepo)
    {
        $this->registroRepository = $registroRepo;
    }

    /**
     * Display a listing of the registro.
     * GET|HEAD /registros
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $registros = $this->registroRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($registros->toArray(), 'Registros retrieved successfully');
    }

    /**
     * Store a newly created registro in storage.
     * POST /registros
     *
     * @param CreateregistroAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateregistroAPIRequest $request)
    {
        $input = $request->all();

        $registro = $this->registroRepository->create($input);

        return $this->sendResponse($registro->toArray(), 'Registro saved successfully');
    }

    /**
     * Display the specified registro.
     * GET|HEAD /registros/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var registro $registro */
        $registro = $this->registroRepository->find($id);

        if (empty($registro)) {
            return $this->sendError('Registro not found');
        }

        return $this->sendResponse($registro->toArray(), 'Registro retrieved successfully');
    }

    /**
     * Update the specified registro in storage.
     * PUT/PATCH /registros/{id}
     *
     * @param int $id
     * @param UpdateregistroAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateregistroAPIRequest $request)
    {
        $input = $request->all();

        /** @var registro $registro */
        $registro = $this->registroRepository->find($id);

        if (empty($registro)) {
            return $this->sendError('Registro not found');
        }

        $registro = $this->registroRepository->update($input, $id);

        return $this->sendResponse($registro->toArray(), 'registro updated successfully');
    }

    /**
     * Remove the specified registro from storage.
     * DELETE /registros/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var registro $registro */
        $registro = $this->registroRepository->find($id);

        if (empty($registro)) {
            return $this->sendError('Registro not found');
        }

        $registro->delete();

        return $this->sendSuccess('Registro deleted successfully');
    }
}
