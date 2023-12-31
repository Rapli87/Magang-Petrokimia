
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Pj Sekolah</a>
                                    </li>
                                </ol>
                            </div>

                    
                            <div class="p-4 my-auto">
                                <h4 class="fs-20">Tambah Data Pj Sekolah</h4>
                                <p class="text-muted mb-3">Tambah pJ Sekolah di bawah ini </p>
                                <form action="{{ route('Pj-Sekolah.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-2">
                                        <label for="pj_sekolah_id">Nomor Sekolah</label>
                                        <div class="col-md-12">
                                            <select class="form-select" id="pj_sekolah_id" name="pj_sekolah_id">
                                                <option selected>Pilih Nomor Sekolah</option>
                                            @foreach ( $sekolah as  $sekolahs)
                                                <option value="{{  $sekolahs->id }}">{{ $sekolahs->Nama_Sekolah }}</option> 
                                                
                                            @endforeach
                                            

                                            </select>
                                            @error('pj_sekolah_id')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    
                                        <div class="mb-2">
                                        <label for="nama_kepala_sekolah" class="form-label">nama_kepala_sekolah</label>
                                        <input class="form-control" type="text" name="nama_kepala_sekolah" placeholder="Enter your nama_kepala_sekolah" required
                                            autofocus>
                                        @error('nama_kepala_sekolah')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                  
                              

                                    <div class="mb-2">
                                        <label for="alamat_kepala_sekolah" class="form-label">alamat_kepala_sekolah</label>
                                        <input class="form-control" type="text" name="alamat_kepala_sekolah" placeholder="alamat_kepala_sekolah" required
                                            autofocus>
                                        @error('alamat_kepala_sekolah')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="telp" class="form-label">telp</label>
                                        <input class="form-control" type="text" required="" name="telp"
                                            placeholder="Enter your No telp">
                                        @error('telp')
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
                                        <label for="filerekomendasi" class="form-label">filerekomendasi</label>
                                        <input class="form-control" type="file" required="" name="filerekomendasi"
                                           
                                        @error('filerekomendasi')
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
            
                                    <h5 class="mt-0">Data Pj Sekolah</h5>
                                    <p class="sub-header font-13">List Data Tabel Pj Sekolah di bawah ini  </p>
                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>id</th>
                                                    <th>Nama Kepala Sekolah</th>
                                                    <th>Alamat Kepala Sekolah</th>
                                                    <th>Telp</th>
                                                    <th>Hp</th>
                                                    <th>Email</th>
                                                    <th>File Rekomendasi</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
            
                                            <tbody>
                                                @foreach ($pjsekolah->sortBy('id') as $data)
                                                    <tr class="text-center">
                                                        <td>{{ $data->id }}</td>
                                                        <td>{{ $data->nama_kepala_sekolah }}</td>
                                                        <td>{{ $data->alamat_kepala_sekolah }}</td>
                                                        <td>{{ $data->telp }}</td>
                                                        <td>{{ $data->hp }}</td>
                                                        <td>{{ $data->email }}</td>
                                                        <td>{{ $data->filerekomendasi }}</td>
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
                                                                            href="{{ route('Pj-Sekolah.show', ['id' => $data->id]) }}">View</a>
                                                                    </li>
            
                                                                    <li><a class="dropdown-item"
                                                                            href="{{ route('pj-sekolah.delete', ['id' => $data->id]) }}">Hapus</a>
                                                                    </li>

                                                                    <li><a class="dropdown-item"
                                                                        href="{{ route('Pj-Sekolah.edit', ['id' => $data->id]) }}">Edit</a>
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
