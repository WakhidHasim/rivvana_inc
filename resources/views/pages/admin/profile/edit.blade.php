@extends('layouts.admin.app', ['title' => 'Edit Profile'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit Profile</h4>
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
                        <a href="{{ route('profiles.index') }}">My Profile</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit Profile</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('profiles.update', $profile->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name"
                                aria-describedby="nameHelp" name="name" value="{{ old('name', $profile->name) }}"
                                autofocus>
                            @error('name')
                                <small id="nameHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email"
                                aria-describedby="emailHelp" name="email" value="{{ old('email', $profile->email) }}"
                                autofocus>
                            @error('email')
                                <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="address" class="form-control  @error('address') is-invalid @enderror"
                                id="address" aria-describedby="addressHelp" name="address"
                                value="{{ old('address', $profile->address) }}" autofocus>
                            @error('address')
                                <small id="addressHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">phone</label>
                            <input type="phone" class="form-control  @error('phone') is-invalid @enderror" id="phone"
                                aria-describedby="phoneHelp" name="phone" value="{{ old('phone', $profile->phone) }}"
                                autofocus>
                            @error('phone')
                                <small id="phoneHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="description">Description</label>
                            @error('description')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <input id="description" type="hidden" name="description"
                                value="{{ old('description', $profile->description) }}">
                            <trix-editor input="description"></trix-editor>
                        </div>
                        <div class="form-group">
                            <label class="vision">Vision</label>
                            @error('vision')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <input id="vision" type="hidden" name="vision"
                                value="{{ old('vision', $profile->vision) }}">
                            <trix-editor input="vision"></trix-editor>
                        </div>
                        <div class="form-group">
                            <label class="mission">Mission</label>
                            @error('mission')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <input id="mission" type="hidden" name="mission"
                                value="{{ old('mission', $profile->mission) }}">
                            <trix-editor input="mission"></trix-editor>
                        </div>
                        <button type="submit" class="btn btn-primary ml-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
