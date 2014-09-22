<?php

/*
 * @author Pablo Martinez
 * 
 * Human_resources_test, clase que utilizaremos para probar el TDD 
 * utilizando phpUnit.
 * 
 * Para informacion sobre como instalar PhpUnit y la documentacion completa
 * visite la pagina https://phpunit.de/ .
 * 
 * Debemos tener en cuenta que para trabajar con TDD :
 * 
 * 1. tener claro el objetivo de la rutina que se quiere posteriormente 
 * a probar.
 * 
 * 2. cada clase puede tener una clase de test (extendida siempre por
 * PHPUnit_Framework_TestCase). Despues de definir el 
 * objetivo , situar el test dentro de la clase test correspondiente 
 * (la funcion debe tener la palabra test al inicio ejemplo: test_ejemplo() ).
 * 
 * 3. definir el algoritmo base para cumplir el objetivo, algo que nos 
 * permita probar la calidad de lo que estamos haciendo y si es necesario
 * importar las ayudas necesarias para probarlo.
 * 
 * 
 */

class Human_resources_test extends PHPUnit_Framework_TestCase
{
	
	/*
	 * name: test_getName
	 * @author Pablo Martinez
	 * @param
	 * @return 
	 * 
	 * Para este primer ejemplo , tenemos una simple funcion que 
	 * devuelve el nombre de un empleado. 
	 * construimos el algoritmo base para que funcione y lo probamos en
	 * consola para comprobar que todo va bien.
	 * 
	 * > phpunit tests/Human_resources_test.php
	 * OK (1 test, 0 assertions)
	*/
	
	public function test_getName()
	{
		// Algoritmo Base
		$employee->name = 'Pablo';
		
	}
		
	/*
	 * 
	 * name: test_concatName
	 * @param
	 * @return
	 * 
	 * Para este segundo ejemplo, utilizaremos una accion del TDD, 
	 * llamada Asert , que hace parte de los metodos de los TDD 
	 * Arrage, Act , Assert, (Preparar, Actuar, Afirmar).
	 * Supongamos que para este caso queremos combinar el nombre con el
	 * apellido de este empleado, haremos el algoritmo base y luego con 
	 * el metodo assert validamos que el resultado sea lo que estamos 
	 * esperando, de caso contrario, que el resultado del assert sea 
	 * contrario en la prueba del TDD nos informara que el assert fue 
	 * falso.
	 * 
	 * 
	 */
	public function test_concatName()
	{
		// Algoritmo
		$employee->name 	= 'Pablo';
		$employee->lastName = 'Martinez';
		$name = $employee->name." ".$employee->lastName;
		
		//Assert
		$this->assertEquals('Pablo Martinez',$name);

	}
	

}


?>
