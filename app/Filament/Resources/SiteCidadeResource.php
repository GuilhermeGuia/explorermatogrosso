<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteCidadeResource\Pages;
use App\Filament\Resources\SiteCidadeResource\RelationManagers;
use App\Models\SiteCidade;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteCidadeResource extends Resource
{
    protected static ?string $model = SiteCidade::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return 'Gestão do Site';
    }
    public static function getNavigationSort(): ?int
    {
        return 3; // Grupos com números menores aparecem no topo.
    }
    public static function getNavigationLabel(): string
    {
        return 'Cidades +'; // Nome do menu exibido
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            FileUpload::make('photo')
            ->label('Foto 423:636')
            ->image()
            ->imageEditor()
            ->imageCropAspectRatio('423:636') // Define a proporção de corte
            ->imageResizeTargetWidth(423)    // Define a largura final da imagem
            ->imageResizeTargetHeight(636)   // Define a altura final da imagem
            ->directory('uploads/site_cidade')->required(),
            TextInput::make('name')->label('Nome da Categoria')->required(),
            TextInput::make('url')->label('Link da Categoria')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Miniatura')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')->label('Nome da Categoria'),
                Tables\Columns\TextColumn::make('url')->label('Link da Categoria'),
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
            'index' => Pages\ListSiteCidades::route('/'),
            'create' => Pages\CreateSiteCidade::route('/create'),
            'edit' => Pages\EditSiteCidade::route('/{record}/edit'),
        ];
    }
}
