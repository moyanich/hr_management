<div class="text-sm breadcrumbs">
    <ul>
        <li>
            <a href="{{ route('admin.dashboard.index') }}"  class="text-green-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Home
            </a>
        </li> 

        @php $link = "" @endphp
        @for($i = 1; $i <= count(Request::segments()); $i++)
            @if($i < count(Request::segments()) & $i > 0)
                <?php $link .= "/" . Request::segment($i); ?>
                <li>
                    <a href="<?= $link ?>" aria-current="page" class="text-green-600">
                        {{ ucwords(str_replace('-',' ', Request::segment($i)))}}
                    </a>
                </li>
                @else 
                <li>
                    <a href="#" class="text-gray-500" aria-current="page">
                        {{ucwords(str_replace('-',' ', Request::segment($i)))}}
                    </a>
                </li>
            @endif
        @endfor


    </ul>
</div>

