<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 09/12/18
 * Time: 17:27
 */
class TimeTravel
{
    public $start;
    public $end;

    public function __construct()
    {
        $this->start = new DateTime('1985-12-31');
        $this->end = new DateTime();
    }

    public function getTravelInfo()
    {
        $info = $this->start->diff($this->end);
        return $info->format("Il y a %Y années, %M mois, %D jours, %H heures, %I minutes et %S secondes entre les deux dates.");
    }

    public function findDate(DateInterval $interval)
    {
        $docTarget = $this->start->sub($interval);
        return $docTarget->format('Y-m-d');
    }

    public function backToFutureStepByStep(DatePeriod $step)
    {
        $tableau = [];

        foreach ($step as $etape) {
            $tableau[] = $etape->format('M d Y - h:m ');
        }

        return $tableau;
    }
}