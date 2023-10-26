<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PropertyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('property_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.property.index');
    }

    public function create()
    {
        abort_if(Gate::denies('property_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.property.create');
    }

    public function edit(Property $property)
    {
        abort_if(Gate::denies('property_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.property.edit', compact('property'));
    }

    public function show(Property $property)
    {
        abort_if(Gate::denies('property_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $property->load('team');

        return view('admin.property.show', compact('property'));
    }
}
