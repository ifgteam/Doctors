<ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist" style="margin-top:65px">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
      aria-controls="pills-home" aria-selected="true">Disponibilizar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
      aria-controls="pills-profile" aria-selected="false">Meus horários</a>
  </li>
</ul>
<br>
<div class="tab-content pt-2 pl-1" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><!-- Card -->

  <div class="container-fluid">
<div class="col-md-4 card" style="margin-left:34%">
  <!-- Card content -->
  <div class="card-body" >

    <!-- Title -->
    <h3 class="card-title" "><a>Disponibilize sua Agenda</a></h3>
    <br>
    <!-- Text -->
    <form method="POST" action="<?= base_url()?>Doctors/cadastrarDisp">
        <label>Data inicial</label>
      <input type="date" id="data_inicio" name="data_inicio" class="form-control">
        <label>Data final</label>
      <input type="date" id="data_fim" name="data_fim" class="form-control">
        <label>Inicio expediente</label>
      <input type="time" id="inicio" name="inicio"  class="form-control">
        <label>Inicio almoço</label>
      <input type="time" id="inicio_almoco" name="inicio_almoco" class="form-control">
        <label>Fim almoço</label>
      <input type="time" id="fim_almoco" name="fim_almoco" class="form-control">
        <label>Fim expediente</label>
      <input type="time" id="fim" name="fim"  class="form-control">
      <button class="btn btn-green" style="margin-left:35%">Finalizar</button>
    </form>  

  </div>

</div>
<!-- Card -->
</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  
  
  </div>
