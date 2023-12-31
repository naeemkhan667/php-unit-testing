# PHP Unit Testing:
PHPUnit is a popular testing framework for PHP that is used for unit testing. Unit testing is a software testing practice in which individual units or components of a software application are tested in isolation to ensure that they work as intended. A "unit" typically refers to the smallest testable part of an application, such as a function or method.

# Test Cases: 
In PHPUnit, tests are organized into classes called test cases. Each test case class extends the PHPUnit\Framework\TestCase class and contains test methods. Test methods are named with a "test" prefix, and they contain assertions that validate the expected behavior of the code being tested

# Assertions: 
PHPUnit provides a variety of assertion methods that you can use to verify that the actual output of your code matches the expected output. Some common assertions include assertEquals, assertTrue, assertFalse, assertNull, and many more.


# Test Execution: 
PHPUnit can be executed from the command line or integrated into build processes. It runs your tests and provides a detailed report of which tests passed, which failed, and why.



# Instructions to run project:

## Create a directory
- mkdir php-unit-testing
- cd php-unit-testing

## Init Composer
 - composer init

## Install phpunit as project dependency
 - composer require phpunit/phpunit --dev

## Create Student.php in src
- Create Studend.php file in src directory

## Create a folder tests fro writing test cases
- Create folder named Tests and 
- Create StudentTest.php
- Write test cases prefix with 

# Runnign test cases

## Run all test cases
- .\vendor\bin\phpunit tests 

## Run particular class tests
- .\vendor\bin\phpunit  .\tests\StudentTest.php

## Run particular test case amoung test cases
- .\vendor\bin\phpunit tests --filter=StudentTest::test_student
- .\vendor\bin\phpunit --filter test_student .\tests\StudentTest.php

# Generating phpunit.xml configuration file
PHPUnit allows you to generate a default phpunit.xml configuration file using the --generate-configuration option. This command creates a basic configuration file with default settings and comments explaining each section. Here's how you can generate a phpunit.xml file:

## - ./vendor/bin/phpunit --generate-configuration

# Running testsuite
## - All test cases in a suite
    -./vendor/bin/phpunit --testsuite=app
## - Particular test case in a suite
    -./vendor/bin/phpunit --testsuite=app --filter=test_student
    
# Regenerate autoload file 
Regenerate autoload file when there are changes to the project's class structure or when new dependencies are added. 
- composer dump-autoload
