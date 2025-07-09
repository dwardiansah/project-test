@extends('layouts.app')

@section('title', 'Edit Kendaraan')

@section('content_header')
    <h1>Edit Kendaraan</h1>
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
        <form action="{{ route('vehicles.update', $vehicle) }}" method="POST">
            @csrf
            @method('PUT')
            @include('vehicles.form')
            
            <div class="mb-3">
                <button type="submit" class="btn btn-warning">Update</button>
                <a href="{{ route('vehicles.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
