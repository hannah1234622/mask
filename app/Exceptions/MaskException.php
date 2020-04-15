<?php

namespace App\Exceptions;

use Exception;
use Throwable;
use Illuminate\Console\Command;

class MaskException extends Exception
{
    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report()
    {
        //執行異常時的處理程序
        echo $this->getMessage();
        exit();
    }
}
