<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteBlogResource\Pages;
use App\Filament\Resources\SiteBlogResource\RelationManagers;
use App\Models\SiteBlog;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SiteBlogResource extends Resource
{
    protected static ?string $model = SiteBlog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): ?string
    {
        return 'Gestão do Site';
    }
    public static function getNavigationSort(): ?int
    {
        return 5; // Grupos com números menores aparecem no topo.
    }
    public static function getNavigationLabel(): string
    {
        return 'Blogs'; // Nome do menu exibido
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Titulo')
                    ->required(),
                TextInput::make('description')->label('Descrição')->required(),



             
                FileUpload::make('photo1')
                    ->label('Foto 1 (click no lapis antes de salvar 312:274)')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/site_blog')
                    ->imageCropAspectRatio('312:274')
                    ->imageResizeTargetWidth(312)
                    ->imageResizeTargetHeight(274)
                    ->columnSpan(12),
                Forms\Components\Grid::make()
                    ->schema([
                        TextInput::make('name1')->label('Foto 1'),
                        TextInput::make('url1')->label('Link 1'),
                    ]),

                FileUpload::make('photo2')
                    ->label('Foto 2 (click no lapis antes de salvar 312:274)')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/site_blog')
                    ->imageCropAspectRatio('312:274')
                    ->imageResizeTargetWidth(312)
                    ->imageResizeTargetHeight(274)
                    ->columnSpan(12),
                Forms\Components\Grid::make()
                    ->schema([
                        TextInput::make('name2')->label('Foto 2'),
                        TextInput::make('url2')->label('Link 2'),
                    ]),

                FileUpload::make('photo3')
                    ->label('Foto 3 (click no lapis antes de salvar 312:274)')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/site_blog')
                    ->imageCropAspectRatio('312:274')
                    ->imageResizeTargetWidth(312)
                    ->imageResizeTargetHeight(274)
                    ->columnSpan(12),
                Forms\Components\Grid::make()
                    ->schema([
                        TextInput::make('name3')->label('Foto 3'),
                        TextInput::make('url3')->label('Link 3'),
                    ]),

                FileUpload::make('photo4')
                    ->label('Foto 4 (click no lapis antes de salvar 312:274)')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/site_blog')
                    ->imageCropAspectRatio('312:274')
                    ->imageResizeTargetWidth(312)
                    ->imageResizeTargetHeight(274)
                    ->columnSpan(12),
                Forms\Components\Grid::make()
                    ->schema([
                        TextInput::make('name4')->label('Foto 4'),
                        TextInput::make('url4')->label('Link 4'),
                    ]),

                FileUpload::make('photo5')
                    ->label('Foto 5 (click no lapis antes de salvar 312:274)')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/site_blog')
                    ->imageCropAspectRatio('312:274')
                    ->imageResizeTargetWidth(312)
                    ->imageResizeTargetHeight(274)
                    ->columnSpan(12),
                Forms\Components\Grid::make()
                    ->schema([
                        TextInput::make('name5')->label('Foto 5'),
                        TextInput::make('url5')->label('Link 5'),
                    ]),

                FileUpload::make('photo6')
                    ->label('Foto 6 (click no lapis antes de salvar 312:274)')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/site_blog')
                    ->imageCropAspectRatio('312:274')
                    ->imageResizeTargetWidth(312)
                    ->imageResizeTargetHeight(274)
                    ->columnSpan(12),
                Forms\Components\Grid::make()
                    ->schema([
                        TextInput::make('name6')->label('Foto 6'),
                        TextInput::make('url6')->label('Link 6'),
                    ]),

                FileUpload::make('photo7')
                    ->label('Foto 7 (click no lapis antes de salvar 312:274)')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/site_blog')
                    ->imageCropAspectRatio('312:274')
                    ->imageResizeTargetWidth(312)
                    ->imageResizeTargetHeight(274)
                    ->columnSpan(12),
                Forms\Components\Grid::make()
                    ->schema([
                        TextInput::make('name7')->label('Foto 7'),
                        TextInput::make('url7')->label('Link 7'),
                    ]),

                FileUpload::make('photo8')
                    ->label('Foto 8 (click no lapis antes de salvar 312:274)')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/site_blog')
                    ->imageCropAspectRatio('312:274')
                    ->imageResizeTargetWidth(312)
                    ->imageResizeTargetHeight(274)
                    ->columnSpan(12),
                Forms\Components\Grid::make()
                    ->schema([
                        TextInput::make('name8')->label('Foto 8'),
                        TextInput::make('url8')->label('Link 8'),
                    ]),

                FileUpload::make('photo9')
                    ->label('Foto 9 (click no lapis antes de salvar 312:274)')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/site_blog')
                    ->imageCropAspectRatio('312:274')
                    ->imageResizeTargetWidth(312)
                    ->imageResizeTargetHeight(274)
                    ->columnSpan(12),
                Forms\Components\Grid::make()
                    ->schema([
                        TextInput::make('name9')->label('Foto 9'),
                        TextInput::make('url9')->label('Link 9'),
                    ]),

                FileUpload::make('photo10')
                    ->label('Foto 10 (click no lapis antes de salvar 312:274)')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/site_blog')
                    ->imageCropAspectRatio('312:274')
                    ->imageResizeTargetWidth(312)
                    ->imageResizeTargetHeight(274)
                    ->columnSpan(12),
                Forms\Components\Grid::make()
                    ->schema([
                        TextInput::make('name10')->label('Foto 10'),
                        TextInput::make('url10')->label('Link 10'),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')

                    ->label('Titulo'),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->label('Descrição'),
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
            'index' => Pages\ListSiteBlogs::route('/'),
            'create' => Pages\CreateSiteBlog::route('/create'),
            'edit' => Pages\EditSiteBlog::route('/{record}/edit'),
        ];
    }
}
