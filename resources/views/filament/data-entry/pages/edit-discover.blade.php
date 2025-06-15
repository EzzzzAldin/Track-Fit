<x-filament-panels::page>
    {{ $this->form }}

    <x-filament::button wire:click="save" class="mt-4 px-6 w-max">
        Save Changes
    </x-filament::button>
</x-filament-panels::page>


{{-- <x-filament-panels::page>
    @php
        $formState = $this->form->getState();
        $videoPath = is_array($formState['video'] ?? null) ? reset($formState['video']) : ($formState['video'] ?? null);
    @endphp

    <h2>{{ $formState['address'] ?? 'No Title' }}</h2>
    <p>{{ $formState['description'] ?? 'No Description' }}</p>

    @if (!empty($videoPath))
        <video width="600" controls>
            <source src="{{ asset('storage/' . $videoPath) }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    @else
        <p>No video uploaded yet.</p>
    @endif

    <x-filament::form wire:submit="save">
        {{ $this->form }}
        <x-filament::button type="submit" class="mt-4">
            Save Changes
        </x-filament::button>
    </x-filament::form>
</x-filament-panels::page> --}}
