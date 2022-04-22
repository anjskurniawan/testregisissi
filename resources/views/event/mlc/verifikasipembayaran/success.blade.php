@extends('layout.main')
@section('navbar')
    @include('components.navbar')
@endsection
@section('content')
    @include('components.event_navbar')
    @include('components.mlc_verifikasi_head')
    @include('components.mlc_verifikasi_success')
@endsection
@section('footer')
    @include('components.footer')
@endsection