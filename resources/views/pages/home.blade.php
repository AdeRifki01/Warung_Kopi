@extends('layouts.app')

@section('content')

    @include('components.home.hero')
    @include('components.home.features')
    @include('components.home.happy-hours')
    @include('components.home.best-coffee')
    @include('components.home.best-snack')
    @include('components.home.cta')

@endsection