@extends('template')

@section('css')
    <link rel="stylesheet" href="{{ url('public/css/configuration.css') }}">
@endsection

@section('javascripts')
    <script src="{{ url('public/js/configuration.js') }}"></script>
@endsection

@section('content')
    <div class="container mt-5 pt-5">
        <h3 class="text-center">{{ trans('messages.template.configuration') }}</h3>
        @if ($errors->any())
            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="row mt-5 mb-5">
            <div class="col-sm-12">
                <form action="{{ route('configuration') }}" method="post">
                    <div class="form-group">
                        <label for="video">Video URL</label>
                        <input type="text" class="form-control" value="{{ $configuration->video_url }}" pattern="https?://.+" required id="video" name="video" aria-describedby="videoHelp" placeholder="Entre la URL del Video">
                        <small id="videoHelp" class="form-text text-muted">Ex. https://vimeo.com/video/vdx34de3</small>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                    <button type="submit" class="btn btn-primary text-uppercase">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
