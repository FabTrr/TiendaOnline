# Tienda Online 馃洅
Proyecto de tienda online en PHP

Empezamos con la creaci贸n de la base de datos, con las siguientes relaciones:

La tabla "productos" y la tabla "categorias" tienen una relaci贸n de uno a muchos. Cada producto pertenece a una categor铆a espec铆fica, pero una categor铆a puede tener muchos productos. La relaci贸n se establece mediante una clave for谩nea en la tabla "productos" llamada "categoria_id", que hace referencia a la clave primaria de la tabla "categorias".

La tabla "clientes" y la tabla "pedidos" tienen una relaci贸n de uno a muchos. Cada cliente puede tener muchos pedidos, pero cada pedido pertenece a un solo cliente. La relaci贸n se establece mediante una clave for谩nea en la tabla "pedidos" llamada "cliente_id", que hace referencia a la clave primaria de la tabla "clientes".

La tabla "pedidos" y la tabla "detalles_pedido" tienen una relaci贸n de uno a muchos. Cada pedido puede tener muchos detalles de pedido, pero cada detalle de pedido pertenece a un solo pedido. La relaci贸n se establece mediante una clave for谩nea en la tabla "detalles_pedido" llamada "pedido_id", que hace referencia a la clave primaria de la tabla "pedidos".

La tabla "productos" y la tabla "detalles_pedido" tambi茅n tienen una relaci贸n de uno a muchos. Cada producto puede aparecer en muchos detalles de pedido, pero cada detalle de pedido corresponde a un solo producto. La relaci贸n se establece mediante una clave for谩nea en la tabla "detalles_pedido" llamada "producto_id", que hace referencia a la clave primaria de la tabla "productos".

