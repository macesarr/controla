<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Business Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Business'), ['controller' => 'Business', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Busines'), ['controller' => 'Business', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="businessCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($businessCategory) ?>
    <fieldset>
        <legend><?= __('Add Business Category') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
