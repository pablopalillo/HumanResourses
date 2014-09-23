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


	/*
	 * 
	 * name: test_deductSalary
	 * @param
	 * @return
	 * 
	 * Para este nuevo ejemplo , supongamos que queremos probar 
	 * una funcion , que basicamente dedusca basados en el salario
	 * salud y pension , lo que recibira el empleado mes a mes,
	 * para esto nos ayudaremos de la clase base, Human_resources, que
	 * ya tiene los metodos de deducir el salario mandadole un parametro.
	 * en el metodo test lo unico que tenemos que hacer es invocar y probar
	 * los metodos necesarios utilizando coverage y al final cambiaremos el assert,
	 * para comparar multiples valores. Para este ejemplo si, el empleado deduce 
	 * alguno de estos valores 530000,650000,700000
	 *
	 * para ejecutar esta prueba unitaria, necesitamos previamente llamar a la clase Human_resources
	 * el codigo encardago de la llamada a la clase principal esta en index ,en la raiz. 
	 * Utilizaremos en la consola el metodo bootstrap, que
	 * lo que hace es basicamente llamar un script antes de la prueba para pre-cargar recursos que necesitemos.
	 * para este ejemplo seria algo como : 
	 * 
	 * >  phpunit --bootstrap index.php tests/Human_resources_test.php
	 * 
	 */
	public function test_deductSalary()
	{
		// Se instancia el objeto que sera probado.
		$this->coverage = new Human_resources();

		// Utilizamos metodos corresponientes a la clase base Human_resources
		$this->coverage->setSalary(530000);
		$totalSalary = $this->coverage->employeeDeduct();

		// Cambiamos la funcion Assert por assertContains,
		/*
		* name: assertContains
		* assertContains( var , array(arg ... ));
		* sirve para comparar un caso esperado con multiples valores.
		*/ 
		$this->assertContains($totalSalary, array(530000,650000,700000));
	}

	

}


?>
