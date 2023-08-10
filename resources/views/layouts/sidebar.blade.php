<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
{{--            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0RgzwKGXUa3_Xa1tQRwv5BmZWtqHsa0mZqDop394tZJOjxSYCAhD4NjIv_CV0BeXVxZo&usqp=CAU" width="200" height="200" >--}}
        </div>
        <div class="sidebar-brand-text mx-3">Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">

            <i class="fas fa-fw fa-solid fa-bars fa-home" style="color: #ededed;"></i>
            <span>Главный</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('products') }}">
{{--            <i class="fas fa-fw fa-solid fa-list"  style="color: #ededed;"></i>--}}
            <i class="fas fa-fw fa-solid fa-list-ol" style="color: #ededed;"></i>
            <span>Продукт</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/profile">
{{--            <i class="fas fa-fw fa-tachometer-alt"></i>--}}
            <i class="fas fa-fw fa-solid fa-address-card" style="color: #ededed;"></i>
            <span>Профиль</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
