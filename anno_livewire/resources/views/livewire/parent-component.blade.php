<div wire:ignore>
    
    <img id= "hallstatt" src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Hallstatt_300.jpg"> 
     
  </div>

@script
 <script>


  document.addEventListener('livewire:initialized', () => {
    anno = Annotorious.init({
        image: 'hallstatt',
        widgets: ['COMMENT']
       
      });
      let annotations=@js($annotations);
      console.log(JSON.parse(annotations))
      
       anno.setAnnotations(JSON.parse(annotations));
       


      anno.on('createAnnotation', function(annotations) {
          console.log('created');
          $wire.$call('saveAnnotations',anno.getAnnotations());
        });

        anno.on('deleteAnnotation', function(annotations) {
        console.log('deleted');
        $wire.$call('saveAnnotations',anno.getAnnotations());
        });

        anno.on('updateAnnotation', function(annotations) {
        console.log('updated');
        $wire.$call('saveAnnotations',anno.getAnnotations());
        });
      
  })
</script> 
@endscript

</div>
