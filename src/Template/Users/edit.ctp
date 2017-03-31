<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('SIAPE');
            echo $this->Form->control('NAME');
            echo $this->Form->control('EMAIL');
            echo $this->Form->control('USERNAME');
            echo $this->Form->control('PASSWORD');
            echo $this->Form->control('PLANO');
            echo $this->Form->control('ROLE');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
