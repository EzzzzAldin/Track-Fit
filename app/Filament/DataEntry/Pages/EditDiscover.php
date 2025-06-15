<?php

namespace App\Filament\DataEntry\Pages;

use Filament\Pages\Page;
use App\Models\Discover;
use Filament\Forms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\Grid;

class EditDiscover extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static ?string $navigationLabel = 'Discover';
    protected static string $view = 'filament.data-entry.pages.edit-discover';
    protected static ?string $navigationIcon = 'heroicon-o-eye';
    protected static ?string $activeNavigationIcon = 'heroicon-s-eye';

    public function mount(): void
    {
        $this->form->fill(
            Discover::first()?->toArray() ?? []
        );
    }

    public function form(\Filament\Forms\Form $form): \Filament\Forms\Form
    {
        return $form
            ->schema($this->getFormSchema())
            ->statePath('data');
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('address')
                ->label(false)
                ->placeholder('Title'),
            Textarea::make('description')
                ->label(false)
                ->rows(3)
                ->placeholder('Description'),
            FileUpload::make('video')
                ->label(false)
                ->directory('videos')
                ->multiple(false)
                ->acceptedFileTypes(['video/mp4', 'video/webm', 'video/ogg'])
                ->maxSize(10240) // 10 MB
                ->columnSpanFull()
        ];
    }

    public function save(): void
    {
        $formData = $this->form->getState();

        if (is_array($formData['video'])) {
            $formData['video'] = reset($formData['video']);
        }

        Discover::updateOrCreate(['id' => 1], $formData);

        Notification::make()
            ->title('Discover updated successfully')
            ->success()
            ->send();
    }
}
