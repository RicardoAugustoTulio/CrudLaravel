@extends('layouts.app-master')
 
@section('content')

<div class="bg-light p-4 rounded">
    <h1>Usuarios</h1>
    <div class="lead">
        Dados do Usuario
    </div>
    
    <div class="mt-2">
        @include('layouts.partials.messages')
    </div>

	<div class="container mt-4">
        <form method="POST" action="">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input value="{{ old('nome') }}" 
                    type="text" 
                    class="form-control" 
                    name="nome" 
                    placeholder="Nome" required>

                @if ($errors->has('nome'))
                    <span class="text-danger text-left">{{ $errors->first('nome') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input value="{{ old('email') }}"
                    type="text" 
                    class="form-control" 
                    name="email" 
                    placeholder="email" required>
                @if ($errors->has('email'))
                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">senha</label>
                <input value=""
                    type="password" 
                    class="form-control" 
                    name="senha" 
                    placeholder="senha" required>
                @if ($errors->has('senha'))
                    <span class="text-danger text-left">{{ $errors->first('senha') }}</span>
                @endif
            </div>
            
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
	

</div>


@endsection