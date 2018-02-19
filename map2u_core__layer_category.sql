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
-- Name: map2u_core__layer_category; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE map2u_core__layer_category (
    id uuid NOT NULL,
    user_uuid uuid,
    parent_id uuid,
    "position" integer DEFAULT 0,
    name character varying(250) NOT NULL,
    slug character varying(250) DEFAULT NULL::character varying,
    enabled boolean DEFAULT false NOT NULL,
    public boolean DEFAULT false NOT NULL,
    multiple boolean DEFAULT true,
    created_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    updated_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone
);


ALTER TABLE map2u_core__layer_category OWNER TO jzhao;

--
-- Name: COLUMN map2u_core__layer_category.name; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__layer_category.name IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__layer_category.slug; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__layer_category.slug IS '(DC2Type:string)';


--
-- Data for Name: map2u_core__layer_category; Type: TABLE DATA; Schema: public; Owner: jzhao
--

COPY map2u_core__layer_category (id, user_uuid, parent_id, "position", name, slug, enabled, public, multiple, created_at, updated_at) FROM stdin;
\.


--
-- Name: map2u_core__layer_category map2u_core__layer_category_pkey; Type: CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY map2u_core__layer_category
    ADD CONSTRAINT map2u_core__layer_category_pkey PRIMARY KEY (id);


--
-- Name: idx_66eb33f0727aca70; Type: INDEX; Schema: public; Owner: jzhao
--

CREATE INDEX idx_66eb33f0727aca70 ON map2u_core__layer_category USING btree (parent_id);


--
-- Name: idx_66eb33f0abfe1c6f; Type: INDEX; Schema: public; Owner: jzhao
--

CREATE INDEX idx_66eb33f0abfe1c6f ON map2u_core__layer_category USING btree (user_uuid);


--
-- Name: map2u_core__layer_category fk_66eb33f0727aca70; Type: FK CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY map2u_core__layer_category
    ADD CONSTRAINT fk_66eb33f0727aca70 FOREIGN KEY (parent_id) REFERENCES map2u_core__layer_category(id);


--
-- Name: map2u_core__layer_category fk_66eb33f0abfe1c6f; Type: FK CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY map2u_core__layer_category
    ADD CONSTRAINT fk_66eb33f0abfe1c6f FOREIGN KEY (user_uuid) REFERENCES fos_user_user(id);


--
-- PostgreSQL database dump complete
--

