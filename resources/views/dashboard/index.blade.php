@extends('layouts.dashboard-main')

@section('isi')
    <div class="mb-4">Halo, {{ auth()->user()->name }}</div>
@endsection
