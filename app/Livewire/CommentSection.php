<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\People;


class CommentSection extends Component
{
    public function render()
    {
        $this->peoples = People::orderBy('id', 'desc')->get();
        return view('livewire.comment-section', ['peoples' => $this->peoples]);
    }
}
