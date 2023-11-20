@extends('layouts.admin')

@section('title', 'Edit Bagan Championship | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Bagan Championship</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Edit Bagan Championship </h4>
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
                        <form action="{{ route('Bagan-Championship.update', $item->id) }}" method="POST"enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="grup" class="form-label">Grup</label>
                                        <input type="text" class="form-control @error('grup') is-invalid @enderror" name="grup" placeholder="Grub" value="{{ old('grup') }}">
                                        @error('grup')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="tim" class="form-label">Tim</label>
                                        <input type="text" class="form-control @error('tim') is-invalid @enderror" name="tim" placeholder="tim" value="{{ old('tim') }}">
                                        @error('tim')
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
                                        <label for="menang" class="form-label">menang</label>
                                        <input type="text" class="form-control @error('menang') is-invalid @enderror"
                                            name="menang" placeholder="menang" value="{{ old('menang') }}">
                                        @error('menang')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="kalah" class="form-label">Kalah</label>
                                        <input type="text" class="form-control @error('kalah') is-invalid @enderror"
                                            name="kalah" placeholder="kalah" value="{{ old('kalah') }}">
                                        @error('kalah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="seri" class="form-label">seri</label>
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
                                        <label for="poin" class="form-label">poin</label>
                                        <input type="text"
                                            class="form-control @error('poin') is-invalid @enderror"
                                            name="poin">
                                    </div>

                                    <div class="mb-3">
                                        <label for="selisih" class="form-label">selisih</label>
                                        <input type="text" class="form-control @error('selisih') is-invalid @enderror"
                                            name="selisih" placeholder="selisih" value="{{ old('selisih') }}">
                                        @error('selisih')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="peringkat" class="form-label">peringkat</label>
                                        <input type="text" class="form-control @error('peringkat') is-invalid @enderror"
                                            name="peringkat" placeholder="peringkat" value="{{ old('peringkat') }}">
                                        @error('peringkat')
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
