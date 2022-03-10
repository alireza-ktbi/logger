<?php

namespace Alireza\Logger;

class Logger
{
    public function log(LoggerType $logger)
    {
        $logger->log();
    }
}