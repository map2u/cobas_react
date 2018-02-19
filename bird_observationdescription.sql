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
-- Name: bird_observationdescription; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE bird_observationdescription2 (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    code character varying(5) NOT NULL,
    description text
);



--
-- Data for Name: bird_observationdescription; Type: TABLE DATA; Schema: public; Owner: jzhao
--

COPY bird_observationdescription2 (id, name, code, description) FROM stdin;
1	banded/captured	b	\N
2	courtship/copulation	c	\N
3	distraction display l	d	\N
4	encountered	e	\N
5	carrying food or fecal sac	f	\N
6	carrying nest material	m	\N
7	current year	n	\N
8	flyover	o	\N
9	song/drumming	s	\N
10	other territorial behavior	t	\N
\.


