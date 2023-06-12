<h1> {{ $modo }} fondos </h1>

<div class="form-group">
<label for="NombreProyecto">Nombre del proyecto: </label>
<input class="form-control" type="text" name="NombreProyecto" id="NombreProyecto" value="{{ isset($fondos->nombreProyecto)?$fondos->nombreProyecto:''}}"> 
</div>

<div class="form-group">
<label for="NombreProyecto">Fuente de Fondos: </label>
<input class="form-control" type="text" name="FuenteFondos" id="FuenteFondos" value="{{ isset ($fondos->fuenteFondos)?$fondos->fuenteFondos:''}}">
</div>

<div class="form-group">
<label for="NombreProyecto">Monto planificado: </label>
<input class="form-control" type="number" name="MontoPlanificado" id="MontoPlanificado" value="{{ isset($fondos->montoPlanificado)?$fondos->montoPlanificado:''}}">
</div>

<div class="form-group">
<label for="NombreProyecto">Monto patrocinado: </label>
<input class="form-control" type="number" name="MontoPatrocinado" id="MontoPatrocinado" value="{{ isset($fondos->montoPatrocinado)?$fondos->montoPatrocinado:''}}">
</div>

<div class="form-group">
<label for="NombreProyecto">Monto de fondo propios: </label>
<input class="form-control" type="number" name="MontoFondosPropios" id="MontoFondosPropios" value="{{ isset($fondos->montoFondosPropios)?$fondos->montoPatrocinado:''}}"> <br><br>
</div>

<input class="btn btn-success" value="{{ $modo }} datos"  type="submit" >

<a class="btn btn-primary" href="{{ url('fondos/') }}">Regresar</a>
