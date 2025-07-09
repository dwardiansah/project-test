@extends('layouts.app')

@section('title', 'Detail Pengguna')

@section('content_header')
<h1>Detail Pengguna</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <p><strong>Nama:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Role:</strong> {{ $user->role }}</p>
        <p><strong>Dibuat:</strong> {{ $user->created_at->format('Y-m-d') }}</p>
        <div class="mb-3">
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection