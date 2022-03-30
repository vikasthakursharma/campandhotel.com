 <!DOCTYPE html>
 <html lang="en">


 <!-- index.html  21 Nov 2019 03:44:50 GMT -->

 <head>
     <meta charset="UTF-8">
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
     <title>Twilight - Admin Dashboard </title>
     <!-- General CSS Files -->
     <link rel="stylesheet" href={{ url('backend/css/app.min.css') }}>
     <!-- Template CSS -->
     <link rel="stylesheet" href={{ url('backend/css/style.css') }}>
     <link rel="stylesheet" href={{ url('backend/css/components.css') }}>
     <!-- Custom style CSS -->
     <link rel="stylesheet" href={{ url('backend/css/custom.css') }}>
     <link rel='shortcut icon' type='image/x-icon' href={{ url('backend/img/favicon.ico') }} />
 </head>

 <body>
     <div class="loader"></div>
     <div id="app">
         <div class="main-wrapper main-wrapper-1">
             <div class="navbar-bg"></div>
             <nav class="navbar navbar-expand-lg main-navbar sticky">
                 <div class="form-inline mr-auto">
                     <ul class="navbar-nav mr-3">
                         <li><a href="#" data-toggle="sidebar"
                                 class="nav-link nav-link-lg
                                  collapse-btn">
                                 <i data-feather="align-justify"></i></a></li>
                         <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                 <i data-feather="maximize"></i>
                             </a></li>
                         <li>
                             <form class="form-inline mr-auto">
                                 <div class="search-element">
                                     <input class="form-control" type="search" placeholder="Search"
                                         aria-label="Search" data-width="200">
                                     <button class="btn" type="submit">
                                         <i class="fas fa-search"></i>
                                     </button>
                                 </div>
                             </form>
                         </li>
                     </ul>
                 </div>
                 <ul class="navbar-nav navbar-right">

                        @if(Request::fullUrl()==url('/admin/home'))

                     <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                             class="nav-link notification-toggle nav-link-lg"><i data-feather="bell"
                                 class="bell"></i>
                                 <span class="badge headerBadge1">
                                        6 </span>
                         </a>
                         <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
                             <div class="dropdown-header">
                                 Notifications
                                 <div class="float-right">
                                 <a href=""> Mark All As Read</a>
                                 </div>
                             </div>
                             <div class="dropdown-list-content dropdown-list-icons">

                                    @forelse($user->unreadnotifications as $notfication)

                                 <a href="#" class="dropdown-item dropdown-item-unread"> <span
                                         class="dropdown-item-icon bg-primary text-white">  <i
                                         class="fas
                                          fa-bell"></i>
                                     </span> <span class="dropdown-item-desc"> New user is registered <span class="time"> {{ ($notfication->data['name'])}}</span>

                                     </span>
                                 </a>
                                 <div class="float-right">
                                 <a href="{{ route('markAsReadNotification',$notfication->id)}}"> Mark All As Read</a>
                                        </div
                                 @empty
                                 <div class="dropdown-header">
                                    <a href="#">No Notification found</a>
                                 </div>
                                 @endforelse

                             </div>
                             <div class="dropdown-footer text-center">
                                 <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                             </div>
                         </div>
                     </li>
                     @endif
                     <li class="dropdown"><a href="#" data-toggle="dropdown"
                             class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                 src={{ url('backend/img/user.png') }} class="user-img-radious-style"> <span
                                 class="d-sm-none d-lg-inline-block"></span></a>
                         <div class="dropdown-menu dropdown-menu-right pullDown">
                             <div class="dropdown-title">Hello {{ session('user')['user_name'] }}</div>
                             <a href="{{ route('admin.profile') }}" class="dropdown-item has-icon"> <i
                                     class="far
                                      fa-user"></i> Profile
                             </a> <a href="timeline.html" class="dropdown-item has-icon"> <i
                                     class="fas fa-bolt"></i>
                                 Activities
                             </a>
                             <div class="dropdown-divider"></div>
                             <a href="{{ url('/admin/auth/logout') }}" class="dropdown-item has-icon text-danger">
                                 <i class="fas fa-sign-out-alt"></i>
                                 Logout
                             </a>
                         </div>
                     </li>
                 </ul>
             </nav>
             @include('backend.layouts.sidebar')
