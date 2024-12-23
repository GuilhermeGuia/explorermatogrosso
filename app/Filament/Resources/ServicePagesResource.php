<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicePagesResource\Pages;
use App\Models\Categoria;
use App\Models\Cityes;
use App\Models\ServicePages;
use App\Models\ServiceType;
use App\Models\User;
use Closure;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;


class ServicePagesResource extends Resource
{
    protected static ?string $model = ServicePages::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Dados da Página')
                    ->schema([
                        Group::make([
                            TextInput::make('title')
                                ->unique(
                                    table: 'service_pages',
                                    column: 'title',
                                    ignoreRecord: true // Ignora o registro atual durante a edição
                                )
                                ->required()
                                ->columnSpan(2),

                            TextInput::make('title_conteudo')
                                ->label('Title do conteudo')
                                ->required()
                                ->columnSpan(2),
                        ])->columns(2),

                        Group::make([
                            Select::make('citye_id')->default(1)
                                ->label('Cidade')
                                ->options(Cityes::all()->pluck('name', 'id'))
                                ->required()
                                ->searchable(),

                            Select::make('service_type_id')
                                ->label('Tipo de Serviço')
                                ->options(ServiceType::all()->pluck('name', 'id'))
                                ->required()
                                ->searchable(),
                        ])->columns(2),
                        Group::make([
                            Select::make('user_id')->default(1)
                                ->label('Admin responsável')
                                ->options(User::all()->mapWithKeys(function ($user) {
                                    return [$user->id => "{$user->name} ({$user->email})"];
                                }))
                                ->required()
                                ->searchable(),

                            TextInput::make('maps')->label('Incorporar Mapa do Google Maps <iframe>'),
                        ])->columns(2),

                        Group::make([
                            Toggle::make('active')
                                ->onColor('success') // Cor do toggle quando ativado (opcional)
                                ->offColor('danger') // Cor do toggle quando desativado (opcional)
                                ->label(fn(Get $get) => $get('active') ? 'Publicado' : 'Não Publicado') // Define um rótulo dinâmico com base no estado
                                ->reactive() // Torna o campo reativo para atualizações dinâmicas
                        ])->extraAttributes(['class' => 'ml-auto']),
                        Select::make('categoria')->relationship('categoria','nome')->multiple()->label('Categorias da Página'),
                        RichEditor::make('conteudo')
                            ->label('Conteudo da pagina')
                            ->required(),
                   
                           
                    ])->columns(1),


                Section::make('Fotos')
                    ->schema([
                        Group::make([
                            FileUpload::make('foto_principal')
                                ->label('Foto principal 1920:401')
                                ->image()
                                ->imageEditor()
                                ->imageCropAspectRatio('1920:401')
                                ->imageResizeTargetWidth(1920)
                                ->imageResizeTargetHeight(401)
                                ->directory('uploads/foto_principal')
                                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),

                            FileUpload::make('fotos_slider')
                                ->label('Slider de Fotos 872:536')
                                ->image()
                                ->imageEditor()
                                ->multiple()
                                ->imageCropAspectRatio('872:536')
                                ->imageResizeTargetWidth(872)
                                ->imageResizeTargetHeight(536)
                                ->directory('uploads/slides')
                                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg']),
                        ]),
                    ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('user')
                    ->label('Admin responsável')
                    ->getStateUsing(fn($record) => "{$record->user->name} ({$record->user->email})"),

                TextColumn::make('cidade.name')
                    ->label('Cidade')
                    ->searchable(),

                TextColumn::make('slug')
                    ->label('Link')
                    ->searchable()
                    ->url(fn($record) => route('service.page', $record->slug), shouldOpenInNewTab: true),

                TextColumn::make('active')
                    ->label('Publicado')
                    ->getStateUsing(fn($record) => $record->active ? 'Sim ✔️' : 'Não ❌') // Acessa o valor diretamente do registro




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
            'index' => Pages\ListServicePages::route('/'),
            'create' => Pages\CreateServicePages::route('/create'),
            'edit' => Pages\EditServicePages::route('/{record}/edit'),
        ];
    }
}
