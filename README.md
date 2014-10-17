TDD – Test-Driven Development

Esta es una medologia de desarrollo, orientado a las pruebas. Dicha practica consiste en probar la funcionalidad básica de cada uno de los componentes desarrollados,  que nos servirá para probar el correcto funcionamiento de cada uno de los componentes. 

¿Vale la pena invertir tiempo haciendo estas pruebas ?:

Se debe saber sobre que tipo de componente hacer las pruebas, en un desarrollo muy grande , se quiere probar lo trascendental o lo que sea propenso a fallar, en otros casos en que la aplicación ya esta desarrollada y se necesite incorporar una nueva funcionalidad que pueda poner en riesgo el resto de la aplicación.

Se trata de que tampoco se va a probar lo obvio, aunque también puede fallar, es decir no vamos a crear una clase , para verificar que 2 + 2 = 4 o algo que se puede probar fácilmente en la marcha.

Las ventajas de implementar pruebas unitarias con el TDD, pueden ser varias:

1. Previene futuros errores:  Cuando estamos desarrollando es común encontrar que salen luego erroes inesperados, con esta metodología se pueden evitar que salgan errores, probando el caso en concreto.

2. Crear código de calidad:  Podemos asegurar de que nuestros componentes tengan calidad , gracias a que podemos comprobar los diferentes comportamientos que se nos pueda presentar.

3. Mejorar componentes ya existentes: se pueden mejorar el codigo, sin necesidad de alterar el funcionamiento de la aplicación, se mejora , se prueba y se implementa la mejora.
 

¿Que herramienta puedo usar que me faciliten estas pruebas?:

Existen frameworks de lenguajes de progamacion para hacer pruebas unitarias, como en php con PhpUnit y en Python.


¿Que métodos existen para ayudarnos a hacer pruebas ?

Para preparar los test se requiere de de tres métodos para la correcta preparación de pruebas,

Arrange : 

Prepara los elementos básicos para el test, como instanciar objetos, declarar variables.

Act:

Código que contiene la funcionalidad base a probar , como por ejemplo el algoritmo para calcular cuantas manzanas pueden caer de un árbol en el día y con que fuerza, dependiendo de los parámetros, peso de la manzana.

Assert: 

Sirve para controlar los resultados de  el act, con los casos que esperamos obtener, al final nos informa la cantidad de aciertos o de fallos. 
