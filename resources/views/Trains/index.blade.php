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
                    <th><b>Departure Time</b></th>
                    <th><b>Arrival Station</b></th>
                    <th><b>Arrival Time</b></th>
                    <th><b>Weekly Schedule</b></th>
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
                        <td>
                            @php
                                $schedule = json_decode($train->weekly_schedule);
                            @endphp
                            @foreach ($schedule as $days)
                                {{ $days }}<br>
                            @endforeach
                        </td>
                        <td>
                            @php
                                if($train->is_active == 1){
                                    echo "<h3 class='badge bg-success'>Active</h3>";
                                }
                                elseif($train->is_active == 0){
                                    echo "<h3 class='badge bg-danger'>Deactive</h3>";
                                }
                            @endphp
                        </td>
                        <td>
                            <a href="{{ url('/train_routes/' . $train->id) }}" title="View Traub Route"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            
                            @if (auth()->user()->role == 1 || auth()->user()->role == 2)
                                <a href="{{ url('/train_routes/' . $train->id . '/edit') }}" title="Edit Train Routes"><button class="btn btn-primary btn-sm"><i class="fas fa-edit" aria-hidden="true"></i> Edit</button></a>
                            @endif

                            @if (auth()->user()->role == 1)
                                <form method="POST" action="{{ url('/train_routes' . '/' . $train->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete train routes" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-calendar-times" aria-hidden="true"></i> Delete</button>
                                </form>                            
                            @endif                            
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>








    </div>
@endsection