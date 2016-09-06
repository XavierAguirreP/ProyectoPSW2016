--***************************************************************
--* Script: contiene las tablas Roles - TIPO USUARIO - USUARIO  *
--* Realizado por: Santiago ARguello                            *
--***************************************************************

-- Inserts TABLA ROLES (independiente) 

-- ROL PARA TIPO USUARIO 1 -> ADMINISTRADOR ID = 1
INSERT INTO public.roles(crear, consultar, actualizar, eliminar)
    VALUES (TRUE,TRUE,TRUE,TRUE);

-- ROL PARA TIPO USUARIO 2 -> Usuario ID = 2
INSERT INTO public.roles(crear, consultar, actualizar, eliminar)
    VALUES (TRUE,TRUE,FALSE,FALSE);

-- ROL PARA TIPO USUARIO 3 -> Invitado ID = 3
INSERT INTO public.roles(crear, consultar, actualizar, eliminar)
    VALUES (FALSE,TRUE,FALSE,FALSE);

-- ======================================================================

-- Insert TABLA TIPO USUARIO

-- ID 1
INSERT INTO public.tipo_usuario(descripcion)
    VALUES ('Administrador');
-- ID 2
INSERT INTO public.tipo_usuario(descripcion)
    VALUES ('Usuario');

-- ID 3
INSERT INTO public.tipo_usuario(descripcion)
    VALUES ('Inv');

-- ======================================================================

-- Inserts TABLA USUARIO (DEPENDIENTE)


-- Creacion de Usuario tipo = ADMIN (1) rol= ADMIN (1) 
INSERT INTO public.usuario(nombre_usuario, pass, id_tipo_usuario, id_rol)
    VALUES ('MAXIMUS','1234',1,1);

-- Creacion de Usuario tipo = Usuario (2) rol= Usuario (2) 
INSERT INTO public.usuario(nombre_usuario, pass, id_tipo_usuario, id_rol)
    VALUES ('Xavier Aguirre','1234',2,2);

-- Creacion de Usuario tipo = Usuario (2) rol= Usuario (2) 
INSERT INTO public.usuario(nombre_usuario, pass, id_tipo_usuario, id_rol)
    VALUES ('OMEGA','123',2,2);

-- Creacion de Usuario tipo = Invitado (3) rol= Invitado (3) 
INSERT INTO public.usuario(nombre_usuario, pass, id_tipo_usuario, id_rol)
    VALUES ('RAMDIUM','123',3,3);

-- Creacion de Usuario tipo = ADMIN (1) rol= ADMIN (1) 
INSERT INTO public.usuario(nombre_usuario, pass, id_tipo_usuario, id_rol)
    VALUES ('Marshall','123',1,1);

-- Creacion de Usuario tipo = Usuario (2) rol= Usuario (2) 
INSERT INTO public.usuario(nombre_usuario, pass, id_tipo_usuario, id_rol)
    VALUES ('TITA','123',2,2);

-- Creacion de Usuario tipo = ADMIN (1) rol= ADMIN (1) 
INSERT INTO public.usuario(nombre_usuario, pass, id_tipo_usuario, id_rol)
    VALUES ('MEGATRON','1234',1,1);

-- ========================================================================


