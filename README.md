# Práctica Multidioma
Esta práctica consiste en tomar este fichero y usando la bibliteca gettext, generar los ficheros necesrios para que este proyecto se adapte a los diferentes idiomas

Deberá de verse en los idiomas

* Inglés
* Francés
* Castellano

No funciona por ajax, por lo que cada vez que cambiemos el idioma deberemos ir al servidor para que adapte los textos al idioma establecido.
Tendremos en el index un formulario que pide dos datos.
Obligatoriamente hay que rellenar los dos datos, si no, dará un mensaje en el idioma correspondiente y se quedará  en la página idex.
Si rellenamos datos y presionamos el submit correspondiente iremos a una página llamada sitio.php donde  veremos un mensaje de bienvenida con el nombre del usuario
Igualmente en esta página podremos cambiar el idioma y volver a la página anterior (index)
Por defecto el idioma debe de ser el castellano
En todo momento el idioma aparecerá con un texto en cabecera de la página, así como seleccionado el radio correspondinete
## Consideraciones
Se debe de mantener el idioma establecido entre la páginas
Podemos navegar de una págiana a otra
Al ir de sitio.php a index.php, se debe de perder el nonmbre de usuario y su password

