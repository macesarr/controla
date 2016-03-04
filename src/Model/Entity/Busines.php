<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Busines Entity.
 *
 * @property int $id
 * @property int $business_category_id
 * @property \App\Model\Entity\BusinessCategory $business_category
 * @property string $name
 * @property string $slug
 * @property int $city_id
 * @property \App\Model\Entity\City $city
 * @property string $address
 * @property string $email
 * @property string $facebook
 * @property string $twitter
 * @property string $logo
 * @property string $folder
 * @property int $membership
 * @property string $active
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 */
class Busines extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
