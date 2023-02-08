# Tienda Online 🛒
Proyecto de tienda online en PHP

Empezamos con la creación de la base de datos, con las siguientes relaciones:

La tabla "productos" y la tabla "categorias" tienen una relación de uno a muchos. Cada producto pertenece a una categoría específica, pero una categoría puede tener muchos productos. La relación se establece mediante una clave foránea en la tabla "productos" llamada "categoria_id", que hace referencia a la clave primaria de la tabla "categorias".

La tabla "clientes" y la tabla "pedidos" tienen una relación de uno a muchos. Cada cliente puede tener muchos pedidos, pero cada pedido pertenece a un solo cliente. La relación se establece mediante una clave foránea en la tabla "pedidos" llamada "cliente_id", que hace referencia a la clave primaria de la tabla "clientes".

La tabla "pedidos" y la tabla "detalles_pedido" tienen una relación de uno a muchos. Cada pedido puede tener muchos detalles de pedido, pero cada detalle de pedido pertenece a un solo pedido. La relación se establece mediante una clave foránea en la tabla "detalles_pedido" llamada "pedido_id", que hace referencia a la clave primaria de la tabla "pedidos".

La tabla "productos" y la tabla "detalles_pedido" también tienen una relación de uno a muchos. Cada producto puede aparecer en muchos detalles de pedido, pero cada detalle de pedido corresponde a un solo producto. La relación se establece mediante una clave foránea en la tabla "detalles_pedido" llamada "producto_id", que hace referencia a la clave primaria de la tabla "productos".

