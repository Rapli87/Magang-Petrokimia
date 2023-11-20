@extends('layouts.admin')
@section('content')
   <!-- start page title -->

   
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Deta manajer</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Detail Data manajer</a></li>
                            </ol>
                        </div>
                        {{-- <h4 class="page-title">Welcome {{ Auth::user()->name }}!</h4> --}}
                        <h4 class="page-title">Welcome Manajer!</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search Pemain Futsal">
                        <span class="input-group-append">
                            <button type="button" class="btn btn-primary rounded-start-0"><i class="ri-search-line fs-16"></i></button>
                            
                        </span>
                    
                  
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- End row --> --}}

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="d-flex">
                        <a class="me-3" href="#">
                            {{-- <img class="avatar-md rounded-circle bx-s"
                                src="{{ url('frontend/images/upcoming/LogoSekolah/SMA NU 1 GRESIK.jpg') }}" alt="" width="100px"" alt=""> --}}
                        </a>
                        <div class="info">
                            <h5 class="fs-18 my-1">Nama:</h5>
                            <p class="text-muted fs-15">{{ $manajer->nama }}</p>

                             <h5 class="fs-18 my-1">Hp:</h5>
                            <p class="text-muted fs-15">{{ $manajer->hp }}</p>

                            <h5 class="fs-18 my-1">Alamat:</h5>
                            <p class="text-muted fs-15">{{ $manajer->alamat }}</p>

                            <h5 class="fs-18 my-1">Foto:</h5>
                            <p class="text-muted fs-15">{{ $manajer->foto }}</p>

                            <h5 class="fs-18 my-1">Ktp:</h5>
                            <p class="text-muted fs-15">{{ $manajer->ktp }}</p>

                           
                        </div>
                    </div>
                    <div class="">
                        <a href="#" class="btn btn-success btn-sm me-1 tooltips"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <i class="ri-pencil-fill"></i>
                        </a>
                      
                        <a type="button" class="btn btn-success btn-sm tooltips" href="" target="_blank">
                            <i class="ri-file-pdf-fill me-1"></i>
                        </a>
                        <a type="button" class="btn btn-warning btn-sm tooltips" href="">
                            <i class="ri-file-excel-fill me-1"></i> 
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

    
@endsection