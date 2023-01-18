@extends('layouts.user_type.auth')

@section('content')

<section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 mx-3 border-radius-lg"
        style="background-image: url('../assets/img/curved-images/curved0.jpg');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">Add New Data!</h1>
                    <p class="text-lead text-white">Insert new Data Departement.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-body">
                        <form role="form text-left" method="POST" action='{{ url('departement') }}'>
                            @csrf
                            <input type="text" class="form-control" placeholder="ID" name="id"
                                id="id_dept" aria-label="ID" aria-describedby="id-addon"
                                style="margin: 2px 0px 5px 0px">
                            <input type="text" class="form-control" placeholder="Code" name="code"
                                id="id_secd" aria-label="Code" aria-describedby="code-addon"
                                style="margin: 2px 0px 5px 0px">
                            <input type="text" class="form-control" placeholder="Departement" name="departement"
                                id="departement" aria-label="Departement" aria-describedby="departement-addon"
                                style="margin: 2px 0px 5px 0px">
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection