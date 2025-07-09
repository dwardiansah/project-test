@extends('layouts.app')
@section('title', 'History Service')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">History Service</h3>
                <a href="{{ route('services.create') }}" class="btn btn-info btn-sm float-end">Tambah</a>
            </div>
            <div class="card-body">
                <table id="services-table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kendaraan</th>
                            <th>Driver</th>
                            <th>Tanggal</th>
                            <th>Odometer</th>
                            <th>Deskripsi</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $index => $service)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $service->vehicle->name ?? '-' }}</td>
                                <td>{{ $service->driver->name ?? '-' }}</td>
                                <td>{{ $service->date }}</td>
                                <td>{{ $service->odometer }}</td>
                                <td>{{ $service->description }}</td>
                                <td>
                                    <a href="{{ route('services.show', $service) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('services.edit', $service) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin hapus data?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
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
            $('#services-table').DataTable();
        });
    </script>
@endsection