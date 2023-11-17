<!-- Left col -->
<div class="col-md-8">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">US-Visitors Report</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="d-md-flex">
            <div class="p-1 flex-fill" style="overflow: hidden">
                <!-- Map will be created here -->
                <div id="world-map-markers" style="height: 325px; overflow: hidden">
                <div class="map"></div>
                </div>
            </div>
            <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                <div class="description-block mb-4">
                <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                <h5 class="description-header">8390</h5>
                <span class="description-text">Visits</span>
                </div>
                <!-- /.description-block -->
                <div class="description-block mb-4">
                <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                <h5 class="description-header">30%</h5>
                <span class="description-text">Referrals</span>
                </div>
                <!-- /.description-block -->
                <div class="description-block">
                <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                <h5 class="description-header">70%</h5>
                <span class="description-text">Organic</span>
                </div>
                <!-- /.description-block -->
            </div><!-- /.card-pane-right -->
            </div><!-- /.d-md-flex -->
        </div>
        <!-- /.card-body -->
    </div>


    <div class="row">
        <div class="col-md-6">
            @include('layout.layoutPartials.sectionThreeColOneChat')
        </div>

        <div class="col-md-6">
            <!-- USERS LIST -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Latest Members</h3>
                    <div class="card-tools">
                        <span class="badge badge-danger">8 New Members</span>
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <ul class="users-list clearfix">
                    <li>
                        <img src="{{ asset('admin/img/user1-128x128.jpg') }}" alt="User Image">
                        <a class="users-list-name" href="#">Alexander Pierce</a>
                        <span class="users-list-date">Today</span>
                    </li>
                    <li>
                        <img src="{{ asset('admin/img/user8-128x128.jpg') }}" alt="User Image">
                        <a class="users-list-name" href="#">Norman</a>
                        <span class="users-list-date">Yesterday</span>
                    </li>
                    <li>
                        <img src="{{ asset('admin/img/user7-128x128.jpg') }}" alt="User Image">
                        <a class="users-list-name" href="#">Jane</a>
                        <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                        <img src="{{ asset('admin/img/user6-128x128.jpg') }}" alt="User Image">
                        <a class="users-list-name" href="#">John</a>
                        <span class="users-list-date">12 Jan</span>
                    </li>
                    <li>
                        <img src="{{ asset('admin/img/user2-160x160.jpg') }}" alt="User Image">
                        <a class="users-list-name" href="#">Alexander</a>
                        <span class="users-list-date">13 Jan</span>
                    </li>
                    <li>
                        <img src="{{ asset('admin/img/user5-128x128.jpg') }}" alt="User Image">
                        <a class="users-list-name" href="#">Sarah</a>
                        <span class="users-list-date">14 Jan</span>
                    </li>
                    <li>
                        <img src="{{ asset('admin/img/user4-128x128.jpg') }}" alt="User Image">
                        <a class="users-list-name" href="#">Nora</a>
                        <span class="users-list-date">15 Jan</span>
                    </li>
                    <li>
                        <img src="{{ asset('admin/img/user3-128x128.jpg') }}" alt="User Image">
                        <a class="users-list-name" href="#">Nadia</a>
                        <span class="users-list-date">15 Jan</span>
                    </li>
                    </ul>
                    <!-- /.users-list -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="javascript:">View All Users</a>
                </div>
                <!-- /.card-footer -->
            </div>
            <!--/.card -->
        </div>

    </div>






    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title">Latest Orders</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
            <table class="table m-0">
                <thead>
                <tr>
                <th>Order ID</th>
                <th>Item</th>
                <th>Status</th>
                <th>Popularity</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                <td>Call of Duty IV</td>
                <td><span class="badge badge-success">Shipped</span></td>
                <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                </td>
                </tr>
                <tr>
                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="badge badge-warning">Pending</span></td>
                <td>
                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                </td>
                </tr>
                <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>iPhone 6 Plus</td>
                <td><span class="badge badge-danger">Delivered</span></td>
                <td>
                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                </td>
                </tr>
                <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="badge badge-info">Processing</span></td>
                <td>
                    <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                </td>
                </tr>
                <tr>
                <td><a href="pages/examples/invoice.html">OR1848</a></td>
                <td>Samsung Smart TV</td>
                <td><span class="badge badge-warning">Pending</span></td>
                <td>
                    <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                </td>
                </tr>
                <tr>
                <td><a href="pages/examples/invoice.html">OR7429</a></td>
                <td>iPhone 6 Plus</td>
                <td><span class="badge badge-danger">Delivered</span></td>
                <td>
                    <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                </td>
                </tr>
                <tr>
                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                <td>Call of Duty IV</td>
                <td><span class="badge badge-success">Shipped</span></td>
                <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                </td>
                </tr>
                </tbody>
            </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
            <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
            <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
        </div>
        <!-- /.card-footer -->
    </div>




</div>
