<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VinosFixture
 *
 */
class VinosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_producto' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'tipo_producto' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'variedad' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'procedencia' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'volumen' => ['type' => 'decimal', 'length' => 11, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'grado_alcoholico' => ['type' => 'decimal', 'length' => 11, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'acidez_volatil' => ['type' => 'decimal', 'length' => 11, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'acidez_total' => ['type' => 'decimal', 'length' => 11, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'azucar' => ['type' => 'decimal', 'length' => 11, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'extracto_seco' => ['type' => 'decimal', 'length' => 11, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'grado_brix' => ['type' => 'decimal', 'length' => 11, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'año_elavoracion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id_producto' => 'afbf70d9-9f95-4ad9-8bc2-4aa0f7d9e8f4',
                'tipo_producto' => 'Lorem ipsum dolor sit amet',
                'variedad' => 'Lorem ipsum dolor sit amet',
                'procedencia' => 'Lorem ipsum dolor sit amet',
                'volumen' => 1.5,
                'grado_alcoholico' => 1.5,
                'acidez_volatil' => 1.5,
                'acidez_total' => 1.5,
                'azucar' => 1.5,
                'extracto_seco' => 1.5,
                'grado_brix' => 1.5,
                'año_elavoracion' => 1,
                'created' => '2018-05-10 20:45:46',
                'modified' => '2018-05-10 20:45:46'
            ],
        ];
        parent::init();
    }
}
