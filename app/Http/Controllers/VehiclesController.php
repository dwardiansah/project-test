<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleRequest;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::latest()->get();
        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(VehicleRequest $request)
    {
        $data = $request->validated();
        Vehicle::create($data);
        return redirect()->route('vehicles.index')->with('success', 'Vehicle created');
    }

    public function show(Vehicle $vehicle)
    {
        $vehicle->load(['services', 'fuelUsages']);
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(VehicleRequest $request, Vehicle $vehicle)
    {
        $data = $request->validated();
        $vehicle->update($data);
        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted');
    }
}
