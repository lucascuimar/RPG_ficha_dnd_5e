@extends('layout')

@section('cabecalho')
Lista de Aventuras
@endsection

@section('texto_cabecalho')
Abaixo é possivel ver todas as suas aventuras arquivada nesse site.
@endsection

@section('lista')
<table class="table table-hover table-dark table-borderless table-responsive-md">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Aventura</th>
      <th scope="col">Aventura</th>
      <th scope="col">botões</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>
        <a href="#" class="btn btn-dark">ver</a>
        <a href="#" class="btn btn-dark">editar</a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>
        <a href="#" class="btn btn-dark">ver</a>
        <a href="#" class="btn btn-dark">editar</a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>
        <a href="#" class="btn btn-dark">ver</a>
        <a href="#" class="btn btn-dark">editar</a>
      </td>
    </tr>
  </tbody>
</table>
@endsection

@section('navegacao')
<a href="/" class="btn btn-dark mb-2">Menu</a>
@endsection
