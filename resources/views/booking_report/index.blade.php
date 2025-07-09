@extends('layouts.app')

@section('title', 'Report Pemesanan Kendaraan')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Report Pemesanan Kendaraan</h3>
            </div>
            <div class="card-body">

                <form action="{{ route('booking-reports.export') }}" method="GET">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <label>Dari Tanggal:</label>
                            <input type="date" name="start_date" class="form-control" required>
                        </div>
                        <div class="col">
                            <label>Sampai Tanggal:</label>
                            <input type="date" name="end_date" class="form-control" required>
                        </div>
                        <div class="col align-self-end">
                            <button class="btn btn-success mt-2">Export Excel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
