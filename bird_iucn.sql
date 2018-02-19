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
-- Name: bird_iucn; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE bird_iucn2 (
    id integer NOT NULL,
    iucn_name character varying(255) NOT NULL,
    code character varying(10) NOT NULL
);



--
-- Name: bird_iucn_id_seq; Type: SEQUENCE; Schema: public; Owner: jzhao
--


--
-- Name: bird_iucn_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jzhao
--



--
-- Name: bird_iucn id; Type: DEFAULT; Schema: public; Owner: jzhao
--



--
-- Data for Name: bird_iucn; Type: TABLE DATA; Schema: public; Owner: jzhao
--

COPY bird_iucn2 (id, iucn_name, code) FROM stdin;
1	 Least Concern	LC
2	 Near Threatened	NT
3	 Vulnerable	VU
4	 Endangered	EN
5	 Critically Endangered	CR
6	 Extinct in the Wild	EW
7	 Extinct	EX
\.

