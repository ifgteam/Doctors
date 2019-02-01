<div class="col-md-12">
<ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist" style="margin-top:90px">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
      aria-controls="pills-home" aria-selected="true">Novo agendamento</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
      aria-controls="pills-profile" aria-selected="false">Sala de espera</a>
  </li>
</ul>
</div>
<div class="tab-content pt-2 pl-1" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <!-- Card -->
<div class="card col-md-4 " style="margin-left:35%">
<!-- Card content -->
<div class="card-body">
  <!-- Text -->
  <p class="card-text">
  
  <form class="text-center border border-light p-5">

    <p class="h4 mb-4">Agende agora</p>

    <!-- Subject -->
    <select id="especialista" class="browser-default custom-select mb-4">
        <option value="" selected>Escolha o especialista</option>
        <?php foreach ($especialistas as $especialista) {
           echo '<option value="'.$especialista->idMedico.'">'.$especialista->nome.'</option>';
        } ?>
    </select>
    <select class="browser-default custom-select mb-4">
        <option value="" selected>Data</option>
        <option value="1">Daniel</option>
        <option value="2">Ana</option>
        <option value="3">Guilherme</option>
        <option value="4">Ivaldo</option>
    </select>
    <select class="browser-default custom-select mb-4">
        <option value="" selected>Horarios disponiveis</option>
        <option value="1">Daniel</option>
        <option value="2">Ana</option>
        <option value="3">Guilherme</option>
        <option value="4">Ivaldo</option>
    </select>
    <select class="browser-default custom-select mb-4">
        <option value="" selected>Selecione o paciente</option>
        <option value="1">Daniel</option>
        <option value="2">Ana</option>
        <option value="3">Guilherme</option>
        <option value="4">Ivaldo</option>
    </select>


    <!-- Message -->
    <div class="form-group">
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Observação"></textarea>
    </div>

    <!-- Copy -->
    <div class="custom-control custom-checkbox mb-4">
        <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
        <label class="custom-control-label" for="defaultContactFormCopy">Agendamento recorrente</label>
    </div>

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit">Agendar</button>

</form>
  </p>
  <!-- Button -->

</div>

</div>
<!-- Card -->
  
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <select class="browser-default custom-select mb-4">
        <option value="" selected>Selecione o especialista</option>
    </select>
    <div class="card">
      <h5 class="card-header h5">Paciêntes a chegar</h5>
        <div class="card-body">
        <button type="button" class="btn btn-primary">
              Guilherme Santana <span class="badge badge-danger ml-2">12:30 à 13:00</span>
        </button>
        <button type="button" class="btn btn-primary">
              Ana Lucia <span class="badge badge-danger ml-2">13:00 à 13:30</span>
        </button>
        <button type="button" class="btn btn-primary">
              Guilherme Santana <span class="badge badge-danger ml-2">12:30 à 13:00</span>
        </button>

        </div>
    </div>
    <div class="card">
      <h5 class="card-header h5">Em atendimento</h5>
        <div class="card-body">
        <button type="button" class="btn btn-primary">
              Guilherme Santana <span class="badge badge-danger ml-2">30/01 12:30 à 13:00</span>
        </button>
        <button type="button" class="btn btn-primary">
              Ana Lucia <span class="badge badge-danger ml-2">13:00 à 13:30</span>
        </button>
        <button type="button" class="btn btn-primary">
              Guilherme Santana <span class="badge badge-danger ml-2">12:30 à 13:00</span>
        </button>

        </div>
    </div>
    <div class="card">
      <h5 class="card-header h5">Atendimento finalizado</h5>
        <div class="card-body">
        <button type="button" class="btn btn-primary">
              Guilherme Santana <span class="badge badge-danger ml-2">30/01 12:30 à 13:00</span>
        </button>

        </div>
    </div>
    <div class="card">
      <h5 class="card-header h5">Todos agendamentos</h5>
        <div class="card-body">
        <button type="button" class="btn btn-primary">
              Guilherme Santana <span class="badge badge-danger ml-2">30/01 12:30 à 13:00</span>
        </button>
        <button type="button" class="btn btn-primary">
              Ana Lucia <span class="badge badge-danger ml-2">13:00 à 13:30</span>
        </button>
        <button type="button" class="btn btn-primary">
              Guilherme Santana <span class="badge badge-danger ml-2">12:30 à 13:00</span>
        </button>

        </div>
    </div>
    
  </div>
<div>