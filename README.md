# Proyecto Bagabundo

El objetivo principal de este proyecto es crear una página web para dar a conocer a los clientes/usuarios una gran variedad de viajes a los lugares más visitados del mundo.

## Instalación

 1. Clonar el siguiente repositorio utilizando el comando  ``git clone https://github.com/EduardoMay/bagabundo.git``
 2. Ahora utilizando *composer* por medio de la línea de comandos, dirigirse al repositorio y correr el siguiente comando `composer update`.

## Configuración local

Con el proyecto clonado y las dependencias descargadas se debe iniciar el proyecto en el entorno adecuado.

1.  Ejecutar el comando `php init` para iniciar la aplicación en el entorno adecuado.
    
2.  Crear una nueva base de datos y ajustar la configuración de `components['db']` en el archivo `common/config/main-local.php` con los datos de la base de datos.

3.  Ejecutar el siguiente comando para poder crear las tablas de la base de datos ``yii migrate``

## RBAC

Primero y antes que nada hay que leer y entender [Autenticación](https://www.yiiframework.com/doc/guide/2.0/es/security-authentication) y [Autorización](https://www.yiiframework.com/doc/guide/2.0/es/security-authorization) especialmente [Control de Acceso Basado en Roles (RBAC)](https://www.yiiframework.com/doc/guide/2.0/es/security-authorization#rbac) de la guía de Yii2.

#### Construir los datos de Autorización

Construir los datos de autorización implica las siguientes tareas:

-   Definir roles y permisos;
-   Establecer relaciones entre roles y permisos;
-   Definir reglas;
-   Asociar reglas con roles y permisos;
-   Asignar roles a usuarios.


## Referencias
- [Documentación oficial de Yii 2.](https://www.yiiframework.com/doc/guide/2.0/es)
- [Íconos vía Font Awesome.](https://fontawesome.com/)
- [Modelo Vista Controlador - Video explicativo.](https://capacitateparaelempleo.org/pages.php?r=.tema&tagID=6725&load=6795)
-   [Yii2 Framework - RBAC Tutorial with Example | Part 1.](https://www.youtube.com/watch?v=7-jo8LKCnUk)
-   [Yii2 Framework RBAC Tutorial with Example | Part2 | Rules.](https://www.youtube.com/watch?v=rzoQoB9N3v8)
-  [Bootstrap 4.](https://getbootstrap.com/docs/4.0/getting-started/introduction/)
