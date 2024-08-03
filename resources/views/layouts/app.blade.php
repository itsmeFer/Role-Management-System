<nav>
    <a href="{{ route('home') }}">Home</a>
    @if(auth()->user()->role === 'admin')
        <a href="{{ route('admin.index') }}">Admin Dashboard</a>
    @endif
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</nav>
