@extends('layouts.admin')
@section('content')
   <!-- start page title -->

   
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Data Jadwal</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Detail Data Jadwal</a></li>
                            </ol>
                        </div>
                        {{-- <h4 class="page-title">Welcome {{ Auth::user()->name }}!</h4> --}}
                        <h4 class="page-title">Welcome Admin!</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- <a type="button" class="btn btn-success"  href="{{route('CetakDataSekolah')}}"  target="_blank">Print Pdf</a>
                                    <a type="button" class="btn btn-warning" href="{{route('DataSekolahExport')}}" >Unduh excel</a> --}}
        
        
                                        <a type="button" href="{{route('Jadwal.create')}}" class="btn btn-primary" style="margin-bottom: 10px;">
                                            <i class="ri-add-circle-line text-ligth"  > Add Data </i>
                                        </a>
        
                                        <br>
                                        {{-- <a type="button" class="btn btn-success"  href="{{route('Data-Sekolah.CetakDataSekolah')}}"  target="_blank">Print Pdf</a>
                                        <a type="button" class="btn btn-warning" href="" >Unduh excel</a> --}}
        
                                        <a type="button" style="margin-bottom: 5px;" class="btn btn-success btn-sm tooltips" href="" target="_blank">
                                            <i class="ri-file-pdf-fill me-1"></i>
                                        </a>
                                        <a type="button" style="margin-bottom: 5px;" class="btn btn-warning btn-sm tooltips" href="">
                                            <i class="ri-file-excel-fill me-1"></i> 
                                        </a>
            
                                </div>
                                
                               
                            </div>
                            <br>
                            
                            <div class="responsive-table-plugin">
                            
                                <div class="table-rep-plugin">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-striped dt-responsive nowrap w-100"">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th data-priority="1">tanggal</th>
                                                    <th data-priority="3">mulai</th>
                                                    <th data-priority="1">Selesai</th>
                                                   <th data-priority="1">status</th>
                                                   <th data-priority="1">Action</th>
                                                  
        
        
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($detailjadwal->sortBy('id') as $Data)
                                                    <tr>
        
                                                        <th><span class="co-name">{{ $Data->id }}</span></th>
                                                        <td>{{ $Data->tanggal }}</td>
                                                        <td>{{ $Data->mulai }}</td>
                                                        <td>{{ $Data->selesai }}</td>
                                                        <td>{{ $Data->status }}</td>
                                                        <td>{{ $Data->id_grub }}</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-outline-success dropdown-toggle" type="button"
                                                                    id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                    Action
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                    {{-- <a class="dropdown-item" href="{{ route('Jadwal.edit', ['id' => $Data->id]) }}">Edit</a> --}}
                                                                    <form action="{{ route('Jadwal.edit', $Data->id) }}" method="GET" class="d-inline">
                                                                        @csrf
                                                                        @method('POST')
                                                                        <button type="submit" class="btn btn-danger">
                                                                            <i class="bi bi-pencil text-light"></i>
                                                                        </button>
                                                                    </form>
                                                                    
                                                                    <form action="{{ route('Jadwal.destroy', $Data->id) }}"
                                                                        method="POST" class="d-inline">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button class="btn btn-warning"
                                                                            onclick="return confirm('Yakin ingin menghapus data?')">
                                                                            <i class="ri-delete-bin-line text-light"></i>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                        </td>
                                                       
                                                    </tr>
                                                @endforeach
        
                                            </tbody>
                                        </table>
                                        
                                    </div> <!-- end .table-responsive -->
        
                                </div> <!-- end .table-rep-plugin-->
                            </div> <!-- end .responsive-table-plugin-->
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
         
@endsection

