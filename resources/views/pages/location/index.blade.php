@extends('layouts.user_type.auth')

@section('content')
<p>Halaman Auth</p>
@csrf
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        @include('layouts/_flash')
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Data Locations</h6>
          </div>
          <div class="text-center">
            <a href="{{ route('location.create') }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              <button type="buttom" class="btn bg-gradient-dark w-20 my-4 mb-2">Add</button>
            </a>
        </div>
        @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
        @endif
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="tbl text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NO</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                    <th class="tbl text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CODE</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Site</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">City</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">State</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Country</th>
                    <th class="text-secondary opacity-7"><i class="fa fa-tools"></i></th>
                  </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($location as $data)
                        <tr>
                            <td class="tbl">{{ $no++ }}</td>
                            <td>{{ $data->id_loc }}</td>
                            <td class="tbl">{{ $data->id_secl }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->city }}</td>
                            <td>{{ $data->state }}</td>
                            <td>{{ $data->country }}</td>
                            <td></td>
                            <td>
                                <form action="{{ route('location.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('location.edit', $data->id) }}"
                                        class="btn btn-sm btn-outline-success">
                                        Edit
                                    </a> |
                                    <a href="{{ route('location.show', $data->id) }}"
                                        class="btn btn-sm btn-outline-warning">
                                        Show
                                    </a> |
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Siswa
                        <a href="{{ route('siswa.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Nomor Induk Siswa</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($siswa as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->nis }}</td>
                                            <td>{{ $data->jenis_kelamin }}</td>
                                            <td>{{ $data->agama }}</td>
                                            <td>{{ date('d M Y', strtotime($data->tgl_lahir)) }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>
                                                <form action="{{ route('siswa.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('siswa.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('siswa.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection