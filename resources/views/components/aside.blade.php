<aside class="sidebar sidebar-default navs-rounded-all">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="{{ url('/') }}" class="navbar-brand">
            <!--Logo start-->
            <svg
                width="30"
                class=""
                viewBox="0 0 30 30"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <rect
                    x="-0.757324"
                    y="19.2427"
                    width="28"
                    height="4"
                    rx="2"
                    transform="rotate(-45 -0.757324 19.2427)"
                    fill="currentColor"
                />
                <rect
                    x="7.72803"
                    y="27.728"
                    width="28"
                    height="4"
                    rx="2"
                    transform="rotate(-45 7.72803 27.728)"
                    fill="currentColor"
                />
                <rect
                    x="10.5366"
                    y="16.3945"
                    width="16"
                    height="4"
                    rx="2"
                    transform="rotate(45 10.5366 16.3945)"
                    fill="currentColor"
                />
                <rect
                    x="10.5562"
                    y="-0.556152"
                    width="28"
                    height="4"
                    rx="2"
                    transform="rotate(45 10.5562 -0.556152)"
                    fill="currentColor"
                />
            </svg>
            <!--logo End-->
            <h4 class="logo-title">{{ $namaPerusahaan->nama_perusahaan }}</h4>
        </a>
        <div
            class="sidebar-toggle"
            data-toggle="sidebar"
            data-active="true"
        >
            <i class="icon">
                <svg
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M4.25 12.2744L19.25 12.2744"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                    <path
                        d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                </svg>
            </i>
        </div>
    </div>

    <div class="sidebar-body pt-0 data-scrollbar">
        <div class="sidebar-list">
            <!-- Sidebar Menu Start -->
            <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                <li class="nav-item static-item">
                    <a
                        class="nav-link static-item disabled"
                        href="#"
                        tabindex="-1"
                    >
                        <span class="default-icon">Menu</span>
                        <span class="mini-icon">-</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link active"
                        aria-current="page"
                        href="{{ url('/') }}"
                    >
                        <i class="icon">
                            <svg
                                width="20"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    opacity="0.4"
                                    d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z"
                                    fill="currentColor"
                                ></path>
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                                    fill="currentColor"
                                ></path>
                            </svg>
                        </i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-bs-toggle="collapse"
                        href="#master-menu"
                        role="button"
                        aria-expanded="false"
                        aria-controls="horizontal-menu"
                    >
                        <i class="bi bi-database-fill"></i>
                        <span class="item-name">Master Data</span>
                        <i class="right-icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="18"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 5l7 7-7 7"
                                />
                            </svg>
                        </i>
                    </a>
                    <ul
                        class="sub-nav collapse"
                        id="master-menu"
                        data-bs-parent="#sidebar-menu"
                    >
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ url('jabatan') }}"
                            >
                                <i class="icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> J </i>
                                <span class="item-name">
                                    Jabatan
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ url('posisi') }}"
                            >
                                <i class="icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> P </i>
                                <span class="item-name">
                                    Posisi
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ url('departemen') }}"
                            >
                                <i class="icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> D </i>
                                <span class="item-name">
                                    Departemen
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ url('teknologi') }}"
                            >
                                <i class="icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> T </i>
                                <span class="item-name"
                                    >Teknologi</span
                                >
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ url('platform') }}"
                            >
                                <i class="icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> P </i>
                                <span class="item-name"
                                    >Platform</span
                                >
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                            class="nav-link"
                            href="{{ url('industri') }}"
                            >
                            <i class="icon">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> I </i>
                                <span class="item-name"
                                >Industri</span
                                >
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ url('layanan') }}"
                            >
                                <i class="icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> L </i>
                                <span class="item-name"
                                    >Layanan</span
                                >
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ url('klien') }}"
                            >
                                <i class="icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> K </i>
                                <span class="item-name"
                                    >Klien</span
                                >
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ url('apresiasi') }}"
                            >
                                <i class="icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> A </i>
                                <span class="item-name"
                                    >Apresiasi</span
                                >
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ url('budaya') }}"
                            >
                                <i class="icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> B </i>
                                <span class="item-name"
                                    >Budaya</span
                                >
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ url('prinsip') }}"
                            >
                                <i class="icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> P </i>
                                <span class="item-name"
                                    >Prinsip</span
                                >
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-bs-toggle="collapse"
                        href="#horizontal-menu"
                        role="button"
                        aria-expanded="false"
                        aria-controls="horizontal-menu"
                    >
                        <i class="bi bi-people-fill"></i>
                        <span class="item-name">Stakeholder</span>
                        <i class="right-icon">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="18"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 5l7 7-7 7"
                                />
                            </svg>
                        </i>
                    </a>
                    <ul
                        class="sub-nav collapse"
                        id="horizontal-menu"
                        data-bs-parent="#sidebar-menu"
                    >
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ url('komisaris') }}"
                            >
                                <i class="icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> K </i>
                                <span class="item-name">
                                    Komisaris
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ url('direksi') }}"
                            >
                                <i class="icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> D </i>
                                <span class="item-name">
                                    Direksi
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="{{ url('karyawan') }}"
                            >
                                <i class="icon">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="10"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                    >
                                        <g>
                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="8"
                                                fill="currentColor"
                                            ></circle>
                                        </g>
                                    </svg>
                                </i>
                                <i class="sidenav-mini-icon"> K </i>
                                <span class="item-name">
                                    Karyawan
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="{{ url('portofolio') }}"
                    >
                        <i class="bi bi-pc-display-horizontal"></i>
                        <span class="item-name">Portofolio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="{{ url('fasilitas') }}"
                    >
                    <i class="bi bi-buildings"></i>
                        <span class="item-name">Fasilitas</span>
                    </a>
                </li>
                
                <hr class="hr-horizontal" />
            </ul>
            <!-- Sidebar Menu End -->
        </div>
    </div>
    <div class="sidebar-footer"></div>
</aside>