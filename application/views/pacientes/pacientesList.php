


<div style="margin-top:60px; margin-left:50px; margin-Ok!:50px">
<button style="margin-top:20px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" id="openmymodal">
  INCLUIR PACIÊNTES
</button>
<br>

<div class="md-form">
  <input type="text" id="form1" class="form-control">
</div>

<div class="list-group" >

</div>
<table class="table table-bordered table-responsive" style="margin-top: 20px;">
		<thead>
			<tr>
				<td>Nome</td>
			</tr>
		</thead>
		<tbody>
    <div class="list-group"  id="showdata">

    </div>
		</tbody>
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
        <button type="button" class="btn btn-secondary" id="cancel">Cancelar</button>
        <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
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
            alert('Paciente Cadastrado');
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
            '<div class="row"><a  href="#!" style="text-align: center" class="list-group-item list-group-item-action">'+data[i].nome+'</a>'+
            '<a href="javascript:;" id="deletePaciente" class="btn btn-danger item-delete" data="'+data[i].id+'">Delete</a> </div>'	;
					}
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