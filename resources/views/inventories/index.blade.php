@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inventories Index') }}</div>
                
                  <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>SerialNo</th>
                                <th>Color</th>
                                <th>ID</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inventories as $inventory)
                                <tr>
                                    <td>{{ $inventory->id }}</td>
                                    <td>{{ $inventory->name }}</td>
                                    <td>{{ $inventory->quantity }}</td>
                                    <td>{{ $inventory->serial_no }}</td>
                                    <td>{{ $inventory->color }}</td>
                                    <td>{{ $inventory->user->name }} - {{ $inventory->user->email }} </td>

                                    <td>
                                        <a href="{{ route('inventories.show', $inventory) }}" 
                                           class="btn btn-info btn-sm">SHOW</a>

                                          <a href="{{ route('inventories.edit', $inventory) }}" 
                                           class="btn btn-info btn-sm">EDIT</a>

                                            <a href="{{ route('inventories.destroy', $inventory) }}" 
                                           class="btn btn-info btn-sm"
                                           onclick="confirm('Are you sure want to delete?') || event.preventDefault();">DELETE</a>
                                    </td>
                                    <td><a href="{{ route('inventories.show', $inventory) }}" class="btn-secondary btn-sm">Show</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                        <a href="{{ route('inventories.create') }}"
                                             class="btn btn-secondary">CREATE NEW</a>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
