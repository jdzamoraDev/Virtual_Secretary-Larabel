@extends('layouts.app')

@section('template_title')
    {{ $market->name ?? "{{ __('Show') Market" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Market</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('markets.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Article:</strong>
                            {{ $market->article }}
                        </div>
                        <div class="form-group">
                            <strong>Size:</strong>
                            {{ $market->size }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $market->price }}
                        </div>
                        <div class="form-group">
                            <strong>Img:</strong>
                            {{ $market->img }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
