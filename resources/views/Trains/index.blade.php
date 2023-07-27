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
                    <th><b>Station</b></th>
                    <th><b>#</b></th>
                    <th><b>#</b></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($train as $tra)
                    <tr>
                        <td>1</td>
                        <td>{{ $tra->train_name }}</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>








    </div>
@endsection