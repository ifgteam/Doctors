


<div style="margin-top:60px; margin-left:50px; margin-Ok!:50px">
<button style="margin-top:20px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" id="openmymodal">
  INCLUIR PACIÊNTES
</button>
<br>
<hr>

<h1 class="text-center">Pacientes</h1>
<table class="table table-bordered table-responsive mt-5">
		<thead>
        <tr id="showdata"></tr>
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
        <div class="md-form mb-5">
          <input type="text" name="nome" id="nome" class="form-control validate">
          <label data-error="" data-success="Ok!" for="nome">Nome</label>
        </div>

        <div class="md-form mb-5">
          <input type="email" id="email" name="email" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="email">email</label>
        </div>
          <input type="hidden" id="id">
      </form>
         <!-- 
        <div class="md-form mb-5">
          <input type="text" name="nomeresponsavel" id="nomeresponsavel" class="form-control validate">
          <label data-error="Insira um email valido" data-success="Ok!" for="form34">Nome do responsável</label>
        </div> -->

        <!-- <div class="md-form mb-5">
          <input type="text" id="datanas" name="datanas" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="datanas">Data de nascimento</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="estadocivil" name="estadocivil" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="estadocivil">Estado Civil</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="indicacao" name="indicacao" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="indicacao">Indicação</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="cpf" name="cpf" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="cpf">CPF</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="celular" name="celular" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="celular">Telefone Celular</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="telfixo" name="telfixo" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="telfixo">Telefone Residencial</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="teladicio" name="teladicio" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="teladicio">Telefone Adicional</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="cep" name="cep" class="form-control validate" maxlength="9">
          <label data-error="wrong" data-success="Ok!" for="cep" >CEP</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="rua" name="rua" class="form-control validate" placeholder="Rua">
        </div>

        <div class="md-form mb-5">
          <input type="text" id="numero" name= class="form-control validate" placeholder="Numero">
        </div>

        <div class="md-form mb-5">
          <input type="text" id="complemento" name="complemento" class="form-control validate">
          <label data-error="wrong" data-success="Ok!">Complemento</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="bairro" name="bairro" class="form-control validate" placeholder="Bairro">
        </div>

        <div class="md-form mb-5">
          <input type="text" id="cidade" name="cidade" class="form-control validate" placeholder="Cidade">
        </div>

        <div class="md-form mb-5">
          <input type="text" id="uf" name="uf" class="form-control validate" placeholder="Estado">
        </div>

        <div class="md-form mb-5">
          <input type="text" id="convenio" name="convenio" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="convenio">Convenio</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="plano" name="plano" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="plano">Plano</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="numconvenio" name="numconvenio" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="numconvenio">Numero do Convenio</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" id="dataconvenio" name="dataconvenio" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="dataconvenio">Data do convenio</label>
        </div>

        <div class="md-form">
          <textarea type="text" id="obs" name="obs" class="md-textarea form-control" rows="3"></textarea>
          <label data-error="wrong" data-success="Ok!" for="obs">Observação</label>
        </div> -->

      </div>
      
      <div class="modal-footer" id="mf">
        <button type="button" class="btn btn-danger" id="cancel">Cancelar</button>
        <button type="button" class="btn btn-primary salvar">Salvar</button>
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
      $('#myForm').attr('action', '<?php echo base_url() ?>Doctors/addPaciente');
      $('.salvar').attr('id', 'btnSave');
    });

    $('#atualizarPaciente').click(function(){
      $('.salvar').removeAttr('id');
      $('#myForm').attr('action', '<?php echo base_url() ?>Doctors/atualizarPaciente');
      $('.salvar').attr('id', 'btnAtt');
      $id = $('#atualizarPaciente').attr('data');
      $('#id').attr('data', $id);
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
          error: function(){
            alert('Não foi posivel cadastrar');
          }
        });
      }
    });
  });

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
  $('#deletePaciente').on('click', function(){
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
            '<td class="paciente-name" width="100%">'+data[i].nome+'</td>'+
            '<td><a href="javascript:;" id="atualizarPaciente" class="btn btn-blue item-atualizar" data-toggle="modal" data-target="#basicExampleModal" data="'+data[i].id+'">Editar</a> </td>'	+
            '<td><a href="javascript:;" id="arquivarPaciente" class="btn btn-orange item-arquivar" data="'+data[i].id+'">Arquivar</a> </td>'	+
            '<td><a href="javascript:;" id="deletePaciente" class="btn btn-danger item-delete" data="'+data[i].id+'">Deletar</a> </td>'	;					}
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