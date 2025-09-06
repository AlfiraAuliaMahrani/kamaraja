@extends('layouts.app')

@section('content')
    {{-- Cards --}}
    @include('dashboard.cards.revenue')
    @include('dashboard.cards.members')




    {{-- Table Members --}}
    @include('dashboard.members-table')
@endsection
