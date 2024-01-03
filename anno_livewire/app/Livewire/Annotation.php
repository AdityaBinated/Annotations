<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Support\Facades\DB;


class Annotation extends Component
{
   
   public $annotations;
   

   public function saveAnnotations($annotations)
   {
    $this->annotations = json_encode($annotations);

   
    
    // Post :: create([
    //     'annotations'=> $this->annotations,
    // ]);
    $annotations= Post::updateOrCreate( 
        ['id' => 1],
        ['annotations' => $this->annotations ]
       
    );
    }  




    public function render()
    { 
        // $this->annotations = Post::find(1,['annotations'])->annotations;
        // $this->annotations = json_encode($this->annotations);
       

        $annotations = DB::select("SELECT annotations FROM posts WHERE id= 1")[0]->annotations;
        // dd($annotations);
        
       
        $this->annotations = json_encode($annotations);

    

   

        return view('livewire.annotation');
    }
}
