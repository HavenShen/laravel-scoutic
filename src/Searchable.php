<?php

namespace HavenShen\Laravel\Scoutic;

use Laravel\Scout\Searchable as ScoutSearchable;

trait Searchable
{
    use ScoutSearchable;

    public $searchSettings = [
        'pre_tags' => [
            [
                "<tag1>",
                "<tag2>"
            ]
        ],
        'post_tags' => [
            [
                "</tag1>",
                "</tag2>"
            ]
        ],
        'attributesToHighlight' => [
            '*'
        ]
    ];

    public $es_highlight = [];
    public $es_score = 0;
}