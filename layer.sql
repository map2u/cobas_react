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
-- Name: map2u_core__layer; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE map2u_core__layer (
    id uuid NOT NULL,
    user_uuid uuid,
    spatialfile_uuid uuid,
    category_uuid uuid,
    layercategory_uuid uuid,
    table_uuid uuid,
    table_name character varying(150) DEFAULT NULL::character varying,
    row_uuid uuid,
    enabled boolean DEFAULT true,
    public boolean DEFAULT false,
    "position" integer DEFAULT 299,
    shared boolean DEFAULT false,
    layer_property text,
    show_label boolean DEFAULT false,
    default_show_on_map boolean DEFAULT true,
    layer_show_in_switcher boolean DEFAULT true,
    zoom_level integer,
    lat double precision,
    lng double precision,
    project_uuid uuid,
    name character varying(250) NOT NULL,
    layer_type character varying(50) DEFAULT NULL::character varying,
    value_field character varying(150) DEFAULT NULL::character varying,
    sld_filename character varying(255) DEFAULT NULL::character varying,
    sld text,
    style text,
    sqltext text,
    session_id character varying(255) DEFAULT NULL::character varying,
    created_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    updated_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    description text,
    min_zoom integer,
    max_zoom integer,
    image_layer boolean DEFAULT false,
    cache integer DEFAULT 0,
    layer_format character varying(50) DEFAULT NULL::character varying,
    feature_route character varying(150) DEFAULT NULL::character varying,
    name_field character varying(150) DEFAULT NULL::character varying,
    label_field character varying(150) DEFAULT NULL::character varying
);


ALTER TABLE map2u_core__layer OWNER TO jzhao;

--
-- Name: COLUMN map2u_core__layer.table_name; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__layer.table_name IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__layer.name; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__layer.name IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__layer.layer_type; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__layer.layer_type IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__layer.value_field; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__layer.value_field IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__layer.sld_filename; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__layer.sld_filename IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__layer.session_id; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__layer.session_id IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__layer.layer_format; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__layer.layer_format IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__layer.feature_route; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__layer.feature_route IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__layer.name_field; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__layer.name_field IS '(DC2Type:string)';


--
-- Name: COLUMN map2u_core__layer.label_field; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN map2u_core__layer.label_field IS '(DC2Type:string)';


--
-- Data for Name: map2u_core__layer; Type: TABLE DATA; Schema: public; Owner: jzhao
--

