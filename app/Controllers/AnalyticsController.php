<?php
declare(strict_types=1);

namespace NoSpetto\Controllers;

use NoSpetto\Analytics;
use NoSpetto\Request;

final class AnalyticsController
{
    public function track(Request $request): array
    {
        Analytics::track($request);
        return ['ok' => true];
    }

    public function insights(Request $request): array
    {
        return Analytics::report((string) $request->query('range', '7d'));
    }
}
