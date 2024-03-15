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
            @php
                if ($train->on_time === 1 && $train->cancelled === 0) {
                    $table_row_class = 'train-green';
                } elseif ($train->cancelled === 1) {
                    $table_row_class = 'train-red';
                } elseif ($train->on_time === 0) {
                    $table_row_class = 'train-yellow';
                }
            @endphp

            <tr class="{{ $table_row_class }}">
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
