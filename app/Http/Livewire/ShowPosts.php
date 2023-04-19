<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;


class ShowPosts extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'asc';

    protected $listeners = ['render'];
    public function order($sort){
        if ($this->sort = $sort){
            if ($this->direction == 'desc'){
                $this->direction = 'asc';
            }else {
                $this->direction = 'desc';
            }
        }else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }

    }
    public function render()
    {
        $posts = Post::where('title', 'like','%'. $this->search . '%')
        ->orwhere('content', 'like','%'. $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->get();
        return view('livewire.show-posts', compact('posts'));
    }

}
