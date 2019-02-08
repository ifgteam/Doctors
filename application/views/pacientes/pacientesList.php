


<div style="margin-top:60px; margin-left:50px; margin-Ok!:50px">
<button style="margin-top:20px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" id="openmymodal">
  INCLUIR PACIÊNTES
</button>
<br>
<hr>

<h1 class="text-center">Pacientes</h1>
<table class="table table-bordered table-responsive mt-5">
		<thead id="showdata">

		</thead>
  </table>


<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body mx-3">
      <form method="POST" id="myForm">
        <div class=" mb-5">
          <label>Nome</label>
          <input type="text" name="nome" id="nome" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Email</label>
          <input type="email" id="email" name="email" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Nome do responsavel</label>
          <input type="text" name="nomeresponsavel" id="nomeresponsavel" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Sexo</label>
          <input type="text" id="sexo" name="sexo" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Data de Nascimento</label>
          <input type="text" id="datanas" name="datanas" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Estado Civil</label>
          <input type="text" id="estadocivil" name="estadocivil" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Indicação</label>
          <input type="text" id="indicacao" name="indicacao" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>CPF</label>
          <input type="text" id="cpf" name="cpf" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Telefone Celular</label>
          <input type="text" id="celular" name="celular" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Telefone Residencial</label>
          <input type="text" id="telfixo" name="telfixo" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Telefone Adicional</label>
          <input type="text" id="teladicio" name="teladicio" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>CEP</label>
          <input type="text" id="cep" name="cep" class="form-control validate" maxlength="9">
        </div>

        <div class=" mb-5">
          <label>Rua</label>
          <input type="text" id="rua" name="rua" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Numero</label>
          <input type="text" id="numero" name="numero" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Complemento</label>
          <input type="text" id="complemento" name="complemento" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Bairro</label>
          <input type="text" id="bairro" name="bairro" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Cidade</label>
          <input type="text" id="cidade" name="cidade" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Estado</label>
          <input type="text" id="uf" name="uf" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Convenio</label>
          <input type="text" id="convenio" name="convenio" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Plano</label>
          <input type="text" id="plano" name="plano" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Numero do convenio</label>
          <input type="text" id="numconvenio" name="numconvenio" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Data do convenio</label>
          <input type="text" id="dataconvenio" name="dataconvenio" class="form-control validate">
        </div>

        <div class="">
          <label>observacao</label>
          <textarea type="text" id="obs" name="obs" class="md-textarea form-control" rows="3"></textarea>
        </div>
        </form>
      </div>

      <div class="modal-footer" id="mf">
        <button type="button" class="btn btn-danger" id="cancel">Cancelar</button>
        <button type="button" class="btn btn-primary salvar" id="btnSave">Salvar</button>
      </div>
    </div>
  </div>
</div>
<script>
$(function(){

  // define a função pra mostrar os pacientes
  mostrarPacientes();


  // ao clicar no btn ele adicona o action
    $('#openmymodal').click(function(){
      $('#myForm')[0].reset();
      $('#myForm').attr('action', '<?php echo base_url() ?>Doctors/addPaciente');
    });

    $('#cancel').click(function(){
      $('#myForm')[0].reset();
      $('#basicExampleModal').removeClass('show');
    });

  // ao clicar para salvar ele executa a função do ajax
  $('#btnSave').click(function(){
      var url = $('#myForm').attr('action');
			var data = $('#myForm').serialize();
    $(function(){addPaciente();
      //function
      function addPaciente(){
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: url,
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            $('#basicExampleModal').modal('hide');
            $('#myForm')[0].reset();
            mostrarPacientes();
          },
          error: function(xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(err.Message);
          }
        });
      }
    });
  });


  //pegando os dados para edição
  $('.atualizarPaciente').click(function(){
    $('#myForm').attr('action', '<?php echo base_url() ?>Doctors/atualizarPaciente');
    $('#myForm')[0].reset();
    $id = $(this).attr('data');
    $('#id').attr('data', $id);

    var nome = $(this).attr('nome');
    var email = $(this).attr('email');
    var responsavel = $(this).attr('responsavel');
    var sexo = $(this).attr('sexo');

    $('[name="nome"]').val(nome);
    $('[name="email"]').val(email);
    $('[name="nomeresponsavel"]').val(responsavel);
    $('[name="sexo"]').val(sexo);
  });

  //função para atualizar o cadastro do paciente
  $('#btnAtt').click(function(){
      var url = $('#myForm').attr('action');
			var data = $('#myForm').serialize();

    $(function(){addPaciente();
      //function
      function addPaciente(){
        $.ajax({
          type: 'ajax',
          method: 'get',
          url: url,
          data: {id:id},
          async: false,
          dataType: 'json',
          success: function(response){
            $('#basicExampleModal').modal('hide');
            $('#myForm')[0].reset();
            alert('deu bom');
            mostrarPacientes();

          },
          error: function(){
            alert('Não foi posivel cadastrar');
          }
        });
      }
    });
  });






  //delete-
  $('.deletarPaciente').on('click', function(){
			var id = $(this).attr('data');
				$.ajax({
					type: 'ajax',
					method: 'get',
					async: false,
					url: '<?php echo base_url() ?>Doctors/deletePaciente',
					data:{id:id},
					dataType: 'json',
					success: function(response){
						if(response.success){
							alert('Paciente Deletado');
							mostrarPacientes();
						}else{
							alert('Não foi posivel deletar');
						}
					},
					error: function(){
						alert('Error deleting');
					}
				});
		});

  //mostrar pacientes cadastrados
  function mostrarPacientes(){
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>Doctors/mostrarPacientes',
				async: false,
				dataType: 'json',
				success: function(data){
					var html = '';
          var i;
					for(i=0; i<data.length; i++){
						html +=
            '<tr><td class="paciente-name" width="100%">'+data[i].nome+'</td>'+
            '<td><a href="javascript:;" class="btn btn-blue atualizarPaciente" data-toggle="modal" data-target="#basicExampleModal" data="'+data[i].id+'" nome="'+data[i].nome+'" responsavel="'+data[i].nomeResponsavel+'"  email="'+data[i].email+'" sexo="'+data[i].sexo+'" >Editar</a></td>'	+
            '<td><a href="javascript:;" class="btn btn-orange arquivarPaciente" data="'+data[i].id+'">Arquivar</a> </td>'	+
            '<td><a href="javascript:;" class="btn btn-danger deletarPaciente" data="'+data[i].id+'">Deletar</a> </td></tr>'	;					}
					$('#showdata').html(html);
				},
				error: function(){
          var html = '';
          html += '<strong class="text-center">Nenhum paciente cadastrado</strong>'
          $('#showdata').html(html);
				}
			});
    }
  });

</script>
