@extends('layouts.admin')

@section('title', 'Create Jadwal | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tambah Jadwal</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tambah Jadwal </h4>
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
                        <form action="{{ route('Jadwal.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    {{-- <div class="mb-3">
                                        <label for="grup" class="form-label">Grup</label>
                                        <input type="text" class="form-control @error('grup') is-invalid @enderror" name="grup" placeholder="Grup" value="{{ old('grup') }}">
                                        @error('grup')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}

                                    <div class="mb-3">
                                        <label for="grup" class="form-label">Grup</label>
                                        <input type="text" class="form-control @error('grup') is-invalid @enderror" name="grup" placeholder="Grup" value="{{ old('grup') }}">
                                        @error('grup')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                    
                                    <div class="mb-3">
                                        <label for="tanggal" class="form-label">Tanggal</label>
                                        <input type="datetime-local" class="form-control @error('tanggal') is-invalid @enderror"
                                            name="tanggal" placeholder="tanggal" value="{{ old('tanggal') }}">
                                        @error('tanggal')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="mulai" class="form-label">mulai</label>
                                        <input type="time" class="form-control @error('mulai') is-invalid @enderror"
                                            name="mulai" placeholder="mulai" value="{{ old('mulai') }}">
                                        @error('mulai')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="selesai" class="form-label">selesai</label>
                                        <input type="time" class="form-control @error('selesai') is-invalid @enderror"
                                            name="selesai" placeholder="selesai" value="{{ old('selesai') }}">
                                        @error('selesai')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <input type="text"
                                            class="form-control @error('status') is-invalid @enderror"
                                            name="status" placeholder="status" value="{{ old('status') }}">
                                        @error('status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="skor" class="form-label">Skor</label>
                                        <input type="text"
                                            class="form-control @error('skor') is-invalid @enderror"
                                            name="skor">
                                    </div>
                             
                                
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


 
    