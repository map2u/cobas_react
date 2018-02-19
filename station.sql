--
-- PostgreSQL database dump
--

-- Dumped from database version 10.1
-- Dumped by pg_dump version 10.1

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: station; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE station2 (
    id integer ,
    station_name character varying(40) DEFAULT NULL::character varying,
    code character varying(40) DEFAULT NULL::character varying,
    geometry_type character varying(40) DEFAULT NULL::character varying,
    the_geom geometry(Geometry,4326),
    radius numeric(10,0) DEFAULT NULL::numeric,
    intersection text,
    description text,
    created_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    updated_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    lng double precision,
    lat double precision,
    user_id uuid
);


--
-- Data for Name: station; Type: TABLE DATA; Schema: public; Owner: jzhao
--

COPY station2 (id, station_name, code, geometry_type, the_geom, radius, intersection, description, created_at, updated_at, lng, lat, user_id) FROM stdin;
1	 La Escondida,Quizarrá	LAES	\N	0101000020E61000008CF678211DE654C0685DA3E540C72240	\N	\N	\N	2014-01-22 15:18:20	2014-01-22 15:18:23	9.38916700000000048	-83.5955280000000016	\N
2	 Los Cusingos Bird Sanctuary, Quizarrá	CUSI	\N	0101000020E61000008FC2F5285CE754C0B169A510C8BD2240	\N	\N	\N	2014-01-22 15:18:20	2014-01-22 15:18:25	9.37066699999999919	-83.6149999999999949	\N
3	 Jose Cruz Farm	JOSE	\N	0101000020E61000009FCBD42478E854C061E28FA2CEB42240	\N	\N	\N	2014-01-22 15:18:20	2014-01-22 15:18:27	9.35313900000000054	-83.6323330000000027	\N
4	 Marvin Arias Farm	MARV	\N	0101000020E6100000D993C0E61CE754C0D9CEF753E3B52240	\N	\N	\N	2014-01-22 15:18:20	2014-01-22 15:18:30	9.35524999999999984	-83.6111389999999943	\N
5	 Granotico, Coopeagri	COOP	\N	0101000020E6100000B037312427E854C0E59997C3EEAB2240	\N	\N	\N	2014-01-22 15:18:20	2014-01-22 15:18:32	9.33580599999999983	-83.6273889999999938	\N
6	 Las Nubes Biological Reserve	NUBE	\N	0101000020E61000003DBB7CEBC3E554C06347E350BFAB2240	\N	\N	\N	2014-01-22 15:18:20	2014-01-22 15:18:35	9.33544400000000074	-83.590083000000007	\N
7	 Squirrel Monkey Reserve, Quizarrá	LUIS	\N	0101000020E610000011346612F5E754C09415C3D501A82240	\N	\N	\N	2014-01-22 15:18:20	2014-01-22 15:18:37	9.32813900000000018	-83.6243329999999929	\N
\.

