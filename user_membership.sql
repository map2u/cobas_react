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
-- Name: user_membership; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE user_membership (
    id integer NOT NULL,
    name character varying(40) NOT NULL,
    description character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE user_membership OWNER TO jzhao;

--
-- Name: user_membership_id_seq; Type: SEQUENCE; Schema: public; Owner: jzhao
--

CREATE SEQUENCE user_membership_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE user_membership_id_seq OWNER TO jzhao;

--
-- Name: user_membership_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jzhao
--

ALTER SEQUENCE user_membership_id_seq OWNED BY user_membership.id;


--
-- Name: user_membership id; Type: DEFAULT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY user_membership ALTER COLUMN id SET DEFAULT nextval('user_membership_id_seq'::regclass);


--
-- Data for Name: user_membership; Type: TABLE DATA; Schema: public; Owner: jzhao
--

COPY user_membership (id, name, description) FROM stdin;
\.


--
-- Name: user_membership_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jzhao
--

SELECT pg_catalog.setval('user_membership_id_seq', 1, false);


--
-- Name: user_membership user_membership_pkey; Type: CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY user_membership
    ADD CONSTRAINT user_membership_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

