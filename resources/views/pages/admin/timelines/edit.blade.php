@extends('layouts.admin')

@section('title', 'Edit Timelines | PGFC Admin')

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">PGFC</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Timelines</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Edit Timelines </h4>
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('timelines.update', $timeline->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="title_timeline">Title</label>
                                                    <input type="text" name="title_timeline"
                                                        class="form-control @error('title_timeline') is-invalid @enderror"
                                                        value="{{ $timeline->title_timeline }}">
                                                    @error('title_timeline')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="image_timeline">Image</label>
                                                    <input type="file" name="image_timeline"
                                                        class="form-control @error('image_timeline') is-invalid @enderror"
                                                        accept="image/*">
                                                    <div class="mt-1">
                                                        <small><b>Gambar Lama :</b></small><br>
                                                        <img src="{{ url($timeline->image_timeline) }}"
                                                            class="img-thumbnail img-preview" width="100px">
                                                    </div>
                                                    @error('image_timeline')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="date_timeline">Date</label>
                                                    <input type="date" name="date_timeline"
                                                        class="form-control @error('date_timeline') is-invalid @enderror"
                                                        value="{{ $timeline->date_timeline }}">
                                                    @error('date_timeline')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="description" class="form-label">Deskripsi</label>
                                                <textarea class="form-control" name="description" placeholder="Deskripsi">{{ $timeline->description }}</textarea>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
