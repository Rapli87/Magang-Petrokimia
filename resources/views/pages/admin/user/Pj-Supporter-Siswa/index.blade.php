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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Pj Supporter Siswa</a>
                                    </li>
                                </ol>
                            </div>

                            
                            <div class="p-4 my-auto">
                                <h4 class="fs-20">Form Pendaftaran PGFC Pj Supporter Siswa</h4>
                                <p class="text-muted mb-3">Form Pendaftaran Pj Supporter Siswa di bawah ini </p>
                              
                                    
                                        <div id="basicwizard">
                                            <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
                                                <li class="nav-item">
                                                    <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab"
                                                        class="nav-link rounded-0 py-2">
                                                        <i class="ri-account-circle-line fw-normal fs-20 align-middle me-1"></i>
                                                        <span class="d-none d-sm-inline">Form Pj Supporter Siswa</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab"
                                                        class="nav-link rounded-0 py-2">
                                                        <i class="ri-profile-line fw-normal fs-20 align-middle me-1"></i>
                                                        <span class="d-none d-sm-inline">Tabel Pj Supporter Siswa</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab"
                                                        class="nav-link rounded-0 py-2">
                                                        <i class="ri-check-double-line fw-normal fs-20 align-middle me-1"></i>
                                                        <span class="d-none d-sm-inline">View Pj Supporter Siswa</span>
                                                    </a>
                                                </li>
                                            </ul>
                
                                            <div class="tab-content b-0 mb-0">
                                                <div class="tab-pane" id="basictab1">
                                             <form action="{{ route('Pj-Supporter-Siswa.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="nama">Nama</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" id="nama"
                                                                        name="nama" value="nama">
                                                                        @error('nama')
                                                                        <span style="color: red">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="hp">Hp</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="hp" name="hp"
                                                                        class="form-control" value="hp">
                                                                        @error('hp')
                                                                        <span style="color: red">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                
                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="alamat">Alamat</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="alamat" name="alamat"
                                                                        class="form-control" value="alamat">
                                                                        @error('alamat')
                                                                        <span style="color: red">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="foto">Foto</label>
                                                                <div class="col-md-9">
                                                                    <input type="file" id="foto" name="foto"
                                                                        class="form-control" value="foto">
                                                                        @error('foto')
                                                                        <span style="color: red">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="ktp">ktp / Kartu Anggota Siswa</label>
                                                                <div class="col-md-9">
                                                                    <input type="file" id="ktp" name="ktp"
                                                                        class="form-control" value="ktp">
                                                                </div>
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
                                                         

                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                

                                                </div>
                
                                                <div class="tab-pane" id="basictab2">
                                                    <div class="row">
                                                        <div class="col-12">


                                                            
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h5 class="mt-0">Data Tabel Pj Supporter Siswa</h5>
                <p class="sub-header font-13">List Data Tabel Pj Supporter Siswa di bawah ini</p>
                <div class="table-responsive">
                    <table class="table table-centered mb-0" id="btn-editable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>hp</th>
                                <th>alamat</th>
                                <th>foto</th>
                                <th>ktp / Kartu Anggota Siswa</th>
                                <th>Action</th>
                              
                              
                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach ($data->sortBy('id') as $data)
                             
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->hp}}</td>
                                <td>{{$data->alamat}}</td>
                              
                                <td>
                                    {{-- Check if the Foto attribute is not empty --}}
                                    @if ($data->foto)
                                        {{-- Assuming Foto is a URL or a path to the image --}}
                                        <img src="{{ asset($data->foto) }}" alt="Foto {{$data->foto}}" style="max-width: 100px; max-height: 100px;">
                                    @else
                                        No Image
                                    @endif
                                </td>
                              
                                <td>
                                    {{-- Check if the Foto attribute is not empty --}}
                                    @if ($data->ktp)
                                        {{-- Assuming Foto is a URL or a path to the image --}}
                                        <img src="{{ asset($data->ktp) }}" alt="Foto {{$data->ktp}}" style="max-width: 100px; max-height: 100px;">
                                    @else
                                        No Image
                                    @endif
                                </td>

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
                                                    href="{{ route('Pj-Supporter-Siswa.delete', ['id' => $data->id]) }}">Hapus</a>
                                            </li>

                                            <li><a class="dropdown-item"
                                                href="{{ route('Pj-Supporter-Siswa.edit', ['id' => $data->id]) }}">Edit</a>
                                        </li>

                                        </ul>
                                    </div>
                                </td>
                            </tr>
@endforeach
                        </tbody>
                    </table>
                </div> <!-- end .table-responsive-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                
                                                    <ul class="pager wizard mb-0 list-inline">
                                                        <li class="previous list-inline-item">
                                                            <button type="button" class="btn btn-light"><i
                                                                    class="ri-arrow-left-line me-1"></i> Back to Account</button>
                                                        </li>
                                                        <li class="next list-inline-item float-end">
                                                            <button type="button" class="btn btn-info">Add More Info <i
                                                                    class="ri-arrow-right-line ms-1"></i></button>
                                                        </li>
                                                    </ul>
                                                </div>
                
                                                <div class="tab-pane" id="basictab3">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="text-center">
                                                                
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="d-flex">
                      
                        <div class="info">
                            <h5 class="fs-18 my-1">Nama:</h5>
                            <p class="text-muted fs-15">{{ isset($data->nama) ? $data->nama : 'Data not found' }}</p>
                        
                            <h5 class="fs-18 my-1">Hp:</h5>
                            <p class="text-muted fs-15">{{ isset($data->hp) ? $data->hp : 'Data not found' }}</p>
                        
                            <h5 class="fs-18 my-1">Alamat:</h5>
                            <p class="text-muted fs-15">{{ isset($data->alamat) ? $data->alamat : 'Data not found' }}</p>
                        
                            <h5 class="fs-18 my-1">Foto:</h5>
                            <p class="text-muted fs-15">{{ isset($data->foto) ? $data->foto : 'Data not found' }}</p>
                        
                            <h5 class="fs-18 my-1">Ktp:</h5>
                            <p class="text-muted fs-15">{{ isset($data->ktp) ? $data->ktp : 'Data not found' }}</p>
                        </div>
                        
                    </div>
                    <div class="">
                    
                    </div>
                </div>

                <hr>

                <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0"
                            title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips"
                            href="" data-bs-title="Facebook"><i
                                class="ri-facebook-fill"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0"
                            title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips"
                            href="" data-bs-title="Twitter"><i
                                class="ri-twitter-fill"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0"
                            title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips"
                            href="" data-bs-title="LinkedIn"><i
                                class="ri-linkedin-box-fill"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0"
                            title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips"
                            href="" data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0"
                            title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips"
                            href="" data-bs-title="Message"><i
                                class="ri-mail-open-line"></i></a>
                    </li>
                </ul>
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div> <!-- end col -->
</div> <!-- End row -->
                
                                                                
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                
                                                    
                                                </div>
                
                                            </div> <!-- tab-content -->
                                        </div> <!-- end #basicwizard-->
                                    </form>
                
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                
        
                
                             
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
            
              
            
                            <!-- end row -->
                        @endsection

@section('script')





</script>


    {{-- @vite(['resources/js/pages/responsive-table.init.js']) --}}
@endsection
