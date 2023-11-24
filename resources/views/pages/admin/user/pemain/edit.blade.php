@extends('layouts.admin')

@section('title', 'Edit Pemain | PGFC User')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Data Pemain</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Edit Data Pemain </h4>
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
                        <form action="{{ route('pemain.update', $data->id) }}" method="POST"enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="No_punggung" class="form-label">No_punggung</label>
                                        <input type="text" class="form-control @error('No_punggung') is-invalid @enderror"
                                            name="No_punggung" placeholder="No_punggung" value="{{ old('No_punggung') }}">
                                        @error('No_punggung')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Kelas" class="form-label">Kelas</label>
                                        <input type="text" class="form-control @error('Kelas') is-invalid @enderror"
                                            name="Kelas" placeholder="masukkan Kelas anda" value="{{ old('Kelas') }}">
                                        @error('Kelas')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Tanggal_lahir" class="form-label">Tanggal_lahir</label>
                                        <input type="date" class="form-control @error('Tanggal_lahir') is-invalid @enderror"
                                            name="Tanggal_lahir" placeholder="masukkan Tanggal_lahir anda" value="{{ old('Tanggal_lahir') }}">
                                        @error('Tanggal_lahir')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Ijasah" class="form-label">Foto</label>
                                        <input type="file" class="form-control @error('Ijasah') is-invalid @enderror"
                                            name="Ijasah" value="{{ old('Ijasah') }}">
                                        @error('Ijasah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Rapor" class="form-label">Rapor</label>
                                        <input type="file"
                                            class="form-control @error('Rapor') is-invalid @enderror"
                                            name="Rapor"  value="{{ old('Rapor') }}">
                                        @error('Rapor')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="Keterangan_Siswa" class="form-label">Keterangan_Siswa</label>
                                        <input type="text"
                                            class="form-control @error('Keterangan_Siswa') is-invalid @enderror"
                                            name="Keterangan_Siswa"  value="{{ old('Keterangan_Siswa') }}">
                                        @error('Keterangan_Siswa')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="Kartu_Siswa" class="form-label">Kartu_Siswa</label>
                                        <input type="file"
                                            class="form-control @error('Kartu_Siswa') is-invalid @enderror"
                                            name="Kartu_Siswa"  value="{{ old('Kartu_Siswa') }}">
                                        @error('Keterangan_Siswa')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="Foto" class="form-label">Foto</label>
                                        <input type="file"
                                            class="form-control @error('Foto') is-invalid @enderror"
                                            name="Foto"  value="{{ old('Foto') }}">
                                        @error('Foto')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                              
                              

                            
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
