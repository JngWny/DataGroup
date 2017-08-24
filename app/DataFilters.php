<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

class DataFilters extends QueryFilters

{

	public function gender($gender)
		{
			return $this->builder->where('gender','!=',$gender);
		}

	public function setone_id($setone_id)

		{
			return $this->builder->where('setone_id',$setone_id);
		}

	public function score($order='desc')
		{
			return $this->builder->orderBy('t3',$order);
		}



}
