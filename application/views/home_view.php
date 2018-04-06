<div id="home" class="container container-off-padding">

  <figure class="logo-mobile">
    <img class="img-responsive" src="<?= base_url(); ?>assets/images/logo.png" alt="Construct">
  </figure>

  <div class="container container-off-padding">
    <div class="row row-off-margin">
      <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4 right col-off-padding">

        <form method="post" role="form" action="<?php echo base_url("contato")?>">
          <h5>RECEBA MAIS INFORMAÇÕES!</h5>
          <div class="form-group">
            <label for="nome">Nome</label>
            <input id="nome" type="text" class="nome form-control" name="nome" required="required" />
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="email form-control" name="email" required="required"/>
          </div>

          <div class="form-group">
            <label for="telefone">Telefone</label>
            <input id="telefone" class="phone form-control" type="tel" name="phone" required="required"/>
          </div>

          <div class="form-group">
            <label for="form-mensagem">Mensagem</label></br>
            <textarea id="form-mensagem" class="msg form-control" rows="5" name="mss" required="required"></textarea>
          </div>  

          <button type="submit" class="btn_enviar enviar btn right btn-success" title="enviar" name="enviar_email" value="enviar">Enviar</button>
          <button type="reset" class="btn_limpar enviar btn btn-primary" title="limpar">limpar</button>           
        </form>

      </div> 
    </div>     
  </div>
</div>

<div class="container-fluid container-off-padding box-tt">
 <p>Em um único lugar você contrata, obras e/ou reformas completas, feitas de um modo inteligente e sob medida.</p>
</div>

<div class="container container-off-padding">
  <figure>
    <img class="img-responsive" src="<?= base_url(); ?>assets/images/reforma.jpg" alt="reforma">
  </figure>
  <figure>
    <img class="img-responsive" src="<?= base_url(); ?>assets/images/reforma2.jpg" alt="reforma">
  </figure>
  <figure>
    <img class="img-responsive" src="<?= base_url(); ?>assets/images/reforma3.jpg" alt="reforma">
  </figure>
  <figure>
    <img class="img-responsive" src="<?= base_url(); ?>assets/images/reforma4.jpg" alt="reforma">
  </figure>
</div>

<?php 
if(isset($email_enviado))
    echo $email_enviado;
?>