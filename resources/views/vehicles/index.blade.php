@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vehicles Index') }}</div>

                <div class="card-body">
                   <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Jenis</th>
                                <th>Model</th>
                                 <th>Color</th>
                                <th>Plat No</th>
                                <th>ID</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->id }}</td>
                                    <td>{{ $vehicle->jenis }}</td>
                                     <td>{{ $vehicle->model }}</td>
                                      <td>{{ $vehicle->color }}</td>
                                    <td>{{ $vehicle->plat_no }}</td>  
                                    <td>{{ $vehicle->user->name }} - {{ $vehicle->user->email }} </td>
                                    <td>
                                    <a href="{{ route('vehicles.show', $vehicle) }}" class="btn btn-secondary btn-sm">Show</a>
                                    <a href="{{ route('vehicles.edit', $vehicle) }}" class="btn btn-secondary btn-sm">Edit</a>

                                    <a href="{{ route('vehicles.destroy', $vehicle) }}" 
                                           class="btn btn-info btn-sm"
                                           onclick="confirm('Are you sure want to delete?') || event.preventDefault();">DELETE</a>
                                </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                         <a href="{{ route('vehicles.create') }}"
                                             class="btn btn-secondary">CREATE NEW</a>
                    </table> 

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

