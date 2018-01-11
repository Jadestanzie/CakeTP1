<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resultat $resultat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Resultats'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Edit Resultats'), ['action' => 'edit']) ?></li>
        <li><?= $this->Html->link(__('Delete Resultats'), ['action' => 'delete']) ?></li>
    </ul>
</nav>
<div class="resultats form large-9 medium-8 columns content">
    <?= $this->Form->create($resultat) ?>
    <fieldset>
        <legend><?= __('Add Resultat') ?></legend>
        <?php
            echo $this->Form->control('numEtu');
            echo $this->Form->control('module');
            echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
