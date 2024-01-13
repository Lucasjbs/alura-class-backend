<?php

namespace Class\Exceptions\Model;

use BadFunctionCallException;
use Exception;
use Throwable;

class ExceptionClassManager
{
    private array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    // Finally Execution Order:
    public function finallyExecutioner(float $value): int
    {
        try {
            echo "\nTRY Block". PHP_EOL;
            if($value < 0) throw new Exception();

            return 10;
        } catch (Exception $e) {
            echo "CATCH Block". PHP_EOL;
            return -10;
        } finally {
            echo "FINALLY Block". PHP_EOL;
        }
    
    }

    public function stackExecutioner(): void
    {
        //When the file "index.php" is executed, a stack is created in memory, as methods and functions are called
        echo "\nIniciando o programa principal" . PHP_EOL;
        $this->stackOne();
        echo 'Finalizando o programa principal' . PHP_EOL;
    }

    private function stackOne()
    {
        echo "Entrei na função 1" . PHP_EOL;

        //To prevent an error or exception from breaking the whole execution, we can use Try/Catch blocks on problematic parts of the code.
        try {
            $this->stackTwo();

            // Catch Throwable is the most generic catch
            // Using generic catches is not recomended, its recomended to use more specific Classes, like catch 'BadFunctionCallException' for example.
        } catch (Throwable $e) {
            
            // The object '$e' have methods such as getMessage() that can be usefull to identify the error.
            echo $e->getMessage() . PHP_EOL;
            echo $e->getLine() . PHP_EOL;
            /* Returns the Call Stack of the error:
             * echo $e->getTraceAsString() . PHP_EOL;
             */
        }

        //This code will BE executed
        echo 'Saindo da função 1' . PHP_EOL;
    }

    private function stackTwo()
    {
        echo "Entrei na função 2" . PHP_EOL;

        intdiv(1, 0);
        throw new BadFunctionCallException('Essa é a mensagem de exceção');
    
        //Once an error or exception is found, the rest of the code will not be executed until a Try/Catch block catches the problem.
        //This code will NOT be executed
        echo 'Saindo da função 2' . PHP_EOL;
    }
}