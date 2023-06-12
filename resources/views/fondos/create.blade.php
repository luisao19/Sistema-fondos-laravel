@extends('layouts.app')

@section('content')
<div class="container">


<form method="POST" action="{{ url('/fondos') }}" >
@csrf    

@include('fondos.form', ['modo'=>'Crear']);

</form>
</div>
@endsection