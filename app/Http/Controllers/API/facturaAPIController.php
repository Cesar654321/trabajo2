<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatefacturaAPIRequest;
use App\Http\Requests\API\UpdatefacturaAPIRequest;
use App\Models\factura;
use App\Repositories\facturaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class facturaController
 * @package App\Http\Controllers\API
 */

class facturaAPIController extends AppBaseController
{
    /** @var  facturaRepository */
    private $facturaRepository;

    public function __construct(facturaRepository $facturaRepo)
    {
        $this->facturaRepository = $facturaRepo;
    }

    /**
     * Display a listing of the factura.
     * GET|HEAD /facturas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $facturas = $this->facturaRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($facturas->toArray(), 'Facturas retrieved successfully');
    }

    /**
     * Store a newly created factura in storage.
     * POST /facturas
     *
     * @param CreatefacturaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatefacturaAPIRequest $request)
    {
        $input = $request->all();

        $factura = $this->facturaRepository->create($input);

        return $this->sendResponse($factura->toArray(), 'Factura saved successfully');
    }

    /**
     * Display the specified factura.
     * GET|HEAD /facturas/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var factura $factura */
        $factura = $this->facturaRepository->find($id);

        if (empty($factura)) {
            return $this->sendError('Factura not found');
        }

        return $this->sendResponse($factura->toArray(), 'Factura retrieved successfully');
    }

    /**
     * Update the specified factura in storage.
     * PUT/PATCH /facturas/{id}
     *
     * @param int $id
     * @param UpdatefacturaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefacturaAPIRequest $request)
    {
        $input = $request->all();

        /** @var factura $factura */
        $factura = $this->facturaRepository->find($id);

        if (empty($factura)) {
            return $this->sendError('Factura not found');
        }

        $factura = $this->facturaRepository->update($input, $id);

        return $this->sendResponse($factura->toArray(), 'factura updated successfully');
    }

    /**
     * Remove the specified factura from storage.
     * DELETE /facturas/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var factura $factura */
        $factura = $this->facturaRepository->find($id);

        if (empty($factura)) {
            return $this->sendError('Factura not found');
        }

        $factura->delete();

        return $this->sendSuccess('Factura deleted successfully');
    }
}
