http://katayunos.com/
¿Quiere venir al katayuno y tener configurado tu ordenador para trabajar con PHP y no sabes como?

Sigue estos sencillos pasos y lo tendrás todo listo en unos segundos:

+ Instalar PHP (si no lo tienes instalado ya)

A tu cuenta. Te recomiendo usar la rama 5.4 aunque no tendrías que tener problemas con la rama 5.3
Ejecuta php -v desde la consola para asegurarte que tienes php instalado

+ Instalar composer (si no lo tienes instalado ya)

```
curl -sS https://getcomposer.org/installer | php
sudo mv composer /usr/local/bin/composer 
```

+ clonar el proyecto desde composer

ejecutar el comando:

```
composer create-project -s dev gonzalo123/kataphp
```

Esto creará un directorio 
* 'kataphp' en la ubicación en la que estés y con phpunit instalado como componente
* una carpeta tests donde irán nuestros test unitarios
* una carpeta src donde irán nuestras implementaciones
* un archivo de configuración phpunit.xml con el autoloader configurado de manera que no tendremos que hacer includes de nuestras clases simpre y cuando usemos las carpetas tests para los tests y src para la implementación (y usemos PSR-0)

Para ejecutar nuestros tests unitarios ejecuaremos en nuestra carpeta kataphp:

```
./bin/phpunit
```
