@extends('layouts.app')

@section('content')
<div class="container">
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Registros
                <a href="{{ route('listar.create')}}" style="text-align: right;"class="btn btn-success">Agregar</a>

                </div>
                <div class="card-body">
                  <table class="table table-responsive col-lg-12">
                    <thead>
                      <tr>
                        <!-- <td>Id</td> -->
                        <td>Proveedor</td>
                        <td>Fecha de compra</td>
                        <td>Monto</td>
                        <td>Descripcion</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($compras as $user)
                        <tr>
                       <td>{{$user->id_proveedor}}</td>
                       <td>{{$user->fecha_compra}}</td>
                       <td>{{$user->monto}}</td>
                       <td>{{$user->descripcion}}</td>
                       <td><a href="{{ route('listar.edit', $user->id_compras)}}" class="btn btn-primary">Editar</a></td>
                       <td style="color:red;">
                       <form action="{{ route('listar.destroy', $user->id_compras)}}" method="post">                             @csrf
                             @method('DELETE')
                             <button class="btn btn-danger" type="submit">Borrar</button>
                         </form>
                       </td>
                       </tr>
                      @endforeach

                    </tbody>

                  </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
