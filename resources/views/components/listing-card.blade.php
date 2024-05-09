@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/acme.png') }}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $listing->id }}">Senior Laravel Developer</a>
            </h3>
            <div class="text-xl font-bold mb-4">Acme Corp</div>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> Boston,
                MA
            </div>
        </div>
    </div>
</x-card>
