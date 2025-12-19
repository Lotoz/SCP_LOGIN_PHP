<div align="center">

<img src="banner.png" alt="Project Banner" width="600px" height="400px">

![Tech Stack](https://skillicons.dev/icons?i=php,mysql,html,css,js,bootstrap,vscode)

![Status](https://img.shields.io/badge/Status-In%20Development-green?style=for-the-badge)
![License](https://img.shields.io/badge/License-GPLv3-blue?style=for-the-badge)

**A pure PHP MVC project developed from scratch for learning purposes. The goal of this repository is to demonstrate the development process using an SCP Foundation theme.**
</div>

<p align="center">
  <a href="README.es.md">🇪🇸 Versión README en Español</a>
</p>

---

## 📋 Description

**SCP Login PHP** is a personal practice project focused on building a complete software architecture using native PHP.

Currently, the project features a **secure user login and registration system**. While the focus is now on authentication, future versions aim to include a CRUD system and a simulation of how this software would function within the **SCP Organization**. Note that the full simulation might be developed in a separate, future repository.

## 📍 Key Features

* **🛡️ Enhanced Security:** Implementation of security methods such as session blocking after too many failed attempts (Brute-force protection) and malicious code analysis/sanitization in both Frontend (JS) and Backend (PHP).
* **💾 Database Management:** Full handling of the database, allowing both authentication of existing users and registration of new personnel.
* **🍪 Session & State Management:** Practical implementation of Cookies and `$_SESSION`.
  * *Current:* Basic dashboard customization (themes) based on the user.
  * *Future:* Role-Based Access Control (RBAC) to restrict zones.
* **🏗️ Clean Architecture:** strict use of **Interfaces**, **Repositories**, and **Classes** to maintain Separation of Concerns (SoC) and avoid overloading any single file.

---

## 🛠️ Project Structure

The project follows an intuitive and scalable folder organization:

```text
SCP_LOGIN_PHP/
├── config/              # DB connection configuration and Exceptions
├── controllers/         # Controllers (e.g., AuthController)
├── interfaces/          # Repository contracts (IUserRepository)
├── models/              # Business Logic & Entities (User, SessionManager)
├── repositories/        # Data access implementation (MariaDB)
├── views/               # UI Files (Login, Register, Dashboard)
│   └── assets/          # Static resources (CSS, JS, Images)
├── index.php            # Application entry point
├── scp_data.sql         # Database import script
├── passwordandusers.txt # Test credentials (For development only)
└── README.md
```

---

### 📸 Pictures

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

### ⬇️ Installation

Follow these steps to run the project in your local environment (XAMPP, WAMP, Docker, etc.):

1. Clone the repository

```bash
git clone [https://github.com/Lotoz/SCP_LOGIN_PHP.git](https://github.com/Lotoz/SCP_LOGIN_PHP.git)
cd SCP_LOGIN_PHP
```

2. Configure the Database

* Create a new database in your manager (phpMyAdmin, Workbench, etc.).

* Import the scp_data.sql file included in the root of the project.

>Note: You don't need to manually configure a database user in the PHP files if you use the import, as the system is set up to work with the imported configuration (or standard local credentials).

3. Run

Open your browser and navigate to your local server: <http://localhost/SCP_LOGIN_PHP/>

⚠️ **Linux/Mac Users:** If you are using XAMPP on macOS or Linux, remember to grant the necessary read/write permissions to the project folder for it to work correctly.


<div align="center"> <sub>Developed with ❤️ by <a href="https://github.com/Lotoz">Lotoz</a></sub> </div>
