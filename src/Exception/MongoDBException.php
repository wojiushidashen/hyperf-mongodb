<?php

declare(strict_types=1);

namespace Ezijing\Mongodb\Exception;

class MongoDBException extends \Exception
{
    /**
     * @param string $msg
     * @throws MongoDBException
     */
    public static function managerError(string $msg)
    {
        throw new self($msg);
    }
}
