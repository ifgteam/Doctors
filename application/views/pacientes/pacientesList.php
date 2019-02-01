


<div style="margin-top:60px; margin-left:50px; margin-Ok!:50px">
<button style="margin-top:20px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
  INCLUIR PACIÊNTES
</button>
<br>

<div class="md-form">
  <input type="text" id="form1" class="form-control">
</div>

<div class="list-group" >
<?php foreach($pacientes as $paciente){?>
  <a href="#!" style="text-align: center" class="list-group-item list-group-item-action"> <?=$paciente->nome;?></a>
  <?php } ?> 
</div>


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
        <div class="md-form mb-5">
          <input type="text" name="nome" id="nome" class="form-control validate">
          <label data-error="" data-success="Ok!" for="nome">Nome</label>
        </div>

        <div class="md-form mb-5">
          <input type="text" name="nomeresponsavel" id="nomeresponsavel" class="form-control validate">
          <label data-error="Insira um email valido" data-success="Ok!" for="form34">Nome do responsável</label>
        </div>

        <div class="md-form mb-5">
          <input type="email" id="email" name="email" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="email">email</label>
        </div>

        <div class="md-form mb-5">
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
        </div>

      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btn-save">Salvar</button>
      </div>
    </div>
  </div>
</div>