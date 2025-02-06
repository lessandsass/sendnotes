<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Models\Note;

new #[Layout('layouts.app')]
class extends Component {

    public Note $note;

    public $noteTitle;
    public $noteBody;
    public $noteRecipient;
    public $noteSendDate;
    public $noteIsPublished;

    public function mount(Note $note): void
    {
        $this->authorize('update', $note);
        $this->fill($note);

        $this->noteTitle = $note->title;
        $this->noteBody = $note->body;
        $this->noteRecipient = $note->recipient;
        $this->noteSendDate = $note->send_date;
        $this->noteIsPublished = $note->is_published;
    }

    public function saveNote()
    {
        $validated = $this->validate([
            'noteTitle' => ['required', 'string', 'max:255', 'min:3'],
            'noteBody' => ['required', 'string', 'max:255', 'min:10'],
            'noteRecipient' => ['required', 'email', 'max:255'],
            'noteSendDate' => ['required', 'date'],
            'noteIsPublished' => ['required', 'boolean'],
        ]);

        auth()->user()->notes()->where('id', $this->note->id)->update([
            'title' => $this->noteTitle,
            'body' => $this->noteBody,
            'recipient' => $this->noteRecipient,
            'send_date' => $this->noteSendDate,
            'is_published' => $this->noteIsPublished
        ]);

        redirect(route('notes.index'));
    }

};

?>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Edit Notes') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-2xl mx-auto space-y-4 sm:px-6 lg:px-8">
        <form wire:submit="saveNote">
            <x-input icon="pencil" wire:model="noteTitle" label="Note Title" class="mt-5" placeholder="It's been a great day." />

            <x-textarea wire:model="noteBody" label="Note Body" class="mt-5" rows="3" cols="auto" placeholder="Say additional things about your note." />

            <x-input icon="user" wire:model="noteRecipient" label="Note Recipient" class="mt-5" placeholder="Your friend email address" type="email" />

            <x-input icon="calendar" wire:model="noteSendDate" type="date" label="Note Send Date" class="mt-5" />

            <x-checkbox wire:model="noteIsPublished" label="Publish Note" class="mt-5" />

            <x-button type="submit" class="mt-5" spinner>Save Note</x-button>
        </form>
    </div>
</div>
