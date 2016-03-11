<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $provider->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $provider->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Providers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Business'), ['controller' => 'Business', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Busines'), ['controller' => 'Business', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Business Categories'), ['controller' => 'BusinessCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Business Category'), ['controller' => 'BusinessCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="providers form large-9 medium-8 columns content">
    <?= $this->Form->create($provider) ?>
    <fieldset>
        <legend><?= __('Edit Provider') ?></legend>
        <?php
            echo $this->Form->input('busines_id', ['options' => $business]);
            echo $this->Form->input('name');
            echo $this->Form->input('code');
            echo $this->Form->input('city_id', ['options' => $cities]);
            echo $this->Form->input('address');
            echo $this->Form->input('phone1');
            echo $this->Form->input('phone2');
            echo $this->Form->input('email1');
            echo $this->Form->input('email2');
            echo $this->Form->input('contact1');
            echo $this->Form->input('contact2');
            echo $this->Form->input('business_category_id', ['options' => $businessCategories]);
            echo $this->Form->input('credit');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
