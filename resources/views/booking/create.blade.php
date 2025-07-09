@extends('layouts.app')

@section('title', 'Tambah Pemesanan Kendaraan')

@section('content_header')
    <h1>Tambah Pemesanan Kendaraan</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            @include('booking.form', ['booking' => new App\Models\Booking])
            
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
