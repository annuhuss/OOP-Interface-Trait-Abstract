<?php
/**
*=============================================================
* <interface_trait.php>
* Object Oriented Programming in PHP: Interfaces and Traits
* 
* @Author Muhammad Anwar Hussain<anwar_hussain.01@yahoo.com>
* Created on: 15th July 2019
* ============================================================
*/

interface Services
{
	public function service_X();
	public function service_Y();
	public function service_Z();
}

trait TransportServices
{
	public function service_X()
	{
		echo  __CLASS__ . '::service_X' .'<br>';
	}
	
	public function service_Y()
	{
		echo  __CLASS__ . '::service_Y' .'<br>';
	}
	
	public function service_Z()
	{
		echo  __CLASS__ . '::service_Z' .'<br>';
	}
}

class Train implements Services
{
	use TransportServices;
}

class Ship implements Services
{
	use TransportServices;
}

class Plane implements Services
{
	use TransportServices;
}

class Transport 
{
	protected $transport;

	function setTransport(Services $s = null)
	{
		$this->transport = $s;
	}

	public function getService($serviceName)
	{
		$this->transport->$serviceName();
	}

	public function getServicePackage()
	{
		$this->transport->service_X();
		$this->transport->service_Y();
		$this->transport->service_Z();
	}
}

$transport = new Transport();

$vehicles = ['t' => new Train, 's' => new Ship, 'p' => new Plane];

while($element = each($vehicles))
{
	$transport->setTransport($element['value']);
	$transport->getServicePackage();
	echo '<br>';
}

?>