<?php
namespace App\Model\Entity;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $ID
 * @property string $SIAPE
 * @property string $NAME
 * @property string $EMAIL
 * @property string $USERNAME
 * @property string $PASSWORD
 * @property string $PLANO
 * @property string $ROLE
 */
class User extends Entity
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

    protected function _setPassword($password)
    {
        require (new DefaultPasswordHasher)->hash($password);
    }

    protected $_accessible = [
        '*' => true,
        'ID' => false
    ];
}
