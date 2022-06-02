<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>

                {{-- DASHBOARD --}}
                <a class="nav-link" href="{{ route('user_dash') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>

                 {{-- PERSONAL  DETAILS --}}
                 <a class="nav-link" href="{{ route('details.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Personal Details
                </a>
                 {{-- ACADEMIC DETAILS --}}
                <a class="nav-link" href="{{ route('academic.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Academic Details
                </a>
                <a class="nav-link" href="{{ route('documents.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Document Uploads
                </a>


                {{-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        @if ( Auth::user()->personal_submitted==0 )
                        <a class="nav-link" href="{{ route('details.index') }}">Add Details</a>
                        @endif
                        @if ( Auth::user()->personal_submitted==1 )
                        <a class="nav-link" href="{{ route('details.show',Auth::guard('web')->user()->id) }}">View Details</a>
                        @endif
                    </nav>
                </div> --}}

                {{-- ACCADEMIC DETAILS --}}

                {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAcc" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Accademic
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a> --}}

                <div class="collapse" id="collapseAcc" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        {{-- @if ( Auth::user()->personal_submitted==0 ) --}}
                        <a class="nav-link" href="">Add Details</a>
                        {{-- @endif --}}
                        {{-- @if ( Auth::user()->personal_submitted==1 ) --}}
                        {{-- <a class="nav-link" href="{{ route('academic.show',Auth::guard('web')->user()->id) }}">View Details</a> --}}
                        {{-- @endif --}}
                    </nav>
                </div>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ Auth::user()->name }}
        </div>
    </nav>
</div>
