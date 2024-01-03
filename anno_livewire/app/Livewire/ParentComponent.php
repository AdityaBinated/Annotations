<?php

namespace App\Livewire;
//use Illuminate\Support\Facades\DB;


use App\Models\Post;
use Livewire\Component;


class ParentComponent extends Component
{
    

    public $annotations;
   

    public function saveAnnotations($annotations)
    {
        // dd($this->annotations=$annotations);
        // $this->annotations = json_encode($annotations);

        $annotations= Post::updateOrCreate(
            ['id' => 1],
            ['annotations' => $annotations]
        );

         
     }

     

    public function render()

    {
        $this->annotations = Post::find(1,['annotations'])-> annotations;
        // dd($this->annotations);
        // $this->annotations = json_encode($this->annotations);
        // dd($this->annotations);
        return view('livewire.parent-component');
    }

    
}