<?php

namespace App\Http\Livewire;

use App\Models\Article as ModelsArticle;
use Livewire\Component;

class Article extends Component
{
    public function render()
    {
        return view('livewire.article', [
            'article' => ModelsArticle::latest()->get()
        ]);
    }
}
