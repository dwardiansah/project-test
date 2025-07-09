@extends('layouts.app')
@section('title', 'Pemakaian Bahan Bakar')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pemakaian Bahan Bakar</h3>
                <a href="{{ route('fuelusages.create') }}" class="btn btn-info btn-sm float-end">Tambah</a>
            </div>
            <div class="card-body">
                <table id="fuelusages-table" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Kepemilikan</th>
                            <th>Bahan Bakar</th>
                            <th>Nopol</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fuelusages as $index => $fuelusage)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $fuelusage->vehicle->name ?? '-' }}</td>
                                <td>{{ $fuelusage->driver->name ?? '-' }}</td>
                                <td>{{ $fuelusage->date }}</td>
                                <td>{{ $fuelusage->total_fuel }}</td>
                                <td>{{ $fuelusage->odometer }}</td>
                                <td>
                                    <a href="{{ route('fuelusages.show', $fuelusage) }}" class="btn btn-info btn-sm">Lihat</a>
                                    <a href="{{ route('fuelusages.edit', $fuelusage) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('fuelusages.destroy', $fuelusage) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin hapus data?')">
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
            $('#fuelusages-table').DataTable();
        });
    </script>
@endsection