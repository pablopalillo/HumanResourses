<?php

/*
 * @author Pablo Martinez.
 * Human Resources, clase que utilizaremos de ejemplo en caso de que 
 * necesitemos extraer funciones para llevarlas a nuestas clases de test.
 */
class Human_resources 
{

	private $employee;
	private $deductHealth;
	private $deductPension;

	public function __construct()
	{
		$employee->name 	= 'Pablo';
		$employee->lastName	= 'Martinez';
		$employee->salary 	= 0;
		$employee->tel 		= '25500';
		$employee->city 	= 'Medellin';

		$deductHealth 	= 30000;
		$deductPension 	= 10000; 
	}

	public function setSalary( $salary )
	{
		$this->employee->salary = $salary;
	}

	public function employeeDeduct()
	{
		$salary = $this->employee->salary;
		$total  = $salary - ( $this->deductHealth - $this->deductPension );

		if( $total < 0 )
		{
			return 0;
		}
		else
		{
			return $total;
		}
		
	}

}


?>
