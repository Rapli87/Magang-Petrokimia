<!-- resources/views/pages/admin/result_singles/index.blade.php -->

@extends('layouts.admin')

@section('title', 'Hasil Pertandingan Single | PGFC Admin')
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hasil Pertandingan Single</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Hasil Pertandingan Single</h4>
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
                                        <a href="{{ route('result-singles.create') }}" class="btn btn-primary mb-2">
                                            <i class="ri-add-circle-line text-ligth"> Tambah Data </i>
                                        </a>

                                        {{-- Urutan Babak --}}
                                        @php
                                            $roundOrder = ['Group A', 'Group B', 'Group C', 'Group D', 'Group E', 'Group F', 'Group G', 'Group H', '16 Besar', '8 Besar', 'Semi Final', 'Perebutan Juara 3 & 4', 'Perebutan Juara 1 & 2'];
                                        @endphp

                                        {{-- Menyesuaikan Urutan Babak --}}
                                        @foreach ($groupedResultSingles as $round => $results)
                                            @if ($results->isNotEmpty())
                                                <h2>Babak {{ $round }}</h2>
                                                <table id="fixed-columns-datatable"
                                                    class="table table-striped nowrap row-border order-column w-100">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>#</th>
                                                            <th>Tim 1</th>
                                                            <th>Skor 1</th>
                                                            <th>Tim 2</th>
                                                            <th>Skor 2</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Tambahkan pernyataan debugging ini -->
                                                        {{-- {{ dd($groupedResultSingles) }} --}}
                                                        @foreach ($results as $index => $resultSingle)
                                                            <tr class="text-center">
                                                                <td>{{ $index + 1 }}</td>
                                                                <td>{{ $resultSingle->team1_name }}</td>
                                                                <td>{{ $resultSingle->team1_score }}</td>
                                                                <td>{{ $resultSingle->team2_name }}</td>
                                                                <td>{{ $resultSingle->team2_score }}</td>
                                                                <td>
                                                                    <a href="{{ route('result-singles.show', $resultSingle->id) }}"
                                                                        class="btn btn-info">
                                                                        <i class="ri-eye-line text-ligth"></i>
                                                                    </a>
                                                                    <a href="{{ route('result-singles.edit', $resultSingle->id) }}"
                                                                        class="btn btn-warning">
                                                                        <i class="ri-pencil-line text-ligth"></i>
                                                                    </a>
                                                                    <form
                                                                        action="{{ route('result-singles.destroy', $resultSingle->id) }}"
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
                                            @endif
                                        @endforeach
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
