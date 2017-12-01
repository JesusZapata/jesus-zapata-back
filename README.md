# Jesus Zapata backend Test

[![Build Status](https://travis-ci.org/JesusZapata/jesus-zapata-back.svg?branch=master)](https://travis-ci.org/JesusZapata/jesus-zapata-back)

This repository fix the challenges cube-summation that can be found in [www.hackerrank.com](https://www.hackerrank.com/challenges/cube-summation/problem)

## Controller

The controller `CubeSummationController` only have a method to upload the input file this method calculated the Cube Summation usgin the `CubeSummation` this class is provided for a `CubeSummationProvider`

## Provider

The `CubeSummationProvider` get the instanced class `CubeSummation` that class is the responsible to calculated the Cube Sumation usgin the method `process`, that method get the input format and return the results

### Continuous integrations 

To run the test in each modification it was used [travis-ci.org](https://www.travis-ci.org/)

### Acceptance test

To run the acceptance test it was used [Laravel Dusk](https://laravel.com/docs/5.5/dusk), Laravel Dusk provides a way to make acceptance test over Laravel

The `CubeSummationTest` emulated a user and log in in the / and upload the file, and after run the process this test comprobed the output

### PHPUnit test

To run PHPUnit test it was used the way of Laravel

The test `ExampleTest.php` only get the class `CubeSummation` and run the method process, and after compared that output
