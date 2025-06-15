<?php

namespace App\Filament\DataEntry\Resources;

use App\Filament\DataEntry\Resources\TrainingProgramResource\Pages;
use App\Filament\DataEntry\Resources\TrainingProgramResource\RelationManagers;
use App\Models\TrainingProgram;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrainingProgramResource extends Resource
{
    protected static ?string $model = TrainingProgram::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';
    protected static ?string $activeNavigationIcon = 'heroicon-s-squares-2x2';
    protected static ?string $navigationLabel = 'Training Programs';
    protected static ?string $pluralLabel = 'Training Programs';
    protected static ?string $singularLabel = 'Training Program';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Training Program Details')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->directory('training-programs')
                            ->required(),

                        TextInput::make('title')
                            ->placeholder('Title')
                            ->required()
                            ->maxLength(255),

                        Textarea::make('description')
                            ->placeholder('Description')
                            ->required()
                            ->rows(4),

                        TextInput::make('priority')
                            ->numeric()
                            ->default(0),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->toggleable()
                    ->circular(),
                TextColumn::make('title')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('description')
                    ->toggleable()
                    ->searchable()
                    ->limit(50),
                TextColumn::make('priority')
                    ->toggleable()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->dateTime('Y-m-d'),
                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->dateTime('Y-m-d'),
            ])
            ->defaultSort('priority', 'asc')
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTrainingPrograms::route('/'),
            'create' => Pages\CreateTrainingProgram::route('/create'),
            'edit' => Pages\EditTrainingProgram::route('/{record}/edit'),
        ];
    }
    public static function getNavigationSort(): ?int
    {
        return 1;
    }
}
