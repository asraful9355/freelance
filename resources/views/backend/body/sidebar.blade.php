@php
  $route = Route::current()->getName();
  $prefix = Request::route()->getPrefix();
@endphp
<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="{{ route('dashboard') }}"><img src="{{ asset('backend/assets/images/icon-dark.svg')}}" alt="HexaBit Logo" class="img-fluid logo"><span>HexaBit</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{ asset('backend/assets/images/user.png')}}" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Christy Wert</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="{{ route('my.profile') }}"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li><a href="{{ route('admin.change.password') }}"><i class="icon-settings"></i>Change Password</a></li>
                    <li class="divider"></li>
                    <li>
                     <form method="post" action="{{ route('logout') }}" >
                     @csrf
                     <a href="{{ route('logout' )}}"  onclick="event.preventDefault();
                        this.closest('form').submit();">
                     </form>
                     <i class="icon-power"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>  
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="{{ ($route == 'dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i class="icon-home"></i><span>Dashboard</span></a></li>
                <li><a href="app-inbox.html"><i class="icon-envelope"></i><span>Inbox</span></a></li>
                <li><a href="app-chat.html"><i class="icon-bubbles"></i><span>Chat</span></a></li>

                <li class="{{ ($route == 'menu.index') ? 'active' : '' }}{{ ($route == 'menu.create') ? 'active' : '' }}">
                    <a href="#uiElements" class="has-arrow"><i class="icon-diamond"></i><span>Menu Bar</span></a>
                    <ul>
                        <li class="{{ ($route == 'menu.index') ? 'active' : '' }}"><a href="{{ route('menu.index') }}">All Menu</a></li>
                        <li class="{{ ($route == 'menu.create') ? 'active' : '' }}"><a href="{{ route('menu.create') }}">Add Menu</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="#forms" class="has-arrow"><i class="icon-pencil"></i><span>Forms</span></a>
                    <ul>
                        <li><a href="forms-basic.html">Basic Elements</a></li>
                        <li><a href="forms-advanced.html">Advanced Elements</a></li>
                        <li><a href="forms-validation.html">Form Validation</a></li>
                        <li><a href="forms-wizard.html">Form Wizard</a></li>
                        <li><a href="forms-dragdropupload.html">Drag &amp; Drop Upload</a></li>
                        <li><a href="forms-cropping.html">Image Cropping</a></li>
                        <li><a href="forms-summernote.html">Summernote</a></li>
                        <li><a href="forms-editors.html">CKEditor</a></li>
                        <li><a href="forms-markdown.html">Markdown</a></li>
                    </ul>
                </li>
             
                <li><a href="app-taskboard.html"><i class="icon-list"></i><span>Taskboard</span></a></li>                    
                <li><a href="app-calendar.html"><i class="icon-calendar"></i><span>Calendar</span></a></li>
                <li><a href="app-contact.html"><i class="icon-book-open"></i><span>Contact</span></a></li>
                <li>
                    <a href="#Blog" class="has-arrow"><i class="icon-globe"></i><span>Blog</span></a>
                    <ul>
                        <li><a href="blog-dashboard.html">Dashboard</a></li>
                        <li><a href="blog-post.html">New Post</a></li>
                        <li><a href="blog-list.html">Blog List</a></li>
                        <li><a href="blog-details.html">Blog Detail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#charts" class="has-arrow"><i class="icon-bar-chart"></i><span>Charts</span></a>
                    <ul>
                        <li><a href="chart-morris.html">Morris</a></li>
                        <li><a href="chart-flot.html">Flot</a></li>
                        <li><a href="chart-chartjs.html">ChartJS</a></li>
                        <li><a href="chart-c3.html">C3 Charts</a></li>
                        <li><a href="chart-jquery-knob.html">Jquery Knob</a></li>                            
                        <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                        <li><a href="chart-peity.html">Peity</a></li>                            
                        <li><a href="chart-gauges.html">Gauges</a></li>
                        <li><a href="chart-e.html">E Chart</a></li>
                    </ul>
                </li>                    
                <li>
                    <a href="#Widgets" class="has-arrow"><i class="icon-puzzle"></i><span>Widgets</span></a>
                    <ul>                                    
                        <li><a href="widgets-statistics.html">Statistics</a></li>
                        <li><a href="widgets-data.html">Data</a></li>
                        <li><a href="widgets-chart.html">Chart</a></li>
                        <li><a href="widgets-weather.html">Weather</a></li>
                        <li><a href="widgets-social.html">Social</a></li>
                        <li><a href="widgets-blog.html">Blog</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
                    <ul>                                    
                        <li><a href="page-login.html">Login</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a href="page-lockscreen.html">Lockscreen</a></li>
                        <li><a href="page-forgot-password.html">Forgot Password</a></li>
                        <li><a href="page-404.html">Page 404</a></li>
                        <li><a href="page-403.html">Page 403</a></li>
                        <li><a href="page-500.html">Page 500</a></li>
                        <li><a href="page-503.html">Page 503</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#Pages" class="has-arrow"><i class="icon-docs"></i><span>Pages</span></a>
                    <ul>
                        <li><a href="page-blank.html">Blank Page</a></li>
                        <li><a href="page-search-results.html">Search Results</a></li>
                        <li><a href="page-profile.html">Profile </a></li>
                        <li><a href="page-invoices.html">Invoices </a></li>
                        <li><a href="page-gallery.html">Image Gallery</a></li>
                        <li><a href="page-gallery2.html">Image Gallery </a></li>
                        <li><a href="page-timeline.html">Timeline</a></li>
                        <li><a href="page-timeline-h.html">Horizontal Timeline</a></li>
                        <li><a href="page-pricing.html">Pricing</a></li>                            
                        <li><a href="page-maintenance.html">Maintenance</a></li>
                        <li><a href="page-testimonials.html">Testimonials</a></li>
                        <li><a href="page-faq.html">FAQ</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#Maps" class="has-arrow"><i class="icon-map"></i><span>Maps</span></a>
                    <ul>
                        <li><a href="map-google.html">Google Map</a></li>
                        <li><a href="map-jvectormap.html">jVector Map</a></li>
                        <li><a href="map-yandex.html">Yandex Map</a></li>                            
                    </ul>
                </li>
            </ul>
        </nav>     
    </div>
</div>