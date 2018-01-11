<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Resultat Entity
 *
 * @property int $id
 * @property string $numEtu
 * @property string $module
 * @property string $note
 */
class Resultat extends Entity
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
        'numEtu' => true,
        'module' => true,
        'note' => true
    ];
}
