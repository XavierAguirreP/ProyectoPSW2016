--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.4
-- Dumped by pg_dump version 9.5.4

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: cabecera_orden_pedido; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE cabecera_orden_pedido (
    id integer NOT NULL,
    fecha_emision date NOT NULL,
    fecha_entrega date,
    id_cliente integer,
    estado "char",
    iva double precision
);


ALTER TABLE cabecera_orden_pedido OWNER TO postgres;

--
-- Name: cabecera_orden_pedido_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cabecera_orden_pedido_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cabecera_orden_pedido_id_seq OWNER TO postgres;

--
-- Name: cabecera_orden_pedido_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cabecera_orden_pedido_id_seq OWNED BY cabecera_orden_pedido.id;


--
-- Name: categoria; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE categoria (
    id integer NOT NULL,
    descripcion character varying NOT NULL,
    nombre character varying NOT NULL,
    id_estado integer NOT NULL
);


ALTER TABLE categoria OWNER TO postgres;

--
-- Name: categoria_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE categoria_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE categoria_id_seq OWNER TO postgres;

--
-- Name: categoria_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE categoria_id_seq OWNED BY categoria.id;


--
-- Name: cliente; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE cliente (
    id integer NOT NULL,
    correo_electronico character varying NOT NULL,
    id_estrato_social integer NOT NULL,
    id_domicilio integer NOT NULL,
    id_telefono integer NOT NULL,
    id_estado integer NOT NULL
);


ALTER TABLE cliente OWNER TO postgres;

--
-- Name: cliente_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cliente_id_seq
    START WITH 1
    INCREMENT BY 1
    MINVALUE 0
    NO MAXVALUE
    CACHE 1;


ALTER TABLE cliente_id_seq OWNER TO postgres;

--
-- Name: cliente_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cliente_id_seq OWNED BY cliente.id;


--
-- Name: det_orden_pedido; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE det_orden_pedido (
    id_cabecera_orden integer NOT NULL,
    linea integer NOT NULL,
    cantidad integer,
    id_producto integer,
    subtotal double precision
);


ALTER TABLE det_orden_pedido OWNER TO postgres;

--
-- Name: det_orden_pedido_linea_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE det_orden_pedido_linea_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE det_orden_pedido_linea_seq OWNER TO postgres;

--
-- Name: det_orden_pedido_linea_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE det_orden_pedido_linea_seq OWNED BY det_orden_pedido.linea;


--
-- Name: domicilio; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE domicilio (
    id integer NOT NULL,
    direccion_descriptiva character varying(50) NOT NULL,
    calle_principal character varying(20),
    calle_secundaria character varying(20),
    numeracion_casa integer NOT NULL
);


ALTER TABLE domicilio OWNER TO postgres;

--
-- Name: domicilio_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE domicilio_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE domicilio_id_seq OWNER TO postgres;

--
-- Name: domicilio_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE domicilio_id_seq OWNED BY domicilio.id;


--
-- Name: estado; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE estado (
    id integer NOT NULL,
    descripcion character varying(15) NOT NULL
);


ALTER TABLE estado OWNER TO postgres;

--
-- Name: estado_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE estado_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE estado_id_seq OWNER TO postgres;

--
-- Name: estado_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE estado_id_seq OWNED BY estado.id;


--
-- Name: estrato_social; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE estrato_social (
    id integer NOT NULL,
    descripcion character varying(30) NOT NULL
);


ALTER TABLE estrato_social OWNER TO postgres;

--
-- Name: estrato_social_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE estrato_social_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE estrato_social_id_seq OWNER TO postgres;

--
-- Name: estrato_social_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE estrato_social_id_seq OWNED BY estrato_social.id;


--
-- Name: evento; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE evento (
    id integer NOT NULL,
    tipo_evento character varying(25) NOT NULL,
    nombre_tematica character varying(30),
    descripcion character varying(50),
    fecha_evento date,
    precio double precision,
    num_personas integer
);


ALTER TABLE evento OWNER TO postgres;

--
-- Name: evento_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE evento_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE evento_id_seq OWNER TO postgres;

--
-- Name: evento_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE evento_id_seq OWNED BY evento.id;


