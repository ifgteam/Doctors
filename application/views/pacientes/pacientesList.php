


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
          <input type="text" id="nome" class="form-control validate">
          <label data-error="" data-success="Ok!" for="form34">Nome</label>
        </div>
        <div class="md-form mb-5">
          <input type="text" id="nome" class="form-control validate">
          <label data-error="Insira um email valido" data-success="Ok!" for="form34">Nome do responsável</label>
        </div>
        <div class="md-form mb-5">
       
          <input type="email" id="form29" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form29">email</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Data de nascimento</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Estado Civil</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Indicação</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">CPF</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Telefone Celular</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Telefone Residencial</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Telefone Adicional</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">CEP</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Numero</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Complemento</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Bairro</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Cidade</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Convenio</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Plano</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Numero do Convenio</label>
        </div>

        <div class="md-form mb-5">
        
          <input type="text" id="form32" class="form-control validate">
          <label data-error="wrong" data-success="Ok!" for="form32">Data do convenio</label>
        </div>

        <div class="md-form">
         
          <textarea type="text" id="form8" class="md-textarea form-control" rows="3"></textarea>
          <label data-error="wrong" data-success="Ok!" for="form8">Observação</label>
        </div>

      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
     


