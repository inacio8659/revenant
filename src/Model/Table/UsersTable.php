<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
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
            ->integer('ID')
            ->allowEmpty('ID', 'create');

        $validator
            ->requirePresence('SIAPE', 'create')
            ->notEmpty('SIAPE')
            ->add('SIAPE', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('NAME', 'create')
            ->notEmpty('NAME');

        $validator
            ->requirePresence('EMAIL', 'create')
            ->notEmpty('EMAIL');

        $validator
            ->requirePresence('USERNAME', 'create')
            ->notEmpty('USERNAME');

        $validator
            ->requirePresence('PASSWORD', 'create')
            ->notEmpty('PASSWORD');

        $validator
            ->requirePresence('PLANO', 'create')
            ->notEmpty('PLANO');

        $validator
            ->requirePresence('role' , 'create')
            ->allowEmpty('ROLE');

        $validator
            ->notEmpty('username','A username is required')
            ->notEmpty('password','A password is required')
            ->notEmpty('role','A role is required')
            ->add('role','inList',[
                'rule'=>['inList',['servidor','gestor']],
                'message'=>'Please enter a valid role'
        ]);

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
        $rules->add($rules->isUnique(['SIAPE']));

        return $rules;
    }
}
