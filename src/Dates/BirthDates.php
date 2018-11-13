<?php
/**
 * Created by PhpStorm.
 * User: mamaevn
 * Date: 13.11.18
 * Time: 12:53
 */

namespace Mamay\Dates;


class BirthDates
{
    private $birthDate;
    private $todayDate;
    public function __construct($birthDate)
    {
        $this->birthDate=$birthDate;
        $this->todayDate=date("Y-m-d");
    }

    public function calc(){
        $birthTime = strtotime($this->birthDate);
        $todayTime = strtotime($this->todayDate);

        $totalSecs = $todayTime - $birthTime;
        $totalDays = floor($totalSecs/3600/24);

        return $totalDays;
    }
}