COPY map2u_core__layer (id, user_uuid, spatialfile_uuid, category_uuid, layercategory_uuid, table_uuid, table_name, row_uuid, enabled, public, "position", shared, layer_property, show_label, default_show_on_map, layer_show_in_switcher, zoom_level, lat, lng, project_uuid, name, layer_type, value_field, sld_filename, sld, style, sqltext, session_id, created_at, updated_at, description, min_zoom, max_zoom, image_layer, cache, layer_format, feature_route, name_field, label_field) FROM stdin;
fb530c19-bff9-4c16-b331-64ae34a19df9	\N	\N	\N	\N	\N	\N	\N	t	t	\N	f	{"wmsHostName":"cobas.juturna.ca:8080\\/geoserver\\/juturna3.0\\/wms","wmsLayerName":"juturna3.0:ds_phr1b","srs":null,"wmsLayerType":"wms","fieldname":null,"radius":null,"opacity":null,"gradient":null,"showCoverageOnHover":null,"zoomToBoundsOnClick":null,"spiderfyOnMaxZoom":null,"removeOutsideVisibleBounds":null,"animateAddingMarkers":null,"disableClusteringAtZoom":null,"maxClusterRadius":null,"polygonOptions":null,"story_type":null,"singleMarkerMode":null,"spiderfyDistanceMultiplier":null,"iconCreateFunction":null}	f	t	f	\N	\N	\N	\N	ds_phr1b	geoserver	\N	1/asbc.sld_ASBC_Connected.sld	\N	\N	\N	\N	2016-11-09 17:51:19	2016-11-09 17:51:19	\N	\N	\N	f	0	\N	\N	\N	\N
aa6808a4-fd28-4243-a1e7-b8bfe7c6045a	67987ca8-f482-48e9-99a4-fb42c5f55a00	33c96a7f-2672-4ad3-a501-45063a7570f4	\N	\N	\N	\N	\N	t	t	18	f	\N	f	t	t	\N	\N	\N	\N	ASBC Core/COBAS Centro	spatialfile	\N	1/asbc.sld_ASBC_Core.sld	\N	\N	\N	\N	2014-09-30 17:36:09	2015-02-10 22:59:49	\N	\N	\N	f	0	\N	\N	\N	\N
3ff81953-e625-4d20-b325-0d8bfe8d9b64	67987ca8-f482-48e9-99a4-fb42c5f55a00	0e6ad902-635d-4040-8073-561c0a51fe21	\N	\N	\N	\N	\N	t	t	6	f	\N	f	f	t	\N	\N	\N	\N	Towns ASBC / Poblados COBAS	spatialfile	\N	1/cobastown.sld	\N	\N	\N	\N	2014-07-03 17:14:55	2015-02-05 10:52:38	\N	\N	\N	f	0	\N	\N	\N	\N
6797bdc2-96a7-4dd8-84b2-eea4e507aa88	67987ca8-f482-48e9-99a4-fb42c5f55a00	9473b2a6-39a0-425e-ade7-28a1e581dc47	\N	\N	\N	\N	\N	t	t	\N	f	\N	f	f	t	\N	\N	\N	\N	Dam projects/Proyectos hidroeléctricos	spatialfile	\N	1/capitals.sld	\N	\N	\N	\N	2014-10-04 02:09:00	2015-02-03 10:05:13	\N	\N	\N	f	0	\N	\N	\N	\N
81e0b83f-5ca0-43d4-86cf-bd27aefe7a38	67987ca8-f482-48e9-99a4-fb42c5f55a00	fba9120c-350b-4987-8d4d-c6e964f29fd6	\N	\N	\N	\N	\N	t	t	\N	f	\N	f	f	t	\N	\N	\N	\N	Bird Stations/Estaciones de aves	spatialfile	\N	1/capitals.sld	\N	\N	\N	\N	2014-10-04 02:07:37	2015-02-03 10:04:47	\N	\N	\N	f	0	\N	\N	\N	\N
d4d8f5c1-9a98-44da-8106-549731b0284f	67987ca8-f482-48e9-99a4-fb42c5f55a00	31581924-a014-4251-8757-2239c55ddf33	\N	\N	\N	\N	\N	t	t	20	f	\N	f	t	t	\N	\N	\N	\N	ASBC Buffer/COBAS Buffer	spatialfile	\N	1/asbc.sld_ASBC_Connected.sld	\N	\N	\N	\N	2014-09-30 17:34:24	2015-02-03 10:04:05	\N	\N	\N	f	0	\N	\N	\N	\N
a74dd1ce-5a9a-4bd0-b82f-f1b938883e8f	67987ca8-f482-48e9-99a4-fb42c5f55a00	2b5cd0fb-0fdc-48ab-8697-c17666db148d	\N	\N	\N	\N	\N	t	t	14	f	\N	f	t	t	\N	\N	\N	\N	Los Cusingos	spatialfile	\N	1/asbc.sld_ASBC_Los_Cusingos.sld	\N	\N	\N	\N	2014-09-30 17:40:42	2014-09-30 17:40:42	\N	\N	\N	f	0	\N	\N	\N	\N
7cba3b56-6177-4eb2-b0c0-60d46a340466	67987ca8-f482-48e9-99a4-fb42c5f55a00	22696489-dbd3-443d-9d49-92d929c60800	\N	\N	\N	\N	\N	t	t	12	f	\N	f	f	t	\N	\N	\N	\N	Cobertura UGM Cobas	spatialfile	\N	1/capitals.sld	\N	\N	\N	\N	2014-07-03 17:22:43	2014-09-30 17:39:21	\N	\N	\N	f	0	\N	\N	\N	\N
2335ed15-14a2-4ae8-b922-8116a9b61c5d	\N	\N	\N	\N	\N	\N	\N	t	t	\N	f	{"wmsHostName":"ceniga.sinac.go.cr\\/geoserver\\/CENIGA\\/wms","wmsLayerName":"areas_silvestres_protegidas_2011","srs":null,"wmsLayerType":"wms","fieldname":null,"radius":null,"opacity":null,"gradient":null,"showCoverageOnHover":null,"zoomToBoundsOnClick":null,"spiderfyOnMaxZoom":null,"removeOutsideVisibleBounds":null,"animateAddingMarkers":null,"disableClusteringAtZoom":null,"maxClusterRadius":null,"polygonOptions":null,"story_type":null,"singleMarkerMode":null,"spiderfyDistanceMultiplier":null,"iconCreateFunction":null}	f	t	t	\N	\N	\N	\N	Protected areas/Areas protegidas	geoserver	\N	1/capitals.sld	\N	\N	\N	\N	2016-11-09 17:51:20	2016-11-09 17:51:20	\N	\N	\N	f	0	\N	\N	\N	\N
2f9993f4-c322-4220-a5bf-d2eaf0286ce1	\N	\N	\N	\N	\N	\N	\N	t	t	\N	f	{"wmsHostName":"www.snitcr.go.cr\\/servicios\\/cartografia\\/wms","wmsLayerName":"hidrografia_5000","srs":null,"wmsLayerType":"wms","fieldname":null,"radius":null,"opacity":null,"gradient":null,"showCoverageOnHover":null,"zoomToBoundsOnClick":null,"spiderfyOnMaxZoom":null,"removeOutsideVisibleBounds":null,"animateAddingMarkers":null,"disableClusteringAtZoom":null,"maxClusterRadius":null,"polygonOptions":null,"story_type":null,"singleMarkerMode":null,"spiderfyDistanceMultiplier":null,"iconCreateFunction":null}	f	f	t	\N	\N	\N	\N	Rivers/Ríos	geoserver	\N	1/capitals.sld	\N	\N	\N	\N	2016-11-09 17:51:21	2016-11-09 17:51:21	\N	\N	\N	f	0	\N	\N	\N	\N
4bf39fa9-a43a-4119-915b-5acda10c1105	\N	\N	\N	\N	\N	\N	\N	t	t	24	f	{"wmsHostName":"ceniga.sinac.go.cr\\/geoserver\\/CENIGA\\/wms","wmsLayerName":"areas_conservacion","srs":null,"wmsLayerType":"wms","fieldname":null,"radius":null,"opacity":null,"gradient":null,"showCoverageOnHover":null,"zoomToBoundsOnClick":null,"spiderfyOnMaxZoom":null,"removeOutsideVisibleBounds":null,"animateAddingMarkers":null,"disableClusteringAtZoom":null,"maxClusterRadius":null,"polygonOptions":null,"story_type":null,"singleMarkerMode":null,"spiderfyDistanceMultiplier":null,"iconCreateFunction":null}	f	f	t	\N	\N	\N	\N	Conservation areas/Areas de conservación	geoserver	\N	1/asbc.sld_ASBC_Connected.sld	\N	\N	\N	\N	2016-11-09 17:51:21	2016-11-09 17:51:21	\N	\N	\N	f	0	\N	\N	\N	\N
24c66682-8cf9-4637-be68-655938f4b606	\N	\N	\N	\N	\N	\N	\N	t	t	2	f	{"wmsHostName":"www.sig.mep.go.cr:8080\\/geoserver\\/mep\\/wms","wmsLayerName":"Colegios_Publicos","srs":null,"wmsLayerType":"wms","fieldname":null,"radius":null,"opacity":null,"gradient":null,"showCoverageOnHover":null,"zoomToBoundsOnClick":null,"spiderfyOnMaxZoom":null,"removeOutsideVisibleBounds":null,"animateAddingMarkers":null,"disableClusteringAtZoom":null,"maxClusterRadius":null,"polygonOptions":null,"story_type":null,"singleMarkerMode":null,"spiderfyDistanceMultiplier":null,"iconCreateFunction":null}	f	f	t	\N	\N	\N	\N	Public Schools/Colegios Públicos	geoserver	\N	1/capitals.sld	\N	\N	\N	\N	2016-11-09 17:51:21	2016-11-09 17:51:21	\N	\N	\N	f	0	\N	\N	\N	\N
e7b7fedb-b90b-47c8-b45c-6fa71e0097cf	\N	\N	\N	\N	\N	\N	\N	t	t	32	f	{"wmsHostName":"www.snitcr.go.cr\\/servicios\\/cartografia\\/wms","wmsLayerName":"provincias","srs":null,"wmsLayerType":"wms","fieldname":null,"radius":null,"opacity":null,"gradient":null,"showCoverageOnHover":null,"zoomToBoundsOnClick":null,"spiderfyOnMaxZoom":null,"removeOutsideVisibleBounds":null,"animateAddingMarkers":null,"disableClusteringAtZoom":null,"maxClusterRadius":null,"polygonOptions":null,"story_type":null,"singleMarkerMode":null,"spiderfyDistanceMultiplier":null,"iconCreateFunction":null}	f	f	t	\N	\N	\N	\N	Provinces/Provincias	geoserver	\N	1/asbc.sld_ASBC_Connected.sld	\N	\N	\N	\N	2016-11-09 17:51:21	2016-11-09 17:51:21	\N	\N	\N	f	0	\N	\N	\N	\N
49665c8c-3746-4d9a-ae6a-9606da602e54	\N	\N	\N	\N	\N	\N	\N	t	t	100	f	{"wmsHostName":"www.snitcr.go.cr\\/cgi-bin\\/web?map=ortofoto.map&","wmsLayerName":"Mosaico5000","srs":"EPSG:4326","wmsLayerType":"wms","fieldname":null,"radius":null,"opacity":null,"gradient":null,"showCoverageOnHover":null,"zoomToBoundsOnClick":null,"spiderfyOnMaxZoom":null,"removeOutsideVisibleBounds":null,"animateAddingMarkers":null,"disableClusteringAtZoom":null,"maxClusterRadius":null,"polygonOptions":null,"story_type":null,"singleMarkerMode":null,"spiderfyDistanceMultiplier":null,"iconCreateFunction":null}	f	f	t	\N	\N	\N	\N	Land Use/Uso de tierra	geoserver	\N	1/asbc.sld_ASBC_Connected.sld	\N	\N	\N	\N	2016-11-09 17:51:21	2016-11-09 17:51:21	\N	\N	\N	f	0	\N	\N	\N	\N
c6d59acd-991f-4fb3-bf97-9d6785c6b89c	\N	\N	\N	\N	\N	\N	\N	t	t	36	f	{"wmsHostName":"www.snitcr.go.cr\\/servicios\\/cartografia\\/wms","wmsLayerName":"curvas_5000","srs":null,"wmsLayerType":"wms","fieldname":null,"radius":null,"opacity":null,"gradient":null,"showCoverageOnHover":null,"zoomToBoundsOnClick":null,"spiderfyOnMaxZoom":null,"removeOutsideVisibleBounds":null,"animateAddingMarkers":null,"disableClusteringAtZoom":null,"maxClusterRadius":null,"polygonOptions":null,"story_type":null,"singleMarkerMode":null,"spiderfyDistanceMultiplier":null,"iconCreateFunction":null}	f	f	f	\N	\N	\N	\N	Curvas de nivel 10m	geoserver	\N	1/asbc.sld_ASBC_Connected.sld	\N	\N	\N	\N	2016-11-09 17:51:21	2016-11-09 17:51:21	\N	\N	\N	f	0	\N	\N	\N	\N
b2585283-d53b-40e6-9c41-aead36d3d1c1	\N	\N	\N	\N	\N	\N	\N	t	t	3	f	{"wmsHostName":"www.sig.mep.go.cr:8080\\/geoserver\\/mep\\/wms","wmsLayerName":"Nuevas_Oportunidades","srs":null,"wmsLayerType":"wms","fieldname":null,"radius":null,"opacity":null,"gradient":null,"showCoverageOnHover":null,"zoomToBoundsOnClick":null,"spiderfyOnMaxZoom":null,"removeOutsideVisibleBounds":null,"animateAddingMarkers":null,"disableClusteringAtZoom":null,"maxClusterRadius":null,"polygonOptions":null,"story_type":null,"singleMarkerMode":null,"spiderfyDistanceMultiplier":null,"iconCreateFunction":null}	f	f	f	\N	\N	\N	\N	Nuevas Oportunidades	geoserver	\N	1/capitals.sld	\N	\N	\N	\N	2016-11-09 17:51:21	2016-11-09 17:51:21	\N	\N	\N	f	0	\N	\N	\N	\N
5e5a8a74-095f-4954-a071-7901bb8ece54	\N	\N	\N	\N	\N	\N	\N	t	t	\N	f	{"wmsHostName":"geos.snitcr.go.cr\\/be\\/IGN_5\\/wms","wmsLayerName":"cartografia:vias_5000","srs":null,"wmsLayerType":"wms","fieldname":null,"radius":null,"opacity":null,"gradient":null,"showCoverageOnHover":true,"zoomToBoundsOnClick":true,"spiderfyOnMaxZoom":true,"removeOutsideVisibleBounds":true,"animateAddingMarkers":true,"disableClusteringAtZoom":null,"maxClusterRadius":80,"polygonOptions":null,"story_type":null,"singleMarkerMode":true,"spiderfyDistanceMultiplier":1,"iconCreateFunction":null}	f	f	t	\N	\N	\N	\N	Roads/Vias	geoserver	\N	\N	\N	\N	\N	\N	2016-11-09 17:51:21	2017-03-12 14:45:23	\N	\N	\N	f	0	\N	\N	\N	\N
4825190b-a30d-40b0-8018-b12b6ac6897a	67987ca8-f482-48e9-99a4-fb42c5f55a00	db8216f4-8ced-435b-aa49-a8daefad376e	\N	\N	\N	\N	\N	t	t	16	f	{"wmsHostName":null,"wmsLayerName":null,"srs":null,"wmsLayerType":"wms","fieldname":null,"radius":null,"opacity":null,"gradient":null,"showCoverageOnHover":true,"zoomToBoundsOnClick":true,"spiderfyOnMaxZoom":true,"removeOutsideVisibleBounds":true,"animateAddingMarkers":true,"disableClusteringAtZoom":null,"maxClusterRadius":80,"polygonOptions":null,"story_type":null,"singleMarkerMode":true,"spiderfyDistanceMultiplier":1,"iconCreateFunction":null}	f	t	t	\N	\N	\N	\N	Las Nubes	spatialfile	\N	\N	\N	\N	\N	\N	2014-09-30 17:39:01	2018-01-10 00:47:51	\N	\N	\N	f	0	vector	\N	\N	\N
\.


