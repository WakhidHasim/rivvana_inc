@extends('layouts.admin.app', ['title' => 'Add Service'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Services</h4>
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
                        <a href="{{ route('services.index') }}">Services</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Add Service</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Service Name</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name"
                                aria-describedby="nameHelp" name="name" value="{{ old('name') }}" autofocus>
                            @error('name')
                                <small id="nameHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <img class="icon-preview img-fluid mb-3 col-sm-6">
                            <input type="file" class="form-control-file @error('icon') is-invalid @enderror"
                                id="icon" name="icon" onchange="iconPreview()">
                            @error('icon')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="description">Description</label>
                            @error('description')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                            <trix-editor input="description"></trix-editor>
                        </div>
                        <button type="submit" class="btn btn-primary ml-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('addon-script')
        <script>
            function iconPreview() {
                const icon = document.querySelector('#icon');
                const iconPreview = document.querySelector('.icon-preview');

                iconPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(icon.files[0]);

                oFReader.onload = function(oFREvent) {
                    iconPreview.src = oFREvent.target.result
                }
            }
        </script>
    @endpush
@endsection
