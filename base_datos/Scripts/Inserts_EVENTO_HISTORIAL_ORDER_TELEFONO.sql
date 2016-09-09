-- Inserts TABLA Evento 

INSERT INTO public.evento(
            id, tipo_evento, nombre_tematica, descripcion, fecha_evento, 
            precio, num_personas)
    VALUES ('1','cumpleaños','minions','2 tortas 50 cupcakes','03-05-2016','550','80');

INSERT INTO public.evento(
            id, tipo_evento, nombre_tematica, descripcion, fecha_evento, 
            precio, num_personas)
    VALUES ('2','quinceañeras','dulces 15','3 tortas 500 bocaditos sal 100 boc dulce','15-10-2016','1100','100');

INSERT INTO public.evento(
            id, tipo_evento, nombre_tematica, descripcion, fecha_evento, 
            precio, num_personas)
    VALUES ('3','matrimonios','boda de plata','2 tortas 250 bocad dulce 250 bocad sal','05-01-2017','1000','60');

INSERT INTO public.evento(
            id, tipo_evento, nombre_tematica, descripcion, fecha_evento, 
            precio, num_personas)
    VALUES ('4','bautizos','niño','1 tortas 100 cupcakes','22-11-2016','50','850');

INSERT INTO public.evento(
            id, tipo_evento, nombre_tematica, descripcion, fecha_evento, 
            precio, num_personas)
    VALUES ('5','comunion','religioso','3 tortas 100 bocad sal 100 bocad dulce','25-12-2016','700','90');


-- Inserts TABLA Historial_order

INSERT INTO public.historial_order(
            id_cliente, linea, id_cabecera_orden)
    VALUES ('1','1',1);

INSERT INTO public.historial_order(
            id_cliente, linea, id_cabecera_orden)
    VALUES ('2','2',2);

INSERT INTO public.historial_order(
            id_cliente, linea, id_cabecera_orden)
    VALUES ('3','3',3);

INSERT INTO public.historial_order(
            id_cliente, linea, id_cabecera_orden)
    VALUES ('4','4',4);

INSERT INTO public.historial_order(
            id_cliente, linea, id_cabecera_orden)
    VALUES ('5','5',5);


-- Inserts TABLA telefono

INSERT INTO public.telefono(
            id, numero, id_estado)
    VALUES ('1','4620184',1);

INSERT INTO public.telefono(
            id, numero, id_estado)
    VALUES ('2','3344585',2);

INSERT INTO public.telefono(
            id, numero, id_estado)
    VALUES ('3','4578451',3);

INSERT INTO public.telefono(
            id, numero, id_estado)
    VALUES ('4','1234567',4);

INSERT INTO public.telefono(
            id, numero, id_estado)
    VALUES ('5','7845125',5);














