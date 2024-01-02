

 


  <div style="width: 100%; display: flex;" x-init="
    (function() {
     var anno = Annotorious.init({
        image: 'hallstatt',
        widgets: [
        'COMMENT'
    ]
      });
      
      
     
      anno.setAnnotations(JSON.parse({{ $annotations }}));
      anno.saveSelected();
      anno.on('createAnnotation', function(annotation, overrideId) {
          console.log('created');
          $wire.$call('saveAnnotations',anno.getAnnotations());
        });
      anno.on('deleteAnnotation', function(annotation, overrideId) {
        console.log('deleted');
        $wire.$call('saveAnnotations',anno.getAnnotations());
        });
        anno.on('updateAnnotation', function(annotation, overrideId) {
        console.log('updated');
        $wire.$call('saveAnnotations',anno.getAnnotations());
        }); 
        
        
    })()"> 


   <div wire:ignore >
    <img id= "hallstatt" src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Hallstatt_300.jpg">
  </div>

</div>


