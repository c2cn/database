<?php

namespace Mix\Database;

/**
 * Class Driver
 * @package Mix\Database
 */
class Driver
{

    /**
     * 数据源格式
     * @var string
     */
    public $dsn = '';

    /**
     * 数据库用户名
     * @var string
     */
    public $username = 'root';

    /*
     * 数据库密码
     */
    public $password = '';

    /**
     * 驱动连接选项
     * @var array
     */
    public $options = [];

    /**
     * @var \PDO
     */
    protected $pdo;

    /**
     * 默认驱动连接选项
     * @var array
     */
    protected $defaultOptions = [
        \PDO::ATTR_EMULATE_PREPARES   => false,
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    ];

    /**
     * Driver constructor.
     * @param string $dsn
     * @param string $username
     * @param string $password
     * @param array $options
     * @throws PDOException
     */
    public function __construct(string $dsn, string $username, string $password, array $options)
    {
        $this->dsn      = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->options  = $options;
        $this->connect();
    }

    /**
     * Get instance
     * @return \PDO
     */
    public function instance()
    {
        return $this->pdo;
    }

    /**
     * Connect
     * @throws PDOException
     */
    public function connect()
    {
        $this->pdo = new \PDO(
            $this->dsn,
            $this->username,
            $this->password,
            $this->options + $this->defaultOptions
        );
    }

    /**
     * Close
     */
    public function close()
    {
        $this->pdo = null;
    }

}
