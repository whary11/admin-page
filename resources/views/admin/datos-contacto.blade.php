@extends('admin.layouts.admin')

@section('contenido')
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Datos de contacto</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Sobre la empresa</a></li>
                            <li class="active">Datos de contacto</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!-- Left sidebar -->
                    <div class="col-md-12">
                        <div class="white-box">
                            <!-- row -->
                            <div class="row">
                                <div class="col-lg-2 col-md-3  col-sm-12 col-xs-12 inbox-panel">
                                    <div> <a href="#" class="btn btn-custom btn-block waves-effect waves-light">Información</a>
                                        <div class="list-group mail-list m-t-20"> <a href="#" class="list-group-item">Números de telefono</a> <a href="#" class="list-group-item ">Correos electrónicos</a> <a href="#" class="list-group-item">Dirección Principal</a> <a href="#" class="list-group-item">Sucursales</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 mail_listing">
                                    <div class="inbox-center">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <strong>Telefono Fijo:</strong>
                                                    </td>
                                                    <td class="max-texts">
                                                        {{-- <div class="form-group"> --}}
                                                            <input type="text" class="form-control" placeholder="000-000-000" @keyup="validaTel(datos.telfijo, 'telfijo')" v-model="datos.telfijo">
                                                            <p class="noti">@{{noti.telfijo}}</p>
                                                            {{-- </div> --}}
                                                        </td>
                                                    </tr>
                                                    <tr>    
                                                        <td></td>
                                                        <td><strong>Celular 1:</strong></td>
                                                        <td class="max-texts">
                                                            <input type="text" class="form-control" placeholder="000-000-000" @keyup="validaTel(datos.celular1, 'celular1')" v-model="datos.celular1">
                                                            <p class="noti">@{{noti.celular1}}</p>                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>    
                                                        <td></td>
                                                        <td><strong>Celular 2:</strong></td>
                                                        <td class="max-texts">
                                                            <input type="text" class="form-control" placeholder="000-000-000" @keyup="validaTel(datos.celular2, 'celular2')" v-model="datos.celular2">
                                                            <p class="noti">@{{noti.celular2}}</p>                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>    
                                                        <td></td>
                                                        <td><strong>Celular 3:</strong></td>
                                                        <td class="max-texts">
                                                            <input type="text" class="form-control" placeholder="000-000-000" @keyup="validaTel(datos.celular3, 'celular3')" v-model="datos.celular3">
                                                            <p class="noti">@{{noti.celular3}}</p>                                                            
                                                        </td>
                                                    </tr>                                         
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="inbox-center">
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td></td>                                                    
                                                        <td><strong>Correo electrónico 1:</strong></td>
                                                        <td>
                                                            <input type="email" class="form-control" @keyup="validaCorreo(datos.correo1, 'correo1')" placeholder="ejemplo@miempresa.com" v-model="datos.correo1">
                                                            <p class="noti">@{{noti.correo1}}</p>                                                                                                                    
                                                        </td>
                                                    </tr>
                                                    <tr>    
                                                        <td></td>
                                                        <td><strong>Correo electrónico 2:</strong></td>
                                                        <td class="max-texts">
                                                            <input type="email" class="form-control" placeholder="ejemplo@miempresa.com" @keyup="validaCorreo(datos.correo2, 'correo2')" v-model="datos.correo2">
                                                            <p class="noti">@{{noti.correo2}}</p>                                                                 
                                                        </td>
                                                    </tr>
                                                    <tr>    
                                                        <td></td>
                                                        <td><strong>Correo electrónico 3:</strong></td>
                                                        <td class="max-texts">
                                                            <input type="email" class="form-control" placeholder="ejemplo@miempresa.com" @keyup="validaCorreo(datos.correo3, 'correo3')" v-model="datos.correo3">
                                                            <p class="noti">@{{noti.correo3}}</p>                                                        
                                                        </td>
                                                    </tr>                                                                                       
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="inbox-center">
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td><strong>Dirección:</strong></td>
                                                        <td class="max-texts">
                                                            <input type="direction" class="form-control" placeholder="street avenue #3520 City, Country" v-model="datos.direccion">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><strong></strong></td>
                                                        <td class="max-texts">
                                                            <button @click="update" class="btn btn-primary">Actualizar</button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                    <pre>
                        @{{$data}}    
                    </pre>                
                </div>
                <!-- /.container-fluid -->
@endsection
@section('script')
<script src="/admin/contacto/js/vue.js"></script>
    <script src="/admin/contacto/js/contacto.js"></script>
@endsection