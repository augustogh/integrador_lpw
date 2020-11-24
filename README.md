# Docker: PHP & MySQL

Ambiente de prueba para Trabajo Integrador de LPW & PHP.

## Instalar el ambiente de desarrollo

Si no tiene instalado docker-compose
    curl -L https://github.com/docker/compose/releases/download/1.7.1/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose

    chmod +x /usr/local/bin/docker-compose

## Instalar git y clonar
https://git-scm.com/book/es/v2/Inicio---Sobre-el-Control-de-Versiones-Instalaci%C3%B3n-de-Git

Clonar repositorio
    git clon https://github.com/augustogh/integrador_lpw.git 

## Levantar ambiente:
    ./init.sh
    
Alternativa
    $ docker-compose up -d
    # esperar a que levanten las instancias
    $ mysql -h 127.0.0.1 -u root --password=dbpass < basealumnos.sql

## Comandos disponibles

Una vez instalado, se pueden utilizar los siguiente comandos:

```zsh
docker-compose start    # Iniciar el ambiente de desarrollo
docker-compose stop     # Detener el ambiente de desarrollo
docker-compose down     # Detener y eliminar el ambiente de desarrollo.
```

## Estructura de Archivos

* `/docker/` contiene los archivos de configuración de Docker.
* `/www/` carpeta para los archivos PHP del proyecto.

## Accesos

### Web

* http://localhost/

### Base de datos

Existen dos dominios para conectarse a base de datos.

* `mysql`: para conexión desde los archivos PHP.
* `localhost`: para conexiones externas al contenedor.

Las credenciales por defecto para la conexión son:

| Usuario | Clave | Base de datos |
|:---:|:---:|:---:|
| dbuser | dbpass | dbname |
