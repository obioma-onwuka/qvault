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