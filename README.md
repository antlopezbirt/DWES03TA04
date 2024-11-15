# MVC_PHP_Template
Plantilla base de patrón MVC para futuros proyectos

En el primer commit se han añadido los directorios base recomendados:

* **app/controllers**:
  * Aquí se almacenarán los controladores, que manejarán la lógica de negocio
y actuarán como intermediarios entre el modelo y la vista.
* **app/models**:
  * Este directorio contendrá los modelos, que representan y gestionan los datos
de la aplicación.
* **app/views**:
  * En esta carpeta se guardarán las vistas, que son los archivos responsables de la
interfaz de usuario.
* **app/core**:
  * En este directorio se ubicarán las clases base y el núcleo de la aplicación, como el
enrutador, el controlador base y otros componentes esenciales que gestionan el flujo de la
aplicación.
* **public**:
  * Este será el directorio de acceso público donde se encontrarán los archivos
accesibles desde el navegador, como index.php, recursos CSS, JS e imágenes.
* **config**:
  * Incluye los archivos de configuración de la aplicación, como las credenciales de base
de datos y configuraciones de entorno.
* **vendor**:
  * Directorio que contendrá las dependencias instaladas mediante Composer.
Recuerda ejecutar composer install para poblar esta carpeta con las bibliotecas necesarias.
* logs:
  * Carpeta para registrar eventos y errores, útil para el monitoreo y depuración.

Para empezar a trabajar con la plantilla simplemente hay que hace un pull e ignorar los ficheros *.gitkeep*.