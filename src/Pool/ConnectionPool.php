<?php

namespace Mix\Database\Pool;

use Mix\Database\Connection;
use Mix\Pool\ConnectionPoolInterface;
use Mix\Pool\AbstractConnectionPool;

/**
 * Class ConnectionPool
 * @package Mix\Database\Pool
 * @author liu,jian <coder.keda@gmail.com>
 */
class ConnectionPool extends AbstractConnectionPool implements ConnectionPoolInterface
{

    /**
     * 获取连接
     * @return Connection
     */
    public function getConnection()
    {
        return parent::getConnection(); // TODO: Change the autogenerated stub
    }

}
