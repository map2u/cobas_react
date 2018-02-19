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
-- Name: birds; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE birds (
    id integer NOT NULL,
    station_id integer,
    family_id integer,
    scientific_name character varying(255) NOT NULL,
    common_name character varying(255) DEFAULT NULL::character varying,
    iucn character varying(25) DEFAULT NULL::character varying,
    season character varying(255) DEFAULT NULL::character varying,
    distribution character varying(255) DEFAULT NULL::character varying,
    rareness text,
    code text,
    website_url character varying(255) DEFAULT NULL::character varying,
    image_tip character varying(125) DEFAULT NULL::character varying,
    images text,
    videos text,
    audios text,
    enabled boolean,
    lng numeric(10,0) DEFAULT NULL::numeric,
    lat numeric(10,0) DEFAULT NULL::numeric,
    the_geom geometry,
    created_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    updated_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    user_id uuid
);


ALTER TABLE birds OWNER TO jzhao;

--
-- Name: COLUMN birds.the_geom; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN birds.the_geom IS '(DC2Type:Geometry)';


--
-- Name: birds_id_seq1; Type: SEQUENCE; Schema: public; Owner: jzhao
--

CREATE SEQUENCE birds_id_seq1
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE birds_id_seq1 OWNER TO jzhao;

--
-- Name: birds_id_seq1; Type: SEQUENCE OWNED BY; Schema: public; Owner: jzhao
--

ALTER SEQUENCE birds_id_seq1 OWNED BY birds.id;


--
-- Name: birds id; Type: DEFAULT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY birds ALTER COLUMN id SET DEFAULT nextval('birds_id_seq1'::regclass);


--
-- Data for Name: birds; Type: TABLE DATA; Schema: public; Owner: jzhao
--

COPY birds (id, station_id, family_id, scientific_name, common_name, iucn, season, distribution, rareness, code, website_url, image_tip, images, videos, audios, enabled, lng, lat, the_geom, created_at, updated_at, user_id) FROM stdin;
\.


--
-- Name: birds_id_seq1; Type: SEQUENCE SET; Schema: public; Owner: jzhao
--

SELECT pg_catalog.setval('birds_id_seq1', 1, false);


--
-- Name: birds birds_pkey; Type: CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY birds
    ADD CONSTRAINT birds_pkey PRIMARY KEY (id);


--
-- Name: idx_fc1659a221bdb235; Type: INDEX; Schema: public; Owner: jzhao
--

CREATE INDEX idx_fc1659a221bdb235 ON birds USING btree (station_id);


--
-- Name: idx_fc1659a2a76ed395; Type: INDEX; Schema: public; Owner: jzhao
--

CREATE INDEX idx_fc1659a2a76ed395 ON birds USING btree (user_id);


--
-- Name: idx_fc1659a2c35e566a; Type: INDEX; Schema: public; Owner: jzhao
--

CREATE INDEX idx_fc1659a2c35e566a ON birds USING btree (family_id);


--
-- Name: birds fk_fc1659a221bdb235; Type: FK CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY birds
    ADD CONSTRAINT fk_fc1659a221bdb235 FOREIGN KEY (station_id) REFERENCES station(id);


--
-- Name: birds fk_fc1659a2a76ed395; Type: FK CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY birds
    ADD CONSTRAINT fk_fc1659a2a76ed395 FOREIGN KEY (user_id) REFERENCES fos_user_user(id);


--
-- Name: birds fk_fc1659a2c35e566a; Type: FK CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY birds
    ADD CONSTRAINT fk_fc1659a2c35e566a FOREIGN KEY (family_id) REFERENCES bird_family(id);


--
-- PostgreSQL database dump complete
--

