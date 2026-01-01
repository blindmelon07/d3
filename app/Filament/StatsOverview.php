<?php

namespace App\Filament;

use App\Models\Contribution;
use App\Models\Meeting;
use App\Models\Member;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Members', Member::count())
                ->description('Total registered members')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),
            Stat::make('Total Contributions', Contribution::count())
                ->description('Total contributions made')
                ->descriptionIcon('heroicon-m-currency-dollar')
                ->color('info'),
            Stat::make('Total Users', User::count())
                ->description('Total users in the system')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('warning'),
            Stat::make('Pending Contributions', Contribution::where('status', 'pending')->count())
                ->description('Contributions awaiting payment')
                ->descriptionIcon('heroicon-m-clock')
                ->color('danger'),
            Stat::make('Total Meetings', Meeting::count())
                ->description('Total meetings recorded')
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('primary'),
        ];
    }
}
