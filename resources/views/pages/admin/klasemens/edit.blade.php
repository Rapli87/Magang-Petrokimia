@extends('layouts.admin')

@section('title', 'Edit Klasemens | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Klasemens</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Edit Klasemens </h4>
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
                                <form action="{{ route('group-klasemens.update', $klasemen->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="group">Group:</label>
                                                    <input type="text" name="group"
                                                        class="form-control @error('group') is-invalid @enderror"
                                                        value="{{ $klasemen->group }}">
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
                                                        class="form-control @error('team_name') is-invalid @enderror"
                                                        value="{{ $klasemen->team_name }}">
                                                    @error('team_name')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="played">Main:</label>
                                                    <input type="number" name="played"
                                                        class="form-control @error('played') is-invalid @enderror"
                                                        value="{{ $klasemen->played }}">
                                                    @error('played')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="won">Menang:</label>
                                                    <input type="number" name="won"
                                                        class="form-control @error('won') is-invalid @enderror"
                                                        value="{{ $klasemen->won }}">
                                                    @error('won')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="drawn">Seri:</label>
                                                    <input type="number" name="drawn"
                                                        class="form-control @error('drawn') is-invalid @enderror"
                                                        value="{{ $klasemen->drawn }}">
                                                    @error('drawn')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="lost">Kalah:</label>
                                                    <input type="number" name="lost"
                                                        class="form-control @error('lost') is-invalid @enderror"
                                                        value="{{ $klasemen->lost }}">
                                                    @error('lost')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="goals_for">GM:</label>
                                                    <input type="number" name="goals_for"
                                                        class="form-control @error('goals_for') is-invalid @enderror"
                                                        value="{{ $klasemen->goals_for }}">
                                                    @error('goals_for')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="goals_against">GK:</label>
                                                    <input type="number" name="goals_against"
                                                        class="form-control @error('goals_against') is-invalid @enderror"
                                                        value="{{ $klasemen->goals_against }}">
                                                    @error('goals_against')
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
