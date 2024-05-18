@extends('adminlte::page')

@section('title', 'Ver Usuário')

@section('content_header')
    <h1>Ver Usuário</h1>
@endsection

@section('content')

    <div class="card-body">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nome Completo</label>
            <div class="col-sm-10">
                {{ $data->name }}
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                {{ $data->email }}
            </div>
        </div>
    </div>
 
    <div class="card-footer">
        <a href="{{ route('users.index')}}">
            <span class="btn btn-danger">Voltar</span>
        </a> 
    </div>

@endsection
