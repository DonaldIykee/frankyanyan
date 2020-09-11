<div class="page-sidebar">
    <a class="logo-box" href="index.html">
        <span>ecaps</span>
        <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
        <i class="icon-close" id="sidebar-toggle-button-close"></i>
    </a>
    <div class="page-sidebar-inner">
        <div class="page-sidebar-menu">
            <ul class="accordion-menu">
                <li class="active-page">
                    <a href="{{route('admin.dashboard')}}">
                        <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{route('product.create')}}">
                <i class="menu-icon icon-inbox"></i><span>Add product</span>
                </a>
                </li>
                --}}
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-flash_on"></i><span>Categories</span><i
                            class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('category.create')}}">
                                <span class="sub-item">Add Category</span>
                            </a></li>
                        <li><a href="{{route('categories.index')}}">
                                <span class="sub-item">All Category</span></a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-flash_on"></i><span>Products</span><i
                            class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('product.create')}}">
                                <span class="sub-item">add product</span>
                            </a></li>
                        <li><a href="{{route('products.index')}}">
                                <span class="sub-item">all products</span></a></li>

                    </ul>
                </li>
                <li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-flash_on"></i><span>Services</span><i
                            class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('services.create')}}">
                                <span class="sub-item">Add Services</span>
                            </a></li>
                        <li><a href="{{route('services.index')}}">
                                <span class="sub-item">All Servicess</span></a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-flash_on"></i><span>Members</span><i
                            class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('teamMembers.create')}}">
                                <span class="sub-item">Add Member</span>
                            </a></li>
                        <li><a href="{{route('teamMembers.index')}}">
                                <span class="sub-item">All Members</span></a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0)">
                        <i class="menu-icon icon-flash_on"></i><span>Projects</span><i
                            class="accordion-icon fa fa-angle-left"></i>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="{{route('Project.create')}}">
                                <span class="sub-item">Add project</span>
                            </a></li>
                        <li><a href="{{route('Project.index')}}">
                                <span class="sub-item">All Projects</span></a></li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
