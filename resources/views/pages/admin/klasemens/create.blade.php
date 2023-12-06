@extends('layouts.admin')

@section('title', 'Tambah Klasemens | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tambah Klasemens</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tambah Klasemens </h4>
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
                                <form action="{{ route('group-klasemens.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="group">Grup:</label>
                                                    <select name="group" class="form-control @error('group') is-invalid @enderror">
                                                        <option value="A">Group A</option>
                                                        <option value="B">Group B</option>
                                                        <option value="C">Group C</option>
                                                        <option value="D">Group D</option>
                                                        <option value="E">Group E</option>
                                                        <option value="F">Group F</option>
                                                        <option value="G">Group G</option>
                                                        <option value="H">Group H</option>
                                                    </select>
                                                    @error('group')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>                                            

                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="team_name">Nama Tim:</label>
                                                    <input type="text" name="team_name"
                                                        class="form-control @error('team_name') is-invalid @enderror">
                                                    @error('team_name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Submit</button>
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
