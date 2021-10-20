@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div style=" color: #ff3551;">
            {{ __('Whoops! Something went wrong.') }}

        </div>

        <ul style=" color: #ff3551;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
