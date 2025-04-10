## PASOS A SEGUIR PARA CLONAR EL PROYECTO

1. ABRI UNA TERMINAL Y PONER EL SIGUIENTE COMANDO
	git clone git@github.com:juanjoloq/Laravel_Cruds.git

2. CREAR EL ARCHIVO .env SI ESTE SIGUENTE COMANDO NO LE DA DUPLIQUE EL .env.example Y QUITE EL .example.
	
# cp .env.example .env

3. TENER ACTIVADO EL XAMPP Y CREA UNA DB ("NOMBRE SUGERIDO proyectolaravel ")

4. CONFIGURA EL .env EN LA PARTE DE DB
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=nombre_de_la_db_creada
	DB_USERNAME=root
	DB_PASSWORD=

5. ABRIR UNA TERMINAL EN VISUAL O EDITOR QUE UTILICE EN CMD Y COPIE EL SIGUENTE COMANDO:
	composer install

6. EN ESA MISMA TERMINAL DESPUES DE QUE TERMINE DE DESCARGAR LOS ARCHIVOS TIRA ESTE OTRO COMANDO:
	npm install

7. TIRA LUEGO ESTE OTRO COMANDO:
	php artisan key:generate

8. EJECUTA ESTE SIGUENTE COMANDO:
	php artisan migrate

## Comandos para que corra bien 

ABRE DOS TERMINALES UNA EN CMD Y OTRA DE TU PREFERENCIA

### 1. npm run dev
correr este codigo en CMD para que coja los estilos 


### 2. php artisan serve 
esto para correr el servidor 
