@extends('layouts.user_type.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <form action="{{ route('location.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">ID</label>
                                <input type="text" class="form-control  @error('id_loc') is-invalid @enderror"
                                    name="id_loc">
                                @error('id_loc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">CODE</label>
                                <input type="text" class="form-control  @error('id_secl') is-invalid @enderror"
                                    name="id_secl">
                                @error('id_secl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Locations Site</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror"
                                    name="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control  @error('address') is-invalid @enderror" name="address"></textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <select class="form-select @error('country') is-invalid @enderror" name="country">
                                    <option selected>Chosen</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Singapore">Singapore</option>
                                </select>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <select class="form-select @error('state') is-invalid @enderror" name="state">
                                    <option selected>Chosen</option>
                                    <option value="DKI JAKARTA">DKI JAKARTA</option>
                                    <option value="SUMATRA SELATAN">SUMATRA SELATAN</option>
                                    <option value="BEKASI">BEKASI</option>
                                </select>
                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <select class="form-select @error('city') is-invalid @enderror" name="city">
                                    <option selected>Chosen</option>
                                    <option value="Jakarta Barat">Jakarta Barat</option>
                                    <option value="Jakarta Utara">Jakarta Utara</option>
                                    <option value="Jakarta Selatan">Jakarta Selatan</option>
                                    <option value="Jakarta Timur">Jakarta Timur</option>
                                    <option value="Jakarta Pusat">Jakarta Pusat</option>
                                </select>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection