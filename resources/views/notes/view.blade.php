<x-guest-layout>

    <div class="flex justify-between">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ $note->title }}
        </h2>
    </div>

    <p class="mt-4">
        {{ $note->body }}
    </p>

    <div >
        <p class="mt-2">
            <div class="flex items-center justify-end mt-12 space-x-2">
                <h3 class="mt-2 text-gray-500">Sent from <span class="text-gray-800 text-sm">{{ $user->name }}</span></h3>
                <livewire:heartreact :note="$note" />
            </div>
        </p>
    </div>

</x-guest-layout>

