@extends('layouts.app')
@section('contents')
<h3>Hello {{ Auth::user()->name}} !!!</h3>
{{-- <h3>Hello {{ Auth::user()->email}}</h3>

<h3>Hello {{ Auth::user()->id}}</h3> --}}

{{-- <p>The .navbar-right class is used to right-align navigation bar buttons.</p> --}}

@endsection
