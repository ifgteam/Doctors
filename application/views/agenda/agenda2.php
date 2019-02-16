<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>

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

<form id="regForm" method="POST" action="<?= base_url()?>Doctors/cadastrarAgenda">
  <h1>Novo agendamento</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Tipo de consulta
  <select id = "especialidade" class="browser-default custom-select mb-4" name="especialidade">
        <option value="" selected>Escolha a especialidade</option>
        <?php foreach($especialidades as $especialidade){
          echo '<option value="'.$especialidade->idEsp.'">'.$especialidade->especialidade.'</option>';
        } ?>
    </select>
    <select  name="especialista" id="especialista" class="browser-default custom-select mb-4">
      <option value="" selected>Escolha o especialista</option>
    </select>
  </div>
  <div class="tab" style="margin-left:35%;">Selecione a data:
  <select  name="date" id="date" class="browser-default custom-select mb-4">
      <option value="" selected>Escolha a hora</option>
</select>
  </div>
  <div class="tab">Hora:
  <select  name="hora" id="hora" class="browser-default custom-select mb-4">
      <option value="" selected>Escolha a hora</option>
</select>
  </div>
  <div class="tab">Escolha o paciente:
  <select id = "paciente" class="browser-default custom-select mb-4" name="paciente">
  <option value="" selected>Escolha o paciente</option>
    </select>
    <p><a href="#">Paciênte cadastrado?</a></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Voltar</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Próximo</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</div>

<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <select name="procEsp" id="procEsp" class="browser-default custom-select mb-4">
        <option value="" selected>Selecione o especialista</option>
   
    </select>
    <div class="card">
      <h5 class="card-header h5">Agendamentos</h5>
        <div class="card-body" name="card1" id="card1">
   

        </div>
    </div>
    <br>
    <div class="row">
    <div class="col">
    <div class="card">
      <h5 class="card-header h5">Aguardando atendimento</h5>
        <div class="card-body">
      
        </div>
    </div>
    </div>
    <div class="col">
    <div class="card">
      <h5 class="card-header h5">Em atendimento</h5>
        <div class="card-body">

        </div>
    </div>
    </div>
  </div>
  <br>
  <br>
    <div class="row">
    <div class="col">
    <div class="card">
      <h5 class="card-header h5">Atendidos</h5>
        <div class="card-body">

        </div>
    </div>
    </div>
  </div>
  <br>
    <div class="card">
      <h5 class="card-header h5">Pacientes a chegar</h5>
        <div class="card-body">


        </div>
    </div>
    
  </div>
