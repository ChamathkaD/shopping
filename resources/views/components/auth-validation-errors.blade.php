@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>

        <div class="alert alert-danger text-center" role="alert">
            {{ __('Whoops! Something went wrong.') }}
        </div>



    </div>
@endif
