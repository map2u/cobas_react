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
-- Name: bird_distribution; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE bird_distribution2 (
    id integer NOT NULL,
    distribution_name character varying(255) NOT NULL,
    code character varying(10) NOT NULL
);


--
-- Name: bird_distribution_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jzhao
--

--
-- Name: bird_distribution id; Type: DEFAULT; Schema: public; Owner: jzhao
--

COPY bird_distribution2 (id, distribution_name, code) FROM stdin;
1	 Endemic	ED
2	 Costa Rica Only	CO
3	 Central America	CA
4	 South and Central America	SA
5	 Resident	RS
6	 Migratory	MG
\.


