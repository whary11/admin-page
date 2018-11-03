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
    methods:{
        update(){
            alert('Enviar los datos, preferiblemente utiliza axios.')
        },
        validaTel(numero, dato){
            var RE = /^\d*\.?\d*$/;
            if (RE.test(numero)) {
                if (dato == 'telfijo') {
                    this.noti.telfijo = ''
                }else if(dato == 'celular1'){
                    this.noti.celular1 = ''
                }else if(dato == 'celular2'){
                    this.noti.celular2 = ''

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
        validaCorreo(texto, dato){
                emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
                if (emailRegex.test(texto)) {
                    if (dato == 'correo1') {
                        this.noti.correo1 = ''
                        this.bandera2 = true;
                    }else if(dato == 'correo2'){
                      this.noti.correo2 = ''
                      this.bandera2 = true;
                    }else if(dato == 'correo3'){
                      this.noti.correo3 = ''
                      this.bandera2 = true;
                    }else{
                        this.bandera2 = true;
                    }
                } else {
                  if (dato == 'correo1') {
                      this.noti.correo1 = 'El correo no es válido.'
                      this.bandera2 = false;
                  }else if(dato == 'correo2'){
                    this.noti.correo2 = 'El correo no es válido.'
                    this.bandera2 = false;
                  }else if(dato == 'correo3'){
                    this.noti.correo3 = 'El correo no es válido.'
                    this.bandera2 = false;
                  }else{
                      this.bandera2 = false;
                  }
                }
        }
    }
})