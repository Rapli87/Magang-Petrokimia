@extends('layouts.admin')

@section('title', 'Group Klasemen | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Group Klasemen</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tambah Group Klasemen </h4>
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
                        <form action="{{ route('Group-klasmen.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="tim" class="form-label">Tim</label>
                                        <input type="text" class="form-control @error('tim') is-invalid @enderror"
                                            name="tim" placeholder="tim" value="{{ old('tim') }}">
                                        @error('tim')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="main" class="form-label">Main</label>
                                        <input type="text" class="form-control @error('main') is-invalid @enderror"
                                            name="main" placeholder="main" value="{{ old('main') }}">
                                        @error('main')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="menang" class="form-label">Menang</label>
                                        <input type="text" class="form-control @error('menang') is-invalid @enderror"
                                            name="menang" placeholder="menang" value="{{ old('menang') }}">
                                        @error('menang')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="kalah" class="form-label">kalah</label>
                                        <input type="text"
                                            class="form-control @error('kalah') is-invalid @enderror"
                                            name="kalah" placeholder="kalah" value="{{ old('kalah') }}">
                                        @error('kalah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="selisih" class="form-label">selisih</label>
                                        <input type="text"
                                            class="form-control @error('selisih') is-invalid @enderror"
                                            name="selisih" placeholder="kalah" value="{{ old('selisih') }}">
                                        @error('selisih')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="seri" class="form-label">Seri</label>
                                        <input type="text"
                                            class="form-control @error('seri') is-invalid @enderror"
                                            name="seri" placeholder="seri" value="{{ old('seri') }}">
                                        @error('seri')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                  
                                    <div class="mb-3">
                                        <label for="grup" class="form-label">grup</label>
                                        <input type="text"
                                            class="form-control @error('grup') is-invalid @enderror"
                                            name="grup">
                                    </div>
                                    @error('grup')
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
    