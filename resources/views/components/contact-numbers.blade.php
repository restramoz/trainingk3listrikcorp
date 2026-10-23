@php
    // Single source of truth for the public business numbers lives in config,
    // so the digits stay identical everywhere, including their leading zeros.
    $contacts = config('services.whatsapp.callout_contacts', []);
@endphp

@if(!empty($contacts))
<section
    aria-label="Nomor telepon layanan konsultasi"
    {{ $attributes->merge(['class' => 'mt-4 p-4 sm:p-6 rounded-2xl bg-neutral-50 border border-neutral-200']) }}
>
    <h3 class="text-xs font-bold text-dark-mahogany uppercase tracking-wider">
        Atau Hubungi Langsung via Telepon
    </h3>
    <ul class="mt-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-2.5 sm:gap-3" role="list">
        @foreach($contacts as $contact)
            <li>
                <a
                    href="tel:{{ $contact }}"
                    class="flex items-center justify-center gap-2 px-3 py-2.5 rounded-lg bg-white border border-neutral-200 text-sm font-bold text-dark-mahogany hover:text-burnt-brick hover:border-burnt-brick/50 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-safety-orange"
                >
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span class="tracking-wide">{{ $contact }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</section>
@endif
