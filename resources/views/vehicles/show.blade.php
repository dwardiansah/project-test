@extends('layouts.app')

@section('title', 'Kendaraan')

@section('content')
<div class="card mb-3">
    <div class="card-header">
        Detail Kendaraan
        <a href="{{ route('vehicles.index') }}" class="btn btn-secondary float-end">Kembali</a>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <td><strong>Nama:</strong></td>
                <td> {{ $vehicle->name }}</td>
            </tr>
            <tr>
                <td><strong>Jenis:</strong></td>
                <td> {{ $vehicle->type }}</td>
            </tr>
            <tr>
                <td><strong>Kepemilikan:</strong></td>
                <td> {{ $vehicle->ownership }}</td>
            </tr>
            <tr>
                <td><strong>Bahan Bakar:</strong></td>
                <td> {{ $vehicle->fuel_type }}</td>
            </tr>
            <tr>
                <td><strong>Nopol:</strong></td>
                <td> {{ $vehicle->plate_number }}</td>
            </tr>
            <tr>
                <td><strong>Dibuat:</strong></td>
                <td> {{ $vehicle->created_at->format('Y-m-d') }}</td>
            </tr>
        </table>
    </div>
</div>

<div class="card card-primary mb-3">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-list"></i>
            History Service
        </h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Driver</th>
                    <th>Odometer</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicle->services as $index => $service)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $service->date }}</td>
                        <td>{{ $service->user_id }}</td>
                        <td>{{ $service->odometer }}</td>
                        <td>{{ $service->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="card card-warning mb-3">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-list"></i>
            Pemakaian Bahan Bakar
        </h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Driver</th>
                    <th>Odometer</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicle->fuelUsages as $index => $fuelUsage)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $fuelUsage->date }}</td>
                        <td>{{ $fuelUsage->driver_id }}</td>
                        <td>{{ $fuelUsage->odometer }}</td>
                        <td>{{ $fuelUsage->total_fuel }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection