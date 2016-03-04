<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Business Category'), ['action' => 'edit', $businessCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Business Category'), ['action' => 'delete', $businessCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $businessCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Business Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Business Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Business'), ['controller' => 'Business', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Busines'), ['controller' => 'Business', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="businessCategories view large-9 medium-8 columns content">
    <h3><?= h($businessCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($businessCategory->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($businessCategory->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($businessCategory->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated') ?></th>
            <td><?= h($businessCategory->updated) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Business') ?></h4>
        <?php if (!empty($businessCategory->business)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Business Category Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Slug') ?></th>
                <th><?= __('City Id') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Facebook') ?></th>
                <th><?= __('Twitter') ?></th>
                <th><?= __('Logo') ?></th>
                <th><?= __('Folder') ?></th>
                <th><?= __('Membership') ?></th>
                <th><?= __('Active') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Updated') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($businessCategory->business as $business): ?>
            <tr>
                <td><?= h($business->id) ?></td>
                <td><?= h($business->business_category_id) ?></td>
                <td><?= h($business->name) ?></td>
                <td><?= h($business->slug) ?></td>
                <td><?= h($business->city_id) ?></td>
                <td><?= h($business->address) ?></td>
                <td><?= h($business->email) ?></td>
                <td><?= h($business->facebook) ?></td>
                <td><?= h($business->twitter) ?></td>
                <td><?= h($business->logo) ?></td>
                <td><?= h($business->folder) ?></td>
                <td><?= h($business->membership) ?></td>
                <td><?= h($business->active) ?></td>
                <td><?= h($business->created) ?></td>
                <td><?= h($business->updated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Business', 'action' => 'view', $business->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Business', 'action' => 'edit', $business->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Business', 'action' => 'delete', $business->id], ['confirm' => __('Are you sure you want to delete # {0}?', $business->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
