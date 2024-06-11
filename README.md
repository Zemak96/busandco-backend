<h2>Comandos necesarios de GIT</h2>
<p>Tenemos una rama principal que será el desarrollo definitivo del proyecto por eso debemos mantenerla lo más depurada posible y sólo incluir código que sea definitivo, para ello, he creado una rama secundaria llamada "desarrollo" sobre la que trabajaremos y haremos cambios</p>
<p>Para clonar el repositorio la primera vez:</p>
  <ul>
     <li>Copiar la URL del repositorio</li>
    <li>Ejecutar el comando <b>git clone "URL del repositorio"</b></li>
    <li>Cambiar a la rama desarrollo con el comando <b>git checkout desarrollo</b></li>
  </ul>
<p>Cuando se esté trabajando:</p>
  <ul>
    <li>Antes de desarrollar código de debe ejecutar el comado <b>git pull origin desarrollo</b> para tener en tu versión todos los cambios que se hayan producido</li>
    <li>Cuando hayas hecho algo de código debes hacer un commit con este comando <b>git commit -m "mensaje del commit"</b></li>
    <li>Cuando hayas acabado de desarrollar código antes de hacer el push deberás ejecutar de nuevo el comando <b>git pull origin desarrollo</b> por si un compañer@ hubiera hecho cambios mientras
    tanto</li>
    <li>Si hay conflictos en el código se deberá comantar con el resto de miembros antes de resolverlos</li>
    <li>Si no hay conflictos se ejecuta el siguiente comando <b>git push origin desarrollo</b> </li>
  </ul>
<h2>Instalar librerias al clonar proyecto</h2>
<p>Ejecutar el comando "composer install" una vez clonado el proyecto por primera vez</p>
  
