<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resultat[]|\Cake\Collection\CollectionInterface $resultats
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Resultat'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="resultats index large-9 medium-8 columns content">
    <h3><?= __('Resultats') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numEtu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('module') ?></th>
                <th scope="col"><?= $this->Paginator->sort('note') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultats as $resultat): ?>
            <tr>
                <td><?= $this->Number->format($resultat->id) ?></td>
                <td><?= h($resultat->numEtu) ?></td>
                <td><?= h($resultat->module) ?></td>
                <td><?= h($resultat->note) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $resultat->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $resultat->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $resultat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resultat->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
