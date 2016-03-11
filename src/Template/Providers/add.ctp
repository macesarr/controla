<div class="page-header">
  <h2><?= __('Nuevo Proveedor') ?></h2>
</div>

<div class="row well bs-component">
  <?= $this->Form->create($provider) ?>
  <div class="col-lg-6">
    <div class="alert alert-dismissible alert-info">
      <p><?= __('Todos los campos con (*) son obligatorios.'); ?></p>
    </div>
    <div class="form-group">
      <?= $this->Form->input('name', ['label'=>__('* Nombre'), 'class'=>'form-control', 'placeholder'=>'Importaciones La Grieta del Invocador']); ?>
    </div>
    <div class="form-group">
      <?= $this->Form->input('code', ['label'=>__('* Código Identificador'), 'class'=>'form-control', 'placeholder'=>'9876543210']); ?>
      <span class="help-block"><?= __('Padrón que contiene los datos de identificación de las actividades económicas y demás información relevante. Por ejemplo RUC, RFC, CUIT, etc.'); ?></span>
    </div>
        <div class='form-group'>
      <?= $this->Form->input('business_category_id', ['label'=>__('Seleccione una Categoría'), 'options' => $businessCategories, 'class'=>'form-control']); ?>
    </div>
    <div class='form-group'>
      <?= $this->Form->input('city_id', ['options' => $cities, 'label'=>__('Seleccione una ciudad'), 'class'=>'form-control']); ?>
    </div>
    <div class='form-group'>
      <?= $this->Form->input('address', ['label'=>__('* Dirección'), 'class'=>'form-control', 'placeholder' => 'Villa Área 51. K 14.']); ?>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="row">
      <div class="col-lg-6">
	<div class='form-group'>
	  <?= $this->Form->input('phone1', ['label'=> __('Teléfono 1'), 'class'=>'form-control', 'placeholder' => '+51 987 654 321']); ?>
	</div>
      </div>
      <div class="col-lg-6">
	<div class='form-group'>
	  <?= $this->Form->input('phone2', ['label'=> __('Teléfono 2'), 'class'=>'form-control', 'placeholder' => '+51 123 456 789']); ?>
	</div>
      </div>
    </div> <!-- /row -->
    <div class="row">
      <div class="col-lg-6">
	<div class='form-group'>
	  <?= $this->Form->input('email1', ['label'=> __('Email 1'), 'class'=>'form-control', 'placeholder' => 'diana@email.com']); ?>
	</div>
      </div>
      <div class="col-lg-6">
	<div class='form-group'>
	  <?= $this->Form->input('email2', ['label'=> __('Email 2'), 'class'=>'form-control', 'placeholder' => 'viktor@email.com']); ?>
	</div>
      </div>
    </div> <!-- /row -->
    <div class="form-group">
      <?= $this->Form->input('contact1', ['label'=>__('* Nombres completos de Contacto 1'), 'class'=>'form-control', 'placeholder'=>'Armando Casas Hermosa']); ?>
    </div>
    <div class="form-group">
      <?= $this->Form->input('contact2', ['label'=>__('Nombres completos de Contacto 2'), 'class'=>'form-control', 'placeholder'=>'Leonardo Pinto Cuadros']); ?>
    </div>
    <?php $creditOptions=['1'=>'Crédito', '2'=>'Contado', '3'=>'Crédito y Contado']; ?>
    <div class='form-group'>
      <?= $this->Form->input('credit', ['label'=>__('Seleccione el Tipo de Pago'), 'options' => $creditOptions, 'class'=>'form-control']); ?>
    </div>
    <hr>
    <div class='form-group'>
      <?= $this->Form->button(__('Guardar Proveedor'), ['class'=>'btn btn-lg btn-block btn-success']) ?>
      <?= $this->Form->end() ?>
    </div>
  </div>


</div>

<!-- 
<div class="providers form large-9 medium-8 columns content">
  <fieldset>
    <legend><?= __('Add Provider') ?></legend>
    <?php
    echo $this->Form->input('busines_id', ['options' => $business]);
    ?>
  </fieldset>
</div>
-->
