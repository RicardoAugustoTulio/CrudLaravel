@extends('layouts.app-master')
@section('content')
<div class="bg-light p-4 rounded">
<h1>Dados do Usuario</h1>
<div class="lead">
</div>
<div class="container mt-4">
<div>
<b>Nome:</b> {{ $user->nome }}
</div>
<div>
<b>Email:</b> {{ $user->email }}
</div>

</div>
</div>
<div class="mt-4">
<a href="{{ route('users.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
