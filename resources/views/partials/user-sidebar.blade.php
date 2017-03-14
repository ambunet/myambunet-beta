
{{-- @if ($user->about)
    <div>
        <h2>About</h2>
        <hr>
        <p>{{ $user->about }}</p>
    </div>
@endif

<div>
    <h2>URL</h2>
    <hr>
    <a href="{{ $user->username }}">myambunet/{{ $user->username }}</a>
</div> --}}

{{-- @if ($user->experience)
    <div>
        <h2>Experience</h2>
        <hr>
        <a href="{{ $user->experience }}">{{ $user->experience }}</a>
    </div>
@endif --}}

{{-- @if ($user->facebook || $user->twitter || $user->github) --}}
   {{--  <div>
        <h2>Info</h2>
        <hr>
        <ol class="list-unstyled">
            @if ($user->experience)
                <li><a href="{{ $user->experience }}">{{ $user->experience }}</a></li>
            @endif
            @if ($user->location)
                <li><a href="{{ $user->location }}">{{ $user->location }}</a></li>
            @endif
            @if ($user->email)
                <li><a href="{{ $user->email }}">{{ $user->email }}</a></li>
            @endif
            @if ($user->mobile)
                <li><a href="{{ $user->mobile }}">{{ $user->mobile }}</a></li>
            @endif
            @if ($user->level)
                <li><a href="{{ $user->level }}">{{ $user->level }}</a></li>
            @endif
            @if ($user->license)
                <li><a href="{{ $user->license }}">{{ $user->license }}</a></li>
            @endif
        </ol>
    </div> --}}
{{-- @endif --}}