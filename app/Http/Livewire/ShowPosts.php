<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowPosts extends Component
{

    use WithFileUploads;
    use WithPagination;

    public $search = '';
    public $sort = 'id';
    public $open = false;
    public $direction = 'asc';
    public $numPost = '10';
    protected $listeners = ['render','destroy'];

    protected $queryString = [
        "numPost" => ['except'=>'10'],
        "sort"  => ['except'=>'id'],
        "direction"  => ['except'=>'asc'],
        "search"  => ['except'=>'']
    ];
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
    public function open($id)
    {
        $this->open = true;
        $this->selectedPostId = $id;
    }
    public function updatingSearch(){
        $this->resetPage();

    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        session()->flash('message', 'Post eliminado correctamente.');

    }
    public function render()
    {
        $posts = Post::where('title', 'like','%'. $this->search . '%')
            ->orwhere('content', 'like','%'. $this->search . '%')
            ->orderBy($this->sort, $this->direction)
            ->paginate($this->numPost);

        return view('livewire.show-posts', compact('posts'));
    }

}
