<li class="nav-item">
    <a href="{{ route('lsis.index') }}"
       class="nav-link {{ Request::is('lsis*') ? 'active' : '' }}">
        <p>Locally Stranded Individual</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('statuses.index') }}"
       class="nav-link {{ Request::is('statuses*') ? 'active' : '' }}">
        <p>Statuses</p>
    </a>
</li>


