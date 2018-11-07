new Vue({
    el:'#page-wrapper',
    data(){
        return{
            datos:{
                telfijo:'',
                celular1:'',
                celular2:'',
                celular3:'',
                correo1:'',
                correo2:'',
                correo2:'',
                direccion:''
            },
            noti:{

            },
            bandera1: false
        }
    },
    created(){
        this.getEmpresa();
    },
    methods:{
        getEmpresa(){
            let url = '/empresa/index'
            axios.get(url).then(empr=>{
                this.datos = empr.data;
            })
        },
        update(){
            if (this.bandera1) {
                let url = '/empresa/update';
                axios.put(url, this.datos).then((resp)=>{
                    swal("Datos actualizados con éxito.",{
                        buttons: [false,'Cerrar'],
                        icon:'success',
                      });
                })
            }else{
                swal("No hay datos para actualizar.",{
                    buttons: [false,'Cerrar'],
                    icon:'warning',
                  });   
            }
        },
        validaTel(numero, dato){
            var RE = /^\d*\.?\d*$/;
            if (RE.test(numero) || numero == '') {
                if (dato == 'telfijo') {
                    this.noti.telfijo = ''
                    this.bandera1 = true;
                }else if(dato == 'celular1'){
                    this.noti.celular1 = ''
                    this.bandera1 = true;
                }else if(dato == 'celular2'){
                    this.noti.celular2 = ''
                    this.bandera1 = true;

                }else if(dato == 'celular3'){
                    this.noti.celular3 = ''
                    this.bandera1 = true;
                }
            } else {
                if (dato == 'telfijo') {
                    this.noti.telfijo = 'El teléfono no es correcto.'
                    this.bandera1 = false;
                }else if(dato == 'celular1'){
                    this.noti.celular1 = 'El número de celular no es correcto.'
                    this.bandera1 = false;
                }else if(dato == 'celular2'){
                    this.noti.celular2 = 'El número de celular no es correcto.'
                    this.bandera1 = false;

                }else if(dato == 'celular3'){
                    this.noti.celular3 = 'El número de celular no es correcto.'
                    this.bandera1 = false;

                }else{
                    this.bandera1 = false;
                }
            }
        },
        textos(){
            this.bandera1 = true;
        },
        validaCorreo(texto, dato){
                emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
                if (emailRegex.test(texto) || texto == '') {
                    if (dato == 'correo1') {
                        this.noti.correo1 = ''
                        this.bandera1 = true;
                    }else if(dato == 'correo2'){
                      this.noti.correo2 = ''
                      this.bandera1 = true;
                    }else if(dato == 'correo3'){
                      this.noti.correo3 = ''
                      this.bandera1 = true;
                    }else{
                        this.bandera1 = true;
                    }
                } else {
                  if (dato == 'correo1') {
                      this.noti.correo1 = 'El correo no es válido.'
                      this.bandera1 = false;
                  }else if(dato == 'correo2'){
                    this.noti.correo2 = 'El correo no es válido.'
                    this.bandera1 = false;
                  }else if(dato == 'correo3'){
                    this.noti.correo3 = 'El correo no es válido.'
                    this.bandera1 = false;
                  }else{
                      this.bandera1 = false;
                  }
                }
        }
    }
})