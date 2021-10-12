@extends('welcome')
@section('content')

<!--Carroucel-->
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-100" src="{{url('img/a1.jpg')}}" alt="Foto1">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-100" src="{{url('img/a2.jpg')}}" alt="Foto2">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!--end -->

<br>
<h3 class="text-center">SERVICIOS</h3>
<div class="container-fluid text-center">
    <p>La empresa Asesoria Financiera S.A.S, a lo largo de los años se ha desempeñado y posicionado como 
        una de las mejores entidades en el sur del pais, obteniendo los mejores resultados con profesionales expertos
        en el mercado actual y financiero, teniendo siempre presente el bienestar de nuestros clientes.
    </p>

</div>

<div class="d-flex justify-content-center">
<div class="row">
  <div class="col-sm-6">
    <!--tarjeta-->
    <div class="card h-100" style="width: 18rem; background-color:rgba(82, 131, 136, 0.5);">
    <img src="{{url('img/img3.jpeg')}}" class="card-img-top h-100" alt="...">

    <div class="card-body">
        <h5 class="card-title">PERSONAS</h5>
        <p class="card-text justify-text">Nuestro programa de asesoria personalizada, ayuda a más de 5.000 personas en Colombia, México, Venezuela, Ecuador, Salvador, Uruguay y Nicaragua a tomar mejores decisiones financieras.</p>       
    </div>
    </div>
   <!--final-->
  </div>
  <div class="col-sm-6">
        <div class="card h-100" style="width: 18rem; background-color:rgba(82, 131, 136, 0.5);" >
        <img src="{{url('img/img4.jpg')}}" class="card-img-top h-100" alt="...">
        <div class="card-body">
            <h5 class="card-title">EMPRESAS</h5>
            <p class="card-text">Se brinda asesorias financieras con los mas altos estandares de calidad y profesionales capacitados en el area de finanzas, aumentando el patrimonio y mejorando las inversiones de su empresa.</p>
        </div>
        </div>
  </div>
</div>
</div>
<br>
<div class="mx-auto" style="width: 150px;">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1" style="border: 3px solid #d0d0d0;">
                Solicitar Asesoria
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle1">Solicitud de Citas
                            <br>
                            Precio por hora: $110.000
                        </h5>
                        <br>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--formulario-->
                        <form action="{{route('regcitas')}}" method="POST">
                        @csrf 
                        <div class="mb-3">
                        <label class="my-1 mr-2" for="seleccion">Tipo de Persona</label>
                        <select class="custom-select my-1 mr-sm-2" id="seleccion" name="seleccion">
                            <option selected>Elegir...</option>
                            <option value="Natural">Natural</option>
                            <option value="Juridica">Juridica</option>
                            <option value="Otra">Otra</option>
                        </select>
                        </div>
                        <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre o Razón social</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder=" ">
                        </div>
                        <div class="mb-3">
                                <label for="nit" class="form-label">Nit o Cedula</label>
                                <input type="number" class="form-control" id="nit" name="nit" placeholder="1087904567-98">
                        </div>
                        <div class="mb-3">
                                <label for="dir" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="dir" name="dir" placeholder="Cra 6 No 76-25 Americas - Pasto">
                        </div>
                        <div class="mb-3">
                                <label for="correo" class="form-label">Correo Electronico</label>
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="abcsoluciones@gmail.com">
                        </div>
                        <div class="mb-3">
                                <label for="horas" class="form-label">Horas de asesoria</label>
                                <input type="number" class="form-control" id="horas" name="horas" placeholder="0">
                        </div>
                        <div class="mb-3">
                        <label for="observacion" class="form-label">Observaciones</label> 
                        <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                        <!--end-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                    </div>
                </div>
                </div>
        <!-- end final-->
</div>
@stop