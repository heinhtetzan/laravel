<div class="col-12 col-lg-3 col-xl-2 vh-100 sidebar">
    <div class="d-flex justify-content-between align-items-center py-2 mt-3 nav-brand">
        <div class="d-flex align-items-center">
                    <span class="bg-primary p-2 rounded d-flex justify-content-center align-items-center mr-2">
                        <i class="feather-shopping-bag text-white h4 mb-0"></i>
                    </span>
            <span class="font-weight-bolder h4 mb-0 text-uppercase text-primary">My Shop</span>
        </div>
        <button class="hide-sidebar-btn btn btn-light d-block d-lg-none">
            <i class="feather-x text-primary" style="font-size: 2em;"></i>
        </button>
    </div>
    <div class="nav-menu">
        <ul>
            <li class="menu-spacer"></li>

            <li class="menu-item">
                <a href="{{ route('home') }}" class="menu-item-link">
                    <span>
                        <i class="feather-home"></i>
                        Home
                    </span>
                </a>
            </li>


            <li class="menu-title">
                <span>Item Management</span>
            </li>
            <li class="menu-item">
                <a href="item_add.html" class="menu-item-link">
                            <span>
                                <i class="feather-plus-circle"></i>
                                Create New Item
                            </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="item_list.html" class="menu-item-link">
                            <span>
                                <i class="feather-server"></i>
                                Item Lists
                            </span>
                    <span class="badge badge-pill bg-white shadow-sm text-primary">57</span>
                </a>
            </li>
            <li class="menu-spacer"></li>
        </ul>
    </div>
</div>