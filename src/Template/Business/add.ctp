<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
<li class="heading"><?= __('Actions') ?></li>
<li><?= $this->Html->link(__('List Business'), ['action' => 'index']) ?></li>
<li><?= $this->Html->link(__('List Business Categories'), ['controller' => 'BusinessCategories', 'action' => 'index']) ?></li>
<li><?= $this->Html->link(__('New Business Category'), ['controller' => 'BusinessCategories', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
<li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
</ul>
</nav>-->

<div class="page-header">
  <div class="row">
    <div class="col-lg-12">
      <h1><?= __('Ingrese los datos de tu negocio') ?></h1>
    </div>
  </div>
</div>

<div class="row">
  <?= $this->Form->create($busines) ?>
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
    </div>
    <div class='form-group'>
      <?= $this->Form->input('facebook', ['label'=>__('Facebook'), 'class'=>'form-control', 'value'=>'#']); ?>
    </div>
    <div class='form-group'>
      <?= $this->Form->input('twitter', ['label'=>__('Twitter'), 'class'=>'form-control', 'value'=>'#']); ?>
    </div>

        <?php
    echo $this->Form->input('logo');
    echo $this->Form->input('folder');
    ?>

    <?php
    $this->Form->hidden('membership', ['value'=>'0']);
    $this->Form->hidden('active', ['value'=>'1']);
    ?>
    
    <hr>
    
    <div class='form-group'>
      <?= $this->Form->button(__('Guardar'), ['class'=>'btn btn-lg btn-block btn-success']) ?>
      <?= $this->Form->end() ?>
    </div>
  </div><!-- /col-lg-6 -->
  
</div><!-- /row -->


<!--
<div class="business form large-9 medium-8 columns content">
  
  <fieldset>
    <legend></legend>

  </fieldset>

</div>
-->
