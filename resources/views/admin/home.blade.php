@extends('admin.layouts.admin')

@section('contenido')
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">duarteyjulio.com</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li class="active"><a href="#">Sobre el sitio web</a></li>                            
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!--row -->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-layers-alt bg-danger"></i>
                                <div class="bodystate">
                                    <h4>4</h4>
                                    <span class="text-muted">Páginas internas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-layout-media-right-alt bg-info"></i>
                                <div class="bodystate">
                                    <h4>0</h4>
                                    <span class="text-muted">Entradas de Blog</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-search bg-success"></i>
                                <div class="bodystate">
                                    <h4>350</h4>
                                    <span class="text-muted">Posición Google</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="white-box">
                            <div class="r-icon-stats">
                                <i class="ti-world bg-inverse"></i>
                                <div class="bodystate">
                                    <h4>2 Meses</h4>
                                    <span class="text-muted">Tiempo online</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/row -->
                <!--row -->
                <div class="row">
                    <div class="col-md-5 col-lg-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Leads by Source</h3>
                            <div id="morris-donut-chart" class="ecomm-donute" style="height: 317px;"></div>
                            <ul class="list-inline m-t-30 text-center">
                                <li class="p-r-20">
                                    <h5 class="text-muted"><i class="fa fa-circle" style="color: #fb9678;"></i> Ads</h5>
                                    <h4 class="m-b-0">8500</h4>
                                </li>
                                <li class="p-r-20">
                                    <h5 class="text-muted"><i class="fa fa-circle" style="color: #01c0c8;"></i> Tredshow</h5>
                                    <h4 class="m-b-0">3630</h4>
                                </li>
                                <li>
                                    <h5 class="text-muted"> <i class="fa fa-circle" style="color: #4F5467;"></i> Web</h5>
                                    <h4 class="m-b-0">4870</h4>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Top Products sales</h3>
                            <ul class="list-inline text-center">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>iMac</h5>
                                </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #b4becb;"></i>iPhone</h5>
                                </li>
                            </ul>
                            <div id="morris-area-chart2" style="height: 370px;"></div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small> Total Leads</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6>
                                    <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6>
                                    <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6>
                                    <b>5.50%</b></div>
                            </div>
                            <div id="sparkline8" class="minus-mar"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> 18% High then last month</small>Total Vendor</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6>
                                    <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6>
                                    <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6>
                                    <b>5.50%</b></div>
                            </div>
                            <div id="sparkline9" class="minus-mar"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> 18% High then last month</small>Invoice Generate</h3>
                            <div class="stats-row">
                                <div class="stat-item">
                                    <h6>Overall Growth</h6>
                                    <b>80.40%</b></div>
                                <div class="stat-item">
                                    <h6>Montly</h6>
                                    <b>15.40%</b></div>
                                <div class="stat-item">
                                    <h6>Day</h6>
                                    <b>5.50%</b></div>
                            </div>
                            <div id="sparkline10" class="minus-mar"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">New Customers List</h3>
                            <p class="text-muted">this is the sample data here for crm</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Deshmukh</td>
                                            <td>Prohaska</td>
                                            <td>@Genelia</td>
                                            <td><span class="label label-danger">admin</span> </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Deshmukh</td>
                                            <td>Gaylord</td>
                                            <td>@Ritesh</td>
                                            <td><span class="label label-info">member</span> </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sanghani</td>
                                            <td>Gusikowski</td>
                                            <td>@Govinda</td>
                                            <td><span class="label label-warning">developer</span> </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Roshan</td>
                                            <td>Rogahn</td>
                                            <td>@Hritik</td>
                                            <td><span class="label label-success">supporter</span> </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Joshi</td>
                                            <td>Hickle</td>
                                            <td>@Maruti</td>
                                            <td><span class="label label-info">member</span> </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Nigam</td>
                                            <td>Eichmann</td>
                                            <td>@Sonu</td>
                                            <td><span class="label label-success">supporter</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">New Product List</h3>
                            <p class="text-muted">this is the sample data here for crm</p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Products</th>
                                            <th>Popularity</th>
                                            <th>Sales</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Milk Powder</td>
                                            <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#13dafe"], "stroke":["#13dafe"]}' data-height="40">0,-3,-2,-4,-5,-4,-3,-2,-5,-1</span> </td>
                                            <td><span class="text-danger text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 28.76%</span> </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Air Conditioner</td>
                                            <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#13dafe"], "stroke":["#13dafe"]}' data-height="40">0,-1,-1,-2,-3,-1,-2,-3,-1,-2</span> </td>
                                            <td><span class="text-warning text-semibold"><i class="fa fa-level-down" aria-hidden="true"></i> 8.55%</span> </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>RC Cars</td>
                                            <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#13dafe"], "stroke":["#13dafe"]}' data-height="40">0,3,6,1,2,4,6,3,2,1</span> </td>
                                            <td><span class="text-success text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 58.56%</span> </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Down Coat</td>
                                            <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#13dafe"], "stroke":["#13dafe"]}' data-height="40">0,3,6,4,5,4,7,3,4,2</span> </td>
                                            <td><span class="text-info text-semibold"><i class="fa fa-level-up" aria-hidden="true"></i> 35.76%</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->                
            </div>
            @endsection