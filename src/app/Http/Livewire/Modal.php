<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class Modal extends Component
{
    public $isModalOpen = false;


    public function render()
    {
        return view('livewire.modal', ['contacts' => Contact::with('category')]);
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }
}
