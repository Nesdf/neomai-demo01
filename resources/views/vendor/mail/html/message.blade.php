@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        Macias - Group 
        Fecha de entrega
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            &copy; {{ date('Y') }} Macias -Group. All rights reserved.
        @endcomponent
    @endslot
@endcomponent