--
-- Name: historial_order; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE historial_order (
    id_cliente integer NOT NULL,
    linea integer NOT NULL,
    id_cabecera_orden integer NOT NULL
);


ALTER TABLE historial_order OWNER TO postgres;

--
-- Name: historial_order_linea_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE historial_order_linea_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE historial_order_linea_seq OWNER TO postgres;

--
-- Name: historial_order_linea_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE historial_order_linea_seq OWNED BY historial_order.linea;


--
-- Name: persona; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE persona (
    id integer NOT NULL,
    cedula_identidad character varying(10) NOT NULL,
    nombres character varying(30) NOT NULL,
    apellido_paterno character varying(15) NOT NULL,
    apellido_materno character varying(15) NOT NULL,
    fecha_nacimiento date NOT NULL,
    lugar_nacimiento character varying(30) NOT NULL,
    sexo "char" NOT NULL,
    estado_civil "char" NOT NULL
);


ALTER TABLE persona OWNER TO postgres;

--
-- Name: persona_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE persona_id_seq
    START WITH 1
    INCREMENT BY 1
    MINVALUE 0
    NO MAXVALUE
    CACHE 1;


ALTER TABLE persona_id_seq OWNER TO postgres;

--
-- Name: persona_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE persona_id_seq OWNED BY persona.id;


--
-- Name: producto; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE producto (
    id integer NOT NULL,
    descripcion character varying NOT NULL,
    foto character varying NOT NULL,
    precio double precision NOT NULL,
    sabor_masa character varying NOT NULL,
    sabor_relleno character varying NOT NULL,
    porcion integer NOT NULL,
    id_categoria integer NOT NULL
);


ALTER TABLE producto OWNER TO postgres;

--
-- Name: producto_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE producto_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE producto_id_seq OWNER TO postgres;

--
-- Name: producto_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE producto_id_seq OWNED BY producto.id;


--
-- Name: roles; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE roles (
    id integer NOT NULL,
    crear boolean,
    consultar boolean DEFAULT true NOT NULL,
    actualizar boolean,
    eliminar boolean
);


ALTER TABLE roles OWNER TO postgres;

--
-- Name: roles_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE roles_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE roles_id_seq OWNER TO postgres;

--
-- Name: roles_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE roles_id_seq OWNED BY roles.id;


--
-- Name: telefono; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE telefono (
    id integer NOT NULL,
    numero character varying(10) NOT NULL,
    id_estado integer NOT NULL
);


ALTER TABLE telefono OWNER TO postgres;

--
-- Name: telefono_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE telefono_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE telefono_id_seq OWNER TO postgres;

--
-- Name: telefono_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE telefono_id_seq OWNED BY telefono.id;


--
-- Name: tipo_usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE tipo_usuario (
    id integer NOT NULL,
    descripcion character varying(15) NOT NULL
);


ALTER TABLE tipo_usuario OWNER TO postgres;

--
-- Name: tipo_usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE tipo_usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tipo_usuario_id_seq OWNER TO postgres;

--
-- Name: tipo_usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE tipo_usuario_id_seq OWNED BY tipo_usuario.id;


--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE usuario (
    id integer NOT NULL,
    nombre_usuario character varying NOT NULL,
    pass character varying NOT NULL,
    id_tipo_usuario integer NOT NULL,
    id_rol integer NOT NULL
);


ALTER TABLE usuario OWNER TO postgres;

--
-- Name: usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuario_id_seq OWNER TO postgres;

