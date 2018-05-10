<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List vinos'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List vinos'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($vinos); ?>
<fieldset>
    <legend><?= __('Add {0}', ['vinos']) ?></legend>
    <?php
    echo $this->Form->control('nombre');
    echo $this->Form->control('carrera_id');
    if (isset($userRole) && $userRole === "admin")
    	echo $this->Form->control('user_id');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
