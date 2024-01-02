<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;


class Annotation extends Component
{
   
   public $annotations;
   

   public function saveAnnotations($annotations)
   {
    $this->annotations = json_encode($annotations);

    $annotations = Post::find(1);
    
    Post :: create([
        'annotations'=> $this->annotations,
    ]);

    }  




    public function render()
    {
        $this->annotations = json_encode($this->annotations);

        return view('livewire.annotation');
    }
}
