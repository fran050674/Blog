@extends('layouts.app')

@section('content')
    <div class="contanier">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            Ver etiqueta
                    </div>
                    <div class="panel-body">
                        <p><strong>Nombre: </strong>{{ $tag->name }}</p>
                        <p><strong>Slug: </strong>{{ $tag->slug }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection