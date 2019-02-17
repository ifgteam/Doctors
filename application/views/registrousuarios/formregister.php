<!-- Form register --> 

<div class="container mt-5 ">
    
    <div class="row">
        
    <form method="POST" class="col-md-6 mx-auto mt-5" action="<?= base_url('Doctors/register') ?>">
    <p class="h5 text-center mb-4">Cadastro de Usu&aacute;rio</p>

    <div class="md-form">
        <i class="fa fa-user prefix grey-text"></i>
        <input type="text" id="Nome" name="nome" class="form-control" placeholder="Nome">
    </div>
    <div class="md-form">
        <i class="fa fa-envelope prefix grey-text"></i>
        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
    </div>

    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
    </div>
    <div class="md-form">
        <i class="fa fa-lock prefix grey-text"></i>
        <input type="password" id="confirma_senha" name="confirma_senha" class="form-control" placeholder="Confirme a senha">
    </div>
    <!-- Default inline 1-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline1" name="acesso" value="1">
  <label class="custom-control-label" for="defaultInline1">Adm</label>
</div>

<!-- Default inline 2-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline2" name="acesso" value="2">
  <label class="custom-control-label" for="defaultInline2">Medico</label>
</div>

<!-- Default inline 3-->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" class="custom-control-input" id="defaultInline3" name="acesso" value="3">
  <label class="custom-control-label" for="defaultInline3">Secretaria</label>
</div>
<br />
    <div class="text-center">
        <button class="btn btn-info">Registrar</button>
    </div>

    </form>
<!-- Form register -->
        
    </div>
    
</div>