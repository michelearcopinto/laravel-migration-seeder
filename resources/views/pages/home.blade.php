@extends('layouts.basic')

@section('title', 'Treni | Home')

@section('style')
    <style>
        main {
            margin-top: 50px;
            padding-inline: 50px;
        }
    </style>
@endsection

@section('content')

    <a class="filter-button" href="{{ route('filtered_page') }}">Filtra per treni disponibili</a>
@endsection
