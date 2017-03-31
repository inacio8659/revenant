<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('SIAPE') ?></th>
            <td><?= h($user->SIAPE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('NAME') ?></th>
            <td><?= h($user->NAME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EMAIL') ?></th>
            <td><?= h($user->EMAIL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('USERNAME') ?></th>
            <td><?= h($user->USERNAME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PASSWORD') ?></th>
            <td><?= h($user->PASSWORD) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PLANO') ?></th>
            <td><?= h($user->PLANO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ROLE') ?></th>
            <td><?= h($user->ROLE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($user->ID) ?></td>
        </tr>
    </table>
</div>
