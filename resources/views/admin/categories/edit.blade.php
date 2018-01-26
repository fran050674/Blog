@extends('layouts.app')

@section('content')
    <div class="contanier">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Editar categoría
                    </div>
                    <div class="panel-body">
                        {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
                            @include('admin.categories.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection