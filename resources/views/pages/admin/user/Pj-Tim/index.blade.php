
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Pj Tim</a>
                                    </li>
                                </ol>
                            </div>

                            <div class="p-4 my-auto">
                                <h4 class="fs-20">Tambah Data Pj Tim</h4>
                                <p class="text-muted mb-3">Tambah pJ Tim di bawah ini </p>
                                <form action="{{ route('Pj-Tim.store') }}" method="POST" enctype="multipart/form-data">
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
                                        <label for="jabatan" class="form-label">jabatan</label>
                                        <input class="form-control" type="text" name="jabatan" placeholder="jabatan" required
                                            autofocus>
                                        @error('jabatan')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-2  d-none">
                                        <label for="nip" class="form-label">nip</label>
                                        <input class="form-control" type="text" name="nip"
                                            placeholder="Enter Refferal Code (Optional)">
                                        @error('nip')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="hp" class="form-label">hp</label>
                                        <input class="form-control" type="text" required="" name="hp"
                                            placeholder="Enter your No hp">
                                        @error('hp')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="email" class="form-label">email</label>
                                        <input class="form-control" type="email" required="" name="email"
                                            placeholder="Enter your password">
                                        @error('email')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-2">
                                        <label for="foto" class="form-label">foto</label>
                                        <input class="form-control" type="file" required="" name="foto"
                                           
                                        @error('foto')
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
                                        <button class="btn btn-primary fw-semibold" type="submit" >Sign
                                            Up</button>
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
            
                                    <h5 class="mt-0">Data User</h5>
                                    <p class="sub-header font-13">Inline edit like a spreadsheet, toolbar column with edit
                                        button only and without focus on first input.</p>
                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>id</th>
                                                    <th>Nama</th>
                                                    <th>Jabatan</th>
                                                    <th>Nip</th>
                                                    <th>Hp</th>
                                                    <th>Email</th>
                                                    <th>Foto</th>
                                                    <th>Ktp</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
            
                                            <tbody>
                                                @foreach ($pjtim->sortBy('id') as $data)
                                                    <tr class="text-center">
                                                        <td>{{ $data->id }}</td>
                                                        <td>{{ $data->nama }}</td>
                                                        <td>{{ $data->jabatan }}</td>
                                                        <td>{{ $data->nip }}</td>
                                                        <td>{{ $data->hp }}</td>
                                                        <td>{{ $data->email }}</td>
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
                                                                            href="{{ route('Pj-Tim.delete', ['id' => $data->id]) }}">Hapus</a>
                                                                    </li>

                                                                    <li><a class="dropdown-item"
                                                                        href="{{ route('Pj-Tim.edit', ['id' => $data->id]) }}">Edit</a>
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
