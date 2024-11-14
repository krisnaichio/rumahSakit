<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatientResource\Pages;
use App\Filament\Resources\PatientResource\RelationManagers;
use App\Models\Patient;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PatientResource extends Resource
{
    protected static ?string $model = Patient::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->schema([
                        TextInput::make('name')->required(),
                    ]),
                
                DatePicker::make('date_of_birth')->required(),
                TextInput::make('age')->required(),
                Select::make('gender')
                ->options([
                    'male'=>'Male',
                    'female'=>'Female',
                ])->required(),
                TextInput::make('address')->required(),
                TextInput::make('number')->label('Phone Number'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('date_of_birth'),
                TextColumn::make('age'),
                TextColumn::make('gender'),
                TextColumn::make('address'),
                TextColumn::make('number')->label('Phone Number'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }    
}
