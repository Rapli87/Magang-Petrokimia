
@extends('layouts.admin')
@section('content')
    {{-- @include('layouts.shared/page-title', ['page_title' => 'Data Sekolah', 'sub_title' => 'Tables']) --}}
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">PGFC</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Pelatih</a>
                                    </li>
                                </ol>
                            </div>

                            
                            <div class="p-4 my-auto">
                                <h4 class="fs-20">Tambah Data Pelatih</h4>
                                <p class="text-muted mb-3">Tambah Pelatih di bawah ini </p>
                                <form action="{{ route('Pelatih.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="mb-2">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input class="form-control" type="text" name="nama" placeholder="Enter your name" required
                                            autofocus>
                                        @error('nama')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="hp" class="form-label">HP</label>
                                        <input class="form-control" type="text" required="" name="hp"
                                            placeholder="Enter your Nomer hp">
                                        @error('hp')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                         
                              
                                    <div class="mb-2">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input class="form-control" type="text" required="" name="alamat"
                                            placeholder="Enter your Alamat">
                                        @error('alamat')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="foto" class="form-label">Foto</label>
                                        <input class="form-control" type="file" required="" name="foto">
                                        @error('email')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-2">
                                        <label for="ktp" class="form-label">ktp</label>
                                        <input class="form-control" type="file" required="" name="ktp"
                                           
                                        @error('ktp')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>

                              

                                    <div class="mb-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                            <label class="form-check-label" for="checkbox-signup">I accept <a
                                                    href="javascript: void(0);" class="text-muted">Terms and
                                                    Conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="mb-0 d-grid text-center">
                                        <button class="btn btn-primary fw-semibold" type="submit" >Submit</button>
                                    </div>
            
            
            
                                </form>
                                @if (Session::has('success'))
                                    <p style="color: green">{{ Session::get('success') }}</p>
                                @endif
                                @if (Session::has('error'))
                                    <p style="color: red">{{ Session::get('error') }}</p>
                                @endif
                                <!-- end form-->
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
            
              
            
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
            
                                    <h5 class="mt-0">Pelatih</h5>
                                    <p class="sub-header font-13">Tabel Pelatih</p>
                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>id</th>
                                                    <th>Nama</th>
                                                    <th>hp</th>
                                                    <th>alamat</th>
                                                    <th>Foto</th>
                                                    <th>Ktp</th>
            
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
            
                                            <tbody>
                                                @foreach ($Pelatih->sortBy('id') as $data)
                                                    <tr class="text-center">
                                                        <td>{{ $data->id }}</td>
                                                        <td>{{ $data->nama }}</td>
                                                        <td>{{ $data->hp }}</td>
                                                        <td>{{ $data->alamat }}</td>
                                                        <td>{{ $data->foto }}</td>
                                                        <td>{{ $data->ktp }}</td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-warning">Action</button>
                                                                <button type="button"
                                                                    class="btn btn-Success dropdown-toggle dropdown-toggle-split"
                                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <span class="visually-hidden">Toggle Dropdown</span>
                                                                </button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item"
                                                                            href="{{ route('Auth-User.show', ['id' => $data->id]) }}">View</a>
                                                                    </li>
            
                                                                    <li><a class="dropdown-item"
                                                                            href="{{ route('Pelatih.delete', ['id' => $data->id]) }}">Hapus</a>
                                                                    </li>

                                                                    <li><a class="dropdown-item"
                                                                        href="{{ route('Pelatih.edit', ['id' => $data->id]) }}">Edit</a>
                                                                </li>
            
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
            
                                            </tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        @endsection

@section('script')





</script>


    {{-- @vite(['resources/js/pages/responsive-table.init.js']) --}}
@endsection
