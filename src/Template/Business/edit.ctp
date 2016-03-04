<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $busines->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $busines->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Business'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Business Categories'), ['controller' => 'BusinessCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Business Category'), ['controller' => 'BusinessCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="business form large-9 medium-8 columns content">
    <?= $this->Form->create($busines) ?>
    <fieldset>
        <legend><?= __('Edit Busines') ?></legend>
        <?php
            echo $this->Form->input('business_category_id', ['options' => $businessCategories]);
            echo $this->Form->input('name');
            echo $this->Form->input('slug');
            echo $this->Form->input('city_id', ['options' => $cities]);
            echo $this->Form->input('address');
            echo $this->Form->input('email');
            echo $this->Form->input('facebook');
            echo $this->Form->input('twitter');
            echo $this->Form->input('logo');
            echo $this->Form->input('folder');
            echo $this->Form->input('membership');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
