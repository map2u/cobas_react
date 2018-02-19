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
-- Name: bird_periodstatus; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE bird_periodstatus (
    id integer NOT NULL,
    status_name character varying(255) NOT NULL,
    code character varying(10) NOT NULL
);


ALTER TABLE bird_periodstatus OWNER TO jzhao;

--
-- Name: bird_periodstatus_id_seq; Type: SEQUENCE; Schema: public; Owner: jzhao
--

CREATE SEQUENCE bird_periodstatus_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE bird_periodstatus_id_seq OWNER TO jzhao;

--
-- Name: bird_periodstatus_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jzhao
--

ALTER SEQUENCE bird_periodstatus_id_seq OWNED BY bird_periodstatus.id;


--
-- Name: bird_periodstatus id; Type: DEFAULT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY bird_periodstatus ALTER COLUMN id SET DEFAULT nextval('bird_periodstatus_id_seq'::regclass);


--
-- Data for Name: bird_periodstatus; Type: TABLE DATA; Schema: public; Owner: jzhao
--

COPY bird_periodstatus (id, status_name, code) FROM stdin;
\.


--
-- Name: bird_periodstatus_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jzhao
--

SELECT pg_catalog.setval('bird_periodstatus_id_seq', 1, false);


--
-- Name: bird_periodstatus bird_periodstatus_pkey; Type: CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY bird_periodstatus
    ADD CONSTRAINT bird_periodstatus_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

