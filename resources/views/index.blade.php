@extends('layout')

@section('cabecalho')
Menu
@endsection

@section('texto_cabecalho')
Isso é um simples site focado para o controle de mestre de RPG, mais informações em leia mais.
@endsection



@section('lista')
<a href="/lista_aventura" class="btn btn-dark mb-2">Lista de aventuras</a>
<a href="/lista_aventura" class="btn btn-dark mb-2">Leia mais</a>
@endsection
