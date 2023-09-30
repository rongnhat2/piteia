<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown statistic-group">
                <a class="dropdown-toggle statistic statistic-href-control" href="{{ route('admin.statistic.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Thống kê</span>
                </a>
            </li>
            <li class="nav-item dropdown manager-group">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-appstore"></i>
                    </span>
                    <span class="title">Quản lí</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu"> 
                    <li class="category"> <a href="{{ route('admin.category.index') }}">Thương hiệu</a> </li>
                    <li class="product"> <a href="{{ route('admin.product.index') }}">Sản phẩm</a> </li>
                </ul>
            </li> 
            <li class="nav-item dropdown order-group">
                <a class="dropdown-toggle order" href="{{ route('admin.order.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-shopping-cart"></i>
                    </span>
                    <span class="title">Đơn hàng</span>
                </a>
            </li>
            <li class="nav-item dropdown order-group">
                <a class="dropdown-toggle order" href="{{ route('admin.watermark.index') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-lock"></i>
                    </span>
                    <span class="title">Đóng bản quyền</span>
                </a>
            </li>
        </ul>
    </div>
</div>