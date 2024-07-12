 Proyecto de Registro de Usuarios

Este proyecto consiste en una página web para el registro de usuarios, desarrollada utilizando HTML, CSS, JavaScript, PHP y MySQL. La aplicación permite a los usuarios registrarse proporcionando sus nombres, apellidos, email, nombre de usuario y contraseña. Los datos se validan en el cliente antes de ser enviados al servidor y almacenados en una base de datos MySQL.

## Estructura del Proyecto

- **index.html**: Archivo principal que contiene el formulario de registro.
- **styles.css**: Hoja de estilos utilizada para darle diseño a la página.
- **register.php**: Script de PHP que maneja el almacenamiento de los datos del formulario en la base de datos.

### index.html

Este archivo contiene la estructura HTML del formulario de registro. Incluye campos para nombres, apellidos, email, confirmación de email, nombre de usuario, contraseña y confirmación de contraseña. También incluye validaciones básicas con JavaScript.

styles.css
Este archivo contiene los estilos utilizados para darle un diseño atractivo al formulario de registro.

register.php
Este archivo contiene el código PHP que maneja el almacenamiento de los datos del formulario en una base de datos MySQL. Se conecta a la base de datos, valida los datos y los inserta en una tabla de usuarios.

Configuración de la Base de Datos
Crear una base de datos llamada registro_usuarios.
Crear una tabla usuarios con los siguientes campos:
id INT AUTO_INCREMENT PRIMARY KEY
nombres VARCHAR(255)
apellidos VARCHAR(255)
email VARCHAR(255)
usuario VARCHAR(255)
contraseña VARCHAR(255)

Uso
Clonar el repositorio.
Colocar los archivos en el servidor web (por ejemplo, XAMPP o WAMP).
Asegurarse de que el servidor MySQL esté corriendo.
Acceder a index.html a través del navegador.
Completar el formulario de registro y enviarlo.

Contribución
Hacer un fork del repositorio.
Crear una nueva rama (git checkout -b nueva-rama).
Hacer los cambios necesarios y commit (git commit -m 'Descripción del cambio').
Hacer push a la rama (git push origin nueva-rama).
Crear un Pull Request.


Autores
Lukas Salazar - Desarrollador 

