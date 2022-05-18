@extends('layouts.app')
@section('content')

<h1>Comenzamos la Facturación</h1>
<a href="{{route('factura.create')}}" class="btn btn-primary"  >Nueva</a>
<div class="container">
	<table class="table">
		<tr>
			<th>#</th>
			<th>Factura</th>
			<th>Fecha</th>
			<th>Clientes</th>
			<th>...</th>
		</tr>
		@foreach($factura as $f)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$f->fac_no}}</td>
			<td>{{$f->fac_fecha}}</td>
			<td>{{$f->cli_id}}</td>
			<td>
				<a class="btn btn-info btn-sm" href="{{route('factura.edit',$f->fac_id)}}">Editar</a>
				<a href="{{route('factura.pdf',$f->fac_id)}}" class="btn btn-danger btn-sm">PDF</a>
			</td>
		</tr>
		@endforeach

	</table>
</div>

@endsection