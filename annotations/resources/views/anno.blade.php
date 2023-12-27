<head>
  <link rel="stylesheet" href="annotorious.min.css">

<!-- CSS stylesheet -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@recogito/annotorious@2.7.12/dist/annotorious.min.css">

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/@recogito/annotorious@2.7.12/dist/annotorious.min.js"></script>

</head>

<body>
  <div id="content">
    <img id="hallstatt" src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Hallstatt_300.jpg">
  </div>
  <script>
    (function() {
      var anno = Annotorious.init({
        image: 'hallstatt'
       
      });
      
      
//       let annotation=`[{
        
//     "@context": "http://www.w3.org/ns/anno.jsonld",
//     "type": "Annotation",
//     "body": [
//         {
//             "type": "TextualBody",
//             "value": "ok",
//             "purpose": "commenting"
//         }
//     ],
//     "target": {
//         "source": "https://upload.wikimedia.org/wikipedia/commons/e/e4/Hallstatt_300.jpg",
//         "selector": {
//             "type": "FragmentSelector",
//             "conformsTo": "http://www.w3.org/TR/media-frags/",
//             "value": "xywh=pixel:246,118,240,171"
//         }
//     },
//     "id": "#17509ba1-e192-49cf-bdc6-b08d88e602bf"
// }
//       ]`
      anno.setAnnotations(JSON.parse(localStorage.getItem('annotations')));
      
     


      

      // Add event handlers using .on  
      anno.on('createAnnotation', function(annotation) {
        // Do something
        localStorage.setItem('annotations', JSON.stringify(anno.getAnnotations()));
        // const annotations = anno.getAnnotations();
        
      });

      anno.on('deleteAnnotation', function(annotation) {
  // 
  localStorage.setItem('annotations', JSON.stringify(anno.getAnnotations()));
 
});

anno.on('updateAnnotation', function(annotation, previous) {
  // 
  localStorage.setItem('annotations', JSON.stringify(anno.getAnnotations()));
});


    })()
  </script>

  <script type="text/javascript" src="annotorious.min.js"></script>
</body>




