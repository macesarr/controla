

<div class="page-header">
  <h2><?= __('Complete el registro de su cuenta') ?></h2>
</div>


<div class="row">
  <?= $this->Form->create($user) ?>
  
  <div class="col-lg-6 well bs-component">
      <div class="form-group">  
	<?= $this->Form->input('name', ['label'=>__('Correo Electrónico'), 'class'=>'form-control', 'value' => $userEmail, 'disabled']); ?>
      </div>
      <div class="form-group">    
	<?= $this->Form->input('password', ['label'=>__('* Contraseña'), 'class'=>'form-control']); ?>
      </div>
      <div class="form-group">
	<?= $this->Form->button(__('REGISTRARME y comenzar a usar CONTROLA'), ['class'=>'btn btn-lg btn-block btn-success']) ?>
	<center>
	  <span class="help-block"><?= __('Al registrarme acepto las ')?> <a href="#"><?= __('Condiciones de Uso y Servicio')?></a></span>
	</center>
	<?= $this->Form->end() ?>    
      </div>
  </div>
  <div class="col-lg-6">
    <center>
    <?= $this->Html->image('/' . $busines->folder, [
	  'width' => '250',
	  'class' => 'img-responsive'
	]); ?>
      <h1><?= $busines->name; ?></h1>
    </center>
  </div>
</div><!-- /ROw -->


<!-- 

<div class="users form large-9 medium-8 columns content">
  <?= $this->Form->create($user) ?>
  <fieldset>
    <legend><?= __('Add User') ?></legend>
    <?php
    echo $this->Form->input('busines_id', ['options' => $business]);
    echo $this->Form->input('email');
    echo $this->Form->input('password');
    echo $this->Form->input('role');
    ?>
  </fieldset>

</div>
-->
