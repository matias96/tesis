<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $vinos->id_producto],
        ['confirm' => __('Are you sure you want to delete # {0}?', $vinos->id_producto)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List vinos'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $vinos->id_producto],
        ['confirm' => __('Are you sure you want to delete # {0}?', $vinos->id_producto)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Libretas'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($vinos); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['vinos']) ?></legend>
    <?php
    echo $this->Form->control('tipo_producto');
    echo $this->Form->control('variedad');
    echo $this->Form->control('procedencia');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
