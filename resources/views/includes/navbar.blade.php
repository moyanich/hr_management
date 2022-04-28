<!--====== NAVBAR STARTS =====-->
<div class="navbar bg-base-100">
    <div class="flex-1">
        <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
    </div>
    <div class="flex-none">
        <ul class="menu menu-horizontal p-0">
            <li><a>Home</a></li>
            <li><a>About</a></li>

            @if (Route::has('login'))
                
                @auth
                    <li><a href="{{ url('/dashboard') }}" class="">Dashboard</a></li>
                @else
                    <li><a href="{{ route('login') }}" class="mr-2">Log in</a></li>

                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" >Register</a></li>
                    @endif
                @endauth
                
            @endif
           
        </ul>
    </div>
</div>
<!--====== NAVBAR ENDS =====-->