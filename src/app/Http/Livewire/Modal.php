<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Modal extends Component
{
    public $last_name, $first_name, $gender, $email, $tell, $address, $building, $detail, $category_id;
    public $contact_id;
    public $isModalOpen = false;


    public function render()
    {
        return view('livewire.modal');
    }

    public function openModal($contact_id = null)
    {
        $this->reset();
        if ($contact_id) {
            $contact = Contact::find($contact_id);
            $this->last_name = $contact->last_name;
            $this->gender = $contact->gender;
            $this->email = $contact->email;
            $this->tell = $contact->tell;
            $this->address = $contact->address;
            $this->building = $contact->building;
            $this->detail = $contact->detail;
            $this->category_id = $contact->category_id;
            $this->contact_id = $contact_id;
        }
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function delete($contact_id)
    {
        $contact = Contact::find($contact_id);
        if ($contact) {
            $contact->delete();
        }
    }
}
