<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Busines'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Business Categories'), ['controller' => 'BusinessCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Business Category'), ['controller' => 'BusinessCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="business index large-9 medium-8 columns content">
    <h3><?= __('Business') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('business_category_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('city_id') ?></th>
                <th><?= $this->Paginator->sort('address') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('facebook') ?></th>
                <th><?= $this->Paginator->sort('twitter') ?></th>
                <th><?= $this->Paginator->sort('logo') ?></th>
                <th><?= $this->Paginator->sort('folder') ?></th>
                <th><?= $this->Paginator->sort('membership') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('updated') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($business as $busines): ?>
            <tr>
                <td><?= $this->Number->format($busines->id) ?></td>
                <td><?= $busines->has('business_category') ? $this->Html->link($busines->business_category->name, ['controller' => 'BusinessCategories', 'action' => 'view', $busines->business_category->id]) : '' ?></td>
                <td><?= h($busines->name) ?></td>
                <td><?= h($busines->slug) ?></td>
                <td><?= $busines->has('city') ? $this->Html->link($busines->city->name, ['controller' => 'Cities', 'action' => 'view', $busines->city->id]) : '' ?></td>
                <td><?= h($busines->address) ?></td>
                <td><?= h($busines->email) ?></td>
                <td><?= h($busines->facebook) ?></td>
                <td><?= h($busines->twitter) ?></td>
                <td><?= h($busines->logo) ?></td>
                <td><?= h($busines->folder) ?></td>
                <td><?= $this->Number->format($busines->membership) ?></td>
                <td><?= h($busines->created) ?></td>
                <td><?= h($busines->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $busines->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $busines->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $busines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $busines->id)]) ?>
                </td>
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
</div>
