@extends('layouts.basic')

@section('title', 'Treni | Home')

@section('style')
    <style>
    </style>
@endsection

@section('content')

    <a class="filter-button" href="{{ route('filtered_page') }}">Filtra per treni disponibili</a>
@endsection
