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
-- Name: bird_period; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE bird_period (
    id integer NOT NULL,
    period_name character varying(255) NOT NULL,
    code character varying(10) NOT NULL
);


ALTER TABLE bird_period OWNER TO jzhao;

--
-- Name: bird_period_id_seq; Type: SEQUENCE; Schema: public; Owner: jzhao
--

CREATE SEQUENCE bird_period_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE bird_period_id_seq OWNER TO jzhao;

--
-- Name: bird_period_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jzhao
--

ALTER SEQUENCE bird_period_id_seq OWNED BY bird_period.id;


--
-- Name: bird_period id; Type: DEFAULT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY bird_period ALTER COLUMN id SET DEFAULT nextval('bird_period_id_seq'::regclass);


--
-- Data for Name: bird_period; Type: TABLE DATA; Schema: public; Owner: jzhao
--

COPY bird_period (id, period_name, code) FROM stdin;
\.


--
-- Name: bird_period_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jzhao
--

SELECT pg_catalog.setval('bird_period_id_seq', 1, false);


--
-- Name: bird_period bird_period_pkey; Type: CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY bird_period
    ADD CONSTRAINT bird_period_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