--
-- Name: map2u_core__layer map2u_core__layer_pkey; Type: CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY map2u_core__layer
    ADD CONSTRAINT map2u_core__layer_pkey PRIMARY KEY (id);


--
-- Name: idx_3f7556db262639a6; Type: INDEX; Schema: public; Owner: jzhao
--

CREATE INDEX idx_3f7556db262639a6 ON map2u_core__layer USING btree (spatialfile_uuid);


--
-- Name: idx_3f7556db455fbf7e; Type: INDEX; Schema: public; Owner: jzhao
--

CREATE INDEX idx_3f7556db455fbf7e ON map2u_core__layer USING btree (layercategory_uuid);


--
-- Name: idx_3f7556db5ae42ae1; Type: INDEX; Schema: public; Owner: jzhao
--

CREATE INDEX idx_3f7556db5ae42ae1 ON map2u_core__layer USING btree (category_uuid);


--
-- Name: idx_3f7556dbabfe1c6f; Type: INDEX; Schema: public; Owner: jzhao
--

CREATE INDEX idx_3f7556dbabfe1c6f ON map2u_core__layer USING btree (user_uuid);


--
-- Name: map2u_core__layer fk_3f7556db262639a6; Type: FK CONSTRAINT; Schema: public; Owner: jzhao
--



--
-- Name: map2u_core__layer fk_3f7556db455fbf7e; Type: FK CONSTRAINT; Schema: public; Owner: jzhao
--



--
-- Name: map2u_core__layer fk_3f7556db5ae42ae1; Type: FK CONSTRAINT; Schema: public; Owner: jzhao
--


--
-- Name: map2u_core__layer fk_3f7556dbabfe1c6f; Type: FK CONSTRAINT; Schema: public; Owner: jzhao
--


--
-- PostgreSQL database dump complete
--

