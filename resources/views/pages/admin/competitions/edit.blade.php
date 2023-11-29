@extends('layouts.admin')

@section('title', 'Edit Jadwal Pertandingan | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">PGFC</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Edit Jadwal Pertandingan</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Edit Jadwal Pertandingan</h4>
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

                {{-- <div class="card shadow"> --}}
                    <div class="card-body">
                        <form action="{{ route('competitions.update', $competition->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- Date -->
                                            <div class="mb-3">
                                                <label for="date" class="form-label">Date:</label>
                                                <input type="date" id="date" name="date" class="form-control"
                                                    value="{{ $competition->date }}" required>
                                                @error('date')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>                                         

                                            <!-- Match -->
                                            <div class="mb-3">
                                                <label for="match" class="form-label">Match:</label>
                                                <input type="text" id="match" name="match" class="form-control"
                                                    value="{{ $competition->match }}" required>
                                                @error('match')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <!-- Time -->
                                            <div class="mb-3">
                                                <label for="time" class="form-label">Time:</label>
                                                <input type="time" id="time" name="time" class="form-control"
                                                    value="{{ $competition->time }}" nullable>
                                                @error('time')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <!-- Location -->
                                            <div class="mb-3">
                                                <label for="location" class="form-label">Location:</label>
                                                <input type="text" id="location" name="location" class="form-control"
                                                    value="{{ $competition->location }}" required>
                                                @error('location')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            
                                            <!-- Match Number -->
                                            <div class="mb-3">
                                                <label for="match_number" class="form-label">Match Number:</label>
                                                <select id="match_number" name="match_number" class="form-select" required>
                                                    <option value="" disabled>Pilih Nomor Pertandingan</option>
                                                    @for ($i = 1; $i <= 64; $i++)
                                                        {{-- Menggunakan sprintf untuk memastikan format dua digit (01, 02, ..., 64) --}}
                                                        <option value="{{ sprintf('%02d', $i) }}" {{ $competition->match_number == sprintf('%02d', $i) ? 'selected' : '' }}>
                                                            {{ sprintf('%02d', $i) }}
                                                        </option>
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
                                            <!-- Round -->
                                            <div class="mb-3">
                                                <label for="round" class="form-label">Round:</label>
                                                <select id="round" name="round" class="form-select @error('round') is-invalid @enderror" required>
                                                    <option value="" selected disabled>Pilih Round</option>
                                                    <option value="Babak Penyisihan Group" {{ $competition->round == 'Babak Penyisihan Group' ? 'selected' : '' }}>
                                                        Babak Penyisihan Group
                                                    </option>
                                                    <option value="Babak 16 Besar" {{ $competition->round == 'Babak 16 Besar' ? 'selected' : '' }}>
                                                        Babak 16 Besar
                                                    </option>
                                                    <option value="Babak 8 Besar" {{ $competition->round == 'Babak 8 Besar' ? 'selected' : '' }}>
                                                        Babak 8 Besar
                                                    </option>
                                                    <option value="Semi Final" {{ $competition->round == 'Semi Final' ? 'selected' : '' }}>
                                                        Semi Final
                                                    </option>
                                                    <option value="Perebutan Juara 3 & 4" {{ $competition->round == 'Perebutan Juara 3 & 4' ? 'selected' : '' }}>
                                                        Perebutan Juara 3 & 4
                                                    </option>
                                                    <option value="Perebutan Juara 1 & 2" {{ $competition->round == 'Perebutan Juara 1 & 2' ? 'selected' : '' }}>
                                                        Perebutan Juara 1 & 2
                                                    </option>
                                                </select>
                                                @error('round')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>                                    

                                    <button type="submit" class="btn btn-primary">Update</button>

                                </div>
                        </form>
                    </div>
                {{-- </div> --}}
                {{-- End Konten --}}
            </div>
        </div>
    </div>
    <!-- End Page content -->
@endsection
