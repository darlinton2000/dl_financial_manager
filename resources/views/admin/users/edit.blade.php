@extends('adminlte::page')

@section('title', 'Editar Usuário')

@section('content_header')
    <h1>Editar Usuário</h1>
@endsection

@section('content')

    <!-- Mensagens da validacao -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h5><i class="icon fas fa-ban"></i>Ocorreu um errro.</h5>

                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        @method('put')

        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome Completo</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Nome Completo">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nova Senha</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Senha Novamente</label>
                <div class="col-sm-10">
                    <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Senha Novamente">
                </div>
            </div>
        </div>

         <!-- Start Buttons -->
        <div class="card-footer">
            <a href="{{ route('users.index')}}">
                <span class="btn btn-danger">Voltar</span>
            </a> 
            <button type="submit" value="Salvar" class="btn btn-success">Salvar</button>
        </div>
        <!-- End Buttons -->
    </form>

@endsection
