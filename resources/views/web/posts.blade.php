@extends('layouts.app')

@section('content')
<div class="contaniner-fluid">
    <div  class="col-md-6 col-md-offset-3">
        <h1>Lista de artículos</h1>
        <div class="principal">

                @foreach ($posts as $post)
                    <div  class="panel panel-default">
                        <div class="panel-heading">
                            {{ $post->name }}
                        </div>
                        <div class="panel-body">
                            @if ($post->file)
                                <img src="{{ $post->file }}" class="img-responsive">
                            @endif
                            <p>{{ $post->excerpt }}</p>
                            <a href="{{ route('post', $post->slug)}}" class="btn btn-info" class="pull-left">Lear más &raquo;</a>
                        </div>
                    </div>
                @endforeach
                {{ $posts->render() }}

        </div>
    </div>
</div>
@endsection
