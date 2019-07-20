<?php
/**
*=============================================================
* <abstract_trait.php>
* Object Oriented Programming in PHP: Abstract classes and Traits 
* 
* @Author Muhammad Anwar Hussain<anwar_hussain.01@yahoo.com>
* Created on: 15th July 2019
* ============================================================
*/

abstract class Services 
{
	abstract public function service_X();
	abstract public function service_Y();
	abstract public function service_Z();

	public function common_services()
	{
		echo "ABC Transportation LTD Common Services" .'<br>';
	}

	public function getServicePackage(Services $s = null)
	{
		$s->service_X();
		$s->service_Y();
		$s->service_Z();
		$s->common_services();
	}
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

class Train extends Services 
{
	use TransportServices;
}

class Ship extends Services 
{
	use TransportServices;
}

class Plane extends Services 
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
		$this->transport->$serviceName($this->transport);
	}
}

$transport = new Transport();

$vehicles = ['t' => new Train, 's' => new Ship, 'p' => new Plane];

while($element = each($vehicles))
{
	$transport->setTransport($element['value']);
	$transport->getService('getServicePackage');
	echo '<br>';
}

?>