@extends('layouts.main')

@section('isi')
    <div>Halo, {{ auth()->user()->name }}</div>
@endsection
