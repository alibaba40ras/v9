<?php

class ContactsCollection extends Collection {

    protected $table = 'contacts';
    protected $entity = 'ContactsEntity';
    
    public function save(Entity $entity) {
        
        $data = array(
            'date' => $entity->getDate(),
            'name' => $entity->getName(),
            'email' => $entity->getEmail(),
            'tel' => $entity->getTel(),
            'message' => $entity->getMessage(),
            
        );

        if ($entity->getId() > 0) {
            $this->db->update($this->table, $data, $entity->getId());
        } else {
            $entity->setId($this->db->insert($this->table, $data));
        }
     
    }
}