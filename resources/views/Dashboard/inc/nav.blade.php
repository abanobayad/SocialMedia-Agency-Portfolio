@include('sweetalert::alert')
<aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="#"
                target="_blank">
                @if (Auth::user()->image != null)
                <img   src="{{Storage::disk('s3')->url(Auth()->user()->image)}}" class="navbar-brand-img rounded h-100" alt="main_logo">
                @else
                <h6>No Image</h6>
                @endif
                <span class="ms-2 font-weight-bold">{{Auth::user()->name}}</span>

            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">

            {{-- About Me --}}
                <li class="nav-item">
                    <a class="nav-link " href="{{route('about')}}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-single-02 text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">About Me</span>
                    </a>
                </li>

            {{-- Skills --}}
                <li class="nav-item">
                    <a class="nav-link " href="{{route('skill')}}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-cogs  text-danger text-sm opacity-50"></i>
                        </div>
                        <span class="nav-link-text ms-1">Skills</span>
                    </a>
                </li>


            {{-- Services --}}
                <li class="nav-item">
                    <a class="nav-link " href="{{route('service')}}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-wrench text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Services</span>
                    </a>
                </li>



            {{-- Projects --}}
                <li class="nav-item">
                    <a class="nav-link " href="{{route('project')}}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-project-diagram text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Projects</span>
                    </a>
                </li>



            {{-- Contacts --}}
                <li class="nav-item">
                    <a class="nav-link " href="{{route('contact')}}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-phone text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Contacts</span>
                    </a>
                </li>


            </ul>
        </div>
    </aside>
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                {{-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
                </nav> --}}
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            {{-- <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span> --}}
                            {{-- <input type="text" class="form-control" placeholder="Type here..."> --}}
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        {{-- Account Setting --}}
                        <li class="mx-1 nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user me-sm-1"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">

                                {{-- Profile Button --}}

                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="{{route('setting.edit')}}">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                @if (Auth::user()->image != null)
                                                <img src="{{Storage::disk('s3')->url(Auth()->user()->image)}}" class="avatar avatar-sm  me-3 ">
                                                @else
                                                <h6>No Image</h6>
                                                @endif
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    {{Auth::user()->name}}
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-account ">Edit Account</i>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>


                                {{-- Logout Button --}}
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="{{route('logout')}}">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <i class="fa fa-sign-out" ></i>
                                                <label for="Logout"> Logout</label>
                                            </div>
                                        </div>
                                    </a>
                                </li>



                            </ul>
                        </li>
                        {{-- Dark Modes --}}
                        {{-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                    <i class="sidenav-toggler-line bg-white"></i>
                                </div>
                            </a>
                        </li> --}}
                        {{-- Serach Bar --}}
                        {{-- <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li> --}}

                        {{-- nav --}}
                        <li  class="mx-1 nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bars cursor-pointer"></i>
                            </a>

                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton" >
								<div >

                                    <li class="mb-2">

                                            <ul class="navbar-nav">

                                                <li class="mb-2">
                                                    <a class="dropdown-item border-radius-md" href="{{route('about')}}">
                                                        <div class="d-flex py-1">
                                                            <div class="my-auto">
                                                                <i class="ni ni-single-02 text-info text-sm opacity-10"></i>
                                                            </div>
                                                    </a>
                                                </li>

                                                <li class="mb-2">
                                                    <a class="dropdown-item border-radius-md"  href="{{route('skill')}}">
                                                        <div class="d-flex py-1">
                                                            <div class="my-auto">
                                                                <i class="fa fa-cogs  text-danger text-sm opacity-50"></i>
                                                            </div>
                                                    </a>
                                                </li>


                                                <li class="mb-2">
                                                    <a class="dropdown-item border-radius-md" href="{{route('service')}}">
                                                        <div class="d-flex py-1">
                                                            <div class="my-auto">
                                                                <i class="fa fa-wrench text-dark text-sm opacity-10"></i>
                                                            </div>
                                                    </a>
                                                </li>


                                                <li class="mb-2">
                                                    <a class="dropdown-item border-radius-md" href="{{route('project')}}">
                                                        <div class="d-flex py-1">
                                                            <div class="my-auto">
                                                                <i class="fa fa-project-diagram text-warning text-sm opacity-10"></i>
                                                            </div>
                                                    </a>
                                                </li>


                                                <li class="mb-2">
                                                    <a class="dropdown-item border-radius-md" href="{{route('contact')}}">
                                                        <div class="d-flex py-1">
                                                            <div class="my-auto">
                                                                <i class="fa fa-phone text-success text-sm opacity-10"></i>
                                                            </div>
                                                    </a>
                                                </li>


                                                </ul>
                                    </li>
								</div>
                            </ul>
                        </li>

                        {{-- Notifications --}}
                        <li  class="mx-1 nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <span  id="noti_count" >
                                @if (auth()->user()->unreadNotifications->count() > 0)
                                    <span class="  "></span>

                                    <span class="count badge  badge-danger text-dark">
						    {{ auth()->user()->unreadNotifications->count() }}
                                    </span>
                                @else
                                    <span class=" badge badge-dark text-light" >
                                        {{ auth()->user()->unreadNotifications->count() }}
                                    </span>
                                @endif

                            </span>

                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton" >
								<div id="noti_content">
                                @foreach (auth()->user()->unreadNotifications->sortByDesc('updated_at')->take(3) as $notification)
                                    <li class="mb-2">
                                        <a class="dropdown-item border-radius-md" href="{{ route('markRead', $notification->id) }}">
                                            <div class="d-flex py-1">
                                                <div class="my-auto">
                                                    {{-- <img src="/dash/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "> --}}
                                                    <i class="avatar avatar-sm  me-3 text-primary fa  fa-phone fa-5x"></i>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="text-sm font-weight-normal mb-1">
                                                        <span class="font-weight-bold">{{$notification->data['data']['title']}}</span> from {{$notification->data['data']['user_name']}}
                                                    </h6>
                                                    <p class="text-xs text-secondary mb-0">
                                                        <i class="fa fa-clock me-1"></i>
                                                        {{$notification->updated_at->diffForHumans()}}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
								</div>
                                <p   class="p-1 mb-0 text-center">
                                    <a style="text-decoration: none" class="text-dark" href="{{route('showAll')}}" > See all notifications</a>
                                    </p>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

    {{-- Start Conetent --}}

    <div class="container-fluid py-4">
