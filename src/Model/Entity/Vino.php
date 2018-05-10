<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vino Entity
 *
 * @property string $id_producto
 * @property string $tipo_producto
 * @property string $variedad
 * @property string $procedencia
 * @property float $volumen
 * @property float $grado_alcoholico
 * @property float $acidez_volatil
 * @property float $acidez_total
 * @property float $azucar
 * @property float $extracto_seco
 * @property float $grado_brix
 * @property int $año_elavoracion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Vino extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id_producto' => true,
        'tipo_producto' => true,
        'variedad' => true,
        'procedencia' => true,
        'volumen' => true,
        'grado_alcoholico' => true,
        'acidez_volatil' => true,
        'acidez_total' => true,
        'azucar' => true,
        'extracto_seco' => true,
        'grado_brix' => true,
        'año_elavoracion' => true,
        'created' => true,
        'modified' => true
    ];
}
