new Vue({
    el:'#page-wrapper',
    data(){

        return{
            images:{
                a:''
            },
            path:{
                a:'/admin/plugins/images/cards/1.jpg'
            }

        }

    },
    mounted(){
        //this.chengeImage()
    },
    methods:{
        chengeImage(evt){
            // console.log();
            
            var files = evt.target.files;
        //Obtenemos la imagen del campo "file".
        let self = this;
      for (var i = 0, f; f = files[i]; i++) {         
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }else{
               console.log('La imagen no es permitida');
               return;
           }
           var reader = new FileReader();
           reader.onload = (function(theFile) {
               return function(e) {
               // Creamos la imagen.
                    self.path.a = e.target.result
               };
           })(f);
           reader.readAsDataURL(f);
       }
            
        }
    }
})