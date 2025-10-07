<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class PostsRelationManager extends RelationManager
{
    protected static string $relationship = 'posts';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Post Content')
                    ->description('create posts over here')
                    ->schema([
                        TextInput::make('title')
                            ->label('Title')
                            ->required(),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->required(),
                        ColorPicker::make('color')
                            ->label('Color')
                            ->required(),

                        MarkdownEditor::make('content')
                            ->label('Content')
                            ->columnSpanFull(),
                    ])->columnSpan(2)->columns(2),
                Group::make()->schema([
                    Section::make('Image')
                        ->schema([

                            FileUpload::make('thumbnail')
                                ->disk('public')
                                ->directory('thumbnails'),
                        ])->collapsible(),
                    Section::make('Meta')
                        ->schema([

                            TagsInput::make('tags')
                                ->label('Tags')
                                ->required(),
                            Checkbox::make('published')
                                ->label('Published'),
                        ])
                ])


            ])
            ->columns(3);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('no')
                    ->label('No')
                    ->rowIndex(),
                TextColumn::make('title')
                    ->searchable()
                    ->label('Title'),
                TextColumn::make('category.name')
                    ->label('Category'),
                ColorColumn::make('color')
                    ->label('Color'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                ActionGroup::make([

                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),

                ])
                    ->button()
                    ->label('Actions')
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
