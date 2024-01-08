<x-layouts.app title="Dashboard">
    <div class="dashboard-wrapper" x-data="{ sidebar: true }">
        <div x-bind:class="{ 'active': sidebar }" class="sidebar">
            <a href="/" class="brand">
                SIM KURSUS
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="javascript:void()">
                        <x-feathericon-home />
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void()">
                        <x-feathericon-home />
                        Perusahaan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void()">
                        <x-feathericon-home />
                        Mobil
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void()">
                        <x-feathericon-home />
                        Paket
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void()">
                        <x-feathericon-home />
                        Kursus
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void()">
                        <x-feathericon-home />
                        Presensi
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void()">
                        <x-feathericon-home />
                        Nilai
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void()">
                        <x-feathericon-home />
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="red-stuff">
                <button class="btn menu-toggler" x-on:click="sidebar = !sidebar">
                    <x-feathericon-menu />
                </button>

                <div class="breadcrumb">
                    Dashboard
                </div>
            </div>
            <div class="container">test</div>
        </div>
    </div>
</x-layouts.app>
