<?php
/**
*=============================================================
* <interface_abstract_trait.php>
* Object Oriented Programming in PHP: Interfaces, Traits and Abstract classes 
* 
* @Author Muhammad Anwar Hussain<anwar_hussain.01@yahoo.com>
* Created on: 15th July 2019
* ============================================================
*/

interface FoodServices 
{
	public function menu_X();
	public function menu_Y();
	public function menu_Z();
}

interface EntertainmentServices 
{
	public function device_X();
	public function device_Y();
	public function device_Z();
}

interface Services extends EntertainmentServices, FoodServices 
{

}

abstract class ServicePackage implements Services 
{
	//abstract public function menu_X();
	//abstract public function menu_Y();
	//abstract public function menu_Z();

	//abstract public function device_X();
	//abstract public function device_Y();
	//abstract public function device_Z();

	public function common_services()
	{
		echo "ABC Transportation LTD Common Services" .'<br>';
	}

	public function getServicePackage(Services $s)
	{
		$s->menu_X();
		$s->menu_Y();
		$s->menu_Z();
		$s->device_X();
		$s->device_Y();
		$s->device_Z();
		$s->common_services();
	}
}

trait Food_Services 
{
	public function menu_X()
	{
		echo  __CLASS__ . '::menu_X' .'<br>';
	}
	
	public function menu_Y()
	{
		echo  __CLASS__ . '::menu_Y' .'<br>';
	}
	
	public function menu_Z()
	{
		echo  __CLASS__ . '::menu_Z' .'<br>';
	}
}

trait Entertainment_Services 
{
	public function device_X()
	{
		echo  __CLASS__ . '::device_X' .'<br>';
	}
	
	public function device_Y()
	{
		echo  __CLASS__ . '::device_Y' .'<br>';
	}
	
	public function device_Z()
	{
		echo  __CLASS__ . '::device_Z' .'<br>';
	}
}

class Train extends ServicePackage
{
	use Food_Services;
	use Entertainment_Services;
}

class Ship extends ServicePackage
{
	use Food_Services;
	use Entertainment_Services;
}

class Plane extends ServicePackage
{
	use Food_Services;
	use Entertainment_Services;
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