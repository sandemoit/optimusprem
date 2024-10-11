<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('storage') }}/images/logo-icon-2.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">{{ config('app.name') }}</h4>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon">
                    <ion-icon name="home-outline"></ion-icon>
                </div>
                <div class="menu-title">{{ __('Dashboard') }}</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon">
                    <ion-icon name="bar-chart-outline"></ion-icon>
                </div>
                <div class="menu-title">{{ __('Transactions') }}</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon">
                    <ion-icon name="wallet-outline"></ion-icon>
                </div>
                <div class="menu-title">{{ __('Deposit') }}</div>
            </a>
            <ul>
                <li> <a href="widgets-static-widgets.html">
                        <ion-icon name="ellipse-outline"></ion-icon>Static Widgets
                    </a>
                </li>
                <li> <a href="widgets-data-widgets.html">
                        <ion-icon name="ellipse-outline"></ion-icon>Data Widgets
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-label">{{ __('Other') }}</li>

        <li>
            <a href="#">
                <div class="parent-icon">
                    <ion-icon name="close-outline"></ion-icon>
                </div>
                <div class="menu-title">{{ __('Coming Soon') }}</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
