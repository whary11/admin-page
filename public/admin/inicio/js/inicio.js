new Vue({
    el:'#page-wrapper',
    data(){
        return{
            images:{
                a:'',
                b:'',
            },
            path:{
                a:{
                    imagen:'',
                    activa:false,
                },
                b:{
                    imagen:'',
                    activa:false
                },
            },
            boton:'Guardar',
            tamano:'',

            infobanner:{
                bandera: false,
            },
        }
    },
    methods:{
        
        actividad(letra, tamano){
            if (letra=='a') {
                this.path.a.activa = true
            }
            this.tamano = tamano
        },
        upload(imagen, seccion){
            this.boton = `Guardando....`;            
            let url = '/api/upload'
            imagen.append('seccion', seccion)
            let config = {
                onUploadProgress: data=>{
                    console.log(data);
                }
            }
            axios.post(url, imagen, config).then((resp)=>{     
                // this.images.a = ''
                this.boton = 'Guardar'
                swal({
                    title: "Imegen cargada con éxito.",
                    icon:'success',
                    buttons: [false,'Cerrar'],
                });
            })
        },
        bandera(){
            this.infobanner.bandera = true
        },
        actualizarBanner(){
            swal({
                title: "Estamos listos, empieza con la validación en Vue JS.",
                icon:'success',
                buttons: [false,'Cerrar'],
            });
        },
        chengeImage(evt){
            var files = evt.target.files;
            //Obtenemos la imagen del campo "file"        
            let self = this;
            for (var i = 0, f; f = files[i]; i++) {         
                // Solo admitimos imágenes.
                if (!f.type.match('image.*')){
                    continue;
                }
                var reader = new FileReader();
                reader.onload = (function(theFile){                    
                    return function(e) {
                    // Disponer de toda la información de la imagen
                    let foto = new Image()
                    foto.src  = e.target.result;
                    foto.addEventListener("load", function(ee) {
                        // console.log(foto.width, foto.height);
                        if (foto.width > self.tamano) {
                            swal({
                                title: "La imagen es muy grande.",
                                icon:'warning'
                            });
                            self.images.a = ''
                            return
                        }else{
                            let fd = new FormData();
                            fd.append('imagen', evt.target.files[0], evt.target.files[0].name)
                            ///Detectar de donde viene la imagen
                            if (self.path.a.activa) {
                                self.images.a = fd;
                                self.path.a.imagen = e.target.result;
                            }else if (self.path.b.activa) {
                                self.images.b = fd;
                                self.path.b.imagen = e.target.result;
                            }else if (self.path.c.activa) {
                                self.images.c = fd;
                                self.path.c.imagen = e.target.result;
                            }else if (self.path.d.activa) {
                                self.images.d = fd;
                                self.path.d.imagen = e.target.result;
                            }else if (self.path.e.activa) {
                                self.images.e = fd;
                                self.path.e.imagen = e.target.result;
                            }else if (self.path.f.activa) {
                                self.images.f = fd;
                                self.path.f.imagen = e.target.result;
                            }
                        }
                    })
                };
            })(f);
            reader.readAsDataURL(f);
        }
    },

    }
})