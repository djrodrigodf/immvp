<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Http\Resources\Admin\PropertyResource;
use App\Models\Property;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PropertyApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('property_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PropertyResource(Property::with(['team'])->get());
    }

    public function store(StorePropertyRequest $request)
    {
        $property = Property::create($request->validated());

        return (new PropertyResource($property))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Property $property)
    {
        abort_if(Gate::denies('property_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PropertyResource($property->load(['team']));
    }

    public function update(UpdatePropertyRequest $request, Property $property)
    {
        $property->update($request->validated());

        return (new PropertyResource($property))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Property $property)
    {
        abort_if(Gate::denies('property_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $property->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
