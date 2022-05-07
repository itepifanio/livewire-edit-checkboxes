<?php

namespace App\Http\Livewire;

use App\Models\{Post, Tag};
use Livewire\Component;

class EditHideForm extends Component
{
    public $post;

    public $taggs;

    protected $rules = [
        'post.name' => 'required|max:100',
        'taggs'  => 'required'
    ];

    public function mount(Post $post) 
    {
        $this->post = $post;

        $this->taggs = $post->tags()->pluck('tags.id')->all();
    }

    public function save()
    {
        $this->validate();

        $this->post->save();        

        $this->post->tags()->sync($this->taggs);
    }

    public function render()
    {
        $tags = Tag::all();
        return view('livewire.edit-hide-form', compact('tags'));
    }
}
