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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Pemain</a>
                                    </li>
                                </ol>
                            </div>

                            
                            <div class="p-4 my-auto">
                                <h4 class="fs-20">Form Pendaftaran Pemain</h4>
                                <p class="text-muted mb-3">Form Pendaftaran pemain Pemain di bawah ini </p>
                              
                                    
                                        <div id="basicwizard">
                                            <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
                                                <li class="nav-item">
                                                    <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab"
                                                        class="nav-link rounded-0 py-2">
                                                        <i class="ri-account-circle-line fw-normal fs-20 align-middle me-1"></i>
                                                        <span class="d-none d-sm-inline">Form Pendaftaran Pemain</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab"
                                                        class="nav-link rounded-0 py-2">
                                                        <i class="ri-profile-line fw-normal fs-20 align-middle me-1"></i>
                                                        <span class="d-none d-sm-inline">Tabel Pemain</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab"
                                                        class="nav-link rounded-0 py-2">
                                                        <i class="ri-check-double-line fw-normal fs-20 align-middle me-1"></i>
                                                        <span class="d-none d-sm-inline">View Pemain</span>
                                                    </a>
                                                </li>
                                            </ul>
                
                                            <div class="tab-content b-0 mb-0">
                                                <div class="tab-pane" id="basictab1">
                                             <form action="{{ route('pemain.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="name">Nama</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" id="name"
                                                                        name="name" value="name">
                                                                        @error('name')
                                                                        <span style="color: red">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="No_punggung"> No Punggung</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="No_punggung" name="No_punggung"
                                                                        class="form-control" value="No_punggung">
                                                                        @error('No_punggung')
                                                                        <span style="color: red">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                
                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="Kelas">Kelas</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="Kelas" name="Kelas"
                                                                        class="form-control" value="Kelas">
                                                                        @error('Kelas')
                                                                        <span style="color: red">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="confirm">Tanggal Lahir</label>
                                                                <div class="col-md-9">
                                                                    <input type="date" id="Tanggal_lahir" name="Tanggal_lahir"
                                                                        class="form-control" value="Tanggal_lahir">
                                                                        @error('date')
                                                                        <span style="color: red">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="Ijasah">Ijasah</label>
                                                                <div class="col-md-9">
                                                                    <input type="file" id="Ijasah" name="Ijasah"
                                                                        class="form-control" value="Ijasah">
                                                                </div>
                                                            </div>


                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="Rapor">Raport</label>
                                                                <div class="col-md-9">
                                                                    <input type="file" id="Rapor" name="Rapor"
                                                                        class="form-control" value="Rapor">
                                                                </div>
                                                            </div>


                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="Keterangan_Siswa">Keterangan siswa</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="Keterangan_Siswa" name="Keterangan_Siswa"
                                                                        class="form-control" value="Keterangan_Siswa">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="Kartu_Siswa">Kartu Siswa</label>
                                                                <div class="col-md-9">
                                                                    <input type="file" id="Kartu_Siswa" name="Kartu_Siswa"
                                                                        class="form-control" value="Kartu_Siswa">
                                                                </div>
                                                            </div>


                                                            <div class="row mb-3">
                                                                <label class="col-md-3 col-form-label" for="Foto">Foto</label>
                                                                <div class="col-md-9">
                                                                    <input type="file" id="Foto" name="Foto"
                                                                        class="form-control" value="Foto">
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

                <h5 class="mt-0">Inline edit with Button</h5>
                <p class="sub-header font-13">Inline edit like a spreadsheet, toolbar column with edit button only and without focus on first input.</p>
                <div class="table-responsive">
                    <table class="table table-centered mb-0" id="btn-editable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>No Punggung</th>
                                <th>Kelas</th>
                                <th>Tanggal Lahir</th>
                                <th>Ijasah</th>
                                <th>Rapor</th>
                                <th>Kartu Siswa</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            @foreach ($data->sortBy('id') as $data)
                             
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->No_punggung}}</td>
                                <td>{{$data->Kelas}}</td>
                                <td>{{$data->Tanggal_lahir}}</td>
                                <td>
                                    {{-- Check if the Foto attribute is not empty --}}
                                    @if ($data->Ijasah)
                                        {{-- Assuming Foto is a URL or a path to the image --}}
                                        <img src="{{ asset($data->Ijasah) }}" alt="Foto {{$data->Ijasah}}" style="max-width: 100px; max-height: 100px;">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    {{-- Check if the Foto attribute is not empty --}}
                                    @if ($data->Rapor)
                                        {{-- Assuming Foto is a URL or a path to the image --}}
                                        <img src="{{ asset($data->Rapor) }}" alt="Foto {{$data->Rapor}}" style="max-width: 100px; max-height: 100px;">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>{{$data->Keterangan_Siswa}}</td>
                                <td>
                                    {{-- Check if the Foto attribute is not empty --}}
                                    @if ($data->Kartu_Siswa)
                                        {{-- Assuming Foto is a URL or a path to the image --}}
                                        <img src="{{ asset($data->Kartu_Siswa) }}" alt="Foto {{$data->Kartu_Siswa}}" style="max-width: 100px; max-height: 100px;">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    {{-- Check if the Foto attribute is not empty --}}
                                    @if ($data->Foto)
                                        {{-- Assuming Foto is a URL or a path to the image --}}
                                        <img src="{{ asset($data->Foto) }}" alt="Foto {{$data->name}}" style="max-width: 100px; max-height: 100px;">
                                    @else
                                        No Image
                                    @endif
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
                            <p class="text-muted fs-15">
                                @if(isset($data->name))
                                    {{ $data->name }}
                                @else
                                    Data not found
                                @endif
                            </p>
                        
                            <h5 class="fs-18 my-1">No Punggung:</h5>
                            <p class="text-muted fs-15">
                                @if(isset($data->No_punggung))
                                    {{ $data->No_punggung }}
                                @else
                                    Data not found
                                @endif
                            </p>
                        
                            <h5 class="fs-18 my-1">Kelas:</h5>
                            <p class="text-muted fs-15">
                                @if(isset($data->Kelas))
                                    {{ $data->Kelas }}
                                @else
                                    Data not found
                                @endif
                            </p>
                        
                            <h5 class="fs-18 my-1">Tanggal_lahir:</h5>
                            <p class="text-muted fs-15">
                                @if(isset($data->Tanggal_lahir))
                                    {{ $data->Tanggal_lahir }}
                                @else
                                    Data not found
                                @endif
                            </p>
                        
                            <h5 class="fs-18 my-1">Ijasah:</h5>
                            <p class="text-muted fs-15">
                                @if(isset($data->Ijasah))
                                    {{ $data->Ijasah }}
                                @else
                                    Data not found
                                @endif
                            </p>
                        
                            <h5 class="fs-18 my-1">Rapor:</h5>
                            <p class="text-muted fs-15">
                                @if(isset($data->Rapor))
                                    {{ $data->Rapor }}
                                @else
                                    Data not found
                                @endif
                            </p>
                        
                            <h5 class="fs-18 my-1">Keterangan siswa:</h5>
                            <p class="text-muted fs-15">
                                @if(isset($data->Keterangan_Siswa))
                                    {{ $data->Keterangan_Siswa }}
                                @else
                                    Data not found
                                @endif
                            </p>
                        
                            <h5 class="fs-18 my-1">Foto:</h5>
                            <p class="text-muted fs-15">
                                @if(isset($data->Foto))
                                    {{ $data->Foto }}
                                @else
                                    Data not found
                                @endif
                            </p>
                        </div>
                        
                    </div>
                    <div class="">
                        <a href="" class="btn btn-success btn-sm me-1 tooltips"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <i class="ri-pencil-fill"></i>
                        </a>
                        <a href=""  class="btn btn-danger btn-sm tooltips" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                            <i class="ri-pencil-fill"></i>
                        </a>
                      
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
