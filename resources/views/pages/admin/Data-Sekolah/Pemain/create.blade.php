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
                            <h4 class="page-title">Tambah Data Pemain Sekolah </h4>
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
                                        <label for="data_sekolah_id" class="form-label">id Sekolah</label>
                                        <input type="text" class="form-control @error('data_sekolah_id') is-invalid @enderror"
                                            name="data_sekolah_id" placeholder="data sekolah id" value="{{ old('data_sekolah_id') }}">
                                        @error('data_sekolah_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" placeholder="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                
                                    <div class="mb-3">
                                        <label for="No_punggung" class="form-label">No Punggung</label>
                                        <input type="text" class="form-control @error('No_punggung') is-invalid @enderror"
                                            name="No_punggung" placeholder="Nomer Punggung" value="{{ old('No_punggung') }}">
                                        @error('No_punggung')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Tanggal_lahir" class="form-label">Tanggal lahir</label>
                                        <input type="datetime-local" class="form-control @error('Tanggal_lahir') is-invalid @enderror"
                                            name="Tanggal_lahir" placeholder="Tanggal lahir" value="{{ old('Tanggal_lahir') }}">
                                        @error('Tanggal_lahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                              

                                    <div class="mb-3">
                                        <label for="Ijasah" class="form-label">Ijasah</label>
                                        <input type="file"
                                            class="form-control @error('Ijasah') is-invalid @enderror"
                                            name="Ijasah">
                                    </div>
                                    @error('Ijasah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                  
                                    <div class="mb-3">
                                        <label for="Rapor" class="form-label">Rapor</label>
                                        <input type="file"
                                            class="form-control @error('Rapor') is-invalid @enderror"
                                            name="Rapor">
                                    </div>
                                    @error('Rapor')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <label for="Keterangan_Siswa" class="form-label">Keterangan Siswa</label>
                                    <input type="text" class="form-control @error('Keterangan_Siswa') is-invalid @enderror"
                                        name="Keterangan_Siswa" placeholder="Keterangan Siswa" value="{{ old('Keterangan_Siswa') }}">
                                    @error('Keterangan_Siswa')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="Kartu_Siswa" class="form-label">Kartu Siswa</label>
                                    <input type="file"
                                        class="form-control @error('Kartu_Siswa') is-invalid @enderror"
                                        name="Kartu_Siswa">
                                </div>
                                @error('Kartu_Siswa')
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
    