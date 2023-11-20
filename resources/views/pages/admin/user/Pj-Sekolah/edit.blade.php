@extends('layouts.admin')

@section('title', 'Edit Jadwal | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Pj SEKOLAH</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Edit pJ Sekolah </h4>
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
                        <form action="{{ route('Pj-Sekolah.update', $data->id) }}" method="POST"enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="nama_kepala_sekolah" class="form-label">Nama Kepala Sekolah</label>
                                        <input type="text" class="form-control @error('nama_kepala_sekolah') is-invalid @enderror" name="nama_kepala_sekolah" placeholder="nama kepala sekolah" value="{{ old('nama_kepala_sekolah') }}">
                                        @error('nama_kepala_sekolah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat_kepala_sekolah" class="form-label">alamat kepala sekolah</label>
                                        <input type="text" class="form-control @error('alamat_kepala_sekolah') is-invalid @enderror"
                                            name="alamat_kepala_sekolah" placeholder="alamat kepala sekolah" value="{{ old('alamat_kepala_sekolah') }}">
                                        @error('alamat_kepala_sekolah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="telp" class="form-label">telp</label>
                                        <input type="text" class="form-control @error('telp') is-invalid @enderror"
                                            name="telp" placeholder="telp" value="{{ old('telp') }}">
                                        @error('telp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="hp" class="form-label">hp</label>
                                        <input type="text" class="form-control @error('hp') is-invalid @enderror"
                                            name="hp" placeholder="hp" value="{{ old('hp') }}">
                                        @error('hp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">email</label>
                                        <input type="text"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email" placeholder="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="filerekomendasi" class="form-label">filerekomendasi</label>
                                        <input type="file"
                                            class="form-control @error('filerekomendasi') is-invalid @enderror"
                                            name="filerekomendasi">
                                    </div>
                             
                                    @error('filerekomendasi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" name="description" placeholder="Description">{{ $item->description }}</textarea>
                                    </div> --}}
                                    <button type="submit" class="btn btn-primary btn-block">Edit</button>
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
