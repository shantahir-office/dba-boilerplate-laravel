@props([
    'text' => 'Get Free Consultation',
    'href' => null,
    'btnClass' => 'btn btn-primary group text-center',
    'ariaLabel' => null,
    'function' => null,
    'type' => 'link',
    'arrow' => false,
])

@if ($type === 'button')
    <button type="button" class="{{ $btnClass }}" aria-label="{{ $ariaLabel ?? $text }}"
        @if ($function) onclick="{{ $function }}" @endif>

        <span>{{ $text }}</span>

        @if ($arrow)
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none"
                class="shrink-0 transition-transform duration-300 group-hover:translate-x-1 size-[14px]">
                <path d="M2 7H12M12 7L7 2M12 7L7 12" stroke="#E8C784" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        @endif

    </button>
@else
    <a href="{{ $href ?? route('empty') }}" class="{{ $btnClass }}" aria-label="{{ $ariaLabel ?? $text }}">

        <span>{{ $text }}</span>

        @if ($arrow)
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" fill="none"
                class="shrink-0 transition-transform duration-300 group-hover:translate-x-1 size-[14px]">
                <path d="M2 7H12M12 7L7 2M12 7L7 12" stroke="#E8C784" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        @endif

    </a>
@endif
