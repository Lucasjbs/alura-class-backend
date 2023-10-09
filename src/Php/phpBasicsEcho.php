<?php
//PHP Installation, Variables and Types
echo ("To install php on Windows, you must download the ZIP file from the official website, then got to Environment Variables and add, in the PATH, the location of php folder.") . PHP_EOL;
echo ("Inside PHP folder, there is a file called php.ini-development. Rename it to 'php.ini'. This file will be used to adjust php's behavior.") . PHP_EOL;
echo ("Variables in php are defined by the dollar sign: '\$variable'.") . PHP_EOL;
echo ("Php uses basic mathematical operations: '+ - * /'.") . PHP_EOL;
echo ("You can also use: 'pow(2,2)', '2 ** 2' to square numbers and '10 % 3' to get a division remainder.") . PHP_EOL;
echo ("List of primitive types in php: integer, float/double, string, boolean") . PHP_EOL;
echo ("You can use 'gettype()' to get the type of a variable.") . PHP_EOL;

//Handling strings
echo ("With the command 'echo', if you use single quotations it will treat everything you type as a string. You'll have to use dots to concat other values.") . PHP_EOL;
echo ("In Php, if you use double quotations, you can assign the variable inside them, and it will treat them as a variable.") . PHP_EOL;
echo ('As the majority of programming languages, using "\n" will break a line if you are using double quotations.') . PHP_EOL;
echo ('Using "\t" will run a tab command. Other scape characters are availble in: https://www.php.net/manual/pt_BR/language.types.string.php') . PHP_EOL;
echo ('In Php, the command PHP_EOL can achieve the same result as \n.') . PHP_EOL;

//Conditionals
echo ("As the majority of programming languages, PHP uses 'If(){}' to create conditions. 'And' and 'or' are represented by '&&', '||'.") . PHP_EOL;
echo ("When comparing strings or integers, you must use double equals '==', as php treats only one equal as an attribution, not a comparison.") . PHP_EOL;
echo ("Php has precedence rules that can be better described on its documentation: https://www.php.net/manual/en/language.operators.precedence.php") . PHP_EOL;
echo ("In more advanced codes, it'll be common to see the Ternary Operator in use. It's basically, a short way of writing If/Else.") . PHP_EOL;
echo ('Ternary Operator: $variavel = $condition ? $valueIfTrue : $valueIfFalse;') . PHP_EOL;

//Loops
echo ("As the majority of programming languages, PHP uses 'for(){}' and 'while(){}' to create loops.") . PHP_EOL;
echo ("Important Hint: Always avoid Copy and Paste codes. This is a sign that the code needs to be refactored.") . PHP_EOL;
echo ("To skip and iteration, you can use the Break and Continue functions. The 'continue' will skip only that iteration, but 'break' will end the iteration, jumping out of the loop.") . PHP_EOL;
echo ("Hello World!") . PHP_EOL;

echo ("Shortcuts for expressions: 'A += B' is equivalent to 'A=A+B'. 'i++' is equivalent to 'i=i+1'.") . PHP_EOL;

//Extras
echo ("Php Ecosystems: https://www.youtube.com/watch?v=yD3BqXWHua4") . PHP_EOL;
echo ("Php evolved with the web, and with it, its ecosystem evolved too. The most famous web frameworks for php are Symphony and Laravel.") . PHP_EOL;
echo ("There are other frameworks such as Laminas(old Zend), Cakephp, Codeigniter. These frameworks have components that are used between them as well.") . PHP_EOL;
echo ("Another important tool is the Composer, the dependecies manager for Php. Besides dependencies, another important feature it has is the Autoload that is used through the PSRs and its usefull for Object Orientation.") . PHP_EOL;
echo ("For the database, there is the Doctrine Orm framework.") . PHP_EOL;
echo ("For services and scalability, there's a new tool called Swoole. Its an extension for php made in C, with libraries that help written asynchronous codes.") . PHP_EOL;
echo ("There is a framework for this tool called HyperF.") . PHP_EOL;
echo ("Laravel has its own Orm called Eloquent. The framework also has a version called Laravel Octane, where you can attach your application with a Swoole server with minimum changes.") . PHP_EOL;
echo ("Laminas Swoole, Symphony Runtime can also do this attachment with Swoole.") . PHP_EOL;
echo ("There's also a list of microframeworks that can be used to start a project with the minimum, such as Slim (most famous) and Lumen.") . PHP_EOL;
echo ("Symphony is a microframework by default.") . PHP_EOL;

echo ("Article - PHP Introduction: https://www.alura.com.br/artigos/php-uma-introducao-linguagem") . PHP_EOL;
echo ("Php was often called a scripted language, but it can be called an interpreted language, wich means we don't need to compile it to run.") . PHP_EOL;

echo ("Article - PHP Comparison Signs: https://www.alura.com.br/artigos/quando-usar-ou-em-php") . PHP_EOL;
echo ("In php, the Equals Operator '==' is different from the Identical Operator '===' and have different purposes.") . PHP_EOL;
echo ("The Equal Operator compares if the value is equal, but disregards the type. It will read zero as null, for example.") . PHP_EOL;
echo ("With the Identical Operator, the value must have the same type, if zero is returned for example, it will no longer treat it as null.") . PHP_EOL;

echo ("Article - PHP Decimal Numbers: https://www.alura.com.br/artigos/php-operacoes-com-numeros-decimais") . PHP_EOL;
echo ("Operations with decimals can be challenging for programming languages, since computers are binary.") . PHP_EOL;
echo ("The process of conversion between base 10 calculations (humans), and base 2 calculations (machines), can create errors for decimal values.") . PHP_EOL;
echo ("Because this problem, if you need precision with floating points, you might need to convert the decimals to Integers, make the 'decimal' calculations as Integers, then convert them back with number_format().") . PHP_EOL;
echo ("To avoid the maximum value for Integers, you can also use a Decimal Extension, available since Php 7.") . PHP_EOL;
echo ("To use it, you'll need to install PECL: 'pecl install decimal'. Then activate it with 'extension=decimal' on 'php.ini'.") . PHP_EOL;
echo ("Then, download libmpdecimal package with: 'sudo apt-get install libmpdec-dev'.") . PHP_EOL;
echo ("Then, when you're coding, import the extension 'use Decimal\Decimal;' to your class to use it.") . PHP_EOL;

