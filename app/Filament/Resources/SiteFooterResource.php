<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteFooterResource\Pages;
use App\Filament\Resources\SiteFooterResource\RelationManagers;
use App\Models\SiteFooter;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteFooterResource extends Resource
{
    protected static ?string $model = SiteFooter::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getNavigationGroup(): ?string
    {
        return 'Gestão do Site';
    }
    public static function getNavigationSort(): ?int
    {
        return 8; // Grupos com números menores aparecem no topo.
    }
    public static function getNavigationLabel(): string
    {
        return 'Rodapé'; // Nome do menu exibido
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('descritivo')
                    ->label('Descritivo do rodapé')
                    ->required(),
                TextInput::make('endereco')->label('Endereço')->required(),
                TextInput::make('telefone')
                    ->label('Telefone')
                    ->required()
                    ->placeholder('Exemplo: (99) 99999-9999'),
                TextInput::make('email')->label('E-mail Link')->required(),
                TextInput::make('facebook')->label('Facebook Link')->required(),
                TextInput::make('instagram')->label('Instagram Link')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('descritivo')
                    ->searchable()
                    ->label('Descritivo')
                    ->limit(30)
                    ->tooltip(fn($record) => $record->descritivo),
                Tables\Columns\TextColumn::make('endereco'),
                Tables\Columns\TextColumn::make('telefone'),
                Tables\Columns\TextColumn::make('email'),

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
            'index' => Pages\ListSiteFooters::route('/'),
           // 'create' => Pages\CreateSiteFooter::route('/create'),
           // 'edit' => Pages\EditSiteFooter::route('/{record}/edit'),
        ];
    }
}
