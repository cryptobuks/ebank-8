<?php

class Project extends Eloquent {

	/**
 	* Project relationship
 	*/
	public function investors()
	{
  		return $this->hasManyThrough('Investor', 'Investment');
	}

	public function enterprise()
	{
		return $this->belongsTo('Enterprise');
	}
}