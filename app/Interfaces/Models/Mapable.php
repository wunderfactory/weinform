<?php


namespace Wundership\Interfaces\Models;


interface Mapable {

	public function map_latitude();
	public function map_longitude();
	public function map_address();
	public function map_city();
	public function map_zip();
	public function map_country();
	public function map_title();
}