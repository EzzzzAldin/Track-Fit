<?php

namespace App\Filament\DataEntry\Resources;

use App\Filament\DataEntry\Resources\FAQSResource\Pages;
use App\Models\FAQ;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;


class FAQSResource extends Resource
{
    protected static ?string $model = FAQ::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?string $activeNavigationIcon = 'heroicon-s-question-mark-circle';
    protected static ?string $navigationLabel = 'FAQs';
    protected static ?string $pluralLabel = 'FAQs';
    protected static ?string $singularLabel = 'FAQ';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('FAQ Details')
                ->schema([
                    TextInput::make('question')
                        ->label('Question')
                        ->placeholder('Enter the question')
                        ->required()
                        ->maxLength(255),

                    Textarea::make('answer')
                        ->label('Answer')
                        ->placeholder('Enter the answer')
                        ->rows(4)
                        ->required(),

                    Toggle::make('is_active')
                        ->label('Active')
                        ->default(true),
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('question')
                ->label('Question')
                ->toggleable(isToggledHiddenByDefault: false)
                ->searchable(),

            TextColumn::make('answer')
                ->label('Answer')
                ->toggleable(isToggledHiddenByDefault: false)
                ->limit(50)
                ->tooltip('Click to view full answer')
                ->searchable(),

            IconColumn::make('is_active')
                ->label('Status')
                ->boolean()
                ->toggleable(isToggledHiddenByDefault: false),

            TextColumn::make('created_at')
                ->label('Created At')
                ->toggleable(isToggledHiddenByDefault: true)
                ->dateTime('Y-m-d'),

            TextColumn::make('updated_at')
                ->label('Updated At')
                ->toggleable(isToggledHiddenByDefault: true)
                ->dateTime('Y-m-d'),
        ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }


    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFAQS::route('/'),
            'create' => Pages\CreateFAQS::route('/create'),
            'edit' => Pages\EditFAQS::route('/{record}/edit'),
        ];
    }
    public static function getNavigationSort(): ?int
    {
        return 3;
    }
}
