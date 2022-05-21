<?php

class Vehicle
{
	private $vehicle_id;
	private $make;
	private $model;
	private $year;
	private $price;

	function __construct($vehicle_id, $make, $model, $year, $price)
	{
		$this->vehicle_id = $vehicle_id;
		$this->make = $make;
		$this->model = $model;
		$this->year = $year;
		$this->price = $price;
	}

	public function get_vehicle_id()
	{
		return $this->vehicle_id;
	}

	public function get_make()
	{
		return $this->make;
	}

	public function get_model()
	{
		return $this->model;
	}

	public function get_year()
	{
		return $this->year;
	}

	public function get_price()
	{
		return $this->price;
	}

}

?>
