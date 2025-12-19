<?php

require_once 'DatabaseConnectionException.php';

/**
 * Database - Clase Singleton para la conexión a BD
 * Asegura que solo hay una instancia de conexión en toda la aplicación
 */
class Database
{
    private $host = "localhost";
    private $db_name = "scp_data";
    private $username = "view";
    private $password = "yX/I!geU1xKbG3F[";
    private $conn;

    /**
     * Obtener la conexión a la base de datos
     * @return PDO Conexión PDO a la base de datos
     * @throws DatabaseConnectionException Si hay error de conexión
     */
    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );

            // Configurar PDO para lanzar excepciones
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Establecer charset UTF-8
            $this->conn->exec("SET NAMES utf8");
        } catch (PDOException $e) {
            throw new DatabaseConnectionException(
                "Error de conexión a BD: " . $e->getMessage()
            );
        }

        return $this->conn;
    }
}
