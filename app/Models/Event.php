<?php

namespace App\Models;

use Guava\Calendar\Contracts\Eventable;
use Guava\Calendar\ValueObjects\CalendarEvent;
use Illuminate\Database\Eloquent\Model;

class Event extends Model implements Eventable
{
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'all_day',
        'location',
        'color',
        'image_path', // Added image path
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'all_day' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function toCalendarEvent(): CalendarEvent
    {
        $event = CalendarEvent::make($this)
            ->title($this->title)
            ->start($this->start_date);

        // Always set an end date
        $endDate = $this->end_date;
        if (! $endDate) {
            // If no end date, use start date + 1 hour for regular events, or +1 day for all-day
            $endDate = $this->all_day
                ? $this->start_date->copy()->addDay()
                : $this->start_date->copy()->addHour();
        }

        $event->end($endDate);

        if ($this->all_day) {
            $event->allDay();
        }

        if ($this->color) {
            $event->backgroundColor($this->color);
        }

        if ($this->description) {
            $event->extendedProps(['description' => $this->description, 'location' => $this->location]);
        }

        return $event;
    }
}
