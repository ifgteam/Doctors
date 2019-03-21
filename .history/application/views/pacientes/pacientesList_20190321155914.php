


<div style="margin-top:60px; margin-left:50px; margin-Ok!:50px">
<button style="margin-top:20px; text-transform: none; font-weight: 700; font-size: 15px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" id="openmymodal">
  Adicionar Paciente
</button>
<br>
<hr>

<h1 class="text-center">Pacientes</h1>
<table class="table table-bordered table-responsive mt-5">
		<thead id="showdata">

		</thead>
  </table>
</div>


<!-- modal delete -->
<div class="modal fade modal-pequeno" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="container">
        <h1>Você realmente deseja deletar este paciente?</h1>
        <small>Ao concluir esta ação sera impossivel a recuperação dos dados do paciente</small>
        <div class="row" style="justify-content: center;">
          <button type="button" class="btn btn-danger close-modal">Cancelar</button>
          <button type="button" class="btn btn-warning" id="btnDelete">Deletar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-pequeno" id="arquivaModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="container">
        <h1>Você realmente deseja arquivar este paciente?</h1>
        <small>Ao concluir esta ação o paciente não ficará mais visivel na listagem, porém seus dados serão mantidos!</small>
        <div class="row" style="justify-content: center;">
          <button type="button" class="btn btn-danger close-modal">Cancelar</button>
          <button type="button" class="btn btn-warning" id="btnArquiva">Arquivar</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade modal-pequeno" id="ModalDeleteSucess" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="container">
        <h1 class="h1-concluido">Paciente excluido com sucesso!</h1>
        <br><button class="close-modal btn btn-sucess">Fechar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade modal-pequeno" id="ModalarquivadoSucess" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="container">
        <h1 class="h1-concluido">Paciente arquivado com sucesso!</h1>
        <br><button class="close-modal btn btn-sucess">Fechar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade modal-pequeno" id="ModalEditadoSucess" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="container">
        <h1 class="h1-concluido">Paciente editado com sucesso!</h1>
        <br><button class="close-modal btn btn-sucess">Fechar</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal inserir paciente -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <input id="datanas" name="datanas" class="form-control validate">
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
            <input type="text" id="cpf" name="cpf" class="form-control validate cpf">
          </div>

          <div class=" mb-5">
            <label>Telefone Celular</label>
            <input type="text" id="celular" name="celular" class="form-control validate cel">
          </div>

          <div class=" mb-5">
            <label>Telefone Residencial</label>
            <input type="text" id="telfixo" name="telfixo" class="form-control validate tel">
          </div>

          <div class=" mb-5">
            <label>Telefone Adicional</label>
            <input type="text" id="teladicio" name="teladicio" class="form-control tel">
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
            <input type="text" id="complemento" name="complemento" class="form-control">
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
            <input type="text" id="numconvenio" name="numconvenio" class="form-control validate tel">
          </div>

          <div class=" mb-5">
            <label>Data do convenio</label>
            <input id="dataconvenio" name="dataconvenio" class="form-control validate">
          </div>

          <div class="">
            <label>observacao</label>
            <textarea type="text" id="obs" name="obs" class="md-textarea form-control" rows="3"></textarea>
          </div>
          </form>
      </div>

      <div class="modal-footer" id="mf">
        <button type="button" class="btn btn-danger close-modal">Cancelar</button>
        <button type="button" class="btn btn-primary salvar" id="btnSave">Salvar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal editar paciente -->
