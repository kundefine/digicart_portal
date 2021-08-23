<?php
const SERVICES = [
    "name" => "Services",
    "parent_name" => null,
    "guard_name" => 'admin'
];
const SERVICES_HOSTING = [
    "name" => "Services-Hosting",
    "parent_name" => "Services",
    "guard_name" => 'admin'
];
const SERVICES_DOMAIN = [
    "name" => "Services-Domain",
    "parent_name" => "Services",
    "guard_name" => 'admin'
];
const SERVICES_SSL = [
    "name" => "Services-SSL",
    "parent_name" => "Services",
    "guard_name" => 'admin'
];

?>
<li class="nav-item {{ active_class(['services/*']) }}">
    <a class="nav-link" data-toggle="collapse" href="#services" role="button" aria-expanded="{{ is_active_route(['services/*']) }}" aria-controls="services">
        <i class="link-icon" data-feather="server"></i>
        <span class="link-title" p-name="{{json_encode(SERVICES)}}">Services</span>
        <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse {{ show_class(['services/*']) }}" id="services">
        <ul class="nav sub-menu">
            <li class="nav-item">
                <a href="{{ url('/email/compose') }}" class="nav-link {{ active_class(['email/compose']) }}" p-name="{{json_encode(SERVICES_HOSTING)}}">Hosting</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/email/inbox') }}" class="nav-link {{ active_class(['email/inbox']) }}" p-name="{{json_encode(SERVICES_DOMAIN)}}">Domain</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/email/read') }}" class="nav-link {{ active_class(['email/read']) }}" p-name="{{json_encode(SERVICES_SSL)}}">SSL</a>
            </li>
        </ul>
    </div>
</li>