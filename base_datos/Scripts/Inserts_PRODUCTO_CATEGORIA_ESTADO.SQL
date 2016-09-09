--***************************************************************
--* Script: contiene las tablas ESTADO - CATEGORIA - PRODUCTO   *
--* Realizado por: Xavier Aguirre                               *
--***************************************************************

-- Inserts TABLA ESTADO (independiente) 

-- ESTADO PARA ID = 1
insert into estado values(1, 'ACTIVO');
-- ESTADO PARA ID = 2
insert into estado values(2, 'INACTIVO');
-- ESTADO PARA ID = 3
insert into estado values(3, 'TEMPORAL');

-- ======================================================================

-- Insert TABLA CATEGORIA (DEPENDIENTE)

-- CATEGORIA PARA ID = 1 
insert into categoria values(1, 'PRODUCTOS PARA CUMPLEAÑOS, BAUTIZOS, ETC', 'TORTA', 1);
-- CATEGORIA PARA ID = 2
insert into categoria values(2, 'PRODUCTOS PARA CUMPLEAÑOS, BAUTIZOS, ETC', 'CUPCAKE', 1);
-- CATEGORIA PARA ID = 3
insert into categoria values(3, 'PRODUCTOS PARA CUMPLEAÑOS, BAUTIZOS, ETC', 'CHOCOLATE', 1);
-- CATEGORIA PARA ID = 4
insert into categoria values(4, 'PRODUCTOS PARA CUMPLEAÑOS, BAUTIZOS, ETC', 'DULCES', 1);
-- CATEGORIA PARA ID = 5
insert into categoria values(5, 'PRODUCTOS PARA CUMPLEAÑOS, BAUTIZOS, ETC', 'PERSONALIZADOS', 2);

-- ======================================================================

-- Inserts TABLA PRODUCTO (DEPENDIENTE)


-- Creacion de PRODUCTO PARA ID = 1 
insert into producto values(1, 'TORTA MOJADA SAN VALENTIN', '../../images/torta1.jpg', 55.50, 'chocolate', 'vainilla', 30, 1);
-- Creacion de PRODUCTO PARA ID = 2
insert into producto values(2, 'TORTA CUMPLEAÑOS SPIDERMAN NIÑOS', '../../images/torta39.jpg', 60, 'naranja', 'manjar', 50, 1);
-- Creacion de PRODUCTO PARA ID = 3
insert into producto values(3, 'CUPCAKES MINIONS CUMPLEAÑOS NIÑOS', '../../images/cupcake2.jpg', 25.50, 'chocolate', 'fresa', 50, 2);
-- Creacion de PRODUCTO PARA ID = 4
insert into producto values(4, 'BOMBONES AMOR DULCE', '../../images/chocolate5.jpg', 30, 'chocolate', 'manjar', 15, 3);
-- Creacion de PRODUCTO PARA ID = 5
insert into producto values(5, 'DULCES DECORATIVOS DE BAUTIZO', '../../images/dulces4.jpg', 40, 'vainilla', 'naranja', 75, 4);

-- ========================================================================
