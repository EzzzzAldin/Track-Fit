<?php

namespace App\Filament\DataEntry\Resources\FAQSResource\Pages;

use App\Filament\DataEntry\Resources\FAQSResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFAQS extends EditRecord
{
    protected static string $resource = FAQSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
