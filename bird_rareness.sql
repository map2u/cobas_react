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
-- Name: bird_rareness; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE bird_rareness2 (
    id integer NOT NULL,
    rareness_name character varying(255) NOT NULL,
    code character varying(10) NOT NULL
);


--

COPY bird_rareness2 (id, rareness_name, code) FROM stdin;
1	 Common	CM
2	 Not common	NC
3	 Extremely rare	ER
\.


--
-- Name: bird_rareness_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jzhao
--


