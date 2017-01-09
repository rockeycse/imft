@if (Auth::guest())
        <!-- <li><a href="{{ url('/auth/login') }}">Login</a></li> -->
        <!-- <li><a href="{{ url('/auth/register') }}">Register</a></li> -->
@else
<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; margin-bottom: 5px; *width: 180px;">
    
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Dashboard</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">Dashboard</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">জরিপ</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/survey') }}">Survey List</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">সদস্য</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/member') }}">সদস্য তালিকা</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">প্রতিষ্ঠান সংক্রান্ত </a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/organization') }}">প্রতিষ্ঠান তালিকা</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">ঋণ সংক্রান্ত</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/loan') }}">ঋণ আবেদন তালিকা</a></li>
                <li><a tabindex="-1" href="{{ url('/') }}">ঋণ অনুমদন</a></li>
                <li><a tabindex="-1" href="{{ url('/jamindar') }}">Jamindar</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">প্রোডাক্ট</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/product') }}">প্রোডাক্ট তালিকা</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">উদ্দেশ্য</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/purpose') }}">উদ্দেশ্য তালিকা</a></li>
            </ul>
        </li>
        <li><a tabindex="-1" href="{{ url('/investor') }}">বিনিয়োগকারী</a></li>
        <li><a tabindex="-1" href="{{ url('/grace') }}">গ্রেছ</a></li>
        <li class="dropdown-submenu pull-right"><a tabindex="-1" href="#">Basic Settings</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="{{ url('/zone') }}">Zone</a></li>
                <li><a tabindex="-1" href="{{ url('/area') }}">Area</a></li>
                <li><a tabindex="-1" href="{{ url('/brn') }}">Branch</a></li>
                <li><a tabindex="-1" href="{{ url('/cashinflow') }}">Cash in Flow</a></li>
                <li><a tabindex="-1" href="{{ url('/cashoutflow') }}">Cash Out Flow</a></li>
                <li><a tabindex="-1" href="{{ url('/countr') }}">Countries</a></li>
                <li><a tabindex="-1" href="{{ url('/division') }}">Division</a></li>
                <li><a tabindex="-1" href="{{ url('/district') }}">District</a></li>
                <li><a tabindex="-1" href="{{ url('/union') }}">Union</a></li>
            </ul>
        </li>
</ul>
@endif