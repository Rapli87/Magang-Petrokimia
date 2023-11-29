@extends('layouts.admin')

@section('title', 'Create Bagan | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tambah Bagan</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tambah Bagan </h4>
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
                        <form action="{{ route('Bagan-Championship.store')}}" method="POST" enctype="multipart/form-data">
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

                                 <!-- create.blade.php -->
                                 <div class="mb-3">
                                    <label for="grup" class="form-label">Grup</label>
                                    <select class="form-select @error('grup') is-invalid @enderror" id="grup" name="grup">
                                        <option value="">Pilih Grup</option>
                                        @foreach ($klasmen as $sekolah)
                                            <option value="{{ $sekolah->group }}">{{ $sekolah->group }}</option>
                                        @endforeach
                                    </select>
                                    @error('grup')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="tim" class="form-label">tim</label>
                                    <select class="form-select @error('tim') is-invalid @enderror" id="tim" name="tim">
                                        <option value="">Pilih Sekolah</option>
                                        @foreach ($klasmen as $sekolah)
                                            <option value="{{ $sekolah->team_name }}">{{ $sekolah->team_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('tim')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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


 
    