<?php

namespace App\Models;

use Guava\Calendar\Contracts\Eventable;
use Guava\Calendar\ValueObjects\CalendarEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model implements Eventable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'meeting_date',
        'meeting_minutes',
    ];

    protected $casts = [
        'meeting_date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function toCalendarEvent(): CalendarEvent
    {
        return CalendarEvent::make($this)
            ->title($this->name)
            ->start($this->meeting_date)
            ->end($this->meeting_date->copy()->addDay())
            ->allDay();
    }
}
