<?php

namespace Modules\Blog\Http\Livewire;

use Livewire\Component;
use Modules\Blog\Entities\Post;
use Livewire\WithPagination;

class ShowPosts extends Component
{
  use WithPagination;

  public $search = '';
  public $category;

  public function mount($category)
  {
    //$this->search = $this->search;
    $this->category = $category;
  }

  public function updatingSearch()
  {
    $this->resetPage();
  }

  public function render()
  {
    if ($this->category) {
      $posts = $this->category->posts()->publish()->with(['creator'])->orderBy('published_at', 'desc')->paginate();
    } else {
      $posts = Post::publish()->with(['creator'])->orderBy('published_at', 'desc')->paginate();
    }


    return view('blog::livewire.show-posts', [
      'posts' => $posts,
    ]);
  }
}
