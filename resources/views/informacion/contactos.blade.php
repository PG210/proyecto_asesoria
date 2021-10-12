@extends('welcome')
@section('content')

<form action="{{route('regcontacto')}}" method="POST">
@csrf
<div class="container">
<div class="mb-3  col-auto">
        <label for="exampleFormControlInput1" class="form-label">Nombre o Razon Social</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="nombre">
</div>
<div class="mb-3 col-auto">
        <label for="exampleFormControlInput1" class="form-label">Correo</label>
        <input type="email" class="form-control" id="correo" name="correo" placeholder="nonmbre@ejemplo.com">
</div>
<div class="mb-3 col-auto">
        <label for="exampleFormControlInput1" class="form-label">Asunto</label>
        <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Quejas o reclamos">
</div>
        <div class="mb-3 col-auto">
        <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
        <textarea class="form-control" id="mesaje" name="mensaje" rows="3"></textarea>
    </div>
       <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-primary me-md-2" type="submit">Enviar</button>
        </div>
    </div>
</form>

@stop