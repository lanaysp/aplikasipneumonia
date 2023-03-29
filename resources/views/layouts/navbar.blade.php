<div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas"
    aria-labelledby="suhaOffcanvasLabel">
    <!-- Close button-->
    <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas"
        aria-label="Close"></button>
    <!-- Offcanvas body-->
    <div class="offcanvas-body">
        <!-- Sidenav Profile-->
        @if (Auth::user())
        <div class="sidenav-profile">
            <div class="user-profile">
                <img src="{{ Auth::user()->gravatar() }}" alt="">
            </div>
            <div class="user-info">
                <h6 class="user-name mb-1">{{ auth()->user()->name }}</h6>
            </div>
        </div>
        @endif
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
            <li><a href="{{ route('profile.edit') }}"><i class="lni lni-user"></i>My Profile</a></li>
            {{-- <li><a href="notifications.html"><i class="lni lni-alarm lni-tada-effect"></i>Notifications<span
                        class="ms-3 badge badge-warning">3</span></a></li> --}}
            <li><a href="{{ route('notifikasi') }}"><i class="lni lni-alarm lni-tada-effect"></i>Notifications<span class="ms-3 badge badge-warning">1</span></a></li>
            <li><a href="{{ route('edukasi') }}"><i class="lni lni-book"></i>Edukasi</a></li>
            {{-- <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li> --}}
            @hasanyrole('admin|faskes')
                <li><a href="{{ route('admin.dashboard') }}"><i class="lni lni-dashboard"></i>Dashboard</a></li>
            @endhasanyrole
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><i
                            class="lni lni-power-switch"></i>Sign Out</a></li>
            </form>
        </ul>
    </div>
</div>
