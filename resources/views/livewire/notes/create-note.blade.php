<?php

use Livewire\Volt\Component;

new class extends Component {
    public $noteTitle;
    public $noteBody;
    public $noteRecipient;
    public $noteSendDate;

    public function submit()
    {
        dd($this->noteTitle, $this->noteBody, $this->noteRecipient, $this->noteSendDate);
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
            <x-button wire:click="submit" class="mt-5" spinner>Schedule Note</x-button>
        </form>
    </div>
</div>
