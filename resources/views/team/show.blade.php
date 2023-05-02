@extends('layouts.app')

@section('template_title')
    {{ $team->name ?? "{{ __('Show') Team" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Team</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teams.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Teama:</strong>
                            {{ $team->teamA }}
                        </div>
                        <div class="form-group">
                            <strong>Stadium:</strong>
                            {{ $team->stadium }}
                        </div>
                        <div class="form-group">
                            <strong>Time:</strong>
                            {{ $team->time }}
                        </div>
                        <div class="form-group">
                            <strong>Price1:</strong>
                            {{ $team->price1 }}
                        </div>
                        <div class="form-group">
                            <strong>Price2:</strong>
                            {{ $team->price2 }}
                        </div>
                        <div class="form-group">
                            <strong>Price3:</strong>
                            {{ $team->price3 }}
                        </div>
                        <div class="form-group">
                            <strong>Teamb:</strong>
                            {{ $team->teamB }}
                        </div>
                        <div class="form-group">
                            <strong>Imga:</strong>
                            {{ $team->imgA }}
                        </div>
                        <div class="form-group">
                            <strong>Imgb:</strong>
                            {{ $team->imgB }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
