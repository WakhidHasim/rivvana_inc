@extends('layouts.admin.app', ['title' => 'My Profile'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">My Profile</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="{{ route('dashboard') }}">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('profiles.index') }}">My Profile</a>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-md">
                    <div class="card card-stats card-round">
                        @foreach ($profiles as $profile)
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
                                                <h4 class="mt-3 mb-0 fw-bold">{{ $profile->name }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2" style="min-width: 110px !important; margin-top:16px">
                                        <a href="{{ route('profiles.edit', $profile->id) }}"
                                            class="btn btn-info btn-border btn-round btn-sm btn-block">Edit
                                            Profile</a>
                                    </div>
                                </div>
                                <div class="card-footer mt-3 p-0 pt-2" style="line-height:20px;">
                                    <small class="text-grey"><i
                                            class="flaticon-message mr-1"></i>{{ $profile->phone }}</small><br>
                                    <small class="text-grey"><i
                                            class="flaticon-mailbox mr-1"></i>{{ $profile->email }}</small><br>
                                    <small class="text-grey"><i
                                            class="flaticon-home mr-1"></i>{{ $profile->address }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
