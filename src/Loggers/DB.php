<?php

namespace Alireza\Logger;

use Alireza\DbManager\DBInfo;

class DB implements LoggerType
{
    public function __construct(public DBInfo $DBInfo){}

    public function log()
    {
        // TODO: Implement log() method.
    }
}