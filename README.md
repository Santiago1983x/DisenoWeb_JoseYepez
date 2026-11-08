# AI3 - Diseño Web - Sistema de Productos

Módulo Web Dinámico en PHP con CRUD + Seguridad - Fase 2.

### Tecnologías
* PHP 8 + PDO
* MySQL / MariaDB
* HTML5 / CSS3
* XAMPP

### Cómo desplegar localmente

1. Clonar el repositorio en htdocs: `git clone https://github.com/Santiago1983x/DisenoWeb_JoseYepez.git`
2. Inicie Apache y MySQL en XAMPP.
3. Crear la base de datos en phpMyAdmin: `CREATE DATABASE db_sistema_web;`
4. Importar el archivo `db_sistema_web.sql` o crear la tabla: `CREATE TABLE productos ( id INT AUTO_INCREMENT PRIMARY KEY, nombre VARCHAR(100) NOT NULL, precio DECIMAL(10,2) NOT NULL, stock INT NOT NULL );`
5. Verificar `conexion.php` con tus datos locales: host=localhost, dbname=db_sistema_web, user=root, pass=
6. Abrir en el navegador: `http://localhost/DisenoWeb_JoseYepez/index.php`

### Seguridad implementada
* Conexión PDO con try-catch sin exponer credenciales.
* Declaraciones Preparadas contra inyección SQL.
* Htmlspecialchars contra XSS.
* Validación en cliente y servidor.
