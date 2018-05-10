<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('New Libreta'), ['action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_producto'); ?></th>
            <th><?= $this->Paginator->sort('tipo_producto'); ?></th>
            <th><?= $this->Paginator->sort('variedad'); ?></th>
            <th><?= $this->Paginator->sort('procedencia'); ?></th>
            <th><?= $this->Paginator->sort('volumen'); ?></th>
            <th><?= $this->Paginator->sort('grado_alcoholico'); ?></th>
            <th><?= $this->Paginator->sort('acidez_volatil'); ?></th>
            <th><?= $this->Paginator->sort('acidez_total'); ?></th>
            <th><?= $this->Paginator->sort('azucar'); ?></th>
            <th><?= $this->Paginator->sort('extracto_seco'); ?></th>
            <th><?= $this->Paginator->sort('grado_brix'); ?></th>
            <th><?= $this->Paginator->sort('año_elavoracion'); ?></th>
            <th><?= $this->Paginator->sort('created'); ?></th>
            <th><?= $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($vinos as $vinos): ?>
        <tr>
            <td><?= h($vinos->id_producto) ?></td>
            <td><?= h($vinos->tipo_producto) ?></td>
            <td><?= h($vinos->variedad) ?></td>
            <td><?= h($vinos->procedencia) ?></td>
            <td><?= h($vinos->volumen) ?></td>
            <td><?= h($vinos->grado_alcoholico) ?></td>
            <td><?= h($vinos->acidez_volatil) ?></td>
            <td><?= h($vinos->acidez_total) ?></td>
            <td><?= h($vinos->azucar) ?></td>
            <td><?= h($vinos->extracto_seco) ?></td>
            <td><?= h($vinos->grado_brix) ?></td>
            <td><?= h($vinos->año_elavoracion) ?></td>
            <td><?= h($vinos->created) ?></td>
            <td><?= h($vinos->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $vinos->id_producto], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $vinos->id_producto], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $vinos->id_producto], ['confirm' => __('Are you sure you want to delete # {0}?', $vinos->id_producto), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
