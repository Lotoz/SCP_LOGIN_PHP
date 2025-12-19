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

| Login | Register | Dashboard |
|-------|----------|-----------|
| ![Login Screen](pictures/login.png) | ![Register Screen](pictures/register.png) | ![Dashboard](pictures/admin.png) |

**Temas Disponibles:**

| Gears | Ice | Sophie |
|-------|-----|--------|
| ![Gears Theme](pictures/gears.png) | ![Ice Theme](pictures/ice.png) | ![Sophie Theme](pictures/sophie.png) |

| Unicorn | Clef | Admin |
|---------|------|-------|
| ![Unicorn Theme](pictures/unicorn.png) | ![Clef Theme](pictures/clef.png) | ![Admin Theme](pictures/admin.png) |

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
