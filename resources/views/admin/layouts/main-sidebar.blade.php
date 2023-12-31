<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{route('adminHome')}}">
            {{-- <img src=""
                 class="header-brand-img light-logo1" alt="logo"> --}}
                 <h4 style="font-style: bold;">الرئيسية</h4>
        </a>
        <!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li><h3>العناصر</h3></li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('adminHome')}}">
                <i class="fa fa-home side-menu__icon"></i>
                <span class="side-menu__label">الرئيسية</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('admins.index')}}">
                <i class="fa fa-users side-menu__icon"></i>
                <span class="side-menu__label">المشرفين</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{ route('showInformation') }}">
                <i class="fa fa-question side-menu__icon"></i>
                <span class="side-menu__label">معلوماتي</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{ route('contacts.index') }}">
                <i class="fa fa-address-book side-menu__icon"></i>
                <span class="side-menu__label">جهات الاتصال</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{ route('services.index') }}">
                <i class="fa fa-list side-menu__icon"></i>
                <span class="side-menu__label">الخدمات</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{ route('projects.index') }}">
                <i class="fa fa-wrench side-menu__icon"></i>
                <span class="side-menu__label">مشاريع</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.logout')}}">
                <i class="fa fa-lock side-menu__icon"></i>
                <span class="side-menu__label">تسجيل الخروج</span>
            </a>
        </li>

    </ul>
</aside>

