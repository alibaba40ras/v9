<?php
class ContactsController extends Controller {
    public function index() {
        $contact_collection = new ContactsCollection();
        $contacts = $contact_collection->get_all();
        $this->loadView('website/contacts', array(
            'contacts' => $contacts
        ));
        $contact_collection = new ContactsCollection();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $contact = new ContactsEntity();
            $contact
            	->setDate(date('Y-m-d; H:i:s'))
                ->setName($_POST['name'])
                ->setEmail($_POST['email'])
                ->setTel($_POST['tel'])
                ->setMessage($_POST['message']);
                $contact_collection->save($contact);
        }
            $contact_collection = new ContactsCollection();
            $this->loadView('website/contacts');
    }
}
 ?>