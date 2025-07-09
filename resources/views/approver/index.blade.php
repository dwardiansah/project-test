@extends('layouts.app')
@section('title', 'List Pemesanan Kendaraan')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Pemesanan Kendaraan</h3>
            </div>
            <div class="card-body">
                <table id="bookings-table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kendaraan</th>
                            <th>Driver</th>
                            <th>Approver 1</th>
                            <th>Approver 2</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Status</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $index => $booking)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $booking->vehicle->name }}</td>
                                <td>{{ $booking->driver->name }}</td>
                                <td>{{ $booking->approver1->name }}</td>
                                <td>{{ $booking->approver2->name }}</td>
                                <td>{{ $booking->start_time }}</td>
                                <td>{{ $booking->end_time }}</td>
                                <td>{{ $booking->status }}</td>
                                <td>
                                    <a href="{{ route('approver.show', $booking) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('approver.edit', $booking) }}" class="btn btn-warning btn-sm">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('stylecss')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endsection

@section('scriptsjs')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#bookings-table').DataTable();
        });
    </script>
@endsection