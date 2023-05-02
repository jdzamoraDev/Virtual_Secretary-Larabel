@extends('layouts.app')

@section('template_title')
    {{ $store->name ?? "{{ __('Show') Store" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Store</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('stores.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Article:</strong>
                            {{ $store->article }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $store->price }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $store->image }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
