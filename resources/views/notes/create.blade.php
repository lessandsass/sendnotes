<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a note') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-4">
            <div class="p-6 text-gray-900">

                <x-button href="{{ route('notes.index') }}" icon="arrow-left" label="Back" />

                <livewire:notes.create-note />

            </div>
        </div>
    </div>
</x-app-layout>



