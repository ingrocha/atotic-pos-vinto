<?php
App::uses('AppModel', 'Model', 'AuthComponent', 'Controller/Component');
/**
 * Usuario Model
 *
 * @property Perfile $Perfile
 * @property Asistencia $Asistencia
 * @property Contrato $Contrato
 * @property Multa $Multa
 * @property Pedido $Pedido
 */
class Usuario extends AppModel
{

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array('Perfile' => array(
            'className' => 'Perfile',
            'foreignKey' => 'perfile_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''));

    public $actAs = array('Acl' => array('requester'));

    function parentNode()
    {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        $data = $this->data;
        if (empty($this->data)) {
            $data = $this->read();
        }
        if (!$data['Usuario']['perfile_id']) {
            return null;
        } else {
            return array('Perfil' => array('id' => $data['Usuario']['perfile_id']));
        }
    }

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Asistencia' => array(
            'className' => 'Asistencia',
            'foreignKey' => 'usuario_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''),
        'Contrato' => array(
            'className' => 'Contrato',
            'foreignKey' => 'usuario_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''),
        'Multa' => array(
            'className' => 'Multa',
            'foreignKey' => 'usuario_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''),
        'Pedido' => array(
            'className' => 'Pedido',
            'foreignKey' => 'usuario_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''));

    public function beforeSave()
    {
        $this->data['Usuario']['pass'] = AuthComponent::password($this->data['Usuario']['pass']);
        return true;
    }

}
