<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteCategoriaResource\Pages;
use App\Filament\Resources\SiteCategoriaResource\RelationManagers;
use App\Models\SiteCategoria;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteCategoriaResource extends Resource
{
    protected static ?string $model = SiteCategoria::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getNavigationGroup(): ?string
    {
        return 'Gestão do Site';
    }
    public static function getNavigationSort(): ?int
    {
        return 2; // Grupos com números menores aparecem no topo.
    }
    public static function getNavigationLabel(): string
    {
        return 'Categorias +'; // Nome do menu exibido
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('photo')
                    ->label('Foto 311:312')
                    ->image()

                    ->imageEditor()
                    ->imageCropAspectRatio('311:312') // Define a proporção de corte
                    ->imageResizeTargetWidth(311)    // Define a largura final da imagem
                    ->imageResizeTargetHeight(312)   // Define a altura final da imagem
                    ->directory('uploads/site_categoria')
                    ->required(),
                TextInput::make('name')->label('Nome da Categoria')->required(),
                TextInput::make('url')->label('Colar Link do Criar Categorias')->required(),
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
            'index' => Pages\ListSiteCategorias::route('/'),
            // 'create' => Pages\CreateSiteCategoria::route('/create'),
            //'edit' => Pages\EditSiteCategoria::route('/{record}/edit'),
        ];
    }
}
