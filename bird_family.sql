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
-- Name: bird_family; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE bird_family2 (
    id integer NOT NULL,
    family_name character varying(255) NOT NULL,
    description text
);



COPY bird_family2 (id, family_name, description) FROM stdin;
\.


--
-- Name: bird_family_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jzhao
--

SELECT pg_catalog.setval('bird_family_id_seq', 1, false);


--
-- Name: bird_family bird_family_pkey; Type: CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY bird_family
    ADD CONSTRAINT bird_family_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

