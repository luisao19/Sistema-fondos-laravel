@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/fondos/'.$fondos->id ) }}" method="post" enctype="multipart/form-data">
@csrf

{{ method_field('PATCH') }}
    @include('fondos.form', ['modo'=>'Editar'])

</form>
</div>
@endsection