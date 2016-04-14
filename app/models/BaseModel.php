<?php
use Carbon\Carbon;

class BaseModel extends Eloquent
{
	public function getCreatedAtAttribute($value) {
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago');
	}

	public function getUpdatedAtAttribute($value) {
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
		return $utc->setTimezone('America/Chicago');
	}

	public function getBodyAttribute($value) {
		return trim($value);
		//return strtoupper($body);
	}

	//ensures that all passwords get HASHED
	public function setPasswordAttribute($value) {
		$this->attributes['password'] = Hash::make($value);
	}
}