@extends('layouts.app')

@section('content')
    <div class="contanier">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Crear etiqueta
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'tags.store']) !!}
                            @include('admin.tags.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection