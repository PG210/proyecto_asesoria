@extends ('welcome')
@section('content')
<div class="container-fluid">
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card h-100" style="background-color:rgba(82, 131, 136, 0.5);">
      <img src="{{url('/img/logo.png')}}" class="card-img-top img-fluid h-100" alt="..." style="width:100px; higth: 100px;"> 
      <div class="card-body">
        <h5 class="card-title">Coca Cola</h5>
        <p class="card-text">
        El servicio de asesorias financieras ha aportado mucha claridad y 
        objetividad para poder tomar una decisión respecto a 
         proyectos de inversion empresarial. Así que
         hemos podido tomar las decisiones más allá de la parte emocional y 
         tener una vision mas clara. 
         Recomiendo a esta empresa asesora porque son profesionales y expertos en la economia actual 
         ademas de mejorar los ingresos en nuestra empresa.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100" style=" background-color:rgba(82, 131, 136, 0.5);">
      <img src="{{url('/img/per.jpg')}}" class="card-img-circle img-fluid " alt="..." style="width:100px; higth: 100px;">
      <div class="card-body">
        <h5 class="card-title">Ing. Luis Robles</h5>
        <p class="card-text">
        El dinero que he pagado por los servicios de asesoria financiera han 
        sido una de las mejores inversiones que he hecho en mi vida. 
        Una vez has hablado con el asesor tienes muy claro qué hay que
        cambiar para que el dinero funcionen. Estoy satisfecho de tener una gran sensación 
        de control del mis gastos y aumentar mi patrimonio.

        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100" style=" background-color:rgba(82, 131, 136, 0.5);">
      <img src="{{url('/img/ar.jpg')}}" class="card-img-top h-100" alt="..." style="width:150px; higth: 150px;">
      <div class="card-body">
        <h5 class="card-title">Cementos Argos</h5>
        <p class="card-text">
         La empresa de cementos Argos recomienda a la empresa de asesores financieros SAS, donde tienen excelentes
         profesionales capacitados en el desarrollo e implementacion de soluciones financieras, mejorando las 
         ganancias de la empresa ademas de ayudarnos abrir una nueva sucursal en Argentina realizando 
         un estudio factible de mercados.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100" style=" background-color:rgba(82, 131, 136, 0.5);">
      <img src="{{url('/img/muj.jpg')}}" class="card-img-top" alt="..." style="width:150px; higth: 150px;">
      <div class="card-body">
        <h5 class="card-title">Doc. Yanira Ruiz</h5>
        <p class="card-text">
        hace mas de dos años que trabajo con la empresa de asesores financieros y destaco su profesionalidad
        en los servicios ofrecidos, su eficiencia y comunicacion directa que tiene con cada cliente, transmitiendo cofianza 
        y afecto.

        </p>
      </div>
    </div>
  </div>
</div>
</div>
@stop