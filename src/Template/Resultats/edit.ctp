<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resultat $resultat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $resultat->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $resultat->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Resultats'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="resultats form large-9 medium-8 columns content">
    <?= $this->Form->create($resultat) ?>
    <fieldset>
        <legend><?= __('Edit Resultat') ?></legend>
        <?php
            echo $this->Form->control('numEtu');
            echo $this->Form->control('module');
            echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
