@extends('layouts.admin')

@section('title', 'Jadwal Pertandingan | PGFC Admin')
@push('addon-style')
    <!-- Datatables css -->
    <link href="{{ url('backend/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('backend/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
@endpush

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Jadwal Pertandingan</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Jadwal Pertandingan </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                {{-- Konten --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <div class="card-body">
                                    <table id="fixed-columns-datatable"
                                        class="table table-striped nowrap row-border order-column w-100">
                                        <a href="{{ route('competitions.create') }}" class="btn btn-primary mb-2">
                                            <i class="ri-add-circle-line text-ligth"> Tambah Data </i>
                                        </a>
                                        {{-- <table id="fixed-columns-datatable"
                                            class="table table-striped nowrap row-border order-column w-100"> --}}
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Date</th>
                                                    <th>Match Number</th>
                                                    <th>Match</th>
                                                    {{-- <th>Time</th> --}}
                                                    <th>Location</th>
                                                    <th>Round</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($competitions as $competition)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $competition->date }}</td>
                                                        <td>{{ $competition->match_number }}</td>
                                                        <td>{{ $competition->match }}</td>
                                                        {{-- <td>{{ $competition->time }}</td> --}}
                                                        <td>{{ $competition->location }}</td>
                                                        <td>{{ $competition->round }}</td>
                                                        <td>
                                                            {{-- tambah show --}}
                                                            <a href="{{ route('competitions.show', $competition->id) }}"
                                                                class="btn btn-info">
                                                                <i class="ri-eye-line text-ligth"></i>
                                                            </a>
                                                            <a href="{{ route('competitions.edit', $competition->id) }}"
                                                                class="btn btn-warning">
                                                                <i class="ri-pencil-line text-ligth"></i>
                                                            </a>
                                                            <form action="{{ route('competitions.destroy', $competition->id) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="btn btn-danger">
                                                                    <i class="ri-delete-bin-line text-ligth"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                </div>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->
                {{-- End Konten --}}
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    @endsection
    @push('addon-script')
        <!-- Datatables js -->
        <script src="{{ url('backend/assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}">
        </script>
        <script src="{{ url('backend/assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js') }}">
        </script>
        <script src="{{ url('backend/assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ url('backend/assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>

        <!-- Datatable Demo App js -->
        <script src="{{ url('backend/assets/js/pages/datatable.init.js') }}"></script>
    @endpush
