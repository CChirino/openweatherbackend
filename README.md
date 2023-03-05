# Tecnologias Usadas 
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

 Este blog, es una proyecto sencillo con su administrador y su vistas de cliente. Se construyo con las siguientes tecnologias:

* PHP 8.1
* Laravel 10
* MySQL
* Apache


# Instalacion:


Te voy a enseñar el paso a paso para configurar tu entorno local, en este caso con docker vamos a empezar!, necesitamos instalar **Docker** aca te dejo tutoriales, para los distintos sistemas operativos
- **Windows**:
	- WSL2, para posteriormente instalar el docker, aca el [link](https://www.youtube.com/watch?v=_fntjriRe48&t=670s).
	- Instalacion de Docker [https://docs.docker.com/desktop/windows/install/](https://docs.docker.com/desktop/windows/install/)
- **Linux - Ubuntu**: 
	- Instalacion de Docker [https://docs.docker.com/engine/install/ubuntu/](https://docs.docker.com/engine/install/ubuntu/)

Ya una vez instalado el docker nos vamos a clonar el respectivo proyecto con el comando:
 -  git clone https://github.com/CChirino/openweatherbackend.git

Se recomienda dejar el ***docker-compose.yml***, como esta para que no afecte en nada, ahora lo que vamos es a registrar nuestro respectivo hosts

 - Windows:
	 -   En el menú de inicio selecciona “Editor” y clica con el botón derecho del ratón. Selecciona la opción “**Ejecutar como administrador**”.
	-   En el editor, ve al punto “Abrir” en el menú “Archivo”.
	-   Abre el archivo “hosts” en el explorador de Windows siguiendo la ruta :
	-  **C:\Windows\System32\drivers\etc\hosts**
	- Registramos debajo nuestro localhost, copiando esto : **127.0.0.1       openweather.local** 
	 - Guardamos y listo!
 - Linux - Ubuntu:
	 - Corremos el siguiente comando en la consola : **sudo nano /etc/hosts**
	 - Registramos debajo nuestro localhost, copiando esto : **127.0.0.1       openweather.local** 
	 - Guardamos y listo!

El siguiente paso es copiar nuestro .env.example usando este comando : **cp .env.example env**
Ahora vamos a levantar nuestro contenedor con el siguiente comando : **docker-compose up -d**, con esto nos instala todo lo que necesitamos para que nuestro contenedor este funcionando correctamente.

### Composer install & laravel config

En la carpeta openweatherbackend ejecuta en el bash

**docker exec -it openweatherbackend bash**

En el bash corre lo siguiente: 

	composer install
	php artisan key:generate
	php artisan  db:seed
    
Si se desean correr pruebas este es el comando

	 php artisan test


Ya quedaria listo nuestro backend
