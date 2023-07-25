@extends('layouts.dash')

@section('content')
    <div class="admin-card">
        <h3> <i class="fas fa-shuttle-van"></i> Registered Vehicles</h3>
        <hr>

        <a href="{{ url('vehicles/create') }}"><button class="btn btn-success"><i class="fas fa-plus"></i> Register New Vehicle</button></a>
        
        <br><br>
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>#</th>
                    <th>Vehicle Plate Number</th>
                    <th>Owner</th>
                    <th>Vehicle Model</th>
                    <th>Vehicle Type</th>
                    <th>Added Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicles as $vehicle)
                    <tr>
                        <td><b>{{ $loop->iteration }}</b></td>
                        <td>{{ $vehicle->vehicle_plate_no }}</td>
                        <td>{{ $vehicle->owner }}</td>
                        <td>{{ $vehicle->vehicle_model }}</td>
                        <td>{{ $vehicle->vehicle_type }}</td>
                        <td>{{ $vehicle->created_at }}</td>
                        <td>
                            <a href="{{ url('/vehicles/' . $vehicle->id) }}" title="View Vehicle "><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            
                            @if (auth()->user()->name == $vehicle->owner)
                                <a href="{{ url('/vehicles/' . $vehicle->id . '/edit') }}" title="Edit Vehicle"><button class="btn btn-primary btn-sm"><i class="fas fa-edit" aria-hidden="true"></i> Edit</button></a>
                            @endif
    
                            @if (auth()->user()->role == 1 || auth()->user()->name == $vehicle->owner)
                                <form method="POST" action="{{ url('/vehicles' . '/' . $vehicle->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Vehicle" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-calendar-times" aria-hidden="true"></i> Delete</button>
                                </form>                            
                            @endif                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection