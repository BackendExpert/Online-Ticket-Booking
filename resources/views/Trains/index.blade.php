@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <h2>Trains</h2>
        <hr><br>
        <a href="{{ url('Trains/create') }}"><button class="btn btn-success"><i class="fas fa-train"></i> Add Train</button></a>

        <br><br>
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th><b>#</b></th>
                    <th><b>Train Name</b></th>
                    <th><b>Departure Station</b></th>
                    <th><b>departure_time</b></th>
                    <th><b>arrival_station</b></th>
                    <th><b>arrival_time</b></th>
                    <th><b>weekly_schedule</b></th>
                    <th><b>Train Status</b></th>
                    <th><b>Action</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td><b>{{ $loop->iteration }}</b></td>
                        <td>{{ $train->train_name }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->weekly_schedule }}</td>
                        <td>{{ $train->is_active }}</td>
                        <td></td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>








    </div>
@endsection