<?php
// config/database.php — Clean PDO Singleton
// No inline table creation. Connect cleanly, throw readable errors.

define('DB_HOST',    'db.fr-roub1.bengt.wasmernet.com');
define('DB_PORT',    20184);
define('DB_NAME',    'db_902b6764');
define('DB_USER',    'user_4cbd00f7');
define('DB_PASS',    'pw_WRBPrPBLchPnR7YRFG6a51LIEkk8mTKB');
define('DB_CHARSET', 'utf8mb4');

class Database {
    private static ?Database $instance = null;
    private PDO $pdo;

    private function __construct() {
        $dsn = sprintf(
            'mysql:host=%s;dbname=%s;charset=%s',
            DB_HOST,
            DB_PORT,
            DB_NAME,
            DB_CHARSET
        );

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            // Log the real error, show a generic message
            error_log('[GTI-DB] Connection failed: ' . $e->getMessage());
            if (defined('ADMIN_CONTEXT') && ADMIN_CONTEXT === true) {
                throw new RuntimeException('Database connection failed. Please check your XAMPP MySQL service.');
            }
            throw new RuntimeException('A database error occurred. Please try again later.');
        }
    }

    public static function getInstance(): self {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection(): PDO {
        return $this->pdo;
    }

    // Prevent cloning/unserialization
    private function __clone() {}
    public function __wakeup() { throw new \Exception('Cannot unserialize singleton.'); }
}
?>