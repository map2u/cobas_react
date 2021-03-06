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
-- Name: bird_breedingstatus; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE bird_breedingstatus2 (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    code character varying(5) NOT NULL,
    description text
);


--
-- Name: bird_breedingstatus_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jzhao
--


--
--

COPY bird_breedingstatus2 (id, name, code, description) FROM stdin;
1	Confirmed Breeder	C	\N
2	Probable Breeder	P	\N
3	Observed	O	\N
4	Absent	A	\N
\.