<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="ModalEdit"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body mx-3">
      <form method="POST" id="myFormEdit" action="<?php echo base_url() ?>Doctors/AtualizaPaciente">
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
          <input id="datanas" name="datanas" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Estado Civil</label>
          <input type="text" id="estadocivil" name="estadocivil" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Indicação</label>
          <input type="text" id="indicacao" name="indicacao" class="form-control">
        </div>

        <div class=" mb-5">
          <label>CPF</label>
          <input type="text" id="cpf" name="cpf" class="form-control validate cpf">
        </div>

        <div class=" mb-5">
          <label>Telefone Celular</label>
          <input type="text" id="celular" name="celular" class="form-control validate cel">
        </div>

        <div class=" mb-5">
          <label>Telefone Residencial</label>
          <input type="text" id="telfixo" name="telfixo" class="form-control validate tel">
        </div>

        <div class=" mb-5">
          <label>Telefone Adicional</label>
          <input type="text" id="teladicio" name="teladicio" class="form-control">
        </div>

        <div class=" mb-5">
          <label>CEP</label>
          <input type="text" id="cepE" name="cep" class="form-control validate" maxlength="9">
        </div>

        <div class=" mb-5">
          <label>Rua</label>
          <input type="text" id="ruaE" name="rua" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Numero</label>
          <input type="text" id="numero" name="numero" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Complemento</label>
          <input type="text" id="complemento" name="complemento" class="form-control">
        </div>

        <div class=" mb-5">
          <label>Bairro</label>
          <input type="text" id="bairroE" name="bairro" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Cidade</label>
          <input type="text" id="cidadeE" name="cidade" class="form-control validate">
        </div>

        <div class=" mb-5">
          <label>Estado</label>
          <input type="text" id="ufE" name="uf" class="form-control validate">
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
          <input type="text" id="numconvenio" name="numconvenio" class="form-control validate tel">
        </div>

        <div class=" mb-5">
          <label>Data do convenio</label>
          <input id="dataconvenio" name="dataconvenio" class="form-control validate">
        </div>

        <div class="">
          <label>observacao</label>
          <textarea type="text" id="obs" name="obs" class="md-textarea form-control" rows="3"></textarea>
        </div>
        <input hidden name="idAtt">
        </form>
      </div>

      <div class="modal-footer" id="mf">
        <button type="button" class="btn btn-danger" id="cancel">Cancelar</button>
        <input type="submit" class="btn btn-primary" id="btnAtt" value="Editar">
      </div>
    </div>
  </div>
