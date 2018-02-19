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
-- Name: map2u_core__spatialfile; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE map2u_core__spatialfile (
    id uuid NOT NULL,
    user_uuid uuid NOT NULL,
    session_id character varying(250) DEFAULT NULL::character varying,
    file_name character varying(250) DEFAULT NULL::character varying,
    sheet_name character varying(250) DEFAULT NULL::character varying,
    geomtype character varying(50) DEFAULT NULL::character varying,
    name character varying(250) DEFAULT 'Spatial File'::character varying,
    pc_field character varying(250) DEFAULT NULL::character varying,
    pc_count integer,
    b_public boolean DEFAULT false,
    file_type character varying(255) DEFAULT NULL::character varying,
    support_type character varying(255) DEFAULT NULL::character varying,
    field_list text,
    selected_fields text,
    value_field character varying(250) DEFAULT NULL::character varying,
    description text,
    created_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    updated_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    record_count integer
);


ALTER TABLE map2u_core__spatialfile OWNER TO jzhao;

--
-- Name: COLUMN map2u_core__spatialfile.session_id; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__spatialfile.session_id IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__spatialfile.file_name; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__spatialfile.file_name IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__spatialfile.sheet_name; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__spatialfile.sheet_name IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__spatialfile.geomtype; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__spatialfile.geomtype IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__spatialfile.name; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__spatialfile.name IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__spatialfile.pc_field; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__spatialfile.pc_field IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__spatialfile.file_type; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__spatialfile.file_type IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__spatialfile.support_type; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__spatialfile.support_type IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__spatialfile.value_field; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__spatialfile.value_field IS '(DC2Type:string)';


--
-- Data for Name: map2u_core__spatialfile; Type: TABLE DATA; Schema: public; Owner: jzhao
--

