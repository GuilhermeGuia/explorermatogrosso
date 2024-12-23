<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteInscricaoResource\Pages;
use App\Filament\Resources\SiteInscricaoResource\RelationManagers;
use App\Models\SiteInscricao;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteInscricaoResource extends Resource
{
    protected static ?string $model = SiteInscricao::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getNavigationGroup(): ?string
    {
        return 'Gestão do Site';
    }
    public static function getNavigationSort(): ?int
    {
        return 4; // Grupos com números menores aparecem no topo.
    }
    public static function getNavigationLabel(): string
    {
        return 'Inscrição'; // Nome do menu exibido
    }


    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('label1')
                    ->label('Label 1')
                    ->required(),

                FileUpload::make('icone1')
                    ->label('Icone 1  (click no lapis antes de salvar 33:32)')
                    ->image()
                    ->imageEditor()
                    ->avatar()
                    ->directory('uploads/site_inscricao')
                    ->imageCropAspectRatio('33:32')
                    ->imageResizeTargetWidth(33)
                    ->imageResizeTargetHeight(32)
                    ->required(),

                Textarea::make('texto1')
                    ->label('Texto 1')
                    ->required(),

                TextInput::make('label2')
                    ->label('Label 2')
                    ->required(),
                
                FileUpload::make('icone2')
                    ->label('Icone 2 (click no lapis antes de salvar 33:32)')
                    ->image()
                    ->avatar()
                    ->imageEditor()
                    ->directory('uploads/site_inscricao')
                    ->imageCropAspectRatio('33:32')
                    ->imageResizeTargetWidth(33)
                    ->imageResizeTargetHeight(32)
                    ->required(),

                Textarea::make('texto2')
                    ->label('Texto 2')
                    ->required(),

                FileUpload::make('photo1')
                    ->label('Foto 1 (click no lapis antes de salvar 312:630)')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/site_inscricao')
                    ->imageCropAspectRatio('312:630')
                    ->imageResizeTargetWidth(312)
                    ->imageResizeTargetHeight(630)
                    ->required(),

                FileUpload::make('photo2')
                    ->label('Foto 2 (click no lapis antes de salvar 312:315)')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/site_inscricao')
                    ->imageCropAspectRatio('312:315')
                    ->imageResizeTargetWidth(312)
                    ->imageResizeTargetHeight(315)
                    ->required(),
                    
                FileUpload::make('photo3')
                    ->label('Foto 3 (click no lapis antes de salvar 312:315)')
                    ->image()
                    ->imageEditor()
                    ->imageCropAspectRatio('312:315')
                    ->imageResizeTargetWidth(312)
                    ->imageResizeTargetHeight(315)
                    ->directory('uploads/site_inscricao')
                    ->required(),

                FileUpload::make('photo4')
                    ->label('Foto 4 (click no lapis antes de salvar 217:546)')
                    ->image()
                    ->imageEditor()
                    ->imageCropAspectRatio('217:546')
                    ->imageResizeTargetWidth(217)
                    ->imageResizeTargetHeight(546)
                    ->directory('uploads/site_inscricao')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo1')
                    ->label('Miniatura 1')
                    ->circular(),
                Tables\Columns\ImageColumn::make('photo2')
                    ->label('Miniatura 2')
                    ->circular(),
                Tables\Columns\ImageColumn::make('photo3')
                    ->label('Miniatura 3')
                    ->circular(),
                Tables\Columns\ImageColumn::make('photo4')
                    ->label('Miniatura 4')
                    ->circular(),
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
            'index' => Pages\ListSiteInscricaos::route('/'),
            'create' => Pages\CreateSiteInscricao::route('/create'),
            'edit' => Pages\EditSiteInscricao::route('/{record}/edit'),
        ];
    }
}
