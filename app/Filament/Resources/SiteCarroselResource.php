<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteCarroselResource\Pages;
use App\Filament\Resources\SiteCarroselResource\RelationManagers;
use App\Models\SiteCarrosel;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteCarroselResource extends Resource
{
    protected static ?string $model = SiteCarrosel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return 'Gestão do Site';
    }
    public static function getNavigationSort(): ?int
    {
        return 1; // Grupos com números menores aparecem no topo.
    }
    public static function getNavigationLabel(): string
{
    return 'Carrosel'; // Nome do menu exibido
}


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Grid::make()
                            ->schema([
                                FileUpload::make('photo_0')
                                    ->label('Foto 1 (click no lapis antes de salvar) 1920:802')
                                    ->image()
                                    ->imageEditor()
                                    ->imageCropAspectRatio('1920:802') // Define a proporção de corte
                                    ->imageResizeTargetWidth(1920)    // Define a largura final da imagem
                                    ->imageResizeTargetHeight(802)   // Define a altura final da imagem
                                    ->directory('uploads/site_carrosel'),
                                TextInput::make('chapeu_0')->label('Chapeu 1')->required(),
                                TextInput::make('title_0')->label('Titulo 1')->required(),
                                TextInput::make('color_0')
                                    ->label('Cor 1')
                                    ->type('color')
                                    ->default('#FFFFFF')
                                    ->required(),
                            ]),
                        Forms\Components\Grid::make()
                            ->schema([
                                FileUpload::make('photo_1')
                                    ->label('Foto 2 (click no lapis antes de salvar) 1920:802')
                                    ->image()
                                    ->imageEditor()
                                    ->imageCropAspectRatio('1920:802') // Define a proporção de corte
                                    ->imageResizeTargetWidth(1920)    // Define a largura final da imagem
                                    ->imageResizeTargetHeight(802)   // Define a altura final da imagem
                                    ->directory('uploads/site_carrosel'),


                                TextInput::make('chapeu_1')->label('Chapeu 2')->required(),
                                TextInput::make('title_1')->label('Titulo 2')->required(),
                                TextInput::make('color_1')
                                    ->label('Cor 2')
                                    ->type('color')
                                    ->default('#FFFFFF')
                                    ->required(),
                            ]),
                        Forms\Components\Grid::make()
                            ->schema([
                                FileUpload::make('photo_2')
                                    ->label('Foto 3 (click no lapis antes de salvar) 1920:802')
                                    ->image()
                                    ->imageEditor()
                                    ->imageCropAspectRatio('1920:802') // Define a proporção de corte
                                    ->imageResizeTargetWidth(1920)    // Define a largura final da imagem
                                    ->imageResizeTargetHeight(802)   // Define a altura final da imagem
                                    ->directory('uploads/site_carrosel'),
                                TextInput::make('chapeu_2')->label('Chapeu 3')->required(),
                                TextInput::make('title_2')->label('Titulo 3')->required(),
                                TextInput::make('color_2')
                                    ->label('Cor 3')
                                    ->type('color')
                                    ->default('#FFFFFF')
                                    ->required(),
                            ]),

                    ]),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_0')->label('Foto 1'),
                TextColumn::make('title_1')->label('Foto 2'),
                TextColumn::make('title_2')->label('Foto 3'),
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
            'index' => Pages\ListSiteCarrosels::route('/'),
            'create' => Pages\CreateSiteCarrosel::route('/create'),
            'edit' => Pages\EditSiteCarrosel::route('/{record}/edit'),
        ];
    }
}
