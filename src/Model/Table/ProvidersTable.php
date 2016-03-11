<?php
namespace App\Model\Table;

use App\Model\Entity\Provider;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Providers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Business
 * @property \Cake\ORM\Association\BelongsTo $Cities
 * @property \Cake\ORM\Association\BelongsTo $BusinessCategories
 */
class ProvidersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('providers');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Business', [
            'foreignKey' => 'busines_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cities', [
            'foreignKey' => 'city_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('BusinessCategories', [
            'foreignKey' => 'business_category_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('code', 'create')
            ->notEmpty('code');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->requirePresence('phone1', 'create')
            ->notEmpty('phone1');

        $validator
            ->requirePresence('phone2', 'create')
            ->notEmpty('phone2');

        $validator
            ->requirePresence('email1', 'create')
            ->notEmpty('email1');

        $validator
            ->requirePresence('email2', 'create')
            ->notEmpty('email2');

        $validator
            ->requirePresence('contact1', 'create')
            ->notEmpty('contact1');

        $validator
            ->requirePresence('contact2', 'create')
            ->notEmpty('contact2');

        $validator
            ->integer('credit')
            ->requirePresence('credit', 'create')
            ->notEmpty('credit');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['busines_id'], 'Business'));
        $rules->add($rules->existsIn(['city_id'], 'Cities'));
        $rules->add($rules->existsIn(['business_category_id'], 'BusinessCategories'));
        return $rules;
    }
}
