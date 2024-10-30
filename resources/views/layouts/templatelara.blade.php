<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Culture</title>
    <!-- StyleSheets  -->
    @include('liens.lien_css_temp')
    @yield('css')
    @livewireStyles
</head>

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">

   <div class="nk-app-root">
        <div class="nk-apps-sidebar is-dark">
            <div class="nk-apps-brand">
            </div>
            <div class="nk-sidebar-element">
                <div class="nk-sidebar-body">
                    <div class="nk-sidebar-content" data-simplebar>
                        <div class="nk-sidebar-menu">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-app-name">
                                <div class="nk-header-app-logo">
                                    <em class="icon ni ni-dashlite bg-purple-dim"></em>
                                </div>
                                <div class="nk-header-app-info">
                                    <span class="sub-text">DashLite</span>
                                    <span class="lead-text">Dashboard</span>
                                </div>
                            </div>
                            <div class="nk-header-menu is-light">
                                <div class="nk-header-menu-inner">
                                    <!-- Menu -->

                                </div>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown notification-dropdown">
                                        <a href="/" class="dropdown-toggle nk-quick-nav-icon" rel="home" title="Visit homepage" >
                                            Accueil
                                        </a>
                                    </li>
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Iliash shared <span>Dashlite-v2</span> with you.</div>
                                                            <div class="nk-notification-time">Just now</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-info-dim ni ni-edit"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Iliash <span>invited</span> you to edit <span>DashLite</span> folder</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have shared <span>project v2</span> with Parvez.</div>
                                                            <div class="nk-notification-time">7 days ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-spark"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Subscription</span> renew successfully.</div>
                                                            <div class="nk-notification-time">2 month ago</div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-notification -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="quick-icon border border-light">
                                                <img class="icon" src="{{asset('assetsss/images/flags/english-sq.png')}}" alt="">
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{asset('assetsss/images/flags/english.png')}}" alt="" class="language-flag">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{asset('assetsss/images/flags/spanish.png')}}" alt="" class="language-flag">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{asset('assetsss/images/flags/french.png')}}" alt="" class="language-flag">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <img src="{{asset('assetsss/images/flags/turkey.png')}}" alt="" class="language-flag">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{Auth::user()->name}}</span>
                                                        <span class="sub-text">{{Auth::user()->email}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/cms/user-profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="html/cms/user-profile.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/cms/user-profile.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>-->
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><em class="icon ni ni-signout"></em><span>Se deconnecter</span></a></li>
                                                    <form id='logout-form' method='post' action='{{route('logout')}}'>
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               @if(Auth::user()->utype === 'ADM')
                <div class="nk-sidebar" data-content="sidebarMenu">
                    <div class="nk-sidebar-inner" data-simplebar>
                        <ul class="nk-menu nk-menu-md">
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Dashboard</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item">
                                <a href="{{route('admin.dashboard')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-template"></em></span>
                                    <span class="nk-menu-text">Post</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('auteur.post')}}" class="nk-menu-link"><span class="nk-menu-text">All Post</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('auteurs.create')}}" class="nk-menu-link"><span class="nk-menu-text">Add Post</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('auteur.cate')}}" class="nk-menu-link"><span class="nk-menu-text">Categories</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-alt"></em></span>
                                    <span class="nk-menu-text">Users</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('user.list')}}" class="nk-menu-link"><span class="nk-menu-text">User List</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('profile')}}" class="nk-menu-link"><span class="nk-menu-text">Profile</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('paie')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-subsription-alt"></em></span>
                                    <span class="nk-menu-text">Abonnement</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            {{--<li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
                                    <span class="nk-menu-text">Setting</span>
                                </a>
                            </li><!-- .nk-menu-item -->--}}
                            <li class="nk-menu-item">
                                <a href="{{route('admin.contact')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class=" icon ni ni-comment-dots"></em></span>
                                    <span class="nk-menu-text">Contact message</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('comm.index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class=" icon ni ni-comment-dots"></em></span>
                                    <span class="nk-menu-text">Commentaires</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div>
                </div>
                @else @if(Auth::user()->utype === 'ATR')
                <div class="nk-sidebar" data-content="sidebarMenu">
                    <div class="nk-sidebar-inner" data-simplebar>
                        <ul class="nk-menu nk-menu-md">
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Dashboard</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item">
                                <a href="{{route('auteur.dashboard')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                    <span class="nk-menu-icon"><em class="icon ni ni-template"></em></span>
                                    <span class="nk-menu-text">Post</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{route('auteur.post')}}" class="nk-menu-link"><span class="nk-menu-text">All Post</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('auteurs.create')}}" class="nk-menu-link"><span class="nk-menu-text">Add Post</span></a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('auteur.cate')}}" class="nk-menu-link"><span class="nk-menu-text">Categories</span></a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="{{route('profile')}}" class="nk-menu-link ">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-alt"></em></span>
                                    <span class="nk-menu-text">Profile</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            {{--<li class="nk-menu-item">
                                <a href="html/cms/settings-general.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
                                    <span class="nk-menu-text">Setting</span>
                                </a>
                            </li><!-- .nk-menu-item -->--}}
                            <li class="nk-menu-item">
                                <a href="{{route('paie')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-subsription-alt"></em></span>
                                    <span class="nk-menu-text">Abonnement</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{route('comm.index')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class=" icon ni ni-comment-dots"></em></span>
                                    <span class="nk-menu-text">Commentaires</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div>
                </div>
                @else
                <div class="nk-sidebar" data-content="sidebarMenu">
                    <div class="nk-sidebar-inner" data-simplebar>
                        <ul class="nk-menu nk-menu-md">
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Dashboard</h6>
                            </li><!-- .nk-menu-heading -->
                            <li class="nk-menu-item">
                                <a href="{{route('user.dashboard')}}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->

                            <li class="nk-menu-item has-sub">
                                <a href="{{route('profile')}}" class="nk-menu-link ">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-alt"></em></span>
                                    <span class="nk-menu-text">Profile</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                             <li class="nk-menu-item has-sub">
                                <a href="{{route('paie')}}" class="nk-menu-link ">
                                    <span class="nk-menu-icon"><em class="icon ni ni-subsription-alt"></em></span>
                                    <span class="nk-menu-text">Abonnement</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            {{--<li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
                                    <span class="nk-menu-text">Setting</span>
                                </a>
                            </li><!-- .nk-menu-item -->--}}
                        </ul><!-- .nk-menu -->
                    </div>
                </div>
                @endif
				@endif


               @yield('contenu')

            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>



    @include('liens.lien_js_temp')
    @yield('js')
    @livewireScripts
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

</body>

</html>
