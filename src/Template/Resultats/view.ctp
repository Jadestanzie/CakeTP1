<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resultat $resultat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Resultat'), ['action' => 'edit', $resultat->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Resultat'), ['action' => 'delete', $resultat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resultat->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Resultats'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resultat'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="resultats view large-9 medium-8 columns content">
    <h3><?= h($resultat->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NumEtu') ?></th>
            <td><?= h($resultat->numEtu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Module') ?></th>
            <td><?= h($resultat->module) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= h($resultat->note) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($resultat->id) ?></td>
        </tr>
    </table>
</div>
