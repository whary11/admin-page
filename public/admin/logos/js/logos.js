new Vue({
    el:'#page-wrapper',
    data(){

        return{
            images:{
                a:''
            },
            path:{
                a:''
            },
            progress:'Guardar'
        }
    },
    mounted(){
        //this.chengeImage()
    },
    methods:{
        upload(imagen, seccion){
            this.progress = `Guardando....`;            
            let url = '/api/upload'
            imagen.append('seccion', seccion)
            axios.post(url, imagen).then((resp)=>{
                console.log(resp.data.imagen);
                // this.path.a = ''
                this.images.a = ''
                this.progress = 'Guardar'
            })
        },
        chengeImage(evt){   
            var files = evt.target.files;
        //Obtenemos la imagen del campo "file".
            let self = this;
            for (var i = 0, f; f = files[i]; i++) {         
                //Solo admitimos imágenes.
                if (!f.type.match('image.*')){
                    //    console.log(f);
                    continue;
                }
                var reader = new FileReader();
                reader.onload = (function(theFile) {
                    return function(e) {
                    // Creamos la imagen.
                    if (theFile.size > 20012) {
                        swal({
                            title: "La imagen es muy grande.",
                            icon:'warning'
                        });
                        self.images.a = ''
                        return
                    }else{
                        let fd = new FormData();
                        fd.append('imagen', evt.target.files[0], evt.target.files[0].name)
                        self.images.a = fd;
                        self.path.a = e.target.result;
                    }
                    };
                })(f);
                reader.readAsDataURL(f);
       }
            
        }
    }
})