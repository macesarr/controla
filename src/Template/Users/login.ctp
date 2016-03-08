<style>
 .form-signin
 {
   max-width: 330px;
   padding: 15px;
   margin: 0 auto;
 }
 .form-signin .form-signin-heading, .form-signin .checkbox
 {
   margin-bottom: 10px;
 }
 .form-signin .checkbox
 {
   font-weight: normal;
 }
 .form-signin .form-control
 {
   position: relative;
   font-size: 16px;
   height: auto;
   padding: 10px;
   -webkit-box-sizing: border-box;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
 }
 .form-signin .form-control:focus
 {
   z-index: 2;
 }
 .form-signin input[type="text"]
 {
   margin-bottom: -1px;
   border-bottom-left-radius: 0;
   border-bottom-right-radius: 0;
 }
 .form-signin input[type="password"]
 {
   margin-bottom: 10px;
   border-top-left-radius: 0;
   border-top-right-radius: 0;
 }
 .account-wall
 {
   margin-top: 20px;
   padding: 40px 0px 20px 0px;
   background-color: #f7f7f7;
   -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
   -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
   box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
 }
 .login-title
 {
   color: #555;
   font-size: 18px;
   font-weight: 400;
   display: block;
 }
 .profile-img
 {
   width: 96px;
   height: 96px;
   margin: 0 auto 10px;
   display: block;
   -moz-border-radius: 50%;
   -webkit-border-radius: 50%;
   border-radius: 50%;
 }
 .need-help
 {
   margin-top: 10px;
 }
 .new-account
 {
   display: block;
   margin-top: 10px;
 }
 
</style>
<div class="row">
  <div class="col-lg-6">
    <h1 class="text-center login-title"><?=__('Inicie Sesión para continuar con CONTROLA')?></h1>
    <div class="account-wall">
      <?= $this->Html->image('/uploads/controla-logo.png', [
	    'alt' => 'Controla',
	    'width' => '140',
	    'class' => 'img-responsive profile-img'
	  ]); ?>

      <?= $this->Flash->render('auth') ?>
      <?= $this->Form->create(null, ['class'=>'form-signin']) ?>
      <div class="form-group">
	<?= $this->Form->input('email', ['label'=> false, 'class'=>'form-control', 'placeholder'=>__('Correo Electrónico')]); ?>
      </div>
      <div class="form-group">
	<?= $this->Form->input('password', ['label'=> false, 'class'=>'form-control', 'placeholder'=>__('Contraseña')]); ?>
      </div>
      <div class="form-group">
	<?= $this->Form->button(__('Ingresar'), ['class'=>'btn btn-lg btn-block btn-success']) ?>
		<span class="help-block text-right"><a href="#"><?= __('¿Olvidó su contraseña?')?></a></span>
	<?= $this->Form->end() ?>    
      </div>
      
    </div>
  </div>
  <div class="col-lg-6">
    <h3><?= __('Regístrese ahora'); ?> <span class="label label-success"><?=__('GRATIS')?></span></h3>
    <br>
    <p><span class="glyphicon glyphicon-ok text-success" aria-hidden="true"></span> <?=__('Aumento en la exactitud en el inventario.')?></p>
    <p><span class="glyphicon glyphicon-ok text-success" aria-hidden="true"></span> <?=__('Reducción en el tiempo y recurrencia de los inventario físicos.')?></p>
    <p><span class="glyphicon glyphicon-ok text-success" aria-hidden="true"></span> <?=__('Eliminación de los documentos y papeles requeridos para la operación manual.')?></p>
    <p><span class="glyphicon glyphicon-ok text-success" aria-hidden="true"></span> <?=__('Información en Tiempo Real.')?></p>
    <p><span class="glyphicon glyphicon-ok text-success" aria-hidden="true"></span> <?=__('Aumento en la productividad laboral.')?></p>
    <p><span class="glyphicon glyphicon-ok text-success" aria-hidden="true"></span> <?=__('Independencia de plataforma en tiempo y espacio.')?></p>
    <p><span class="glyphicon glyphicon-ok text-success" aria-hidden="true"></span> <?=__('Facilidad de uso.')?></p>
    <p><span class="glyphicon glyphicon-ok text-success" aria-hidden="true"></span> <?=__('Exportación de consultas a PDF.')?></p>
    <p><span class="glyphicon glyphicon-ok text-success" aria-hidden="true"></span> <?=__('Reportes de inventario para tomar decisiones informadas en menos tiempo.')?></p>
    <hr>
    <center>
      <a href="/begin" class="btn btn-lg btn-info"><?=__('¡Registrarme ahora mismo!')?></a>
    </center>
  </div>  
</div>
