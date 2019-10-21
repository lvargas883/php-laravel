@extends('layout')

@section('title',"$s_title")

@section('content')
	<h1>Diarios</h1>
	<h3>
		<ul>
			@empty( $a_param )

				<li> No hay registros </li>

		    @else

	    	@foreach ( $a_param as $p )

	    		<li> {{ $p['name'] }} </li>
	    	
	    	@endforeach
			
			@endempty
		</ul>	
	</h3>
@endsection
