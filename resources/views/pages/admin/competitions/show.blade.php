@extends('layouts.admin')

@section('title', 'Detail Jadwal Pertandingan | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Detail Jadwal Pertandingan</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Detail Jadwal Pertandingan</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="mb-2"><strong>Date:</strong> {{ \Carbon\Carbon::parse($competition->date)->isoFormat('dddd, D MMMM YYYY') }}</p>
                                        <p class="mb-2"><strong>Match Number:</strong> {{ $competition->match_number }}</p>
                                        <p class="mb-2"><strong>Match:</strong> {{ $competition->match }}</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2"><strong>Time:</strong> {{ \Carbon\Carbon::parse($competition->time)->timezone('Asia/Jakarta')->format('H:i') }} WIB</p>
                                        <p class="mb-2"><strong>Location:</strong> {{ $competition->location }}</p>
                                        <p class="mb-2"><strong>Round:</strong> {{ $competition->round }}</p>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <a href="{{ route('competitions.index') }}" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
