<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Models\User;
use App\Models\Vehicle;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with(['vehicle', 'driver'])->latest()->get();
        return view('service.index', compact('services'));
    }

    public function create()
    {
        $vehicles = Vehicle::all();
        $drivers = User::drivers();

        return view('service.create', compact('vehicles', 'drivers'));
    }

    public function store(ServiceRequest $request)
    {
        $data = $request->validated();
        Service::create($data);
        return redirect()->route('services.index')->with('success', 'Service created');
    }

    public function show(Service $service)
    {
        return view('service.show', compact('service'));
    }

    public function edit(Service $service)
    {
        $vehicles = Vehicle::all();
        $drivers = User::drivers();

        return view('service.edit', compact('service', 'vehicles', 'drivers'));
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $data = $request->validated();
        $service->update($data);
        return redirect()->route('services.index')->with('success', 'Service updated');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted');
    }
}
