<div class="page-header">
  <h2><?= __('Ingrese al sistema') ?></h2>
</div>

<div class="row">
  <div class="col-lg-6 well bs-component">
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <div class="form-group">
      <?= $this->Form->input('email', ['label'=>__('Correo Electrónico'), 'class'=>'form-control']); ?>
    </div>
    <div class="form-group">
      <?= $this->Form->input('password', ['label'=>__('Password'), 'class'=>'form-control']); ?>
    </div>
    <div class="form-group">
      <?= $this->Form->button(__('Ingresar'), ['class'=>'btn btn-lg btn-block btn-success']) ?>
      <center>
	<span class="help-block"><a href="#"><?= __('¿Olvidó su contraseña?')?></a></span>
      </center>
      <?= $this->Form->end() ?>    
    </div>
  </div>
  <div class="col-lg-6">


    
  </div>  
</div>
