<x-layout>
    <div class="note-container single-note">
        <div class="note-header">
            <h1>Note: {{ $note->created_at->format('Y-m-d H:i:s') }}</h1>
            <div class="note-buttons">
                <a href="{{ route('notes.edit', $note->id) }}" class="note-edit-button">Edit</a>
                <form action="{{ route('notes.destroy', $note->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="note-delete-button">Delete</button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-body">
                {{ $note->note }}
            </div>
        </div>
    </div>
</x-layout>