<div>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Agendar";
  } else {
    document.getElementById("nextBtn").innerHTML = "Próximo";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:


    

  showTab(currentTab);
  

  
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
$(document).ready(function() {
        $('select[name="especialidade"]').on('change', function() {
            var idEsp = $(this).val();
            console.log(idEsp);
            if(idEsp) {
                $.ajax({
                    url:'/Doctors/Doctors/myformAjax/'+idEsp,
                    type: "GET",
                    dataType: "json",
                    success:function(response) {
                        
                        $.each(response,function(index,data){
             $('#especialista').append('<option value="'+data['idMedico']+'">'+data['nome']+'</option>');
          });
                        
                    }
                });
            }else{
                $('select[name="especialista"]').empty();
            }
        });

      $('select[name="especialista"]').on('change', function() {
            var idEspa = $(this).val();
            console.log(idEspa);
            if(idEspa) {
                $.ajax({
                    url:'/Doctors/Doctors/myformAjax2/'+idEspa,
                    type: "GET",
                    dataType: "json",
                    success:function(response) {
                        
                        $.each(response,function(index,data){
             $('#date').append('<option value="'+data['data']+'">'+data['data']+'</option>');
          });
                        
                    }
                });
            }else{
                $('select[name="date"]').empty();
            }
        });
        $('select[name="date"]').on('change', function() {
            var data2 = $(this).val();
            console.log(data2);
            if(data2) {
                $.ajax({
                    url:'/Doctors/Doctors/myformAjax3/'+data2,
                    type: "GET",
                    dataType: "json",
                    success:function(response) {
                        $.each(response,function(index,data){
                $('#hora').find('option').not(':first').remove();
              
                $('#hora').append('<option value="'+data['hora[1]']+'">'+data['hora[1]']+'</option>');

               if(data['hora[2]'] != null){
                $('#hora').append('<option value="'+data['hora[2]']+'">'+data['hora[2]']+'</option>');
             } 
             if(data['hora[3]'] != null){
                $('#hora').append('<option value="'+data['hora[3]']+'">'+data['hora[3]']+'</option>');
             }
              if(data['hora[4]'] != null){
                $('#hora').append('<option value="'+data['hora[4]']+'">'+data['hora[4]']+'</option>');
             }
              if(data['hora[5]'] != null){
                $('#hora').append('<option value="'+data['hora[5]']+'">'+data['hora[5]']+'</option>');
             }
              if(data['hora[6]'] != null){
                $('#hora').append('<option value="'+data['hora[6]']+'">'+data['hora[6]']+'</option>');
             }
              if(data['hora[7]'] != null){
                $('#hora').append('<option value="'+data['hora[7]']+'">'+data['hora[7]']+'</option>');
             }
              if(data['hora[8]'] != null){
                $('#hora').append('<option value="'+data['hora[8]']+'">'+data['hora[8]']+'</option>');
             } if(data['hora[9]'] != null){
                $('#hora').append('<option value="'+data['hora[9]']+'">'+data['hora[9]']+'</option>');
             } if(data['hora[10]'] != null){
                $('#hora').append('<option value="'+data['hora[10]']+'">'+data['hora[10]']+'</option>');
             }
              if(data['hora[11]'] != null){
                $('#hora').append('<option value="'+data['hora[11]']+'">'+data['hora[11]']+'</option>');
             } 
             if(data['hora[12]'] != null){
                $('#hora').append('<option value="'+data['hora[12]']+'">'+data['hora[12]']+'</option>');
             }
             
             if(data['hora[13]'] != null){
                $('#hora').append('<option value="'+data['hora[13]']+'">'+data['hora[13]']+'</option>');
             } if(data['hora[14]'] != null){
                $('#hora').append('<option value="'+data['hora[14]']+'">'+data['hora[14]']+'</option>');
             } if(data['hora[15]'] != null){
                $('#hora').append('<option value="'+data['hora[15]']+'">'+data['hora[15]']+'</option>');
             } if(data['hora[16]'] != null){
                $('#hora').append('<option value="'+data['hora[16]']+'">'+data['hora[16]']+'</option>');
             } if(data['hora[17]'] != null){
                $('#hora').append('<option value="'+data['hora[17]']+'">'+data['hora[17]']+'</option>');
             } if(data['hora[18]'] != null){
                $('#hora').append('<option value="'+data['hora[18]']+'">'+data['hora[18]']+'</option>');
             } if(data['hora[19]'] != null){
                $('#hora').append('<option value="'+data['hora[19]']+'">'+data['hora[19]']+'</option>');
             } if(data['hora[20]'] != null){
                $('#hora').append('<option value="'+data['hora[20]']+'">'+data['hora[20]']+'</option>');
             } if(data['hora[21]'] != null){
                $('#hora').append('<option value="'+data['hora[21]']+'">'+data['hora[21]']+'</option>');
             } if(data['hora[22]'] != null){
                $('#hora').append('<option value="'+data['hora[22]']+'">'+data['hora[22]']+'</option>');
             } if(data['hora[23]'] != null){
                $('#hora').append('<option value="'+data['hora[23]']+'">'+data['hora[23]']+'</option>');
             } if(data['hora[24]'] != null){
                $('#hora').append('<option value="'+data['hora[24]']+'">'+data['hora[24]']+'</option>');
             } if(data['hora[25]'] != null){
                $('#hora').append('<option value="'+data['hora[25]']+'">'+data['hora[25]']+'</option>');
             } if(data['hora[26]'] != null){
                $('#hora').append('<option value="'+data['hora[26]']+'">'+data['hora[26]']+'</option>');
             } if(data['hora[27]'] != null){
                $('#hora').append('<option value="'+data['hora[27]']+'">'+data['hora[27]']+'</option>');
             } if(data['hora[28]'] != null){
                $('#hora').append('<option value="'+data['hora[28]']+'">'+data['hora[28]']+'</option>');
             } 
            if(data['hora[29]'] != null){
                $('#hora').append('<option value="'+data['hora[29]']+'">'+data['hora[29]']+'</option>');
             } 
            if(data['hora[30]'] != null){
                $('#hora').append('<option value="'+data['hora[30]']+'">'+data['hora[30]']+'</option>');
             }



          });
                        
                    }
                });
            }else{
                $('select[name="hora"]').empty();
            }
        });

        $.ajax({
                    url:'/Doctors/Doctors/myformAjax4/',
                    type: "GET",
                    dataType: "json",
                    success:function(response) {
                        
                        $.each(response,function(index,data){
             $('#paciente').append('<option value="'+data['id']+'">'+data['nome']+'</option>');
          });
                        
                    }
                });


                $.ajax({
                    url:'/Doctors/Doctors/myformAjax6/',
                    type: "GET",
                    dataType: "json",
                    success:function(response) {
                        
                    $.each(response,function(index,data){
                    $('#procEsp').append('<option value="'+data['idMedico']+'">'+data['nome']+'</option>');
                       });
                        
                    }
                });
          
          
          $('select[name="procEsp"]').on('change', function() {
            var idEspa = $(this).val();
            console.log(idEspa);
            if(idEspa) {
                $.ajax({
                    url:'/Doctors/Doctors/myformAjax5/'+idEspa,
                    type: "GET",
                    dataType: "json",
                    success:function(response) {
                        
                        $.each(response,function(index,data){
            
               if(data['status'] ='1'){           
                  $('#card1').append('<h5>'+ data['nome']+' - <span class="badge badge-primary">' + data['data'] + ' ás '+data['hora']+'</span></h5>');
                  
               }
                });
                        
                    }
                });
            }else{
                $('button[name="card1"]').empty();
            }
        });
       
      });



</script>


</body>
</html>