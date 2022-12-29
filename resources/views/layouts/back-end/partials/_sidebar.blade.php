<!-- Left SideNav -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{route('admin.dashboard')}}"> <i class="mdi mdi-view-dashboard-outline"></i><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-border-all"></i><span>Client</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.client.view')}}"><i class="mdi mdi-card-plus"></i>Create</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-chemical-weapon"></i><span>Service</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.service.view')}}"><i class="mdi mdi-briefcase-plus"></i>Create</a>
                        </li>
                    </ul>
                </li>

{{--                //profile--}}
                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-face-profile"></i><span>Profile</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.profile.view')}}"><i class="mdi mdi-briefcase-plus"></i>Create</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.profile.profileDetails')}}"><i class="mdi mdi-view-list"></i>Profile Details</a>
                        </li>
                    </ul>
                </li>
{{--                SEO--}}
                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-marker-check"></i><span>SEO</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.seo.view')}}"><i class="mdi mdi-briefcase-plus"></i>Add Page Seo Info </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.tag.view')}}"><i class="mdi mdi-briefcase-plus"></i>Add Tag </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="mdi mdi-view-list"></i>Profile Details</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('admin.message.view')}}"> <i class="mdi mdi-message"></i><span>Message</span></a>
                </li>
                <li>
                    <a href="{{route('admin.setting.view')}}"> <i class="mdi mdi-account-settings"></i><span>Setting</span></a>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- end left-sideNav-->

