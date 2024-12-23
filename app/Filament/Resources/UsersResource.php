<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UsersResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Validation\Rules\Password as RulesPassoword;

class UsersResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nome do usuário')
                    ->required()
                    ->placeholder('Nome do usuário'),
                TextInput::make('email')->label('E-mail')
                    ->required()
                    ->unique(User::class, 'email')
                    ->placeholder('E-mail')->email(),
                Select::make('type')
                    ->label('Função')
                    ->options([
                        'admin' => 'Administrador',
                        'user' => 'Usuário',
                    ])
                    ->default('user'),
                TextInput::make('password')
                    ->required()
                    ->password()
                    ->rule(RulesPassoword::default())
                    ->label('Criar Senha'),
                TextInput::make('password_confirmation')
                    ->required()
                    ->password()
                    ->same('password')
                    ->label('Confirmação de senha')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('email'),
                TextColumn::make('type')
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUsers::route('/create'),
            'edit' => Pages\EditUsers::route('/{record}/edit'),
        ];
    }
}
