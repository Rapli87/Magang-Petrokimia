
@extends('layouts.admin')
@section('content')
    {{-- @include('layouts.shared/page-title', ['page_title' => 'Data Sekolah', 'sub_title' => 'Tables']) --}}
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Informasi Umum</a>
                                    </li>
                                </ol>
                            
                                
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="header-title">Progres Pengisian Pendaftaran</h4>
                                        <p class="text-muted mb-0">Progress Pengisian Pendaftaran Peserta <code>pgfc</code> pj sekolah,pj tim,pj medis, pj supporter guru,pj supporter siswa,official,jurnalis,manajer,pelatih</p>
                                    </div>
                                      <div class="card-header">
                                    <h4 class="header-title">Pj Sekolah: </h4>
                                      </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>  
                                    </div> <!-- end card-body -->
                                    <div class="card-header">
                                        <h4 class="header-title">Pj Tim: </h4>
                                          </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>  
                                    </div> 
                                    <div class="card-header">
                                        <h4 class="header-title">Pelatih: </h4>
                                          </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>  
                                    </div>
                                    <div class="card-header">
                                        <h4 class="header-title">Official: </h4>
                                          </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>  
                                    </div> 
                                    <div class="card-header">
                                        <h4 class="header-title">Manajer: </h4>
                                          </div>
                                          
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>  
                                    </div> 
                                    <div class="card-header">
                                        <h4 class="header-title">Data Pemain: </h4>
                                          </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>  
                                    </div> 
                                    <div class="card-header">
                                        <h4 class="header-title">Pj Supporter guru: </h4>
                                          </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>  
                                    </div> 
                                    <div class="card-header">
                                        <h4 class="header-title">Pj Supporter siswa: </h4>
                                          </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>  
                                    </div> 
                                    <div class="card-header">
                                        <h4 class="header-title">Pj Medis: </h4>
                                          </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>  
                                    </div> 
                                    <div class="card-header">
                                        <h4 class="header-title">Pj Jurnalis: </h4>
                                          </div>
                                    <div class="card-body">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                        </div>  
                                    </div> 
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                        </div>
                </div>
                </div>
                 
                            <!-- end row -->
                        @endsection

@section('script')





</script>


    {{-- @vite(['resources/js/pages/responsive-table.init.js']) --}}
@endsection
