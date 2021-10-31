<?php

namespace App;

class Owner{
	
	public $phone = "570-323-7975";
	public $address = "617 West Southern Avenue";

	public $Notes = "We will be closed on Christmas";

	public $OpenFromWD = "8:00a.m.";
	public $OpenUntilWD = "2:00p.m.";
	public $WeekdayStart = "Monday";
	public $WeekdayEnd = "Friday";

	public $OpenSaturday = true;
	public $SaturdayStart = "8:00a.m.";
	public $SaturdayEnd = "2:00p.m.";

	public $OpenSunday = false;
	public $SundayStart = null;
	public $SundayEnd = null;

	public function setSaturday($OpenSaturday,
		$SaturdayStart,
		$SaturdayEnd){
		if($OpenSaturday == true){
			$this->OpenSaturday = $OpenSaturday;
			$this->SaturdayStart = $SaturdayStart;
			$this->SaturdayEnd = $SaturdayEnd;
		}else{
			$this->OpenSaturday = $OpenSaturday;
			$this->SaturdayStart = null;
			$this->SaturdayEnd = null;

		}
	}

	public function setSunday($OpenSunday,
		$SundayStart,
		$SundayEnd){
		if($OpenSunday == true){
			$this->OpenSunday = $OpenSunday;
			$this->SundayStart = $SundayStart;
			$this->SundayEnd = $SundayEnd;
		}else{
			$this->OpenSunday = $OpenSunday;
			$this->SundayStart = null;
			$this->SundayEnd = null;

		}
	}

	public function setWeekDay($WeekdayStart,
		$WeekdayEnd,
		$OpenFromWD,
		$OpenUntilWD
		){
		$this->WeekdayStart = $WeekdayStart;
		$this->WeekdayEnd = $WeekdayEnd;
		$this->OpenFromWD = $OpenFromWD;
		$this->OpenUntilWD = $OpenUntilWD;	
	}

}