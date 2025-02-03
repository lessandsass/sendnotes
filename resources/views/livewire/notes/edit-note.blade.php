<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Models\Note;

new #[Layout('layouts.app')]
class extends Component {

    public Note $note;

    public function mount(Note $note): void
    {
        $this->note = $note;
        // $this->fill($note);
    }

}; ?>

<div>
    Edit Note
    <h1>{{ $this->note }}</h1>
    <h1>{{ $this->note->title }}</h1>
</div>
