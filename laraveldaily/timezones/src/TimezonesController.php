<?php

namespace Laraveldaily\Timezones;
namespace LaraveldailyNew\Timezones;


use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

    public function getUTC($timezone)
    {
        return Carbon::now($timezone)->toDateTimeString();
    }

}