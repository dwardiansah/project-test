<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuelUsageRequest;
use App\Models\FuelUsage;
use App\Models\User;
use App\Models\Vehicle;

class FuelUsageController extends Controller
{
    public function index()
    {
        $fuelusages = FuelUsage::with(['vehicle', 'driver'])->latest()->get();
        return view('fuelusage.index', compact('fuelusages'));
    }

    public function create()
    {
        $vehicles = Vehicle::all();
        $drivers = User::drivers();

        return view('fuelusage.create', compact('vehicles', 'drivers'));
    }

    public function store(FuelUsageRequest $request)
    {
        $data = $request->validated();
        FuelUsage::create($data);
        return redirect()->route('fuelusage.index')->with('success', 'FuelUsage created');
    }

    public function show(FuelUsage $fuelusage)
    {
        return view('fuelusage.show', compact('fuelusage'));
    }

    public function edit(FuelUsage $fuelusage)
    {
        $vehicles = Vehicle::all();
        $drivers = User::drivers();

        return view('fuelusage.edit', compact('fuelusage', 'vehicles', 'drivers'));
    }

    public function update(FuelUsageRequest $request, FuelUsage $fuelusage)
    {
        $data = $request->validated();
        $fuelusage->update($data);
        return redirect()->route('fuelusage.index')->with('success', 'FuelUsage updated');
    }

    public function destroy(FuelUsage $fuelusage)
    {
        $fuelusage->delete();
        return redirect()->route('fuelusage.index')->with('success', 'FuelUsage deleted');
    }
}
