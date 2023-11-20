@extends('layouts.admin')

@section('title', 'Data Sekolah | PGFC Admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Sekolah</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tambah Data Sekolah </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                {{-- Konten --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('Data-Sekolah.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="Nama_Sekolah" class="form-label">Nama Sekolah</label>
                                        <input type="text" class="form-control @error('Nama_Sekolah') is-invalid @enderror"
                                            name="Nama_Sekolah" placeholder="Nama Sekolah" value="{{ old('Nama_Sekolah') }}">
                                        @error('Nama_Sekolah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Telp" class="form-label">Telp</label>
                                        <input type="text" class="form-control @error('Telp') is-invalid @enderror"
                                            name="Telp" placeholder="Telp" value="{{ old('Telp') }}">
                                        @error('Telp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Fax" class="form-label">Fax</label>
                                        <input type="text" class="form-control @error('Fax') is-invalid @enderror"
                                            name="Fax" placeholder="Fax" value="{{ old('Fax') }}">
                                        @error('Fax')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="Email"
                                            class="form-control @error('Email') is-invalid @enderror"
                                            name="Email" placeholder="Email" value="{{ old('Email') }}">
                                        @error('Email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="Tanggal_update" class="form-label">Tanggal Update</label>
                                        <input type="datetime-local"
                                            class="form-control @error('Tanggal_update') is-invalid @enderror"
                                            name="Tanggal_update" placeholder="Tanggal update" value="{{ old('Tanggal_update') }}">
                                        @error('Tanggal_update')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                  
                                    <div class="mb-3">
                                        <label for="logo" class="form-label">Logo Data Sekolah</label>
                                        <input type="file"
                                            class="form-control @error('Logo') is-invalid @enderror"
                                            name="Logo">
                                    </div>
                                    @error('Logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" name="description" placeholder="Description">{{ old('description') }}</textarea>
                                    </div> --}}
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- End Konten --}}
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    @endsection
    