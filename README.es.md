<div align="center">

<img src="banner.png" alt="Project Banner" width="600px" height="400px">

![Tech Stack](https://skillicons.dev/icons?i=php,mysql,html,css,js,bootstrap,vscode)

![Status](https://img.shields.io/badge/Estado-En%20Desarrollo-green?style=for-the-badge)
![License](https://img.shields.io/badge/Licencia-GPLv3-blue?style=for-the-badge)

**Un proyecto MVC en PHP puro desarrollado desde cero con fines educativos. El objetivo de este repositorio es demostrar el proceso de desarrollo utilizando la temática de la Fundación SCP.**

<p align="center">
  <a href="README.md">🇺🇸 English Version</a>
</p>

</div>

---

## 📋 Descripción

**SCP Login PHP** es un proyecto personal de práctica enfocado en construir una arquitectura de software completa utilizando PHP nativo.

Actualmente, el proyecto cuenta con un **sistema seguro de registro y login de usuarios**. Aunque el enfoque actual es la autenticación, las versiones futuras apuntan a incluir un sistema CRUD y una simulación de cómo funcionaría este software dentro de la **Organización SCP**. Ten en cuenta que la simulación completa podría desarrollarse en un repositorio futuro separado.

## 📍 Características Principales

* **🛡️ Seguridad Mejorada:** Implementación de métodos de seguridad como bloqueo de sesión tras demasiados intentos fallidos (protección contra Fuerza Bruta) y análisis/sanitización de código malicioso tanto en el Frontend (JS) como en el Backend (PHP).
* **💾 Gestión de Base de Datos:** Manejo completo de la base de datos, permitiendo tanto la autenticación de usuarios existentes como el registro de nuevo personal.
* **🍪 Gestión de Sesiones y Estado:** Implementación práctica de Cookies y `$_SESSION`.
  * *Actual:* Personalización básica del dashboard (temas) basada en el usuario.
  * *Futuro:* Control de Acceso Basado en Roles (RBAC) para restringir zonas clasificadas.
* **🏗️ Arquitectura Limpia:** Uso estricto de **Interfaces**, **Repositorios** y **Clases** para mantener la Separación de Responsabilidades (SoC) y evitar sobrecargar un único archivo.

---

## 🛠️ Estructura del Proyecto

El proyecto sigue una organización de carpetas intuitiva y escalable:

```text
SCP_LOGIN_PHP/
├── config/              # Configuración de conexión a BD y Excepciones
├── controllers/         # Controladores (ej. AuthController)
├── interfaces/          # Contratos de repositorios (IUserRepository)
├── models/              # Lógica de Negocio y Entidades (User, SessionManager)
├── repositories/        # Implementación de acceso a datos (MariaDB)
├── views/               # Archivos de Interfaz (Login, Register, Dashboard)
│   └── assets/          # Recursos estáticos (CSS, JS, Imágenes)
├── index.php            # Punto de entrada de la aplicación
├── scp_data.sql         # Script de importación de la Base de Datos
├── passwordandusers.txt # Credenciales de prueba (Solo para desarrollo)
└── README.md
```

---

### 📸 Capturas
<div align="center">
  <style>
    .carousel {
      position: relative;
      max-width: 1200px;
      margin: 30px auto;
      background: #1a1a1a;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    }
      .carousel-slides {
      position: relative;
      width: 100%;
      aspect-ratio: 4 / 3;
      background: #000;
    }
    .carousel input {
      display: none;
    }
    .carousel-slide {
      position: absolute;
      width: 100%;
      height: 100%;
      opacity: 0;
      transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .carousel-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .carousel input:checked + .carousel-slide {
      opacity: 1;
    }
    .carousel-nav {
      position: absolute;
      bottom: 15px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 8px;
      z-index: 10;
    }
    .carousel-nav label {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.5);
      cursor: pointer;
      transition: all 0.3s ease;
      border: 2px solid transparent;
    }
    .carousel input:checked + .carousel-slide + .carousel-nav label {
      background: #fff;
      box-shadow: 0 0 12px rgba(255, 255, 255, 0.6);
      transform: scale(1.3);
    }
    .carousel-nav label:hover {
      background: rgba(255, 255, 255, 0.8);
      transform: scale(1.2);
    }
    .carousel-controls {
      position: absolute;
      width: 100%;
      height: 100%;
      display: grid;
      grid-template-columns: 1fr 1fr;
      top: 0;
      z-index: 5;
    }
    .carousel-controls label {
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-size: 28px;
      color: white;
      background: rgba(255, 255, 255, 0.1);
      transition: all 0.3s ease;
      user-select: none;
    }
    .carousel-controls label:hover {
      background: rgba(255, 255, 255, 0.3);
    }
  </style>

  <div class="carousel">
    <div class="carousel-slides">
      <input type="radio" name="carousel" id="slide1" checked>
      <div class="carousel-slide"><img src="pictures/login.png" alt="Pantalla de Login"></div>
      <input type="radio" name="carousel" id="slide2">
      <div class="carousel-slide"><img src="pictures/register.png" alt="Pantalla de Registro"></div>
      <input type="radio" name="carousel" id="slide3">
      <div class="carousel-slide"><img src="pictures/admin.png" alt="Panel Admin"></div>
      <input type="radio" name="carousel" id="slide4">
      <div class="carousel-slide"><img src="pictures/gears.png" alt="Tema Gears"></div>
      <input type="radio" name="carousel" id="slide5">
      <div class="carousel-slide"><img src="pictures/ice.png" alt="Tema Ice"></div>
      <input type="radio" name="carousel" id="slide6">
      <div class="carousel-slide"><img src="pictures/sophie.png" alt="Tema Sophie"></div>
      <input type="radio" name="carousel" id="slide7">
      <div class="carousel-slide"><img src="pictures/unicorn.png" alt="Tema Unicorn"></div>
      <div class="carousel-controls">
        <label for="slide7" style="grid-column: 1;">❮</label>
        <label for="slide2" style="grid-column: 2;">❯</label>
      </div>
      <div class="carousel-nav">
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label>
        <label for="slide5"></label>
        <label for="slide6"></label>
        <label for="slide7"></label>
      </div>
    </div>
  </div>
</div>


---

### ⬇️ Instalación

Sigue estos pasos para ejecutar el proyecto en tu entorno local (XAMPP, WAMP, Docker, etc.):

1. Clonar el repositorio

```Bash
git clone [https://github.com/Lotoz/SCP_LOGIN_PHP.git](https://github.com/Lotoz/SCP_LOGIN_PHP.git) && cd SCP_LOGIN_PHP
```

2. Configurar la Base de Datos

* Crea una nueva base de datos en tu gestor (phpMyAdmin, Workbench, etc.).

* Importa el archivo scp_data.sql incluido en la raíz del proyecto.

>Nota: No necesitas configurar manualmente un usuario de base de datos en los archivos PHP si utilizas la importación, ya que el sistema está configurado para trabajar con la configuración importada (o las credenciales locales estándar).

3. Ejecutar

Abre tu navegador y navega a tu servidor local: <http://localhost/scp_login_php/>

>⚠️ Usuarios Linux/Mac: Si usas XAMPP en macOS o Linux, recuerda otorgar los permisos de lectura/escritura necesarios a la carpeta del proyecto para que funcione correctamente.


<div align="center"> <sub>Desarrollado con ❤️ por <a href="https://github.com/Lotoz">Lotoz</a></sub> </div>
