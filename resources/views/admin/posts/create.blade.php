@extends('layouts.app')

@section('content')
    <div class="contanier">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Crear entrada
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'posts.store']) !!}
                            @include('admin.posts.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection