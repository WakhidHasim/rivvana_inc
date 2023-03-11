@extends('layouts.admin.app', ['title' => 'Portfolio'])

@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Portfolios</h4>
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
                        <a href="#">Portfolios</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Table Portfolios</h4>
                                <a href="{{ route('portfolios.create') }}" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Add Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="add-row" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Service Name</th>
                                            <th>Client</th>
                                            <th>Description</th>
                                            <th>Slider 1</th>
                                            <th>Slider 2</th>
                                            <th>Slider 3</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($portfolios as $portfolio)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $portfolio->name }}</td>
                                                <td>{{ $portfolio->service->name }}</td>
                                                <td>{{ $portfolio->client }}</td>
                                                <td>{!! $portfolio->description !!}</td>
                                                <td>
                                                    <img src="{{ asset('/storage/portfolios/' . $portfolio->slider1) }}"
                                                        class="rounded" style="width: 150px">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('/storage/portfolios/' . $portfolio->slider2) }}"
                                                        class="rounded" style="width: 150px">
                                                </td>
                                                <td>
                                                    <img src="{{ asset('/storage/portfolios/' . $portfolio->slider3) }}"
                                                        class="rounded" style="width: 150px">
                                                </td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <a href="{{ route('portfolios.edit', $portfolio->id) }}"
                                                            class="btn btn-link btn-primary btn-lg">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <form method="POST"
                                                            action="{{ route('portfolios.destroy', $portfolio->id) }}">
                                                            @csrf
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit"
                                                                class="btn btn-link btn-danger show_confirm"
                                                                data-toggle="tooltip" title='Delete'>
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
