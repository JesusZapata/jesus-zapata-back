# Backend Test

[![Build Status](https://travis-ci.org/JesusZapata/jesus-zapata-back.svg?branch=master)](https://travis-ci.org/JesusZapata/jesus-zapata-back)

This repository fix the challenges cube-summation that can be found in [www.hackerrank.com](https://www.hackerrank.com/challenges/cube-summation/problem)

## Instalation

Firts intall the Laravel requirements, you can see the requirements in [www.laravel.com](https://laravel.com/docs/5.5/installation)

## Run

To run the application run on the bash the follow command, you must be inside the project folder.

```bash
php artisan serve
```

After you can open the Web Browser using the follow url http://127.0.0.1:8000

## Laravel Sections

### Controller

The controller `CubeSummationController` only have a method to upload the input file this method calculated the Cube Summation usgin the `CubeSummation` this class is provided for a `CubeSummationProvider`

### Provider

The `CubeSummationProvider` get the instanced class `CubeSummation` that class is the responsible to calculated the Cube Sumation usgin the method `process`, that method get the input format and return the results

### Continuous integrations

To run the test in each modification it was used [travis-ci.org](https://www.travis-ci.org/)

### Acceptance test

To run the acceptance test it was used [Laravel Dusk](https://laravel.com/docs/5.5/dusk), Laravel Dusk provides a way to make acceptance test over Laravel

The `CubeSummationTest` emulated a user and log in in the / and upload the file, and after run the process this test comprobed the output

### PHPUnit test

To run PHPUnit test it was used the way of Laravel

The test `ExampleTest.php` only get the class `CubeSummation` and run the method process, and after compared that output


# Code refactoring

In the follow pull request https://github.com/JesusZapata/jesus-zapata-back/pull/5 I propose the changes that must be made

### Good practices when programming

- Avoid using Spanish to name variables and comment, we should always use English
- Avoid if nested better made a return early to keep the code clearer
- Avoid many if nested better a return early
- Avoid call the same function many times, better call one and store the value into one variable
- Avoid `$servicio->user->type == '1'` better create a class with all constants with the different user type, is more easy to read and more easy to maintain the code
- Avoid upload comment code to the repository. If we want to see the history only we made git log
- Avoid call the same function / method many time `Input::get('driver_id')` better call once and store the return value on a variable and used this variable
- Avoid `array('error' => '2')` better create a class with all constants with the different error, is more easy to read and more easy to maintain the code, for example `array('error' => Error::Two)`
- Please enable https://github.com/squizlabs/PHP_CodeSniffer to keep more maintainable code

# Preguntas

1. **¿En qué consiste el principio de responsabilidad única? ¿Cuál es su propósito?**

Este termino no lo conocia, pero de lo que pude leer en internet en síntesis es asumir las
consecuencias de los actos. Entiendo que en el mundo de la programación es que cada programador es responsable de sus modificaciones y va a ser la única persona encargada de repararlo en caso de que falle.

2. **¿Qué características tiene según tu opinión “buen” código o código limpio?**

Lo primero que debe tener un buen codigo es seguir reglas claras y completas para que todos los
programadores estén al tanto de dichas reglas y evitar que nuevos programadores puedan introducir cambios que no siguen las reglas general.
En mi experiencia con PHP (phpcs), python (pylint) y pylint-odoo (Check para Odoo, del cual soy el segundo mayor contribuidor)
he usado herramientas para cuidar la calidad del codigo, esta practica con un buen workflow de integración continua
permite que todos los programadores ademas de usar el mismo lenguaje de programación sigan una estructura de programación estándar,
haciendo del código un codigo mas limpio y mas sostenible en el tiempo. 

