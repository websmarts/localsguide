@extends('layouts.master')

@section('content')
	<div class="welcome"> 
		
		<h1>Mytest (blade) view </h1>
        <h3> My name is {{ $name }}</h3>
        
        <ul>
        <li>{{link_to('/iuse','The iUse prototype') }}</li></ul>
	</div>
@stop
