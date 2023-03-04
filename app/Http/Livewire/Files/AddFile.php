<?php

namespace App\Http\Livewire\Files;

use Livewire\Component;

class AddFile extends Component
{
    public $file;
    public $user;

    protected $rules = [
        'file' => 'file',
        'user' => 'user'
    ];

    public function render()
    {
        return view('livewire.files.add-file');
    }
}
