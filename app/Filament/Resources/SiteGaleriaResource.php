<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteGaleriaResource\Pages;
use App\Filament\Resources\SiteGaleriaResource\RelationManagers;
use App\Models\SiteGaleria;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteGaleriaResource extends Resource
{
    protected static ?string $model = SiteGaleria::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return 'Gestão do Site';
    }
    public static function getNavigationSort(): ?int
    {
        return 6; // Grupos com números menores aparecem no topo.
    }
    public static function getNavigationLabel(): string
    {
        return 'Galeria'; // Nome do menu exibido
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('titulo')->label('Título da Galeria')->required(),
                TextInput::make('subtitulo')->label('Subtitulo da Galeria')->required(),

                FileUpload::make('photo1')
                ->label('Foto2 742:696')
                ->image()
                ->imageEditor()
                ->imageCropAspectRatio('742:696') // Define a proporção de corte
                ->imageResizeTargetWidth(742)    // Define a largura final da imagem
                ->imageResizeTargetHeight(696)   // Define a altura final da imagem
                ->directory('uploads/site_galeria')->required(),

                FileUpload::make('photo2')
                ->label('Foto2 743:575')
                ->image()
                ->imageEditor()
                ->imageCropAspectRatio('743:575') // Define a proporção de corte
                ->imageResizeTargetWidth(743)    // Define a largura final da imagem
                ->imageResizeTargetHeight(575)   // Define a altura final da imagem
                ->directory('uploads/site_galeria')->required(),

                FileUpload::make('photo3')
                ->label('Foto2 743:575')
                ->image()
                ->imageEditor()
                ->imageCropAspectRatio('743:575') // Define a proporção de corte
                ->imageResizeTargetWidth(743)    // Define a largura final da imagem
                ->imageResizeTargetHeight(575)   // Define a altura final da imagem
                ->directory('uploads/site_galeria')->required(),


                FileUpload::make('photo4')
                ->label('Foto4 743:1200')
                ->image()
                ->imageEditor()
                ->imageCropAspectRatio('743:1200') // Define a proporção de corte
                ->imageResizeTargetWidth(743)    // Define a largura final da imagem
                ->imageResizeTargetHeight(1200)   // Define a altura final da imagem
                ->directory('uploads/site_galeria')->required(),

                FileUpload::make('photo5')
                ->label('Foto5 743:575')
                ->image()
                ->imageEditor()
                ->imageCropAspectRatio('743:575') // Define a proporção de corte
                ->imageResizeTargetWidth(743)    // Define a largura final da imagem
                ->imageResizeTargetHeight(575)   // Define a altura final da imagem
                ->directory('uploads/site_galeria')->required(),

                FileUpload::make('photo6')
                ->label('Foto6 743:575')
                ->image()
                ->imageEditor()
                ->imageCropAspectRatio('743:575') // Define a proporção de corte
                ->imageResizeTargetWidth(743)    // Define a largura final da imagem
                ->imageResizeTargetHeight(575)   // Define a altura final da imagem
                ->directory('uploads/site_galeria')->required(),

                FileUpload::make('photo7')
                ->label('Foto7 42:696')
                ->image()
                ->imageEditor()
                ->imageCropAspectRatio('742:696') // Define a proporção de corte
                ->imageResizeTargetWidth(742)    // Define a largura final da imagem
                ->imageResizeTargetHeight(696)   // Define a altura final da imagem
                ->directory('uploads/site_galeria')->required(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo'),
                Tables\Columns\TextColumn::make('subtitulo'),
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
            'index' => Pages\ListSiteGalerias::route('/'),
            'create' => Pages\CreateSiteGaleria::route('/create'),
            'edit' => Pages\EditSiteGaleria::route('/{record}/edit'),
        ];
    }
}
