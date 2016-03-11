<style>
 .table a{
   color: #444444;
 }
</style>

<div class="page-header">
  <h2><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span><?= __(' Proveedores') ?></h2>
</div>

<p class="bs-component">
  <?= $this->Html->link(__('Nuevo Proveedor'), ['action' => 'add'], ['class' => 'btn btn-info']) ?>
</p>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th><?= $this->Paginator->sort('name', __('Nombre')) ?></th>
      <th><?= $this->Paginator->sort('code', __('Código')) ?></th>
      <th><?= $this->Paginator->sort('city_id', __('Ciudad')) ?></th>
      <th><?= $this->Paginator->sort('address', __('Dirección')) ?></th>
      <th><?= $this->Paginator->sort('phone1', __('Teléfono 1')) ?></th>
      <th><?= $this->Paginator->sort('phone2', __('Teléfono 2')) ?></th>
      <th><?= $this->Paginator->sort('business_category_id', __('Categoría')) ?></th>
      <th><?= $this->Paginator->sort('credit', __('Tipo de Pago')) ?></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($providers as $provider): ?>
      <tr>
        <td><?= h($provider->name) ?></td>
        <td><?= h($provider->code) ?></td>
        <td><?= h($provider->city->name) ?></td>
        <td><?= h($provider->address) ?></td>
        <td><?= h($provider->phone1) ?></td>
        <td><?= h($provider->phone2) ?></td>
        <td><?= h($provider->business_category->name) ?></td>
	<?php $payment = ['1'=>'Crédito', '2'=>'Contado', '3'=>'Crédito y Contado'] ?>
        <td><?= h($payment[$provider->credit]) ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<div class="paginator">
  <ul class="pagination">
    <?= $this->Paginator->prev('< ' . __('previous')) ?>
    <?= $this->Paginator->numbers() ?>
    <?= $this->Paginator->next(__('next') . ' >') ?>
  </ul>
  <p><?= $this->Paginator->counter() ?></p>
</div>

