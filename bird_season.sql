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
-- Name: bird_season; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE bird_season2 (
    id integer NOT NULL,
    season_name character varying(255) NOT NULL,
    code character varying(10) NOT NULL
);


--
-- Data for Name: bird_season; Type: TABLE DATA; Schema: public; Owner: jzhao
--

COPY bird_season2 (id, season_name, code) FROM stdin;
1	 Rainy	RA
2	 Dry	DR
3	 Year Round	YR
\.


