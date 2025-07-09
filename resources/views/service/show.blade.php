@extends('layouts.app')

@section('title', 'Kendaraan')

@section('content')
<div class="card mb-3">
    <div class="card-header">
        Detail Kendaraan
        <a href="{{ route('services.index') }}" class="btn btn-secondary float-end">Kembali</a>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <td><strong>Nama:</strong></td>
                <td> {{ $service->name }}</td>
            </tr>
            <tr>
                <td><strong>Jenis:</strong></td>
                <td> {{ $service->type }}</td>
            </tr>
            <tr>
                <td><strong>Kepemilikan:</strong></td>
                <td> {{ $service->ownership }}</td>
            </tr>
            <tr>
                <td><strong>Bahan Bakar:</strong></td>
                <td> {{ $service->fuel_type }}</td>
            </tr>
            <tr>
                <td><strong>Nopol:</strong></td>
                <td> {{ $service->plate_number }}</td>
            </tr>
            <tr>
                <td><strong>Dibuat:</strong></td>
                <td> {{ $service->created_at->format('Y-m-d') }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection