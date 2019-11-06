@extends('layouts.option-menu')
@section('title','Mostrar Roles')

@section('content')
    <p>Los roles de este WP son: </p>
    <ul>
    @foreach($roles as $role)
        <li>
            {!! $role['name'] !!}
			<hr/>
        </li>
    @endforeach
    </ul>
@endsection

@section('submit')
Disfruta de los roles de WP
@endsection