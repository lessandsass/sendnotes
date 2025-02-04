<?php

use Livewire\Volt\Component;

new class extends Component {

    public $noteTitle;
    public $noteBody;
    public $noteRecipient;
    public $noteSendDate;

    public function submit()
    {
        $validated = $this->validate([
            'noteTitle' => ['required', 'string', 'max:255', 'min:3'],
            'noteBody' => ['required', 'string', 'max:255', 'min:10'],
            'noteRecipient' => ['required', 'email', 'max:255'],
            'noteSendDate' => ['required', 'date'],
        ]);

        auth()->user()->notes()->create([
            'title' => $validated['noteTitle'],
            'body' => $validated['noteBody'],
            'recipient' => $validated['noteRecipient'],
            'send_date' => $validated['noteSendDate'],
            'is_published' => false
        ]);

        redirect(route('notes.index'));
    }

};

?>

<div>
    <div class="w-1/2 mx-auto">
        <form action="" wire:submit="submit">
            <x-input icon="pencil" wire:model="noteTitle" label="Note Title" class="mt-5" placeholder="It's been a great day." />

            <x-textarea wire:model="noteBody" label="Note Body" class="mt-5" rows="3" cols="auto" placeholder="Say additional things about your note." />

            <x-input icon="user" wire:model="noteRecipient" label="Note Recipient" class="mt-5" placeholder="Your friend email address" type="email" />

            <x-input icon="calendar" wire:model="noteSendDate" type="date" label="Note Send Date" class="mt-5" />

            <x-button type="submit" class="mt-5" spinner>Schedule Note</x-button>
        </form>
    </div>
</div>
