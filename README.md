# Filtro de Pokémon

Aplicación web en PHP para consultar y filtrar Pokémon por nombre, tipo, ataque y defensa. Los resultados muestran el número, nombre, tipo, estadísticas e imagen de cada Pokémon.

## Requisitos

- Windows con [XAMPP](https://www.apachefriends.org/), o un entorno equivalente con PHP, Apache y MySQL/MariaDB.
- Extensión PDO para MySQL habilitada en PHP.
- Conexión a Internet para cargar Bootstrap, jQuery, Bootstrap Slider y las imágenes alojadas externamente.

## Descargar el proyecto

Clona el repositorio dentro de la carpeta `htdocs` de XAMPP:

```bash
cd C:\xampp\htdocs
git clone https://github.com/santos491/filtro-pokemon.git PokemonFiltro
```

También puedes descargar el proyecto desde GitHub con **Code > Download ZIP** y extraerlo en `C:\xampp\htdocs\PokemonFiltro`.

## Configuración y puesta en marcha

1. Abre el panel de XAMPP e inicia **Apache** y **MySQL**.
2. Entra a [phpMyAdmin](http://localhost/phpmyadmin/) y crea una base de datos llamada `pokemonfiltro`.
3. Selecciona la base de datos, abre la pestaña **Importar**, elige `docs/pokemonfiltro_backup` y ejecuta la importación. El archivo contiene la estructura y los datos de la tabla `tm_pokemon`.
4. Revisa `config/conexion.php`. La configuración inicial utiliza `localhost`, la base de datos `pokemonfiltro` y el usuario `root` sin contraseña. Si tu instalación tiene otras credenciales, actualiza el usuario y la contraseña allí.
5. Abre el filtro en el navegador: [http://localhost/PokemonFiltro/view/ListPokemon/](http://localhost/PokemonFiltro/view/ListPokemon/).

## Cómo usar el filtro

- Escribe parte del nombre para actualizar los resultados.
- Selecciona uno o varios tipos.
- Ajusta los controles de ataque y defensa para limitar las estadísticas máximas mostradas.
- Combina los filtros para encontrar Pokémon que coincidan con todos los criterios.

## Estructura principal

- `config/conexion.php`: conexión PDO a MySQL/MariaDB.
- `controller/pokemon.php`: solicitudes para listar Pokémon y tipos.
- `models/Pokemon.php`: consultas de datos y filtros.
- `view/ListPokemon/`: interfaz y lógica del filtro.
- `assets/style.css`: estilos de la aplicación.
- `docs/pokemonfiltro_backup`: respaldo SQL para crear y cargar la tabla de Pokémon.

## Solución de problemas

- **Error de conexión:** comprueba que MySQL esté iniciado, que exista `pokemonfiltro` y que las credenciales de `config/conexion.php` sean correctas.
- **No aparecen resultados:** verifica que la importación haya terminado correctamente y que la tabla `tm_pokemon` tenga registros.
- **No cargan los estilos o imágenes:** la aplicación requiere conexión a Internet para sus recursos externos.
