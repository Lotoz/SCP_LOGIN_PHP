<?php

/**
 * Interfaz que define los métodos de acceso a datos (Repository) para usuarios
 * Solo contiene métodos de Base de Datos, NO métodos de controlador
 */
interface IUserRepository
{
    /**
     * Obtener usuario por ID
     * @param int $id ID del usuario
     * @return User|null Usuario encontrado o null
     */
    public function getById($id);

    /**
     * Guardar un nuevo usuario en la base de datos
     * @param User $user Usuario a guardar
     * @return bool true si fue exitoso
     */
    public function save(User $user);

    /**
     * Actualizar intentos fallidos de acceso
     * @param string $email Email del usuario
     * @param int $attempts Número de intentos
     * @return bool true si fue exitoso
     */
    public function updateAttempts($id, $attempts);

    /**
     * Resetear intentos a 0 después de login exitoso
     * @param string $email Email del usuario
     * @return bool true si fue exitoso
     */
    public function resetAttempts($id);
}
