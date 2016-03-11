<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Provider'), ['action' => 'edit', $provider->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Provider'), ['action' => 'delete', $provider->id], ['confirm' => __('Are you sure you want to delete # {0}?', $provider->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Providers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Provider'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Business'), ['controller' => 'Business', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Busines'), ['controller' => 'Business', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Business Categories'), ['controller' => 'BusinessCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Business Category'), ['controller' => 'BusinessCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="providers view large-9 medium-8 columns content">
    <h3><?= h($provider->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Busines') ?></th>
            <td><?= $provider->has('busines') ? $this->Html->link($provider->busines->name, ['controller' => 'Business', 'action' => 'view', $provider->busines->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($provider->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Code') ?></th>
            <td><?= h($provider->code) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= $provider->has('city') ? $this->Html->link($provider->city->name, ['controller' => 'Cities', 'action' => 'view', $provider->city->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($provider->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone1') ?></th>
            <td><?= h($provider->phone1) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone2') ?></th>
            <td><?= h($provider->phone2) ?></td>
        </tr>
        <tr>
            <th><?= __('Email1') ?></th>
            <td><?= h($provider->email1) ?></td>
        </tr>
        <tr>
            <th><?= __('Email2') ?></th>
            <td><?= h($provider->email2) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact1') ?></th>
            <td><?= h($provider->contact1) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact2') ?></th>
            <td><?= h($provider->contact2) ?></td>
        </tr>
        <tr>
            <th><?= __('Business Category') ?></th>
            <td><?= $provider->has('business_category') ? $this->Html->link($provider->business_category->name, ['controller' => 'BusinessCategories', 'action' => 'view', $provider->business_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($provider->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Credit') ?></th>
            <td><?= $this->Number->format($provider->credit) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($provider->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated') ?></th>
            <td><?= h($provider->updated) ?></td>
        </tr>
    </table>
</div>
