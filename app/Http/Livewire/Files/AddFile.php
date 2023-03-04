<?php

namespace App\Http\Livewire\Files;

use Livewire\Component;
use App\Models\Files;
use App\Models\User;

class AddFile extends Component
{
    public Files $file;
    public User $user;

    public function render()
    {
        return view('livewire.files.add-file');
    }
}
