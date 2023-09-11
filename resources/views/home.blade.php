@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <div class="container mt-2">
                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    <div class="pull-left mb-2">
                                        <h2>Add Content</h2>
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-primary" href="{{ route('index.create') }}"> Back</a>
                                    </div>
                                    <div class="pull-left">
                                        <a class="btn btn-primary" href="{{ url('/dash') }}"> Go to dashboard</a>
                                    </div>
                                </div>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success mb-1 mt-1">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="{{ route('index.store') }}" enctype='multipart/form-data' method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Page name</strong>
                                            <input type="text" name="Pagename" class="form-control"
                                                placeholder="Page Name">
                                            @error('Pagename')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Heading 1</strong>
                                                <input type="text" name="heading1" class="form-control"
                                                    placeholder="Heading 1">
                                                @error('heading1')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Heading 2</strong>
                                                <input type="text" name="heading2" class="form-control"
                                                    placeholder="Heading 2">
                                                @error('heading2')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong> Content Description</strong>
                                                    <input type="text" name="description" class="form-control"
                                                        placeholder="Content Description">
                                                    @error('description')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                    <div class="container">
                                                        <div class="form-group mt-2">
                                                            <label for="">File</label>
                                                            <input type="File" name="image" id="image"
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted">Help text</small>
                                                        </div>
                                                        {{-- <button class="btn btn-primary">Upload</button> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary ml-3">Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
