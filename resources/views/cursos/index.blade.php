@extends('template.site')
@section('content')
<div class="row">
    @foreach($dados as $item)
    <div class="col-2 m-1">
        <a href="/centros/{{$item->id}}" class="card h-100">
            <div class="card-body d-flex">
                <h5 class="card-title text-center m-auto">{{$item->descricao}}</h5>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection
@section('css')
<style>
    body{
       background-color: #7c0d19;
    }
    a.card > div.card-body > h5.card-title {
        color: #7c0d19;
    }
    a.card{
        text-decoration: none;
    }
</style>
@endsection