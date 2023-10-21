@section('page-sidebar')
    @php
        $current_route = app('request')
            ->route()
            ->getName();
    @endphp
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Dashboard</div>
                    @if (Auth::user()->isAn('admin') || Auth::user()->isA('superadmin'))
                        <a class="nav-link @if ($current_route == 'admin.dashboard') active @endif"
                            href="{{ route('admin.dashboard') }}">
                            <div class="sb-nav-link-icon">
                                <!-- img or icon -->
                            </div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Donation Campaign</div>
                        <a class="nav-link @if ($current_route == 'campaign' ||
                            $current_route == 'campaign.add' ||
                            $current_route == 'campaign.view'||
                            $current_route == 'campaign.manualdonate.add'||
                            $current_route == 'campaign.edit') active @endif" href="{{ route('campaign') }}">
                            <div class="sb-nav-link-icon">
                                <!-- img or icon -->
                            </div>
                            Campaigns
                        </a>
                        <a class="nav-link @if ($current_route == 'admin.user' || $current_route == 'admin.user.view' || $current_route == 'admin.user.edit' || $current_route == 'admin.user.add') active @endif"
                            href="{{ route('admin.user') }}">
                            <div class="sb-nav-link-icon">
                                <!-- img or icon -->
                            </div>
                            Users
                        </a>
                        <a class="nav-link @if ($current_route == 'admin.transaction-history' || $current_route == 'admin.transaction.manual_donation' || $current_route == 'admin.transaction.view') active @endif"
                            href="{{ route('admin.transaction-history') }}">
                            <div class="sb-nav-link-icon">
                                <!-- img or icon -->
                            </div>
                            Transactions History
                        </a>
                        <a class="nav-link @if ($current_route == 'admin.email_history' || $current_route == 'admin.email_history.view') active @endif"
                            href="{{ route('admin.email_history') }}">
                            <div class="sb-nav-link-icon">
                                <!-- img or icon -->
                            </div>
                            Email History
                        </a>
                        <div class="sb-sidenav-menu-heading">Configurations</div>
                        
                        <a class="nav-link @if ($current_route == 'campaignCategory') active @endif"
                            href="{{ route('campaignCategory') }}">
                            <div class="sb-nav-link-icon">
                        <!-- img or icon -->
                            </div>
                            Campaign Category
                        </a>
                        <a class="nav-link @if ($current_route == 'admin.loginPage.edit') active @endif"
                            href="{{ route('admin.loginPage.edit') }}">
                            <div class="sb-nav-link-icon">
                        <!-- img or icon -->
                            </div>
                            Login Page Configuration
                        </a>
                        {{-- <a class="nav-link @if ($current_route == 'admin.testimonial.index' ||
                            $current_route == 'admin.testimonial.edit' ||
                            $current_route == 'admin.testimonial.add') active @endif"
                            href="{{ route('admin.testimonial.index') }}">
                            <div class="sb-nav-link-icon">
                                <!-- img or icon -->
                            </div>
                            Testimonial Configuration
                        </a> --}}
                        {{-- <a class="nav-link @if ($current_route == 'admin.pageconfig' ||
                            $current_route == 'admin.edit.giving' || $current_route == 'admin.edit.content-page' || $current_route == 'admin.edit.ways-give' || $current_route == 'admin.edit.why-give' ||
                            $current_route == 'admin.view.giving' || $current_route == 'admin.view.content-page' || $current_route == 'admin.view.ways-give' || $current_route == 'admin.view.why-give') active @endif"
                            href="{{ route('admin.pageconfig') }}">
                            <div class="sb-nav-link-icon">
                                <!-- img or icon -->
                            </div>
                            Page Configuration
                        </a> --}}

                        <a class="nav-link @if ($current_route == 'admin.settingconfig' ||
                            $current_route == 'admin.edit.email' || $current_route == 'admin.view.email' ||
                            $current_route == 'admin.edit.ipay' || $current_route == 'admin.view.ipay' ||
                            $current_route == 'admin.edit.terms' || $current_route == 'admin.view.terms' ) active @endif"
                            href="{{ route('admin.settingconfig') }}">
                            <div class="sb-nav-link-icon">
                                <!-- img or icon -->
                            </div>
                            Setting Configuration
                        </a>
                        {{-- <a class="nav-link @if ($current_route == 'admin.settingconfig' ||
                            $current_route == 'admin.edit.email' || $current_route == 'admin.view.email' ||
                            $current_route == 'admin.edit.ipay' || $current_route == 'admin.view.ipay' ||
                            $current_route == 'admin.edit.terms' || $current_route == 'admin.view.terms' ) active @endif"
                            href="{{ route('admin.settingconfig') }}"> --}}
                        <a class="nav-link" href="{{route('admin.system_email')}}" @if ($current_route == 'admin.system_email' || $current_route == 'admin.system_email.view' || $current_route == 'admin.system_email.edit') active @endif>
                            <div class="sb-nav-link-icon">
                                <!-- img or icon -->
                            </div>
                            System Email Template
                        </a>
                        <a class="nav-link" href="{{route('iframe.show')}}" @if ($current_route == 'iframe.show') active @endif>
                            <div class="sb-nav-link-icon">
                                <!-- img or icon -->
                            </div>
                            Progressbar iframe tag
                        </a>
                    @endif
                </div>
            </div>
        </nav>
    </div>
@endsection