--
-- Name: usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuario_id_seq OWNED BY usuario.id;


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cabecera_orden_pedido ALTER COLUMN id SET DEFAULT nextval('cabecera_orden_pedido_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY categoria ALTER COLUMN id SET DEFAULT nextval('categoria_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente ALTER COLUMN id SET DEFAULT nextval('cliente_id_seq'::regclass);


--
-- Name: linea; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY det_orden_pedido ALTER COLUMN linea SET DEFAULT nextval('det_orden_pedido_linea_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY domicilio ALTER COLUMN id SET DEFAULT nextval('domicilio_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY estado ALTER COLUMN id SET DEFAULT nextval('estado_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY estrato_social ALTER COLUMN id SET DEFAULT nextval('estrato_social_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY evento ALTER COLUMN id SET DEFAULT nextval('evento_id_seq'::regclass);


--
-- Name: linea; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY historial_order ALTER COLUMN linea SET DEFAULT nextval('historial_order_linea_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY persona ALTER COLUMN id SET DEFAULT nextval('persona_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY producto ALTER COLUMN id SET DEFAULT nextval('producto_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY roles ALTER COLUMN id SET DEFAULT nextval('roles_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY telefono ALTER COLUMN id SET DEFAULT nextval('telefono_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_usuario ALTER COLUMN id SET DEFAULT nextval('tipo_usuario_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario ALTER COLUMN id SET DEFAULT nextval('usuario_id_seq'::regclass);


--
-- Data for Name: cabecera_orden_pedido; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cabecera_orden_pedido (id, fecha_emision, fecha_entrega, id_cliente, estado, iva) FROM stdin;
1	2016-09-10	2016-09-11	1	c	14
\.


--
-- Name: cabecera_orden_pedido_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cabecera_orden_pedido_id_seq', 1, false);


--
-- Data for Name: categoria; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY categoria (id, descripcion, nombre, id_estado) FROM stdin;
1	PRODUCTOS PARA CUMPLEAÑOS, BAUTIZOS, ETC	TORTA	1
2	PRODUCTOS PARA CUMPLEAÑOS, BAUTIZOS, ETC	CUPCAKE	1
3	PRODUCTOS PARA CUMPLEAÑOS, BAUTIZOS, ETC	CHOCOLATE	1
4	PRODUCTOS PARA CUMPLEAÑOS, BAUTIZOS, ETC	DULCES	1
5	PRODUCTOS PARA CUMPLEAÑOS, BAUTIZOS, ETC	PERSONALIZADOS	2
\.


--
-- Name: categoria_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('categoria_id_seq', 1, false);


--
-- Data for Name: cliente; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cliente (id, correo_electronico, id_estrato_social, id_domicilio, id_telefono, id_estado) FROM stdin;
1	moni@hotmail.com	1	1	1	1
2	monica@hotmail.com	1	1	1	1
\.


--
-- Name: cliente_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cliente_id_seq', 2, true);


--
-- Data for Name: det_orden_pedido; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY det_orden_pedido (id_cabecera_orden, linea, cantidad, id_producto, subtotal) FROM stdin;
1	1	1	1	24
\.


--
-- Name: det_orden_pedido_linea_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('det_orden_pedido_linea_seq', 1, false);


--
-- Data for Name: domicilio; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY domicilio (id, direccion_descriptiva, calle_principal, calle_secundaria, numeracion_casa) FROM stdin;
1	Urb. Castilla mz 15 villa 21	callejon 5	callejon 10	1521
\.


--
-- Name: domicilio_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('domicilio_id_seq', 1, false);


--
-- Data for Name: estado; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY estado (id, descripcion) FROM stdin;
1	ACTIVO
2	INACTIVO
3	TEMPORAL
5	MASTER
\.


--
-- Name: estado_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('estado_id_seq', 5, true);


--
-- Data for Name: estrato_social; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY estrato_social (id, descripcion) FROM stdin;
1	vip
2	normal
\.


--
-- Name: estrato_social_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('estrato_social_id_seq', 1, false);


--
-- Data for Name: evento; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY evento (id, tipo_evento, nombre_tematica, descripcion, fecha_evento, precio, num_personas) FROM stdin;
1	cumpleaños	minions	2 tortas 50 cupcakes	2016-05-03	550	80
2	quinceañeras	dulces 15	3 tortas 500 bocaditos sal 100 boc dulce	2016-10-15	1100	100
3	matrimonios	boda de plata	2 tortas 250 bocad dulce 250 bocad sal	2017-01-05	1000	60
4	bautizos	niño	1 tortas 100 cupcakes	2016-11-22	50	850
5	comunion	religioso	3 tortas 100 bocad sal 100 bocad dulce	2016-12-25	700	90
\.


--
-- Name: evento_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('evento_id_seq', 1, false);


--
-- Data for Name: historial_order; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY historial_order (id_cliente, linea, id_cabecera_orden) FROM stdin;
1	1	1
\.


--
-- Name: historial_order_linea_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('historial_order_linea_seq', 1, false);


--
-- Data for Name: persona; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY persona (id, cedula_identidad, nombres, apellido_paterno, apellido_materno, fecha_nacimiento, lugar_nacimiento, sexo, estado_civil) FROM stdin;
1	0927168955	monica andrea	chavez	cumbe	1990-11-26	guayaquil	f	c
2	0917826588	david fermando	johnston	chavez	1970-07-22	quito	m	s
3	0300675014	Nestor Eduardo	chavez	chavez	1960-04-19	cuenca	m	d
\.


--
-- Name: persona_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('persona_id_seq', 2, true);


--
-- Data for Name: producto; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY producto (id, descripcion, foto, precio, sabor_masa, sabor_relleno, porcion, id_categoria) FROM stdin;
1	TORTA MOJADA SAN VALENTIN	../../images/torta1.jpg	55.5	chocolate	vainilla	30	1
2	TORTA CUMPLEAÑOS SPIDERMAN NIÑOS	../../images/torta39.jpg	60	naranja	manjar	50	1
3	CUPCAKES MINIONS CUMPLEAÑOS NIÑOS	../../images/cupcake2.jpg	25.5	chocolate	fresa	50	2
4	BOMBONES AMOR DULCE	../../images/chocolate5.jpg	30	chocolate	manjar	15	3
5	DULCES DECORATIVOS DE BAUTIZO	../../images/dulces4.jpg	40	vainilla	naranja	75	4
\.


--
-- Name: producto_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('producto_id_seq', 3, true);


--
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY roles (id, crear, consultar, actualizar, eliminar) FROM stdin;
3	f	t	f	f
2	t	t	f	f
1	t	t	t	t
\.


--
-- Name: roles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('roles_id_seq', 9, true);


--
-- Data for Name: telefono; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY telefono (id, numero, id_estado) FROM stdin;
1	4620184	1
2	3344585	2
3	4578451	3
4	1234567	1
5	7845125	1
\.


--
-- Name: telefono_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('telefono_id_seq', 1, false);


--
-- Data for Name: tipo_usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY tipo_usuario (id, descripcion) FROM stdin;
3	Inv
2	Usuario
1	Administrador
\.


--
-- Name: tipo_usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('tipo_usuario_id_seq', 5, true);


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuario (id, nombre_usuario, pass, id_tipo_usuario, id_rol) FROM stdin;
3	OMEGA	123	2	2
4	RAMDIUM	123	3	3
1	MAXIMUS	1234	1	1
5	Marshall	123	1	1
2	Xavier Aguirre	1234	2	2
7	TITA	1234	2	2
12	PRUEBA1	123	2	2
13	SPORADE	123	2	2
14	XXXXXXX	1234	2	2
15	maria	123	2	2
16	lol	123	2	2
17	lol	123	1	1
18	lol2	123	2	2
19	lol2	123	2	2
20	uyu	123	1	1
21	Carls	123	1	1
\.


--
-- Name: usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuario_id_seq', 21, true);


--
-- Name: PK_CABECERA_ORDEN; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cabecera_orden_pedido
    ADD CONSTRAINT "PK_CABECERA_ORDEN" PRIMARY KEY (id);


--
-- Name: PK_CATEGORIA; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY categoria
    ADD CONSTRAINT "PK_CATEGORIA" PRIMARY KEY (id);


--
-- Name: PK_CLIENTE; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT "PK_CLIENTE" PRIMARY KEY (id);


--
-- Name: PK_DET_CABECERA_PEDIDO; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY det_orden_pedido
    ADD CONSTRAINT "PK_DET_CABECERA_PEDIDO" PRIMARY KEY (id_cabecera_orden, linea);


--
-- Name: PK_DOMICILIO; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY domicilio
    ADD CONSTRAINT "PK_DOMICILIO" PRIMARY KEY (id);


--
-- Name: PK_ESTADO; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY estado
    ADD CONSTRAINT "PK_ESTADO" PRIMARY KEY (id);


--
-- Name: PK_ESTRATO_SOCIAL; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY estrato_social
    ADD CONSTRAINT "PK_ESTRATO_SOCIAL" PRIMARY KEY (id);


--
-- Name: PK_EVENTO; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY evento
    ADD CONSTRAINT "PK_EVENTO" PRIMARY KEY (id);


--
-- Name: PK_HISTORIAL_ORDER; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY historial_order
    ADD CONSTRAINT "PK_HISTORIAL_ORDER" PRIMARY KEY (id_cliente, linea);


--
-- Name: PK_PERSONA; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY persona
    ADD CONSTRAINT "PK_PERSONA" PRIMARY KEY (id);


--
-- Name: PK_PRODUCTO; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY producto
    ADD CONSTRAINT "PK_PRODUCTO" PRIMARY KEY (id);


--
-- Name: PK_ROLES; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY roles
    ADD CONSTRAINT "PK_ROLES" PRIMARY KEY (id);


--
-- Name: PK_TELEFONO; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY telefono
    ADD CONSTRAINT "PK_TELEFONO" PRIMARY KEY (id);


--
-- Name: PK_TIPO_USUARIO; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY tipo_usuario
    ADD CONSTRAINT "PK_TIPO_USUARIO" PRIMARY KEY (id);


--
-- Name: PK_USUARIO; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT "PK_USUARIO" PRIMARY KEY (id);


--
-- Name: FK_CABECERA_ORDEN; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY det_orden_pedido
    ADD CONSTRAINT "FK_CABECERA_ORDEN" FOREIGN KEY (id_cabecera_orden) REFERENCES cabecera_orden_pedido(id);


--
-- Name: FK_CABECERA_ORDEN_HISTORIAL; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY historial_order
    ADD CONSTRAINT "FK_CABECERA_ORDEN_HISTORIAL" FOREIGN KEY (id_cabecera_orden) REFERENCES cabecera_orden_pedido(id);


--
-- Name: FK_CATEGORIA; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY producto
    ADD CONSTRAINT "FK_CATEGORIA" FOREIGN KEY (id_categoria) REFERENCES categoria(id);


--
-- Name: FK_CLIENTE; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY historial_order
    ADD CONSTRAINT "FK_CLIENTE" FOREIGN KEY (id_cliente) REFERENCES cliente(id);


--
-- Name: FK_CLIENTE_1_1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT "FK_CLIENTE_1_1" FOREIGN KEY (id) REFERENCES persona(id);


--
-- Name: FK_DOMICILIO; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT "FK_DOMICILIO" FOREIGN KEY (id_domicilio) REFERENCES domicilio(id);


--
-- Name: FK_ESTADO; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY categoria
    ADD CONSTRAINT "FK_ESTADO" FOREIGN KEY (id_estado) REFERENCES estado(id);


--
-- Name: FK_ESTADO; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY telefono
    ADD CONSTRAINT "FK_ESTADO" FOREIGN KEY (id_estado) REFERENCES estado(id);


--
-- Name: FK_ESTADO; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT "FK_ESTADO" FOREIGN KEY (id_estado) REFERENCES estado(id);


--
-- Name: FK_ESTRATO_SOCIAL; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT "FK_ESTRATO_SOCIAL" FOREIGN KEY (id_estrato_social) REFERENCES estrato_social(id);


--
-- Name: FK_ID_TIPO_USUARIO; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT "FK_ID_TIPO_USUARIO" FOREIGN KEY (id_tipo_usuario) REFERENCES tipo_usuario(id);


--
-- Name: FK_PRODUCTO; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY det_orden_pedido
    ADD CONSTRAINT "FK_PRODUCTO" FOREIGN KEY (id_producto) REFERENCES producto(id);


--
-- Name: FK_ROL; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT "FK_ROL" FOREIGN KEY (id_rol) REFERENCES roles(id);


--
-- Name: FK_TELEFONO; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cliente
    ADD CONSTRAINT "FK_TELEFONO" FOREIGN KEY (id_telefono) REFERENCES telefono(id);


--
-- Name: FK__CLIENTE; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY cabecera_orden_pedido
    ADD CONSTRAINT "FK__CLIENTE" FOREIGN KEY (id_cliente) REFERENCES cliente(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

