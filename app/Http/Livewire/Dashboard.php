<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;

    public $updateStateId = 0;
    public $picture_name = 0;
    public $title = 0;
    public $content = 0;
    public $picture = 0;

    public function render()
    {
        $this->article = Article::latest()->simplePaginate(10);
        return view('dashboard', [
            'articles' => $this->article
        ]);
    }
    
    public function showUpdateForm($articleId) {
        $article = Article::find($articleId);
        $this->picture_name = $article->picture_name;
        $this->title = $article->title;
        $this->content = $article->content;
        $this->picture = $article->picture;

        $this->updateStateId = $articleId;
    }

    public function update($articleId) {
        $article = Article::find($articleId);
        $article->picture_name = $this->picture_name;
        $article->title = $this->title;
        $article->content = $this->content;
        $article->picture = $this->picture;

        $article->save();
        $this->updateStateId = 0;

    }
    public function delete($articleId) {
        $article = Article::find($articleId);
        $article->delete();
    }
}
