$user = User::findOrFail($id);@extends('layouts.app-master')

@section('content')
	<div class="bg-light p-4 rounded">
    	<h1>Alterar Usuario</h1>
    	<div class="lead">
           
    	</div>
       
    	<div class="container mt-4">
        	<form method="post" action="{{ route('users.update', $user->id) }}">
            	@method('patch')
            	@csrf
            	<div class="mb-3">
                	<label for="nome" class="form-label">Nome</label>
                	<input value="{{ $user->nome }}"
                    	type="text"
                    	class="form-control"
                    	name="nome"
                    	placeholder="Nome" required>
 
                	@if ($errors->has('nome'))
                    	<span class="text-danger text-left">{{ $errors->first('name') }}</span>
                	@endif
            	</div>
            	<div class="mb-3">
                	<label for="email" class="form-label">email</label>
                	<input value="{{ $user->email }}"
                    	type="text"
                    	class="form-control"
                    	name="email"
                    	placeholder="email" required>
                	@if ($errors->has('email'))
                    	<span class="text-danger text-left">{{ $errors->first('email') }}</span>
                	@endif
            	</div>
            	
            	
               
 
            	<button type="submit" class="btn btn-success">Salvar</button>
            	<a href="{{ route('users.index') }}" class="btn btn-danger">Cancelar</a>
        	</form>
    	</div>
 
	</div>
@endsection


