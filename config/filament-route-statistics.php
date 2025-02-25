<?php

return [
    
    'sort' => [
        'column' => 'id',
        'direction' => 'desc',
    ],
    'username' => [
        'column' => 'email'
    ],
    'team' => [
        'classname' => 'App\Models\Team',
        'local_key' => 'id',
        'foreign_key' => 'team_id',
        'column' => 'name'
    ],
    'resource' => [
        'slug' => null,
        'classes' => [
            \Amendozaaguiar\FilamentRouteStatistics\Resources\RouteStatisticsResource::class,
        ],
        'model' => \Bilfeldt\LaravelRouteStatistics\Models\RouteStatistic::class,
        'navigation_icon' => 'heroicon-o-chart-bar-square'
    ]
];
