@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>
        Usuários
        <a href="{{ route('users.create') }}" class="btn btn-sm btn-success">Novo Usuário</a>
    </h1>
@endsection

@section('content')

    <!-- Mensagens de informacoes -->
    @if (session('warning'))
        <div class="alert alert-success">
            {{session('warning') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.show', ['user' => $user->id]) }}" class="btn btn-sm btn-primary">Ver</a>
                            <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-sm btn-warning">Editar</a>

                            @if ($loggedId !== intval($user->id))
                                <form class="d-inline" method="post" action="{{ route('users.destroy', ['user' => $user->id]) }}" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-sm btn-danger">Excluir</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{ $users->links('pagination::bootstrap-4') }}

@endsection
