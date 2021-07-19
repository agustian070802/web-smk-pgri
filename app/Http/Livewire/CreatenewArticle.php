<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatenewArticle extends Component
{
    use WithFileUploads;
    public
    $user_id, 
    $picture_name, 
    $title, 
    $content, 
    $picture;
    
    protected $rules = [
        'picture_name' => 'required|min:6',
        'title' => 'required|title',
        'content' => 'required|content',
        'picture' => 'required|picture',
    ];
    protected $messages = [
        'picture_name' => 'Picture name tidak boleh kosong!',
        'title' => 'Title name tidak boleh kosong!',
        'content' => 'Content name tidak boleh kosong!',
        'picture' => 'Picture name tidak boleh kosong!',
    ];
    
    public function render()
    {
        return view('livewire.createnew-article');
    }
    
    public function createnewArticle(){
        $this->validate([
            'picture' => 'image|max:2048', // 1MB Max
        ]);
        $picture = $this->picture->store('photos', 'public');
        Article::create([
            'user_id' => Auth::id(),
            'picture_name' => $this->picture_name,
            'title' => $this->title,
            'content' => $this->content,
            'picture' => $picture,
        ]);
        
        $this->picture_name = "";
        $this->title = "";
        $this->content = "";
        $this->picture = "";
        return redirect()->to('/dashboard');
    }
}
