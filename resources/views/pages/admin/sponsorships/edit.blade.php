@extends('layouts.admin')

@section('title', 'Edit Sponsorship | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Sponsorship</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Edit Sponsorship </h4>
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
                                <form action="{{ route('sponsorships.update', $sponsorship->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <div class="form-group">
                                                        <label for="name_sponsorship">Nama</label>
                                                        <input type="text" name="name_sponsorship"
                                                            class="form-control @error('name_sponsorship') is-invalid @enderror"
                                                            value="{{ $sponsorship->name_sponsorship }}">
                                                        @error('name_sponsorship')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="image_sponsorship">Image Sponsorship</label>
                                                    <input type="file" name="image_sponsorship"
                                                        class="form-control @error('image_sponsorship') is-invalid @enderror"
                                                        accept="image/*">
                                                    <div class="mt-1">
                                                        <small><b>Gambar Lama :</b></small><br>
                                                        <img src="{{ url($sponsorship->image_sponsorship) }}"
                                                            class="img-thumbnail img-preview" width="100px">
                                                    </div>
                                                    @error('image_sponsorship')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
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
