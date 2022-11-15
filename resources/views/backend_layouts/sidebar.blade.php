<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{ route('dashboard') }}">
                <img src="{{ asset('backend_assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo"
                    alt="logo">
                <img src="{{ asset('backend_assets/images/brand/logo-1.png') }}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{ asset('backend_assets/images/brand/logo-2.png') }}" class="header-brand-img light-logo"
                    alt="logo">
                <img src="{{ asset('backend_assets/images/brand/logo-3.png') }}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('dashboard') }}"><i
                            class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                @canany(['berita-index', 'beritaCategory-index'])
                    <li class="sub-category">
                        <h3>Berita</h3>
                    </li>
                @endcanany
                @can('berita-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['berita.*']) }}" href="{{ route('berita.index') }}"><i
                                class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Berita</span></a>
                    </li>
                @endcan
                @can('beritaCategory-index')
                <li>
                    <a class="side-menu__item {{ active_class(['beritaCategory.*']) }}"
                        href="{{ route('beritaCategory.index') }}"><i class="side-menu__icon fe fe-file-text"></i><span
                            class="side-menu__label">Kategori Berita</span></a>
                </li>
                @endcan
                {{-- <li>
                    <a class="side-menu__item {{ active_class(['beritaSubcategory.*']) }}"
                        href="{{ route('beritaSubcategory.index') }}"><i
                            class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">SubKategori
                            Berita</span></a>
                </li> --}}
                @canany(['kebijakan-index', 'kebijakanCategory-index'])
                    <li class="sub-category">
                        <h3>Kebijakan</h3>
                    </li>
                @endcanany
                @can('kebijakan-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['kebijakan.*']) }}"
                            href="{{ route('kebijakan.index') }}"><i class="side-menu__icon fe fe-briefcase"></i><span
                                class="side-menu__label">Kebijakan</span></a>
                    </li>
                @endcan
                @can('kebijakanCategory-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['kebijakanCategory.*']) }}"
                            href="{{ route('kebijakanCategory.index') }}"><i
                                class="side-menu__icon fe fe-briefcase"></i><span class="side-menu__label">Kategori
                                Kebijakan</span></a>
                    </li>
                @endcan
                <li class="sub-category">
                    <h3>Website</h3>
                </li>
                @can('slider-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['slider.*']) }}" href="{{ route('slider.index') }}"><i
                                class="side-menu__icon fe fe-image"></i><span class="side-menu__label">Slider</span></a>
                    </li>
                @endcan
                @can('link-index')
                    <li>
                        <a class="side-menu__item {{ active_class(['link.*']) }}" href="{{ route('link.index') }}"><i
                                class="side-menu__icon fe fe-link"></i><span class="side-menu__label">Link</span></a>
                    </li>
                @endcan
                @can('beranda-index')
                <li>
                    <a class="side-menu__item {{ active_class(['beranda.*']) }}" href="{{ route('beranda.index') }}"><i
                            class="side-menu__icon fe fe-link"></i><span class="side-menu__label">Beranda</span></a>
                </li>
            @endcan

                <li class="sub-category">
                    <h3>User Management</h3>
                </li>
                <li>
                    <a class="side-menu__item {{ active_class(['user.*']) }}" href="{{ route('user.index') }}"><i
                            class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">User</span></a>
                </li>
                <li>
                    <a class="side-menu__item {{ active_class(['role.*']) }}" href="{{ route('role.index') }}"><i
                            class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Role</span></a>
                </li>
                <li>
                    <a class="side-menu__item {{ active_class(['permission.*']) }}"
                        href="{{ route('permission.index') }}"><i class="side-menu__icon fe fe-grid"></i><span
                            class="side-menu__label">Permission</span></a>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
</div>
