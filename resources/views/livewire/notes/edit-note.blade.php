<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Models\Note;

new #[Layout('layouts.app')]
class extends Component {

    public Note $note;

    public function mount(Note $note): void
    {
        $this->authorize('update', $note);
        // $this->note = $note;
        $this->fill($note);
    }

}; ?>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit Notes') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-2xl mx-auto space-y-4 sm:px-6 lg:px-8">
        <form action="">

            My form

        </form>
    </div>
</div>
