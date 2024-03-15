@extends('layouts.basic')

@section('title', 'Treni | Filtered')

@section('style')
    <style>
        main {
            margin-top: 50px;
            padding-inline: 50px;

            li {
                list-style-type: disc;
                margin-left: 1rem;
            }
        }
    </style>
@endsection

@section('content')

    <a class="filter-button" href="{{ route('home_page') }}">Torna a tutti i treni</a>
@endsection
