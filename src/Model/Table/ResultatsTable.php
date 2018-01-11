<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Resultats Model
 *
 * @method \App\Model\Entity\Resultat get($primaryKey, $options = [])
 * @method \App\Model\Entity\Resultat newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Resultat[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Resultat|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Resultat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Resultat[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Resultat findOrCreate($search, callable $callback = null, $options = [])
 */
class ResultatsTable extends Table
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

        $this->setTable('resultats');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('numEtu')
            ->maxLength('numEtu', 255)
            ->requirePresence('numEtu', 'create')
            ->notEmpty('numEtu');

        $validator
            ->scalar('module')
            ->maxLength('module', 255)
            ->requirePresence('module', 'create')
            ->notEmpty('module');

        $validator
            ->scalar('note')
            ->maxLength('note', 255)
            ->requirePresence('note', 'create')
            ->notEmpty('note');

        return $validator;
    }
}
