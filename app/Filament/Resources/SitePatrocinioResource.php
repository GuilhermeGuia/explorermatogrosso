<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SitePatrocinioResource\Pages;
use App\Filament\Resources\SitePatrocinioResource\RelationManagers;
use App\Models\SitePatrocinio;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SitePatrocinioResource extends Resource
{
    protected static ?string $model = SitePatrocinio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return 'Gestão do Site';
    }
    public static function getNavigationSort(): ?int
    {
        return 7; // Grupos com números menores aparecem no topo.
    }
    public static function getNavigationLabel(): string
    {
        return 'Patrocinio +'; // Nome do menu exibido
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('photo')
                ->label('Foto Patronicio (click no lapis antes de salvar 150:150)')
                ->image()
                ->imageEditor()
                ->imageCropAspectRatio('150:150')
                ->imageResizeTargetWidth(150)
                ->imageResizeTargetHeight(150)
                ->directory('uploads/site_patronicio')
                ->required(),
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')->label('Nome')->required(),
                        Forms\Components\TextInput::make('url')->label('Link')->required(),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                ->label('Foto Patrocinador')
                ->circular(),
            Tables\Columns\TextColumn::make('name')->label('Nome'),
            Tables\Columns\TextColumn::make('url')->label('Link'),
    
          
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
            'index' => Pages\ListSitePatrocinios::route('/'),
            'create' => Pages\CreateSitePatrocinio::route('/create'),
            'edit' => Pages\EditSitePatrocinio::route('/{record}/edit'),
        ];
    }
}
