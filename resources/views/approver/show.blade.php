@extends('layouts.app')

@section('title', 'Kendaraan')

@section('content')
<div class="card">
    <div class="card-header">
        Detail Pemesanan Kendaraan
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <td><strong>Kendaraan:</strong></td>
                <td> {{ $booking->vehicle->name }}</td>
            </tr>
            <tr>
                <td><strong>Jenis:</strong></td>
                <td> {{ $booking->vehicle->type }}</td>
            </tr>
            <tr>
                <td><strong>Kepemilikan:</strong></td>
                <td> {{ $booking->vehicle->ownership }}</td>
            </tr>
            <tr>
                <td><strong>Bahan Bakar:</strong></td>
                <td> {{ $booking->vehicle->fuel_type }}</td>
            </tr>
            <tr>
                <td><strong>Nopol:</strong></td>
                <td> {{ $booking->vehicle->plate_number }}</td>
            </tr>
            <tr>
                <td><strong>Driver:</strong></td>
                <td>{{ $booking->driver->name }} ({{ $booking->driver->id }})</td>
            </tr>
            <tr>
                <td><strong>Approver 1:</strong></td>
                <td>{{ $booking->approver1->name }} ({{ $booking->approver1->id }})</td>
            </tr>
            <tr>
                <td><strong>Approver 2:</strong></td>
                <td>{{ $booking->approver2->name }} ({{ $booking->approver2->id }})</td>
            </tr>
            <tr>
                <td><strong>Start Time:</strong></td>
                <td> {{ $booking->start_time }}</td>
            </tr>
            <tr>
                <td><strong>End Time:</strong></td>
                <td> {{ $booking->end_time }}</td>
            </tr>
            <tr>
                <td><strong>Status:</strong></td>
                <td> {{ $booking->status }}</td>
            </tr>
            <tr>
                <td><strong>Dibuat:</strong></td>
                <td> {{ $booking->created_at->format('Y-m-d') }}</td>
            </tr>
        </table>
        <div class="mt-3 mb-3">
            <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection