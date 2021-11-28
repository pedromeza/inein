@extends('layouts.app')

@section('content')
<div class="container">
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  @if(session()->get('error'))
    <div class="alert alert-danger">
      {{ session()->get('error') }}
    </div><br />
  @endif
  @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Agregar
                </div>
                <div class="card-body">
                <form method="GET " action="{{ url('actualizar', $compras->id_compras ) }}">
                        @csrf
                        <!-- @method('update') -->
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label for="fecha_compra">Fecha:</label>
                            <input type="date" class="form-control" name="fecha_compra" value="{{$compras->fecha_compra}}"/>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="monto">monto :</label>
                            <input type="number" onkeypress="return valideKey(event);" value="{{$compras->monto}}" class="form-control" name="monto"/>
                        </div>
                        <div class="form-group col-lg-4">
                          <label for="id_proveedor">Proveedor:</label>
                            <select name="id_proveedor" class="form-control" id="id_proveedor">
                                <option value="">Seleccione una opcion</option>
                                @foreach($proveedor as $provedor)
                                <option value="{{$provedor->id}}" {{$provedor->id == $compras->id_proveedor? 'selected': ''}}>{{$provedor->empresa}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripcion :</label>
                        <textarea rows="2" columns="5" class="form-control" name="descripcion" >{{$compras->descripcion}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">actualizar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

function valideKey(evt){

    // code is the decimal ASCII representation of the pressed key.
    var code = (evt.which) ? evt.which : evt.keyCode;

    if(code==8) { // backspace.
      return true;
    } else if(code>=48 && code<=57) { // is a number.
      return true;
    } else{ // other keys.
      return false;
    }
}

</script>
@endsection
