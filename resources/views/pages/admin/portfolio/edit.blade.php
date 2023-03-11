@extends('layouts.admin.app', ['title' => 'Edit Portfolio'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Portfolio</h4>
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
                        <a href="{{ route('portfolios.index') }}">Portfolios</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit Portfolio</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ route('portfolios.update', $portfolio->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Portfolio Name</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name"
                                aria-describedby="nameHelp" name="name" value="{{ old('name', $portfolio->name) }}">
                            @error('name')
                                <small id="nameHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Service Category</label>
                            <select name="service_id" class="form-control">
                                @foreach ($services as $service)
                                    @if (old('service_id', $portfolio->service_id) === $service->id)
                                        <option value="{{ $service->id }}" selected>{{ $service->name }}</option>
                                    @else
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('service_id')
                                <small id="nameHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="client">Portfolio Client</label>
                            <input type="text" class="form-control  @error('client') is-invalid @enderror" id="client"
                                aria-describedby="clientHelp" name="client"
                                value="{{ old('client', $portfolio->client) }}">
                            @error('client')
                                <small id="clientHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="description">Description</label>
                            @error('description')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            <input id="description" type="hidden" name="description"
                                value="{{ old('description', $portfolio->description) }}">
                            <trix-editor input="description"></trix-editor>
                        </div>
                        <div class="form-group">
                            <label for="slider1">Slider 1</label>
                            @if ($portfolio->slider1)
                                <img src="{{ asset('/storage/portfolios/' . $portfolio->slider1) }}"
                                    class="slider1-preview img-fluid mb-3 col-md-12 d-block">
                            @else
                                <img class="slider1-preview img-fluid mb-3 col-md-12">
                            @endif
                            <input type="file" class="form-control-file @error('slider1') is-invalid @enderror"
                                id="slider1" name="slider1" onchange="sliderOnePreview()">
                            @error('slider1')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slider2">Slider 2</label>
                            @if ($portfolio->slider2)
                                <img src="{{ asset('/storage/portfolios/' . $portfolio->slider2) }}"
                                    class="slider2-preview img-fluid mb-3 col-md-12 d-block">
                            @else
                                <img class="slider2-preview img-fluid mb-3 col-md-12">
                            @endif
                            <input type="file" class="form-control-file @error('slider2') is-invalid @enderror"
                                id="slider2" name="slider2" onchange="sliderTwoPreview()">
                            @error('slider2')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="slider3">Slider 3</label>
                            @if ($portfolio->slider3)
                                <img src="{{ asset('/storage/portfolios/' . $portfolio->slider3) }}"
                                    class="slider3-preview img-fluid mb-3 col-md-12 d-block">
                            @else
                                <img class="slider3-preview img-fluid mb-3 col-md-12">
                            @endif
                            <input type="file" class="form-control-file @error('slider3') is-invalid @enderror"
                                id="slider3" name="slider3" onchange="sliderThreePreview()">
                            @error('slider3')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary ml-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('addon-script')
        <script>
            function sliderOnePreview() {
                const slider1 = document.querySelector('#slider1');
                const sliderOnePreview = document.querySelector('.slider1-preview');

                sliderOnePreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(slider1.files[0]);

                oFReader.onload = function(oFREvent) {
                    sliderOnePreview.src = oFREvent.target.result
                }
            }

            function sliderTwoPreview() {
                const slider2 = document.querySelector('#slider2');
                const sliderTwoPreview = document.querySelector('.slider2-preview');

                sliderTwoPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(slider2.files[0]);

                oFReader.onload = function(oFREvent) {
                    sliderTwoPreview.src = oFREvent.target.result
                }
            }

            function sliderThreePreview() {
                const slider3 = document.querySelector('#slider3');
                const sliderThreePreview = document.querySelector('.slider3-preview');

                sliderThreePreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(slider3.files[0]);

                oFReader.onload = function(oFREvent) {
                    sliderThreePreview.src = oFREvent.target.result
                }
            }
        </script>
    @endpush
@endsection
