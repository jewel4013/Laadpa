<!-- Inventory | Mentions | Downloads | Direct Messages -->
<!-- Browser Usage -->
<!-- Recently Added Products -->



<div class="col-md-4">
    <!-- Inventory -->
    <div class="info-box mb-3 bg-warning">
        <span class="info-box-icon"><i class="fas fa-tag"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Inventory</span>
            <span class="info-box-number">5,200</span>
        </div>
    </div>
    <!-- Inventory --end-->

    <!-- Mentions -->
    <div class="info-box mb-3 bg-success">
        <span class="info-box-icon"><i class="far fa-heart"></i></span>
        <div class="info-box-content">            
            <span class="info-box-text">Mentions</span>
            <span class="info-box-number">92,050</span>
        </div>
    </div>
        <!-- Mentions --end-->

        <!-- Downloads -->
    <div class="info-box mb-3 bg-danger">
        <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Downloads</span>
            <span class="info-box-number">114,381</span>
        </div>
    </div>
    <!-- Downloads --end-->

    <!-- Direct Messages -->
    <div class="info-box mb-3 bg-info">
        <span class="info-box-icon"><i class="far fa-comment"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Direct Messages</span>
            <span class="info-box-number">163,921</span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- Direct Messages --end-->



    {{-- Browser Usage --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Browser Usage</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="chart-responsive">
                        <canvas id="pieChart" height="150"></canvas>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="chart-legend clearfix">
                    <li><i class="far fa-circle text-danger"></i> Chrome</li>
                    <li><i class="far fa-circle text-success"></i> IE</li>
                    <li><i class="far fa-circle text-warning"></i> FireFox</li>
                    <li><i class="far fa-circle text-info"></i> Safari</li>
                    <li><i class="far fa-circle text-primary"></i> Opera</li>
                    <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card-footer p-0">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        United States of America
                        <span class="float-right text-danger">
                            <i class="fas fa-arrow-down text-sm"></i>12%
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        India
                        <span class="float-right text-success">
                            <i class="fas fa-arrow-up text-sm"></i> 4%
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        China
                        <span class="float-right text-warning">
                            <i class="fas fa-arrow-left text-sm"></i> 0%
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    {{-- Browser Usage --end--}}



    <!-- PRODUCT LIST | Recently Added Products -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Recently Added Products</h3>
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
            <ul class="products-list product-list-in-card pl-2 pr-2">
                <li class="item">
                    <div class="product-img">
                        <img src="{{ asset('admin/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">
                            Samsung TV
                            <span class="badge badge-warning float-right">$1800</span>
                        </a>
                        <span class="product-description">
                            Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
                    </div>
                </li>
                <!-- /.item -->
                <li class="item">
                    <div class="product-img">
                        <img src="{{ asset('admin/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">
                            Bicycle
                            <span class="badge badge-info float-right">$700</span>
                        </a>
                        <span class="product-description">
                            26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                    </div>
                </li>
                <!-- /.item -->
                <li class="item">
                    <div class="product-img">
                        <img src="{{ asset('admin/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">
                            Xbox One
                            <span class="badge badge-danger float-right">$350</span>
                        </a>
                        <span class="product-description">
                            Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                    </div>
                </li>
                <!-- /.item -->
                <li class="item">
                    <div class="product-img">
                        <img src="{{ asset('admin/img/default-150x150.png') }}" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">
                            PlayStation 4
                            <span class="badge badge-success float-right">$399</span>
                        </a>
                        <span class="product-description">
                            PlayStation 4 500GB Console (PS4)
                        </span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="card-footer text-center">
            <a href="javascript:void(0)" class="uppercase">View All Products</a>
        </div>
    </div>
    <!-- PRODUCT LIST | Recently Added Products --end-->

</div>
