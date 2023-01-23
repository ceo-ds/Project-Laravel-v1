@extends('layouts.user_type.auth')

@section('content')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">ID</label>
                            <input type="text" class="form-control " name="id_dept" value="{{ $departemet->id_dept }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Code</label>
                            <input type="text" class="form-control " name="id_secd" value="{{ $departemet->id_secd }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Departement</label>
                            <input type="text" class="form-control " name="name" value="{{ $departemet->name }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('departement.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection