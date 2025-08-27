@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
             <div class="card-header">{{ __('Vehicle Create') }}</div>

                <div class="card-body">
                    <form method="POST" action="/vehicles/store">
                        @csrf

                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis</label>
                            <input type="text" class="form-control" id="jenis" name="jenis" required>
                        </div>

                        <div class="mb-3">
                            <label for="model" class="form-label">Model</label>
                            <input type="text" class="form-control" id="model" name="model" required>
                        </div>

                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" name="color" required>
                        </div>

                        <div class="mb-3">
                            <label for="plat_no" class="form-label">Plat No</label>
                            <input type="text" class="form-control" id="plat_no" name="plat_no" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Vehicle</button>
                    </form> 
                </div>
              
            </div>
        </div>
    </div>
</div>
@endsection


