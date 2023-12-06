@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? "{{ __('Show') Evento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('eventos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $evento->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $evento->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $evento->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $evento->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $evento->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar:</strong>
                            {{ $evento->Lugar }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $evento->imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
