
<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="no-padding-top no-padding-bottom xs-no-padding">

        <h5 class="alt-font text-dark-gray display-block tz-text text-capitalize">Welcome <span class="text-success text-capitalize">{{ $userCheck->first_name }}</span>!</h5>
        <br>

    </div>

</div>

<div class="col-md-3 col-sm-3 col-xs-12 xs-margin-fifteen-top">
    <div class="content-style3 border-radius-6 padding-eleven bg-white tz-background-color">

        <!-- Aside Menu -->
        
        <aside>
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="#notes-section">
                        <i class="fa fa-user"></i> &nbsp;
                        My Account
                    </a>
                </li>
                <li>
                    <a href="{{ route('boarded.notes.index') }}">
                        <i class="fa fa-sticky-note"></i> &nbsp;
                        Notes
                    </a>
                </li>
                <li>
                    <a href="{{ route('boarded.socials.index') }}">
                        <i class="fa fa-instagram"></i> &nbsp;
                        Socials
                    </a>
                </li>
        
                <li>
                    <a href="{{ route('boarded.urls.index') }}">
                        <i class="fa fa-link"></i> &nbsp;
                        Short Urls
                    </a>
                </li>
                <li>
                    <a href="{{ route('guest.logout') }}">
                        <i class="fa fa-power-off"></i> &nbsp;
                        Logout
                    </a>
                </li>
            </ul>
        </aside>
        
        
        <!-- End Aside Menu -->
    </div>
</div>