@extends('layouts.basic')

@section('title', 'Treni | Home')

@section('style')
    <style>
        main {
            margin-top: 50px;
            padding-inline: 50px;

            h1 {
                color: blue;
                margin-bottom: 20px;
            }

            li {
                list-style-type: disc;
                margin-left: 1rem;
            }
        }
    </style>
@endsection

@section('content')
    <h1>{{ $title }}</h1>

    <table>
        <thead>
            <tr>
                @foreach ($table_headers_values as $table_header)
                    <th>{{ $table_header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->coach_count }}</td>
                    <td>{{ $train->on_time === 1 ? 'Sì' : 'No' }}</td>
                    <td>{{ $train->cancelled === 1 ? 'Sì' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="filter-button" href="{{ route('filtered_page') }}">Filtra i treni</a>
@endsection
