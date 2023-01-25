@extends('layouts.user_type.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data location
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">ID</label>
                            <input type="text" class="form-control " name="id_loc" value="{{ $location->id_loc }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">CODE</label>
                            <input type="text" class="form-control " name="id_secl" value="{{ $location->id_secl }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Location</label>
                            <input type="text" class="form-control " name="name" value="{{ $location->name }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control " name="address" value="{{ $location->address }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" name="city" value="{{ $location->city }}"
                                readonly>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">State</label>
                            <textarea class="form-control" name="state" readonly>{{ $location->state }}</textarea>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country</label>
                            <textarea class="form-control" name="country" readonly>{{ $location->country }}</textarea>

                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('location.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection