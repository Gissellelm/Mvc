# Mvc
Modelo vista Controlador

La página cuenta con un inicio de sesión, ingresas la cuenta de admin y nos muestra la interfaz con un formulario de registro de productos con los siguientes campos: 
* Nombre
* Cantidad
* Precio
Despues encontramos un botón con el texto ¨REGISTRAR¨

Una Barra de busqueda, y una tabla de registros, en donde encontramos las acciones de ´MODIFICAR´ y ´ELIMINAR´.
En el código del index tenemos solamente un Header que nos redireccionará a el controlador del inicio de sesión (controladori.php),
En el controlador A, encontraremos las acciones de los botones,(registrar,modificar,eliminar) y En el controladorC la acción de buscar.
(Los controladores son el cerebro ya que este conecta las vistas y los modelos)

Despues encontramos la carpetas de los Modelos
En estos podemos encontrar la funcionalidad del sistema o bien las instrucciones que se quieren ejecutar.

y en las vistas es lo que tenemos para que el cliente vea, esta recibe los datos y los muestra al usuario.

las vistas que tiene nuestro proyecto son las de cliente y la de admin.
En la de el cliente solo tenemos la opción de visualizar los datos registrados por el admin, en esta vista nos muestra  los prcios y el producto.
Y en la de admin tenemos la opción de ingresar los datos y registrarlos en una bd;
los datos ingresados se muestran en una tabla con las opciones de que se eliminen los registros o se modifiquenm cada acción con su respectivo botón.

Todo esto traído desde una bd.
