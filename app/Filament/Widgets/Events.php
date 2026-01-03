<?php

namespace App\Filament\Widgets;

use App\Models\Event;
use Guava\Calendar\Enums\CalendarViewType;
use Guava\Calendar\Filament\CalendarWidget;
use Guava\Calendar\ValueObjects\FetchInfo;
use Illuminate\Support\Collection;

class Events extends CalendarWidget
{
    
    protected CalendarViewType $calendarView = CalendarViewType::DayGridMonth;

    protected function getEvents(FetchInfo $info): Collection
    {
        // Convert the fetch dates from user's timezone to UTC for database query
        $startUtc = $info->start->utc();
        $endUtc = $info->end->utc();

        return Event::query()
            ->where(function ($query) use ($startUtc, $endUtc) {
                $query->whereBetween('start_date', [$startUtc, $endUtc])
                    ->orWhere(function ($subQuery) use ($startUtc) {
                        $subQuery->where('start_date', '<=', $startUtc)
                            ->where('end_date', '>=', $startUtc);
                    });
            })
            ->orderBy('start_date')
            ->get();
    }
}
