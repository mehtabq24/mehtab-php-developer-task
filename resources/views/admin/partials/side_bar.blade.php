<nav>
    <div class="app-logo">
        <a class="logo d-inline-block" href="{{ url('/admin/dashboard') }}">
            <img alt="#" src="{{ asset('images/icons/logo-2.png') }}" class="">
        </a>

        <span class="bg-light-primary toggle-semi-nav d-flex-center">
                <i class="ti ti-chevron-right"></i>
            </span>

        <div class="d-flex align-items-center nav-profile p-3">
            <div class="flex-grow-1 ps-2">
                <h6 class="text-primary mb-0">
                    @if(Auth::check())
                        Welcome, {{ Auth::user()->name }}
                    @endif
            </h6>
            </div>


            <div class="dropdown profile-menu-dropdown">
                <a aria-expanded="false" data-bs-auto-close="true" data-bs-placement="top" data-bs-toggle="dropdown" role="button">
                    <i class="ti ti-settings fs-5"></i>
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item">
                        <a class="f-w-500" href="profile.php.html" target="_blank">
                            <i class="ph-duotone  ph-user-circle pe-1 f-s-20"></i> Profile Details
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <a class="f-w-500" href="setting.php.html" target="_blank">
                            <i class="ph-duotone  ph-gear pe-1 f-s-20"></i> Settings
                        </a>
                    </li>
                    <li class="dropdown-item">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <a class="f-w-500" href="#">
                                    <i class="ph-duotone  ph-detective pe-1 f-s-20"></i> Incognito
                                </a>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch">
                                    <input class="form-check-input form-check-primary" id="incognitoSwitch" type="checkbox">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown-item">
                        <a class="mb-0 text-secondary f-w-500" href="sign_up.php.html" target="_blank">
                            <i class="ph-bold  ph-plus pe-1 f-s-20"></i> Add account
                        </a>
                    </li>

                    <li class="app-divider-v dotted py-1"></li>

                    <li class="dropdown-item">

                                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 border-0 bg-transparent custom_class">
                                    <svg stroke="currentColor" stroke-width="1.5">
                                            <use xlink:href="{{ asset('admin/assets/svg/_sprite.svg#chat-bubble') }}"></use>
                                        </svg>
                                        Logout
                                    </button>
                                </form>
                        {{-- <a class="mb-0 text-danger" href="sign_in.php.html" target="_blank">
                            <i class="ph-duotone  ph-sign-out pe-1 f-s-20"></i> Log Out
                        </a> --}}
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="app-nav" id="app-simple-bar">
        <ul class="main-nav p-0 mt-2">
            <li class="menu-title"><span>Dashboard</span></li>
            <li class="no-sub">
                <a href="{{ url('admin.enquiries.index') }}">
                    <svg stroke="currentColor" stroke-width="1.5">
                        <use xlink:href="../assets/svg/_sprite.svg#document-text"></use>
                    </svg>
                    Product
                </a>
            </li>
            
        </ul>
                    <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 border-0 bg-transparent custom_class">
                                    {{-- <svg stroke="currentColor" stroke-width="1.5">
                                            <use xlink:href="{{ asset('admin/assets/svg/_sprite.svg#chat-bubble') }}"></use>
                                        </svg> --}}
                                        Logout
                                    </button>
                                </form>
    </div>

    <div class="menu-navs">
        <span class="menu-previous"><i class="ti ti-chevron-left"></i></span>
        <span class="menu-next"><i class="ti ti-chevron-right"></i></span>
    </div>

</nav>