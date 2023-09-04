@extends('layouts.app-master')
 
@section('content')
 
   	<div class="bg-light p-5 rounded">
   
	   	@auth
        	<h1>Dashboard</h1>
        	<p class="lead">Bem-vindo, está é a sua dashboard.</p>
    	@endauth
 
    	@guest
    	<h1>Bem-vindo</h1>
    	<p class="lead">Por favor, faça o login para entrar na área restrita do sistema</p>
    	@endguest
	</div>
@endsection
