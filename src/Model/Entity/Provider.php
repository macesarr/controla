<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Provider Entity.
 *
 * @property int $id
 * @property int $busines_id
 * @property \App\Model\Entity\Busines $busines
 * @property string $name
 * @property string $code
 * @property int $city_id
 * @property \App\Model\Entity\City $city
 * @property string $address
 * @property string $phone1
 * @property string $phone2
 * @property string $email1
 * @property string $email2
 * @property string $contact1
 * @property string $contact2
 * @property int $business_category_id
 * @property \App\Model\Entity\BusinessCategory $business_category
 * @property int $credit
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 */
class Provider extends Entity
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
