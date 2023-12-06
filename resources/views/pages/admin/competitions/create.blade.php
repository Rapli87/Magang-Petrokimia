@extends('layouts.admin')

@section('title', 'Tambah Jadwal Pertandingan | PGFC Admin')

@section('content')
    <!-- Start Page Content here -->
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">PGFC</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Jadwal Pertandingan</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('competitions.create') }}">Tambah
                                            Jadwal</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tambah Jadwal Pertandingan</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                {{-- Konten --}}
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('competitions.store') }}" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="date" class="form-label">Date:</label>
                                        <input type="date" id="date" name="date"
                                            class="form-control @error('date') is-invalid @enderror" required>
                                        @error('date')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="match" class="form-label">Match:</label>
                                        <input type="text" id="match" name="match"
                                            class="form-control @error('match') is-invalid @enderror" required>
                                        @error('match')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="time" class="form-label">Time:</label>
                                        <input type="time" id="time" name="time"
                                            class="form-control @error('time') is-invalid @enderror" required>
                                        @error('time')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="location" class="form-label">Location:</label>
                                        <input type="text" id="location" name="location"
                                            class="form-control @error('location') is-invalid @enderror" required>
                                        @error('location')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="match_number" class="form-label">Match Number:</label>
                                        <select id="match_number" name="match_number"
                                            class="form-select @error('match_number') is-invalid @enderror" required>
                                            <option value="" disabled selected>Pilih Nomor Pertandingan</option>
                                            @for ($i = 1; $i <= 64; $i++)
                                                {{-- Menggunakan sprintf untuk memastikan format dua digit (01, 02, ..., 64) --}}
                                                <option value="{{ sprintf('%02d', $i) }}">{{ sprintf('%02d', $i) }}</option>
                                            @endfor
                                        </select>
                                        @error('match_number')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="round" class="form-label">Round:</label>
                                    <select id="round" name="round"
                                        class="form-select @error('round') is-invalid @enderror" required>
                                        <option value="" selected disabled>Pilih Round</option>
                                        <option value="Babak Penyisihan Grup">Babak Penyisihan Grup</option>
                                        <option value="Babak 16 Besar">Babak 16 Besar</option>
                                        <option value="Babak 8 Besar">Babak 8 Besar</option>
                                        <option value="Semi Final">Semi Final</option>
                                        <option value="Perebutan Juara 3 & 4">Perebutan Juara 3 & 4</option>
                                        <option value="Perebutan Juara 1 & 2">Perebutan Juara 1 & 2</option>
                                    </select>
                                    @error('round')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                        </form> <!-- Tutup formulir di sini -->

                    </div>
                    {{-- End Konten --}}
                </div> <!-- Tutup container-fluid di sini -->
            </div>
            <!-- content -->
        </div>
        <!-- End Page content -->
    @endsection