</div>
<script>
$(function(){
  $base = "<?php echo base_url() ?>";
  request = new XMLHttpRequest();
  var path="http://localhost/";
  request.onreadystatechange=state_change;  
  request.open("GET", path, true);
  request.send(null);
  
    function state_change()
{
if (request.readyState==4)
  {// 4 = "loaded"
  if (request.status==200)
    {// 200 = OK
    //mostrar pacientes cadastrados
    mostrarPacientes();

      $('.close-modal').click(function(){
      $('.show').modal('hide');
    });  
    // ao clicar no btn ele adicona o action
      $('body').on('click', '#openmymodal', function(){
        $('#myForm')[0].reset();
        $('#myForm').attr('action', ''+$base+'Doctors/addPaciente');
      });
  
      $('.close-modal').click(function(){
        $('#myForm')[0].reset();
        $('#basicExampleModal').modal('hide');
        $('#deleteModal').modal('hide');
      });

      $('body').on('click', '.deletarpaciente', function(){
        var idd = $(this).attr('data');
        $('#btnDelete').attr('data', idd);
      });

      $('body').on('click', '.arquivarPaciente', function(){
        var ida = $(this).attr('data');
        $('#btnArquiva').attr('data', ida);
      });

      $('body').on('click', '.atualizarPaciente', function(){
        var idt = $(this).attr('data');
        $('#btnDelete').attr('data', idt);
        $('#myFormEdit').attr('action', ''+$base+'Doctors/AtualizaPaciente');
        var id = $(this).attr('dataId');
        $('#btnAtt').attr('data', id);
    
        var nome = $(this).attr('nome');
        var email = $(this).attr('email');
        var responsavel = $(this).attr('responsavel');
        var sexo = $(this).attr('sexo');
        var estadoCivil = $(this).attr('estadoCivil');
        var indicacao = $(this).attr('indicacao');
        var dataNas = $(this).attr('nascimento');
        var cpf = $(this).attr('cpf');
        var celular = $(this).attr('celular');
        var telefone = $(this).attr('telefone');
        var telefoneAdicional = $(this).attr('telefoneAdicional');
        var cep = $(this).attr('cep');
        var rua = $(this).attr('rua');
        var numero = $(this).attr('numero');
        var complemento = $(this).attr('complemento');
        var bairro = $(this).attr('bairro');
        var cidade = $(this).attr('cidade');
        var uf = $(this).attr('uf');
        var convenio = $(this).attr('convenio');
        var dataConvenio = $(this).attr('dataConvenio');
        var plano = $(this).attr('plano');
        var numeroConvenio = $(this).attr('numeroConvenio');
        var observacao = $(this).attr('observacao');
    
        $('[name="nome"]').val(nome);
        $('[name="email"]').val(email);
        $('[name="nomeresponsavel"]').val(responsavel);
        $('[name="sexo"]').val(sexo);
        $('[name="estadocivil"]').val(estadoCivil);
        $('[name="datanas"]').val(dataNas);
        $('[name="indicacao"]').val(indicacao);
        $('[name="cpf"]').val(cpf);    
        $('[name="celular"]').val(celular);
        $('[name="cep"]').val(cep);
        $('[name="telfixo"]').val(telefone);
        $('[name="teladicio"]').val(telefoneAdicional);
        $('[name="cep"]').val(cep);
        $('[name="rua"]').val(rua);
        $('[name="numero"]').val(numero);
        $('[name="complemento"]').val(complemento);
        $('[name="bairro"]').val(bairro);
        $('[name="cidade"]').val(cidade);
        $('[name="uf"]').val(uf);
        $('[name="convenio"]').val(convenio);
        $('[name="plano"]').val(plano);
        $('[name="numconvenio"]').val(numeroConvenio);
        $('[name="dataconvenio"]').val(dataConvenio);    
        $('[name="obs"]').val(observacao);
        $('[name="idAtt"]').val(id);
        });

  
    // ao clicar para salvar ele executa a função do ajax
    $('#btnSave').click(function(){
      $('.validate').each(function(){
        if($(this).attr('name') === 'cpf'){
          
        }
        if( $(this).val() === "" ){
          $(this).addClass('input-error');
          alert('preencha corretamente os campos');
          return false;
          throw new Error("alguns campos não foram preenchidos corretamente");
        }else{
          $(this).removeClass('input-error');
        }
      });
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
            async: true,
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
  
    //função para atualizar o cadastro do paciente
    $('#btnAtt').click(function(){
      $('.validate').each(function(){
        if($(this).attr('name') === 'cpf'){
          
        }
        if( $(this).val() === "" ){
          $(this).addClass('input-error');
          alert('preencha corretamente os campos');
          return false;
          throw new Error("alguns campos não foram preenchidos corretamente");
        }else{
          $(this).removeClass('input-error');
        }
      });
        var url = $('#myFormEdit').attr('action');
              var data = $('#myFormEdit').serialize();
  
      $(function(){AtualizaPaciente();
        //function
        function AtualizaPaciente(){
          $.ajax({
            type: 'ajax',
            method: 'post',
            url: url,
            data: data,
            async: true,
            dataType: 'json',
            success: function(response){
              if(response.success){
              $('#ModalEdit').modal('hide');
              $('#ModalEditadoSucess').modal('show');
              mostrarPacientes();
              }else{
                alert("erro ao editar o paciente");
              }
            },
            error: function(){
              alert('Não foi posivel cadastrar');
            }
          });
        }
      });
    });
  
  
  
  
  
  
    //delete-
    $('#btnDelete').on('click', function(){
              var id = $(this).attr('data');
                  $.ajax({
                      type: 'ajax',
                      method: 'get',
                      async: true,
                      url: ''+$base+'Doctors/deletePaciente',
                      data:{id:id},
                      dataType: 'json',
                      success: function(response){
                          if(response.success){
                $('#deleteModal').modal('hide');
                location.reload();
                              mostrarPacientes();
                $('#ModalDeleteSucess').modal('show');
                          }else{
                              alert('Não foi posivel deletar');
                          }
                      },
                      error: function(){
                          alert('Error deleting');
                      }
                  });
          });
  
  
      $('#btnArquiva').on('click', function(){
          var id = $(this).attr('data');
            $.ajax({
              type: 'ajax',
              method: 'get',
              async: true,
              url: ''+$base+'Doctors/arquivarPaciente',
              data:{id:id},
              dataType: 'json',
              success: function(response){
                if(response){
                  $('#arquivaModal').modal('hide');
                  location.reload();
                  mostrarPacientes();
                  $('#ModalarquivadoSucess').modal('show');
  
                }
              },
              error: function(){
                alert('Erro');
              }
            });
        });

      
      function mostrarPacientes(){
			$.get({
				url: '<?php echo base_url() ?>Doctors/mostrarPacientes',
        async: true,
        dataType: 'json',
				success: function(data){
          
					var html = '';
          var i;
					for(i=0; i<data.length; i++){
            $dataN = data[i].dataNascimento.split("-").reverse().join("/");
            $dataC = data[i].dataConvenio.split("-").reverse().join("/");
						html +=
            '<tr id="headingOne"><td class="paciente-name" width="100%"><button class="btn-paciente" data-toggle="collapse" data-target="#collapse'+i+'" aria-expanded="true" aria-controls="collapse'+i+'">'+data[i].nome+'</button></td>'+
            '<td><a class="btn btn-blue atualizarPaciente" data-toggle="modal" data-target="#ModalEdit" dataId="'+data[i].id+'" nome="'+data[i].nome+'" responsavel="'+data[i].nomeResponsavel+'" nascimento="'+$dataN+'" email="'+data[i].email+'" sexo="'+data[i].sexo+'" estadocivil="'+data[i].estadoCivil+'" indicacao="'+data[i].indicacao+'" cpf="'+data[i].cpf+'" celular="'+data[i].celular+'" telefone="'+data[i].telefone+'" teladicio="'+data[i].telefoneAdicional+'" cep="'+data[i].cep+'" rua="'+data[i].rua+'" numero="'+data[i].numero+'" complemento="'+data[i].complemento+'" bairro="'+data[i].bairro+'" cidade="'+data[i].cidade+'" uf="'+data[i].estado+'" convenio="'+data[i].convenio+'" dataConvenio="'+$dataC+'" plano="'+data[i].plano+'" numeroConvenio="'+data[i].numeroConvenio+'" observacao="'+data[i].observacao+'">Editar</a></td>'	+
            '<td><a class="btn btn-orange arquivarPaciente" data-toggle="modal" data-target="#arquivaModal" data="'+data[i].id+'">Arquivar</a> </td>'	+
            '<td><a class="btn btn-danger deletarpaciente" data-toggle="modal" data-target="#deleteModal" data="'+data[i].id+'">Deletar</a></td></tr>'+
            '<tr id="collapse'+i+'" class="collapse" aria-labelledby="heading'+i+'">'+
            '<td colspan="42"><table width="100%"><tr><td><strong>email</strong></td><td><strong>Nome do Responsavel</strong></td><td><strong>Sexo</strong></td><td><strong>Data de Nascimento</strong></td></tr>'+
            '<tr><td>'+data[i].email+'</td><td>'+data[i].nomeResponsavel+'</td><td>'+data[i].sexo+'</td><td>'+$dataN+'</tr>'+
            '<tr><td><strong>Estado Civil</strong></td><td><strong>Indicação</strong></td><td><strong>CPF</strong></td><td><strong>Celular</strong></td></tr>'+
            '<tr><td>'+data[i].estadoCivil+'</td><td>'+data[i].indicacao+'</td><td>'+data[i].cpf+'</td><td>'+data[i].celular+'</td></tr>'+
            '<tr><td><strong>Telefone Fixo</strong></td><td><strong>Telefone Adicional</strong></td><td colspan="42"><strong>Endereço</strong></td></tr>'+
            '<tr><td>'+data[i].telefone+'</td><td>'+data[i].telefoneAdicional+'</td><td colspan="42">'+data[i].rua+', '+data[i].numero+', '+data[i].cidade+', '+data[i].estado+'</td></tr>'+
            '<tr><td><strong>Convenio</strong></td><td><strong>Plano</strong></td><td><strong>Numero do Convenio</strong></td><td><strong>Data do Convenio</strong></td></tr>'+
            '<tr><td>'+data[i].convenio+'</td><td>'+data[i].plano+'</td><td>'+data[i].numeroConvenio+'</td><td>'+$dataC+'</td></tr></tr>'+
            '<tr><td width="100%" colspan="50"><strong>Observação</strong></td></tr>'+
            '<tr><td colspan="50" width="100%">'+data[i].observacao+'</td></tr>'+
            '</table></td></tr>';
            		}
          $('#showdata').html(html);
        
				},
          error: function(){
            var html = '';
            html += '<strong class="text-center">Nenhum paciente cadastrado</strong>'
            $('#showdata').html(html);
            alert('erro');
          }
      });
      }
  }
  else{
    alert("Problem retrieving XML data");
    }
  }
}
  });
</script>
