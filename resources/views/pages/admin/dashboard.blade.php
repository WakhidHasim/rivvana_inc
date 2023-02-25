@extends('layouts.admin.app', ['title' => 'Dashboard'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Dashboard</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="https://rawatin.rivvana.id/dashboard">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="">Dashboard</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="d-flex">
                                        <div class="avatar avatar-lg">
                                            <img src="https://rawatin.rivvana.id/assets/img/photo/foto-230203-27377fb640.png"
                                                alt="..." class="avatar-img rounded-circle"
                                                style="width:4rem !important; height:4rem !important;">
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="mt-3 mb-0 fw-bold">Admin</h4>
                                            <p class="mb-0 text-grey">Superadmin</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2" style="min-width: 110px !important; margin-top:16px">
                                    <a href="https://rawatin.rivvana.id/profil"
                                        class="btn btn-info btn-border btn-round btn-sm btn-block">Edit Profile</a>
                                </div>
                            </div>
                            <div class="card-footer mt-3 p-0 pt-2" style="line-height:20px;">
                                <small class="text-grey"><i class="flaticon-message mr-1"></i>085786242101</small><br>
                                <small class="text-grey"><i class="flaticon-mailbox mr-1"></i>admin@localhost</small><br>
                                <small class="text-grey"><i class="flaticon-home mr-1"></i>Yogyakarta</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-danger bubble-shadow-small">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers width-full">
                                        <p class="card-category">Pasien</p>
                                        <h4 class="card-title" id="count_pasien">8</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-success bubble-shadow-small">
                                        <i class="fas fa-user-md"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ml-3 ml-sm-0">
                                    <div class="numbers width-full">
                                        <p class="card-category">Fisioterapis</p>
                                        <h4 class="card-title" id="count_fisioterapis">3</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
