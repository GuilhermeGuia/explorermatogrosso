<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CityesResource\Pages;
use App\Filament\Resources\CityesResource\RelationManagers;
use App\Models\Cityes;
use App\Models\User;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CityesResource extends Resource
{
    protected static ?string $model = Cityes::class;

    protected static ?string $navigationIcon = 'heroicon-s-map';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nome da cidade')
                    ->placeholder('Nome da cidade'),

                Select::make('user_id')->default(1)
                    ->label('Admin responsável')
                    ->options(User::all()->mapWithKeys(function ($user) {
                        return [$user->id => "{$user->name} ({$user->email})"];
                    })),



                TextInput::make('color')->type('color')->label('Cor da cidade'),

                TextInput::make('video')->label('Video da cidade')
                    ->url()
                    ->placeholder('Cole o link do vídeo do YouTube aqui')
                    ->rules(['regex:/^(https?\:\/\/)?(www\.youtube\.com|youtu\.?be)\/.+$/'])
                    ->afterStateUpdated(function (string $state, callable $set) {
                        $youtubeId = Cityes::extractYoutubeId($state);
                        $embedUrl = 'https://www.youtube.com/embed/' . $youtubeId;
                        $set('video', $embedUrl);
                    }),

                TextInput::make('title')->label('Titulo da cidade')
                    ->placeholder('Titulo da cidade'),

                Textarea::make('description')->label('Descrição da cidade')
                    ->placeholder('Descrição da cidade'),


                TextInput::make('title_adiconal')->label('Titulo adicional')
                    ->placeholder('Titulo adicional'),

                TextArea::make('description_adicional')->label('Descrição adicional')
                    ->placeholder('Descrição adicional'),

                FileUpload::make('photo')
                    ->label('Foto principal')
                    ->image()
                    ->imageEditor()
                    ->directory('uploads/fotos_cidades'),

                FileUpload::make('galeria')
                    ->label('Galeria de fotos')
                    ->multiple()
                    ->imageEditor()
                    ->image(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable()->sortable(),

                TextColumn::make('user_id')
                    ->searchable()->sortable()
                    ->label('Admin responsável')
                    ->getStateUsing(fn($record) => "{$record->user->name} ({$record->user->email})"),

                TextColumn::make('slug')
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->defaultSort('name', 'asc');
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
            'index' => Pages\ListCityes::route('/'),
            'create' => Pages\CreateCityes::route('/create'),
            'edit' => Pages\EditCityes::route('/{record}/edit'),
        ];
    }
}
