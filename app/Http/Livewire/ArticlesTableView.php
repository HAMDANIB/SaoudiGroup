<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use LaravelViews\Views\TableView;

class ArticlesTableView extends TableView
{
    /**
     * Sets a initial query with the data to fill the table
     *
     * @return Builder Eloquent query
     */
    public function repository(): Builder
    {
         return article::query();
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        
        return [
            'id',
            'nom_article'
        ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($model): array
    {
        return [$model->id,
                $model->nom_article,
                $model->created_at,
                $model->updated_at
            ];
    }
}
