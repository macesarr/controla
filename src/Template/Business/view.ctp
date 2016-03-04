<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Busines'), ['action' => 'edit', $busines->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Busines'), ['action' => 'delete', $busines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busines->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Business'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Busines'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Business Categories'), ['controller' => 'BusinessCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Business Category'), ['controller' => 'BusinessCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="business view large-9 medium-8 columns content">
    <h3><?= h($busines->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Business Category') ?></th>
            <td><?= $busines->has('business_category') ? $this->Html->link($busines->business_category->name, ['controller' => 'BusinessCategories', 'action' => 'view', $busines->business_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($busines->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Slug') ?></th>
            <td><?= h($busines->slug) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= $busines->has('city') ? $this->Html->link($busines->city->name, ['controller' => 'Cities', 'action' => 'view', $busines->city->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($busines->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($busines->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Facebook') ?></th>
            <td><?= h($busines->facebook) ?></td>
        </tr>
        <tr>
            <th><?= __('Twitter') ?></th>
            <td><?= h($busines->twitter) ?></td>
        </tr>
        <tr>
            <th><?= __('Logo') ?></th>
            <td><?= h($busines->logo) ?></td>
        </tr>
        <tr>
            <th><?= __('Folder') ?></th>
            <td><?= h($busines->folder) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($busines->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Membership') ?></th>
            <td><?= $this->Number->format($busines->membership) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($busines->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated') ?></th>
            <td><?= h($busines->updated) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Active') ?></h4>
        <?= $this->Text->autoParagraph(h($busines->active)); ?>
    </div>
</div>
