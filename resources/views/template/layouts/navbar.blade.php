<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline nav-search mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
            <input class="form-control" type="text" placeholder="Search" id="searchInput" aria-label="Search"
                data-width="250">
            <button class="btn" id="searchBtn"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <span id="found">
        <button id="prev" class="btn btn-warning" onclick="prev()"><i class="fas fa-arrow-left"></i></button>
        <button id="next" class="btn btn-success mr-3" onclick="next()"><i class="fas fa-arrow-right"></i></button>
        <label id="position" class="text-white h2 font-weight-bold">0</label><span
            class="text-white h2 font-weight-bold ml-1 mr-1">/</span><label id="total"
            class="text-white h2 font-weight-bold">0</label>
    </span>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="#" alt="" class="rounded-circle mr-1" style="width: 35px; height: 35px">
                {{-- @if(Auth::user()->avatar == 'default_avatar_user.png')
                    <img src="/images/avatar_default/default_avatar_user.png" alt="{{ Auth::user()->name }}"
                        class="rounded-circle mr-1" style="width: 35px; height: 35px">
                @else
                    <img src="{{ asset('images/avatar_users/'.Auth::user()->avatar) }}"
                        alt="{{ Auth::user()->name }}" class="rounded-circle mr-1"
                        style="width: 35px; height: 35px">
                @endif
                <div class="d-sm-none d-lg-inline-block"></div> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                {{-- <div class="dropdown-title text-center h6">Hi, {{ Auth::user()->name }}</div> --}}
                <div class="dropdown-divider"></div>

                <a href="{{ url('/dashboard') }}" class="dropdown-item has-icon">
                    <i class="fas fa-home"></i> Dashboard
                </a>
                <a href="{{ url('/users') }}" class="dropdown-item has-icon">
                    <i class="fas fa-user-tie"></i> Users
                </a>
                {{-- <a href="{{ route('profile.edit')}}" class="dropdown-item has-icon">
                    <i class="fas fa-edit"></i> Edit Profile
                </a> --}}
                <div class="dropdown-divider"></div>
                <center>
                    <button class="btn btn-danger col-10 text-center dropdown-item" data-toggle="modal"
                        data-target="#logoutModal"><a href="#" class="nav-link text-white">
                            <i class="fa fa-power-off has-icon mt-2 mr-2"></i>
                            <span><b>Log out</b></span>
                        </a></button></center>
            </div>
        </li>
    </ul>
</nav>