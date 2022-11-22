<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class Forms extends Component
{
    public $name;
    public $surname;
    public $email;
    public $text;
    protected $messages = [
        'name.required' => 'inserire nome',
        'surname.required' => 'inserire cognome',
        'email.required' => 'inserire mail',
        'text.required' => 'inserire testo'
    ];
    public function submit (){
        $validateData = $this->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'text' => 'required'
        ]);

        Contact::create($validateData);
        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.forms');
    }
}
