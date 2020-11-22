<?php

namespace App\Helpers;

use Carbon\Carbon;
use Carbon\Translator;

class DateHelper
{
    /**
     * Difference without the before and after
     * @param string|Carbon $firstDate
     * @param string|Carbon $secondDate
     * @param string $format
     * @return string
     * @throws \Exception
     */
    public static function DiffHumanWithoutPosition($firstDate, $secondDate, string $format) : string
    {
        $translator = Translator::get(config('app.locale'));
        $translator->setTranslations([
            'before' => function($time){ return $time; },
            'after' => function($time) { return $time; }
        ]);

        if(gettype($firstDate) == Carbon::class)
        {
            if(gettype($secondDate) == Carbon::class)
            {
                return $firstDate->diffForHumans($secondDate);
            }
            return $firstDate->locale(config('app.locale'))->diffForHumans(Carbon::createFromFormat($format, $secondDate));
        }
        $firstDateCarbon = Carbon::createFromFormat($format, $firstDate);
        $secondDateCarbon = Carbon::createFromFormat($format, $secondDate);
        $diff = $firstDateCarbon->locale(config('app.locale'))->diffForHumans($secondDateCarbon);
        $translator->resetMessages();
        return $diff;
    }
}
