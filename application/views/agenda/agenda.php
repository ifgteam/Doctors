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
  
  <form class=" border border-light p-5">

    <p style="margin-left:25%" class="h4 mb-4">Agende agora</p>

    <!-- Subject -->
    <select id = "especialidade" class="browser-default custom-select mb-4" name="especialidade">
        <option value="" selected>Escolha a especialidade</option>
        <?php foreach($especialidades as $especialidade){
          echo '<option value="'.$especialidade->idEsp.'">'.$especialidade->especialidade.'</option>';
        } ?>
    </select>
        <script>
         debugger;
            $(document).ready(function() {
        $('select[name="especialidade"]').on('change', function() {
            var idEsp = $(this).val();
            console.log(idEsp);
            if(idEsp) {
                $.ajax({
                    url:'/Doctors/Doctors/myformAjax/'+idEsp,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="especialista"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="especialista"]').append('<option value="'+ value.idMedico +'">'+ value.nome +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="especialista"]').empty();
            }
        });

      });
      
        </script>
    <select  name="especialista" id="especialista" class="browser-default custom-select mb-4">
      <option value="" selected>Escolha o especialista</option>
    </select>

    <!-- Send button -->
    <button class="btn btn-info btn-block" type="submit">Prosseguir</button>

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
        <option value="" >Guilherme</option>
        <option value="" >Daniel</option>
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

        </div>
    </div>
    <div class="card">
      <h5 class="card-header h5">Em atendimento</h5>
        <div class="card-body">
        <button type="button" class="btn btn-primary">
              Amilton <span class="badge badge-danger ml-2">30/01 12:30 à 13:00</span>
        </button>

        </div>
    </div>
    <div class="card">
      <h5 class="card-header h5">Atendimento finalizado</h5>
        <div class="card-body">
        <button type="button" class="btn btn-primary">
              Rodrigo <span class="badge badge-danger ml-2">30/01 12:30 à 13:00</span>
        </button>

        </div>
    </div>
    <div class="card">
      <h5 class="card-header h5">Todos agendamentos</h5>
        <div class="card-body">
        <button type="button" class="btn btn-primary">
              Fabio <span class="badge badge-danger ml-2">23/01 12:30 à 13:00</span>
        </button>
        <button type="button" class="btn btn-primary">
              Andre <span class="badge badge-danger ml-2">24/01 13:00 à 13:30</span>
        </button>
        <button type="button" class="btn btn-primary">
              Daniel <span class="badge badge-danger ml-2">26/01 12:30 à 13:00</span>
        </button>

        </div>
    </div>
    
  </div>
<div>

//calendario
<script>
        // Initialization
$('#my-element').datepicker([options])
// Access instance of plugin
$('#my-element').data('datepicker')
</script>