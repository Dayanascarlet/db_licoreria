@extends('layouts.app')
@section('content')
<script src="{{asset('js/producto.js')}}"></script>
<center><h4 class="bg-dark-write">Formulario de Productos</h4></center>
<form action="{{route('producto.store')}}" method="POST" onsubmit="return validar()">
  @csrf
  
  <div class="container">
      <div class="row">
              <div class="col-md-6">
                <label for="">NOMBRE DEL PRODUCTO</label>
                <input type="text" class='form-control' id='pro_nombre'name="pro_nombre">
            </div>


             <div class="col-md-6">
                <label for="">PRECIO</label>
                <input type="text" class='form-control' id='pro_precio'name="pro_precio">
            </div>

                 <div class="col-md-6">
                  <label for="">PROVEEDOR</label>
                  <select name="prov_id" id="prov_id" class="form-control">
                     
                     @foreach($proveedor as $p)
                         <option  value="{{$p->prov_id}}" >{{$p->prov_nombre}}</option>
                     @endforeach
                  </select>
                
            </div>



                

                 <div class="col-md-12 mt-3">
            <center><button type="submit" class="btn btn-success">guardar</button></center>

                </div>
         
      </div>
</form> 
@endsection 