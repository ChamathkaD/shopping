@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => ''])}} style="color: #9acf4f">
        {{ $status }}
    </div>
@endif
