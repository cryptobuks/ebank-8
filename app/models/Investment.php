<?php

class Investment extends Eloquent {
	
	public function investor()
	{
		return $this->belongsTo('Investor');
	}

	public function project()
	{
		return $this->belongsTo('Project');
	}
}