Login básico utilizando el patrón arquitectónico Modelo Vista Controlador. 
El acceso a la base de datos es gestionado por una clase (Database.php) que emplea el método PDO.
La clase User.php contiene el método login, que se ayuda de la clase anterior para comprobar que los datos
indicados por el formulario coinciden con los almacenados en la base de datos. A su vez, esta clase es utilizada
por el controlador (AuthController.php) en el método authenticate para realizar dicha comprobación. El controlador, 
además, contiene los métodos login, dashboard y logout, que son utilizados
por el archivo index.php para redireccionar al usuario según distintos contextos explicitados mediante $_REQUEST['action'].
index.php es el archivo que primero se ejecuta, al encontrarse en la carpeta raíz. Su acción por defecto es enviar al login.
La validación de los campos relevantes del formulario se realiza mediante el archivo validacion.js. Este archivo se asegura de
que los campos nombre (idusuario) y contraseña (password) no contengan caracteres potencialmente peligrosos. Además, comprueba
que la contraseña tenga al menos 8 caracteres y, por lo menos, una mayúscula, una minúscula y un dígito. Desde el formulario
se envía de forma oculta un token de sesión que servirá como protección ante accesos no autorizados. El caso más importante en
el que entra en juego es si alguien intenta acceder directamente a la página final (dashboard.php) mediante URL. En este caso
se reenvía directamente al login indicando la necesidad de iniciar sesión.
