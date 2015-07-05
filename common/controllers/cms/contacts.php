<?php

class ContactsController extends CmsController {
    public function index() {

        $contact_collection = new ContactsCollection();
        $contacts = $contact_collection->get_all();

        $this->loadView('cms/contacts', array(
            'contact' => $contacts
        ));
    }
    
    public function delete() {
        $contact_collection = new ContactsCollection();
        $contact_collection->delete($_GET['id']);
        header('Location: index.php?c=contacts');
    }
 }   
 ?>