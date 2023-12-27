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
        image: 'hallstatt' // image element or ID
      });

      let ann=`[{
        
    "@context": "http://www.w3.org/ns/anno.jsonld",
    "type": "Annotation",
    "body": [
        {
            "type": "TextualBody",
            "value": "ok",
            "purpose": "commenting"
        }
    ],
    "target": {
        "source": "https://upload.wikimedia.org/wikipedia/commons/e/e4/Hallstatt_300.jpg",
        "selector": {
            "type": "FragmentSelector",
            "conformsTo": "http://www.w3.org/TR/media-frags/",
            "value": "xywh=pixel:246,118,240,171"
        }
    },
    "id": "#17509ba1-e192-49cf-bdc6-b08d88e602bf"
}
      ]`
      anno.setAnnotations(JSON.parse(ann));
      



      

      // Add event handlers using .on  
      anno.on('createAnnotation', function(annotation) {
        // Do something
        
        const annotations = anno.getAnnotations();
      });
    })()
  </script>

  <script type="text/javascript" src="annotorious.min.js"></script>

  <form action=post, 
  
</body>




