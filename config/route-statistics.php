<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Enabled
    |--------------------------------------------------------------------------
    |
    | This is a 'master' switch to enable/disable logging. Setting this to
    | false will disable all logging.
    |
    */
    'enabled' => env('ROUTE_STATISTICS_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Aggregation
    |--------------------------------------------------------------------------
    |
    | This setting controls how we should aggregate requests.
    | Possible values are: MINUTE, HOUR, DAY, MONTH, YEAR
    |
    */
    'aggregate' => env('ROUTE_STATISTICS_AGGREGATE', 'DAY'),

    /*
    |--------------------------------------------------------------------------
    | Model
    |--------------------------------------------------------------------------
    |
    | This is the model we use to store request usage.
    | It is possible to implement a custom model which extends the default model
    | or alternatively implement a completely new model which implements
    | Bilfeldt\LaravelRouteStatistics\Contracts\RouteStatisticInterface
    |
    */
    'model' => env('ROUTE_STATISTICS_MODEL', \Bilfeldt\LaravelRouteStatistics\Models\RouteStatistic::class),
];