COPY map2u_core__spatialfile (id, user_uuid, session_id, file_name, sheet_name, geomtype, name, pc_field, pc_count, b_public, file_type, support_type, field_list, selected_fields, value_field, description, created_at, updated_at, record_count) FROM stdin;
db8216f4-8ced-435b-aa49-a8daefad376e	67987ca8-f482-48e9-99a4-fb42c5f55a00	jkh53efdkr4arpcbgblma39nr2	ASBC_Las_Nubes.shp	\N	\N	Spatial File	\N	\N	f	shapefile	\N	[{"column_name":"nombre","data_type":"character varying"},{"column_name":"ha","data_type":"double precision"},{"column_name":"buffer","data_type":"double precision"},{"column_name":"nombre_are","data_type":"character varying"},{"column_name":"tipo_prote","data_type":"character varying"},{"column_name":"area","data_type":"double precision"},{"column_name":"perimeter","data_type":"double precision"},{"column_name":"acres","data_type":"double precision"},{"column_name":"type","data_type":"character varying"}]	{"spatial_typeid":0,"sessionid":null,"spatial_sheetname_index":null,"spatial_sheetname":null,"sheetnames":null,"spatial_loc_name":"nombre","spatial_loc_radius":"-1","spatial_geographic_id":"-1","spatial_geographic_level":"-1","spatial_loc_pc":"-1","spatial_loc_lat":"-1","spatial_loc_lon":"-1","spatial_loc_value":"-1","spatial_loc_pincolor":"-1","categories":null,"tags":null}	\N	\N	2014-09-30 17:31:09	2015-02-10 23:05:58	\N
22696489-dbd3-443d-9d49-92d929c60800	67987ca8-f482-48e9-99a4-fb42c5f55a00	q5ul5cv5c1tl7mmrru7n59v791	Cobertura_UGM_Cobas.shp	\N	\N	Spatial File	\N	\N	\N	shapefile	\N	[{"column_name":"hectares","data_type":"double precision"},{"column_name":"cobertura","data_type":"character varying"}]	{"spatial_typeid":0,"sessionid":null,"spatial_sheetname_index":null,"spatial_sheetname":null,"sheetnames":null,"spatial_loc_name":"hectares","spatial_loc_radius":"-1","spatial_geographic_id":"-1","spatial_geographic_level":"-1","spatial_loc_pc":"-1","spatial_loc_lat":"-1","spatial_loc_lon":"-1","spatial_loc_value":"-1","spatial_loc_pincolor":"-1","categories":null,"tags":null}	\N	\N	2014-07-03 17:21:29	2014-10-03 23:24:00	\N
33c96a7f-2672-4ad3-a501-45063a7570f4	67987ca8-f482-48e9-99a4-fb42c5f55a00	jkh53efdkr4arpcbgblma39nr2	ASBC_core.shp	\N	\N	Spatial File	\N	\N	f	shapefile	\N	[{"column_name":"nombre","data_type":"character varying"},{"column_name":"ha","data_type":"double precision"},{"column_name":"buffer","data_type":"double precision"},{"column_name":"nombre_are","data_type":"character varying"},{"column_name":"tipo_prote","data_type":"character varying"},{"column_name":"area","data_type":"double precision"},{"column_name":"perimeter","data_type":"double precision"},{"column_name":"acres","data_type":"double precision"},{"column_name":"type","data_type":"character varying"}]	{"spatial_typeid":0,"sessionid":null,"spatial_sheetname_index":null,"spatial_sheetname":null,"sheetnames":null,"spatial_loc_name":"nombre","spatial_loc_radius":"-1","spatial_geographic_id":"-1","spatial_geographic_level":"-1","spatial_loc_pc":"-1","spatial_loc_lat":"-1","spatial_loc_lon":"-1","spatial_loc_value":"-1","spatial_loc_pincolor":"-1","categories":null,"tags":null}	\N	\N	2014-09-30 17:07:25	2015-02-10 22:58:27	\N
0ba29855-9274-4695-b639-7ba70172663a	67987ca8-f482-48e9-99a4-fb42c5f55a00	e71ih62dspcqj4uo6k9buirup7	fed35100_epsg3347.shp	\N	\N	Spatial File	\N	\N	f	shapefile	\N	[{"column_name":"nid","data_type":"character varying"},{"column_name":"fednum","data_type":"integer"},{"column_name":"enname","data_type":"character varying"},{"column_name":"frname","data_type":"character varying"},{"column_name":"provcode","data_type":"character varying"},{"column_name":"creadt","data_type":"character varying"},{"column_name":"revdt","data_type":"character varying"},{"column_name":"reporder","data_type":"character varying"},{"column_name":"decpopcnt","data_type":"integer"},{"column_name":"quipopcnt","data_type":"integer"},{"column_name":"enlegaldsc","data_type":"character varying"},{"column_name":"frlegaldsc","data_type":"character varying"},{"column_name":"shape_area","data_type":"double precision"},{"column_name":"shape_len","data_type":"double precision"}]	{"spatial_typeid":0,"sessionid":null,"spatial_sheetname_index":null,"spatial_sheetname":null,"sheetnames":null,"spatial_loc_name":"nid","spatial_loc_radius":"-1","spatial_geographic_id":"-1","spatial_geographic_level":"-1","spatial_loc_pc":"-1","spatial_loc_lat":"-1","spatial_loc_lon":"-1","spatial_loc_value":"-1","spatial_loc_pincolor":"-1","categories":null,"tags":null}	\N	\N	2015-01-28 10:02:23	2015-01-28 10:02:25	\N
2b5cd0fb-0fdc-48ab-8697-c17666db148d	67987ca8-f482-48e9-99a4-fb42c5f55a00	jkh53efdkr4arpcbgblma39nr2	ASBC_Los_Cusingos.shp	\N	\N	Spatial File	\N	\N	f	shapefile	\N	[{"column_name":"nombre","data_type":"character varying"},{"column_name":"ha","data_type":"double precision"},{"column_name":"buffer","data_type":"double precision"},{"column_name":"nombre_are","data_type":"character varying"},{"column_name":"tipo_prote","data_type":"character varying"},{"column_name":"area","data_type":"double precision"},{"column_name":"perimeter","data_type":"double precision"},{"column_name":"acres","data_type":"double precision"},{"column_name":"type","data_type":"character varying"}]	{"spatial_typeid":0,"sessionid":null,"spatial_sheetname_index":null,"spatial_sheetname":null,"sheetnames":null,"spatial_loc_name":"nombre","spatial_loc_radius":"-1","spatial_geographic_id":"-1","spatial_geographic_level":"-1","spatial_loc_pc":"-1","spatial_loc_lat":"-1","spatial_loc_lon":"-1","spatial_loc_value":"-1","spatial_loc_pincolor":"-1","categories":null,"tags":null}	\N	\N	2014-09-30 17:30:37	2015-02-10 23:04:13	\N
31581924-a014-4251-8757-2239c55ddf33	67987ca8-f482-48e9-99a4-fb42c5f55a00	jkh53efdkr4arpcbgblma39nr2	ASBC_Connected.shp	\N	\N	Spatial File	\N	\N	\N	shapefile	\N	[{"column_name":"nombre","data_type":"character varying"},{"column_name":"ha","data_type":"double precision"},{"column_name":"buffer","data_type":"double precision"},{"column_name":"nombre_are","data_type":"character varying"},{"column_name":"tipo_prote","data_type":"character varying"},{"column_name":"area","data_type":"double precision"},{"column_name":"perimeter","data_type":"double precision"},{"column_name":"acres","data_type":"double precision"},{"column_name":"type","data_type":"character varying"}]	{"spatial_typeid":0,"sessionid":null,"spatial_sheetname_index":null,"spatial_sheetname":null,"sheetnames":null,"spatial_loc_name":"nombre","spatial_loc_radius":"-1","spatial_geographic_id":"-1","spatial_geographic_level":"-1","spatial_loc_pc":"-1","spatial_loc_lat":"-1","spatial_loc_lon":"-1","spatial_loc_value":"-1","spatial_loc_pincolor":"-1","categories":null,"tags":null}	\N	\N	2014-09-30 17:31:49	2015-02-10 23:03:26	\N
9473b2a6-39a0-425e-ade7-28a1e581dc47	67987ca8-f482-48e9-99a4-fb42c5f55a00	l2s32hupu5jd4acm603r1luek1	dam_sites.shp	\N	\N	Spatial File	\N	\N	f	shapefile	\N	[{"column_name":"name","data_type":"character varying"}]	{"spatial_typeid":0,"sessionid":null,"spatial_sheetname_index":null,"spatial_sheetname":null,"sheetnames":null,"spatial_loc_name":"name","spatial_loc_radius":"-1","spatial_geographic_id":"-1","spatial_geographic_level":"-1","spatial_loc_pc":"-1","spatial_loc_lat":"-1","spatial_loc_lon":"-1","spatial_loc_value":"-1","spatial_loc_pincolor":"-1","categories":null,"tags":null}	\N	\N	2014-10-04 01:58:02	2014-10-04 02:40:31	\N
fba9120c-350b-4987-8d4d-c6e964f29fd6	67987ca8-f482-48e9-99a4-fb42c5f55a00	l2s32hupu5jd4acm603r1luek1	station.shp	\N	\N	Spatial File	\N	\N	f	shapefile	\N	[{"column_name":"name","data_type":"character varying"}]	{"spatial_typeid":0,"sessionid":null,"spatial_sheetname_index":null,"spatial_sheetname":null,"sheetnames":null,"spatial_loc_name":"name","spatial_loc_radius":"-1","spatial_geographic_id":"-1","spatial_geographic_level":"-1","spatial_loc_pc":"-1","spatial_loc_lat":"-1","spatial_loc_lon":"-1","spatial_loc_value":"-1","spatial_loc_pincolor":"-1","categories":null,"tags":null}	\N	\N	2014-10-04 01:54:58	2014-10-04 02:40:09	\N
0e6ad902-635d-4040-8073-561c0a51fe21	67987ca8-f482-48e9-99a4-fb42c5f55a00	q5ul5cv5c1tl7mmrru7n59v791	poblads_UGM_cobas.shp	\N	\N	Spatial File	\N	\N	f	shapefile	\N	[{"column_name":"nombre","data_type":"character varying"},{"column_name":"categoria","data_type":"character varying"},{"column_name":"hoja","data_type":"character varying"},{"column_name":"x","data_type":"double precision"},{"column_name":"y","data_type":"double precision"},{"column_name":"type","data_type":"character varying"}]	{"spatial_typeid":0,"sessionid":null,"spatial_sheetname_index":null,"spatial_sheetname":null,"sheetnames":null,"spatial_loc_name":"nombre","spatial_loc_radius":"-1","spatial_geographic_id":"-1","spatial_geographic_level":"-1","spatial_loc_pc":"-1","spatial_loc_lat":"-1","spatial_loc_lon":"-1","spatial_loc_value":"-1","spatial_loc_pincolor":"-1","categories":null,"tags":null}	\N	\N	2014-07-03 17:13:02	2014-10-09 11:58:26	\N
4c17c2c2-6433-41ae-8d6c-621e147f0a2a	67987ca8-f482-48e9-99a4-fb42c5f55a00	3rcib0mro02kobp937tc11aph1	acuifero2008crtm05.shp	\N	\N	Spatial File	\N	\N	\N	shapefile	\N	[{"column_name":"hectares","data_type":"double precision"},{"column_name":"cobertura","data_type":"character varying"}]	{"spatial_typeid":0,"sessionid":null,"spatial_sheetname_index":null,"spatial_sheetname":null,"sheetnames":null,"spatial_loc_name":"hectares","spatial_loc_radius":"-1","spatial_geographic_id":"-1","spatial_geographic_level":"-1","spatial_loc_pc":"-1","spatial_loc_lat":"-1","spatial_loc_lon":"-1","spatial_loc_value":"-1","spatial_loc_pincolor":"-1","categories":null,"tags":null}	\N	\N	2014-07-16 11:53:53	2014-07-16 11:53:58	\N
13133cef-c7ed-411b-9663-62a810f68d59	67987ca8-f482-48e9-99a4-fb42c5f55a00	3rcib0mro02kobp937tc11aph1	distritos2008crtm05.shp	\N	\N	Spatial File	\N	\N	\N	shapefile	\N	[{"column_name":"hectares","data_type":"double precision"},{"column_name":"cobertura","data_type":"character varying"}]	{"spatial_typeid":0,"sessionid":null,"spatial_sheetname_index":null,"spatial_sheetname":null,"sheetnames":null,"spatial_loc_name":"hectares","spatial_loc_radius":"-1","spatial_geographic_id":"-1","spatial_geographic_level":"-1","spatial_loc_pc":"-1","spatial_loc_lat":"-1","spatial_loc_lon":"-1","spatial_loc_value":"-1","spatial_loc_pincolor":"-1","categories":null,"tags":null}	\N	\N	2014-07-16 11:56:44	2014-07-16 12:09:43	\N
eb6c727b-e4d0-4b63-98a4-1dc4127205ff	67987ca8-f482-48e9-99a4-fb42c5f55a00	3rcib0mro02kobp937tc11aph1	cantones2008ctm05.shp	\N	\N	Spatial File	\N	\N	\N	shapefile	\N	[{"column_name":"hectares","data_type":"double precision"},{"column_name":"cobertura","data_type":"character varying"}]	{"spatial_typeid":0,"sessionid":null,"spatial_sheetname_index":null,"spatial_sheetname":null,"sheetnames":null,"spatial_loc_name":"hectares","spatial_loc_radius":"-1","spatial_geographic_id":"-1","spatial_geographic_level":"-1","spatial_loc_pc":"-1","spatial_loc_lat":"-1","spatial_loc_lon":"-1","spatial_loc_value":"-1","spatial_loc_pincolor":"-1","categories":null,"tags":null}	\N	\N	2014-07-16 11:54:35	2014-07-17 11:15:06	\N
\.


--
-- Name: map2u_core__spatialfile map2u_core__spatialfile_pkey; Type: CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY map2u_core__spatialfile
    ADD CONSTRAINT map2u_core__spatialfile_pkey PRIMARY KEY (id);


--
-- Name: idx_8bde9ababfe1c6f; Type: INDEX; Schema: public; Owner: jzhao
--

CREATE INDEX idx_8bde9ababfe1c6f ON map2u_core__spatialfile USING btree (user_uuid);


--
-- Name: map2u_core__spatialfile fk_8bde9ababfe1c6f; Type: FK CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY map2u_core__spatialfile
    ADD CONSTRAINT fk_8bde9ababfe1c6f FOREIGN KEY (user_uuid) REFERENCES fos_user_user(id);


--
-- PostgreSQL database dump complete
--

