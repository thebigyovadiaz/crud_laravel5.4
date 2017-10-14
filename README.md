# Descargar el CRUD
Puedes realizar el clonado del repositorio o la descarga en el archivo .zip comprimido

# Instalar el CRUD
    - Tener instalado primeramente composer, php y mysql.
    - Posicionarse via consola dentro de la carpeta contenedora del CRUD
    - Aplicar via consola: composer update

# Luego de instalar.
    - Configurar el archivo .env cargando en el mismo el nombre de base de datos y todas esas cosas, igual tienes un .env-example
    - Realizar la creación de la base de datos, debe ser igual al del archivo .env
    - Realizar la carga de data en la base de datos aplicando via consola el siguiente comando: php artisan migrate
    - Luego tendrás cargado en la base de datos 40 registros en la tabla productos.
    - El CRUD te mostrará un listado, con acciones de ver editar eliminar un producto. También te permitirá crear uno nuevo, se tiene la validació respectiva de los campos del formulario y mensajes de avisos.

### Cualquier duda visita [Documentación Oficial de Laravel]('https://laravel.com/docs/5.4/')
