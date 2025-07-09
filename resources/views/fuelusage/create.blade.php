@extends('layouts.app')

@section('title', 'Tambah Pemakaian Bahan Bakar')

@section('content_header')
    <h1>Tambah Pemakaian Bahan Bakar</h1>
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
        <form action="{{ route('fuelusages.store') }}" method="POST">
            @csrf
            @include('fuelusage.form', ['vehicle' => new App\Models\Vehicle])
            
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('fuelusages.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
