<div class="page-header">
      <h2><?= __('Ingrese los datos de su negocio') ?></h2>
</div>

<div class="row well bs-component">
  <?= $this->Form->create($busines, ['type' => 'file']) ?>
  <div class="col-lg-6">
    <div class="alert alert-dismissible alert-info">
      <p><?= __('Todos los campos con (*) son obligatorios'); ?></p>
    </div>    
    
    <div class='form-group'>
      <?= $this->Form->input('business_category_id', ['label'=>__('Elija una categoría'), 'options' => $businessCategories, 'class'=>'form-control']); ?>
    </div>
    <div class='form-group'>
      <?= $this->Form->input('name', ['label'=>__('* Nombre del negocio'), 'class'=>'form-control']); ?>
    </div>
    <div class='form-group'>
      <?= $this->Form->input('city_id', ['options' => $cities, 'label'=>__('Elija su ciudad'), 'class'=>'form-control']); ?>
    </div>
    <div class='form-group'>
      <?= $this->Form->input('address', ['label'=>__('* Dirección'), 'class'=>'form-control']); ?>
    </div>
  </div><!-- /col-lg-6 -->

  <div class="col-lg-6">
    <div class='form-group'>
      <?= $this->Form->input('email', ['label'=>__('* Correo electrónico de contacto'), 'class'=>'form-control']); ?>
      <span class="help-block"><?= 'El correo ingresado será usado luego para el acceso a la administración de su negocio.'; ?></span>
    </div>
    <div class='form-group'>
      <?= $this->Form->input('facebook', ['label'=>__('Facebook'), 'class'=>'form-control', 'value'=>'#']); ?>
    </div>
    <div class='form-group'>
      <?= $this->Form->input('twitter', ['label'=>__('Twitter'), 'class'=>'form-control', 'value'=>'#']); ?>
    </div>
    <div class="row">
      <div class="col-lg-6">
	<div class="form-group">
	  <?= $this->Form->input('logo', ['label'=>__('Cargue el logo de su negocio'), 'class'=>'form-control', 'type' => 'file', 'accept' => 'image/*']); ?>
	  <span class="help-block"><?= 'El logo puede subirlo luego sin problema'; ?></span>
	</div>
      </div>
      <div class="col-lg-6">
	<center>
	<?= $this->Html->image('/uploads/controla-logo.png', [
	      'alt' => 'Controla',
	      'width' => '140',
	      'class' => 'img-responsive'
	    ]); ?>
	</center>
      </div>
    </div>
    
    

    <hr>
    
    <div class='form-group'>
      <?= $this->Form->button(__('Guardar y proceder a registrarme'), ['class'=>'btn btn-lg btn-block btn-success']) ?>
      <?= $this->Form->end() ?>
    </div>
  </div><!-- /col-lg-6 -->
  
</div><!-- /row -->
