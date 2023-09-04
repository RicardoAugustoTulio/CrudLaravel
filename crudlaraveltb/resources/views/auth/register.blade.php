@extends('layouts.auth-master')
 
@section('content')
<center>
	<form method="post" action="{{ route('register.perform') }}">
 
    	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
    	<img class="mb-4" src="{!! url('assets/images/ifpr_vertical.svg') !!}" alt="" width="202" height="187">
       
    	<h1 class="h3 mb-3 fw-normal">Cadastro de usuário</h1>
 
          	<div class="form-group form-floating mb-3 w-25 mx-auto">
        	<input type="text" class="form-control" name="nome" value="{{ old('nome') }}" placeholder="Nome" required="required" autofocus>
        	<label for="floatingNome">Nome</label>
        	@if ($errors->has('nome'))
            	<span class="text-danger text-left">{{ $errors->first('nome') }}</span>
        	@endif
    	</div>
 
    	<div class="form-group form-floating mb-3 w-25 mx-auto">
        	<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="email@exemplo.com" required="required">
        	<label for="floatingEmail">E-mail</label>
        	@if ($errors->has('email'))
            	<span class="text-danger text-left">{{ $errors->first('email') }}</span>
        	@endif
    	</div>
       
    	<div class="form-group form-floating mb-3 w-25 mx-auto">
        	<input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
        	<label for="floatingPassword">Senha</label>
        	@if ($errors->has('password'))
            	<span class="text-danger text-left">{{ $errors->first('password') }}</span>
        	@endif
    	</div>
 
    	<div class="form-group form-floating mb-3 w-25 mx-auto">
        	<input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
        	<label for="floatingConfirmPassword">Confirme a senha</label>
        	@if ($errors->has('password_confirmation'))
            	<span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
        	@endif
    	</div>
 
    	<div class="form-group form-floating mb-3 mx-auto">
        	<button class="btn btn-lg btn-primary w-25 mx-auto" type="submit">Registrar</button>
        	<br/><br/>
        	<a href="{{ route('home.index') }}" class="btn btn-lg btn-secondary w-25 mx-auto">Página Inicial</a>
          	</div>
       
    	@include('auth.partials.copy')
	</form>
</center>
@endsection
