<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Business Category'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Business'), ['controller' => 'Business', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Busines'), ['controller' => 'Business', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="businessCategories index large-9 medium-8 columns content">
    <h3><?= __('Business Categories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('updated') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($businessCategories as $businessCategory): ?>
            <tr>
                <td><?= $this->Number->format($businessCategory->id) ?></td>
                <td><?= h($businessCategory->name) ?></td>
                <td><?= h($businessCategory->created) ?></td>
                <td><?= h($businessCategory->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $businessCategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $businessCategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $businessCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $businessCategory->id)]) ?>
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
