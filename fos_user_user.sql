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
-- Name: fos_user_user; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE fos_user_user (
    username character varying(255) NOT NULL,
    username_canonical character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_canonical character varying(255) NOT NULL,
    enabled boolean NOT NULL,
    salt character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    last_login timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    locked boolean NOT NULL,
    expired boolean NOT NULL,
    expires_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    confirmation_token character varying(255) DEFAULT NULL::character varying,
    password_requested_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    roles text NOT NULL,
    credentials_expired boolean NOT NULL,
    credentials_expire_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL,
    date_of_birth timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    firstname character varying(64) DEFAULT NULL::character varying,
    lastname character varying(64) DEFAULT NULL::character varying,
    website character varying(64) DEFAULT NULL::character varying,
    biography character varying(1000) DEFAULT NULL::character varying,
    gender character varying(1) DEFAULT NULL::character varying,
    locale character varying(8) DEFAULT NULL::character varying,
    timezone character varying(64) DEFAULT NULL::character varying,
    phone character varying(64) DEFAULT NULL::character varying,
    facebook_uid character varying(255) DEFAULT NULL::character varying,
    facebook_name character varying(255) DEFAULT NULL::character varying,
    facebook_data text,
    twitter_uid character varying(255) DEFAULT NULL::character varying,
    twitter_name character varying(255) DEFAULT NULL::character varying,
    twitter_data text,
    gplus_uid character varying(255) DEFAULT NULL::character varying,
    gplus_name character varying(255) DEFAULT NULL::character varying,
    gplus_data text,
    token character varying(255) DEFAULT NULL::character varying,
    two_step_code character varying(255) DEFAULT NULL::character varying,
    membership_id integer,
    id uuid NOT NULL,
    last_visit_ip character varying(50) DEFAULT NULL::character varying,
    last_second_login_ip character varying(50) DEFAULT NULL::character varying,
    max_session_ide_time integer DEFAULT 7200,
    login_session_id character varying(50) DEFAULT NULL::character varying,
    lastactivity timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    last_login_date date,
    last_second_login_date timestamp(0) without time zone DEFAULT NULL::timestamp without time zone
);


ALTER TABLE fos_user_user OWNER TO jzhao;

--
-- Name: COLUMN fos_user_user.roles; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN fos_user_user.roles IS '(DC2Type:array)';


--
-- Name: COLUMN fos_user_user.facebook_data; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN fos_user_user.facebook_data IS '(DC2Type:json)';


--
-- Name: COLUMN fos_user_user.twitter_data; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN fos_user_user.twitter_data IS '(DC2Type:json)';


--
-- Name: COLUMN fos_user_user.gplus_data; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN fos_user_user.gplus_data IS '(DC2Type:json)';


--
-- Name: COLUMN fos_user_user.last_visit_ip; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN fos_user_user.last_visit_ip IS '(DC2Type:string)';


--
-- Name: COLUMN fos_user_user.last_second_login_ip; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN fos_user_user.last_second_login_ip IS '(DC2Type:string)';


--
-- Name: COLUMN fos_user_user.max_session_ide_time; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN fos_user_user.max_session_ide_time IS 'The max session ide time for user who has logged in.';


--
-- Name: COLUMN fos_user_user.login_session_id; Type: COMMENT; Schema: public; Owner: jzhao
--

COMMENT ON COLUMN fos_user_user.login_session_id IS '(DC2Type:string)';


--
-- Data for Name: fos_user_user; Type: TABLE DATA; Schema: public; Owner: jzhao
--

COPY fos_user_user (username, username_canonical, email, email_canonical, enabled, salt, password, last_login, locked, expired, expires_at, confirmation_token, password_requested_at, roles, credentials_expired, credentials_expire_at, created_at, updated_at, date_of_birth, firstname, lastname, website, biography, gender, locale, timezone, phone, facebook_uid, facebook_name, facebook_data, twitter_uid, twitter_name, twitter_data, gplus_uid, gplus_name, gplus_data, token, two_step_code, membership_id, id, last_visit_ip, last_second_login_ip, max_session_ide_time, login_session_id, lastactivity, last_login_date, last_second_login_date) FROM stdin;
Carlos Andrés Méndez R	carlos andrés méndez r	candres.com@gmail.com	candres.com@gmail.com	t	gdex5qfj32g4wk40ogk484o04k4cok4	XCDv3RLQsH+cBPk7Z4qM4RCpDfJxyENdmt8q0Npop/90vn4owB74XyYLU0oFRAQZoMklvq4H4/xsQb0qyFZ7dQ==	2014-02-21 11:37:21	f	f	\N	\N	\N	a:0:{}	f	\N	2014-02-14 09:41:27	2014-02-21 11:37:21	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	10685cf8-ecf4-4c28-84c2-1cba4b9a4806	\N	\N	7200	\N	\N	\N	\N
Marielos P	marielos p	maribelmorales53@gmail.com	maribelmorales53@gmail.com	t	ohlggtyfsmooko0og8g884oc0oskkgs	luwQkxzjrMJn5o8FxX0QKAnEBwfbIg64tyv1H0F+NqjCtJrHcJBLB+Ylbh24mlOO7sUzlidEEKSmOP06i08hsw==	\N	f	f	\N	\N	\N	a:0:{}	f	\N	2014-05-09 19:42:20	2014-05-09 19:42:20	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	14c49e55-df45-455c-a033-6ae829b8e985	\N	\N	7200	\N	\N	\N	\N
marielos	marielos	marbelmorales53@gmail.com	marbelmorales53@gmail.com	t	a12qpr2snrsc00og8scg8gw4o4wk0wg	Z8MrhkQx7rxN+wyWuFlFVvTZCXTDSgO07x5dBwuc2OpGDsDe+9LktNTi1kj0Gdm0oFetvfVoi1Jn7LhV5qSNTw==	\N	f	f	\N	\N	\N	a:0:{}	f	\N	2014-02-10 16:30:41	2014-02-10 16:30:41	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	93b0d483-c1d2-4fda-891f-d1f6084c54e5	\N	\N	7200	\N	\N	\N	\N
Hart Reed	hart reed	pangolin414@gmail.com	pangolin414@gmail.com	t	p6cawawd4740o4sscsc0g84o80c8ooo	WtQh6S/fwF3Hv5gF+EEcoj31FHer+JWM8YeZrBPmSTNF32HYcP6p4yG78hIX2bUJUpTAJaO+9xxyj8ayNUxQgw==	\N	f	f	\N	\N	\N	a:0:{}	f	\N	2014-02-04 13:54:59	2014-02-04 13:54:59	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	b98b42c7-8c06-4640-beeb-773b8b649844	\N	\N	7200	\N	\N	\N	\N
rchacon	rchacon	rchacon@mag.go.cr	rchacon@mag.go.cr	t	bodrz7yq5i0c8c4w8w04g8sg884gcow	ka79S9rbOJAW5J8yfwvHOCG3g5ZH5FoKW1de2ipIDbZTn2z40zNhcgPs+gGRwYDAn5Fr8eGOU4lhbmrOnfN6EQ==	\N	f	f	\N	\N	\N	a:0:{}	f	\N	2014-02-11 10:01:35	2014-02-11 10:01:35	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	0e1b61e3-566b-4fea-99f6-1a943e6cd701	\N	\N	7200	\N	\N	\N	\N
diandra23	diandra23	diandraav1983@hotmail.com	diandraav1983@hotmail.com	t	e60xppbvmtc0kwc8ksww00gk4o0kws0	D4bAPviYzERJgToQEUGiS5K8V5Hv9sSWHuX7PsWabjM3NkRqTTuQK1uJahkQVrGq6VQPMHL5pD+JcGHkmCbHQQ==	\N	f	f	\N	\N	\N	a:0:{}	f	\N	2014-02-11 12:58:26	2014-02-11 12:58:26	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	5b78934c-1d82-4bb5-84dd-e68003da4d0c	\N	\N	7200	\N	\N	\N	\N
lama	lama	quizarra@gmail.com	quizarra@gmail.com	t	qtx8gncnjusg8cwwkk4g484wgk4gwoc	upTATEDj0RNtvHbJ1f7e//+x95YZXITDGI3oR2aSstzAzaAJqr9g4euLKSkmM/86KXdsMTmUnwoywdBklJGZTA==	2014-02-11 19:33:35	f	f	\N	\N	\N	a:0:{}	f	\N	2014-02-11 18:13:10	2014-02-11 19:33:35	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	26461f91-4ae9-429b-9501-adfcf22a8bb0	\N	\N	7200	\N	\N	\N	\N
ana mercedes herrera valverde	ana mercedes herrera valverde	anaherrera@75hotmail.com	anaherrera@75hotmail.com	t	90y8wng1xdcsoo0w0c8cscskgkc8cs0	eHRgQyDeWmXEBpO/8IjwOkIWPd1U2SoUMfuFSqrTvbzPVfGLkqUkVWgFviF5Z0qgETv/72Bsc7pbeI1uU29Y0Q==	\N	f	f	\N	\N	\N	a:0:{}	f	\N	2014-02-12 05:42:26	2014-02-12 05:42:26	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	52014c12-45e0-498e-9b10-198b5415d546	\N	\N	7200	\N	\N	\N	\N
user1	user1	user1@yorku.ca	user1@yorku.ca	t	hec8e134d88wos008gco80w4wg4gsgg	DZEzwNl0wfd6F0k1XhMBUsM8KMptHR9/skvpP7lGV/r3RiEfX+fSTZk7Kd+I8dQ5CGJL1m5pDVVTj5nDdmj9fQ==	2014-02-14 10:20:18	f	f	\N	\N	\N	a:0:{}	f	\N	2014-02-14 10:18:25	2014-02-14 10:20:18	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	340e6843-8529-4955-98b9-e59049bb170f	\N	\N	7200	\N	\N	\N	\N
mitch.harrow	mitch.harrow	mharrow@yorku.ca	mharrow@yorku.ca	f	6xzox2cyd04c0ckskc4kw80scskc8co	voR+kCFD9I+WBJ9KQT5BuWzMgoc16+Cg1up6egTBkm3JKsbyHCf7qZLH2DNwyU6pLa83PuUehzE8pEQVeasmeg==	\N	f	f	\N	\N	\N	a:0:{}	f	\N	2014-07-03 17:04:27	2014-07-03 17:04:27	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	cc9b731c-953b-48bd-b5b4-f2e992685eca	\N	\N	7200	\N	\N	\N	\N
aledada	aledada	aledada@yorku.ca	aledada@yorku.ca	t	rfinbcvkymockw8wo44s4wgsgs4s8gk	SFevs0P2UJDyY8Nq+It/UCJHMNjY6/l3TE55R2xcVNADpEEItcDMjZJACp8UUEdKccnY3maXakzphZFuFfxgVA==	\N	f	f	\N	\N	\N	a:0:{}	f	\N	2014-09-25 16:02:40	2014-09-25 16:02:40	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	e72dde1e-3fc9-4feb-a784-ec183e2cdd6c	\N	\N	7200	\N	\N	\N	\N
cjallaby	cjallaby	connor.allaby@gmail.com	connor.allaby@gmail.com	t	2gkam9h4we3ocgcog80gsgcokgswwoo	g17U/xfG99OiQkO2vlav4jlOKx9a7WrSA9b1IJAjVaS/M0mwPqQyhK8rpFBFa+5FW3+++OC+HFJHZaNGGEywmQ==	2014-10-14 09:23:53	f	f	\N	\N	\N	a:0:{}	f	\N	2014-10-09 12:30:45	2014-10-14 09:23:53	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	12d459a0-08e0-47d9-9099-50b33558ed36	\N	\N	7200	\N	\N	\N	\N
fmontoya	fmontoya	fmontoya@yorku.ca	fmontoya@yorku.ca	t	dffemlflrxkosogkwkgwk0koo000g8o	8bIq+PseZkvHfCH4mQa2EkzKYncgy6vogQa3G/Va0UvN6/4Dq7Nm/S9YSj+kxVYalRyQc/muDzF//iuhw1Y7Sg==	2014-10-09 10:01:18	f	f	\N	\N	\N	a:2:{i:0;s:33:"ROLE_SONATA_USER_ADMIN_USER_ADMIN";i:1;s:16:"ROLE_SUPER_ADMIN";}	f	\N	2014-07-15 16:09:15	2014-10-09 10:01:18	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	6d231aa7-d94d-456a-b6f3-fe0f0dab6d75	\N	\N	7200	\N	\N	\N	\N
felipe	felipe	milpa99@gmail.com	milpa99@gmail.com	t	8xlmydqephs88s8csck40okoo48kskc	2JWobCsMiu0M673F9ttMwt0XPyWSzSsfC1OXYrGBGYtufH0U/+xYMOPJjMR1nG1wVzbK8z/4E1Zh4K43sdS3dQ==	2015-02-03 13:17:34	f	f	\N	\N	\N	a:0:{}	f	\N	2015-02-03 13:16:21	2015-02-03 13:17:34	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	88e2ee8b-6bec-44aa-8110-9dab2f7f84f5	\N	\N	7200	\N	\N	\N	\N
jcalderon	jcalderon	jorgeand33@gmail.com	jorgeand33@gmail.com	t	g1gjpa59mjsoo4k0gc0sgcg8cgsckwo	fuvjuHOAZWoTonsYgBdtUjwVTGrQlQDZBfGGgy0OogIbPUQ7ybCLv2a7jV/e22VJS3lNkTC5j1xiiSWPV87hYg==	2015-04-06 15:51:38	f	f	\N	\N	\N	a:0:{}	f	\N	2015-04-06 15:50:32	2015-04-06 15:51:38	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	29cfa6c1-f44a-4b33-896f-12a06aa6bce6	\N	\N	7200	\N	\N	\N	\N
karen	karen	karensepers@gmail.com	karensepers@gmail.com	t	qo8nzbg4wiogoo8wwkog8gw0w4osc8w	/zvbS6HTT/Ne9+6JLa9Ocq5MJHIaVwgggY31wE56bybuHMz25cHqQbr2yJ4QMqiLbPBbOphZ4U6170yP81pt2g==	\N	f	f	\N	\N	\N	a:0:{}	f	\N	2015-02-11 23:44:16	2015-02-11 23:44:16	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	d91f634b-3927-439b-a02d-addfc004800c	\N	\N	7200	\N	\N	\N	\N
sphat	sphat	samnang_123@yahoo.com	samnang_123@yahoo.com	t	gxqesoidblwk8k8wgkookwok8go8gk4	3k1iZ44TmLWY71GtHeQ62eS2tE2BNh2NIR+KbTogKOejkbGJ9RY6k748CNcZ4MvqhhR43hVU8NMW0zykL1sY5g==	\N	f	f	\N	\N	\N	a:0:{}	f	\N	2015-02-18 21:53:12	2015-02-18 21:53:12	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	e918694f-5c18-4e26-a2ec-2a29ca1dd554	\N	\N	7200	\N	\N	\N	\N
Turismo	turismo	turismocobas@gmail.com	turismocobas@gmail.com	t	pn1ib53yfpc0sgs0g448kcoc88gg88s	jvmqkAo3QajWbXCP5rEYNi5ok71jf/hdSv1TF2bwITvSFS8ST1vsOn/+fm5ewKnpcWpJhkkl7AtaTv1UqP5xGw==	2016-03-12 10:37:59	f	f	\N	\N	\N	a:0:{}	f	\N	2014-10-23 15:48:52	2016-03-12 10:37:59	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	7f6e748d-d6c6-4c66-b06a-d21411c83be6	\N	\N	7200	\N	\N	\N	\N
RobeIllump	robeillump	info-mail@fast-tadalafil.com	info-mail@fast-tadalafil.com	t	jvnkim5tm40ow0sgs008go84so0oko0	8bMTiTk46B6X4q6kYRTYOO15RjCej0UENm/CR+Pg7FLfs6Nhkdi37WVrk5rOFJXe2dK8rytw5BTXtsFvpxX4lw==	2015-10-20 20:46:20	f	f	\N	\N	\N	a:0:{}	f	\N	2015-10-20 20:46:17	2015-10-20 20:46:20	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	b48bf570-4450-49cd-8413-753464957ea0	\N	\N	7200	\N	\N	\N	\N
CharlAssive	charlassive	sanr@fastshipcialis.com	sanr@fastshipcialis.com	t	697xxhvjxt8ok888so8g4ckskckswk8	Ol48xb6H8grhzr5a3kX3nTmVnbIaXcGffnHXLhq/SCRufVh7tYTfkUaKPTQwIScxJdOu1G5hHbJg5Ndwr7Qj5Q==	2016-09-27 16:45:49	f	f	\N	\N	\N	a:0:{}	f	\N	2016-09-27 16:45:47	2016-09-27 16:45:49	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	cd5c4945-ceaf-4b80-9195-b7de5b00750b	\N	\N	7200	\N	\N	\N	\N
lasnubes	lasnubes	lasnubes@yorku.ca	lasnubes@yorku.ca	t	fee9tht8goowc80os0oso8404wwkscg	2ZaULSDbpx9I5Jj6KWaO0bj4oBQ467XcfCgDcTNuysz/XAiwU+ruBL3SWWIwNT3qHo2pyy60E+NxtOoN7nmswA==	2016-10-25 10:22:25	f	f	\N	\N	\N	a:191:{i:0;s:55:"ROLE_APPLICATION_MAP2U_CORE_ADMIN_USER_DRAW_LAYER_GUEST";i:1;s:55:"ROLE_APPLICATION_MAP2U_CORE_ADMIN_USER_DRAW_LAYER_STAFF";i:2;s:56:"ROLE_APPLICATION_MAP2U_CORE_ADMIN_USER_DRAW_LAYER_EDITOR";i:3;s:55:"ROLE_APPLICATION_MAP2U_CORE_ADMIN_USER_DRAW_LAYER_ADMIN";i:4;s:60:"ROLE_APPLICATION_MAP2U_CORE_ADMIN_USER_DRAW_GEOMETRIES_GUEST";i:5;s:60:"ROLE_APPLICATION_MAP2U_CORE_ADMIN_USER_DRAW_GEOMETRIES_STAFF";i:6;s:61:"ROLE_APPLICATION_MAP2U_CORE_ADMIN_USER_DRAW_GEOMETRIES_EDITOR";i:7;s:60:"ROLE_APPLICATION_MAP2U_CORE_ADMIN_USER_DRAW_GEOMETRIES_ADMIN";i:8;s:33:"ROLE_SONATA_USER_ADMIN_USER_GUEST";i:9;s:33:"ROLE_SONATA_USER_ADMIN_USER_STAFF";i:10;s:34:"ROLE_SONATA_USER_ADMIN_USER_EDITOR";i:11;s:33:"ROLE_SONATA_USER_ADMIN_USER_ADMIN";i:12;s:34:"ROLE_SONATA_USER_ADMIN_GROUP_GUEST";i:13;s:34:"ROLE_SONATA_USER_ADMIN_GROUP_STAFF";i:14;s:35:"ROLE_SONATA_USER_ADMIN_GROUP_EDITOR";i:15;s:34:"ROLE_SONATA_USER_ADMIN_GROUP_ADMIN";i:16;s:35:"ROLE_SONATA_MEDIA_ADMIN_MEDIA_GUEST";i:17;s:35:"ROLE_SONATA_MEDIA_ADMIN_MEDIA_STAFF";i:18;s:36:"ROLE_SONATA_MEDIA_ADMIN_MEDIA_EDITOR";i:19;s:35:"ROLE_SONATA_MEDIA_ADMIN_MEDIA_ADMIN";i:20;s:37:"ROLE_SONATA_MEDIA_ADMIN_GALLERY_GUEST";i:21;s:37:"ROLE_SONATA_MEDIA_ADMIN_GALLERY_STAFF";i:22;s:38:"ROLE_SONATA_MEDIA_ADMIN_GALLERY_EDITOR";i:23;s:37:"ROLE_SONATA_MEDIA_ADMIN_GALLERY_ADMIN";i:24;s:47:"ROLE_SONATA_MEDIA_ADMIN_GALLERY_HAS_MEDIA_GUEST";i:25;s:47:"ROLE_SONATA_MEDIA_ADMIN_GALLERY_HAS_MEDIA_STAFF";i:26;s:48:"ROLE_SONATA_MEDIA_ADMIN_GALLERY_HAS_MEDIA_EDITOR";i:27;s:47:"ROLE_SONATA_MEDIA_ADMIN_GALLERY_HAS_MEDIA_ADMIN";i:28;s:47:"ROLE_SONATA_CLASSIFICATION_ADMIN_CATEGORY_GUEST";i:29;s:47:"ROLE_SONATA_CLASSIFICATION_ADMIN_CATEGORY_STAFF";i:30;s:48:"ROLE_SONATA_CLASSIFICATION_ADMIN_CATEGORY_EDITOR";i:31;s:47:"ROLE_SONATA_CLASSIFICATION_ADMIN_CATEGORY_ADMIN";i:32;s:42:"ROLE_SONATA_CLASSIFICATION_ADMIN_TAG_GUEST";i:33;s:42:"ROLE_SONATA_CLASSIFICATION_ADMIN_TAG_STAFF";i:34;s:43:"ROLE_SONATA_CLASSIFICATION_ADMIN_TAG_EDITOR";i:35;s:42:"ROLE_SONATA_CLASSIFICATION_ADMIN_TAG_ADMIN";i:36;s:49:"ROLE_SONATA_CLASSIFICATION_ADMIN_COLLECTION_GUEST";i:37;s:49:"ROLE_SONATA_CLASSIFICATION_ADMIN_COLLECTION_STAFF";i:38;s:50:"ROLE_SONATA_CLASSIFICATION_ADMIN_COLLECTION_EDITOR";i:39;s:49:"ROLE_SONATA_CLASSIFICATION_ADMIN_COLLECTION_ADMIN";i:40;s:46:"ROLE_SONATA_CLASSIFICATION_ADMIN_CONTEXT_GUEST";i:41;s:46:"ROLE_SONATA_CLASSIFICATION_ADMIN_CONTEXT_STAFF";i:42;s:47:"ROLE_SONATA_CLASSIFICATION_ADMIN_CONTEXT_EDITOR";i:43;s:46:"ROLE_SONATA_CLASSIFICATION_ADMIN_CONTEXT_ADMIN";i:44;s:44:"ROLE_SONATA_NOTIFICATION_ADMIN_MESSAGE_GUEST";i:45;s:44:"ROLE_SONATA_NOTIFICATION_ADMIN_MESSAGE_STAFF";i:46;s:45:"ROLE_SONATA_NOTIFICATION_ADMIN_MESSAGE_EDITOR";i:47;s:44:"ROLE_SONATA_NOTIFICATION_ADMIN_MESSAGE_ADMIN";i:48;s:33:"ROLE_SONATA_NEWS_ADMIN_POST_GUEST";i:49;s:33:"ROLE_SONATA_NEWS_ADMIN_POST_STAFF";i:50;s:34:"ROLE_SONATA_NEWS_ADMIN_POST_EDITOR";i:51;s:33:"ROLE_SONATA_NEWS_ADMIN_POST_ADMIN";i:52;s:36:"ROLE_SONATA_NEWS_ADMIN_COMMENT_GUEST";i:53;s:36:"ROLE_SONATA_NEWS_ADMIN_COMMENT_STAFF";i:54;s:37:"ROLE_SONATA_NEWS_ADMIN_COMMENT_EDITOR";i:55;s:36:"ROLE_SONATA_NEWS_ADMIN_COMMENT_ADMIN";i:56;s:37:"ROLE_YORKU_JUTURNA_ADMIN_FAMILY_GUEST";i:57;s:37:"ROLE_YORKU_JUTURNA_ADMIN_FAMILY_STAFF";i:58;s:38:"ROLE_YORKU_JUTURNA_ADMIN_FAMILY_EDITOR";i:59;s:37:"ROLE_YORKU_JUTURNA_ADMIN_FAMILY_ADMIN";i:60;s:35:"ROLE_YORKU_JUTURNA_ADMIN_BIRD_GUEST";i:61;s:35:"ROLE_YORKU_JUTURNA_ADMIN_BIRD_STAFF";i:62;s:36:"ROLE_YORKU_JUTURNA_ADMIN_BIRD_EDITOR";i:63;s:35:"ROLE_YORKU_JUTURNA_ADMIN_BIRD_ADMIN";i:64;s:38:"ROLE_YORKU_JUTURNA_ADMIN_STATION_GUEST";i:65;s:38:"ROLE_YORKU_JUTURNA_ADMIN_STATION_STAFF";i:66;s:39:"ROLE_YORKU_JUTURNA_ADMIN_STATION_EDITOR";i:67;s:38:"ROLE_YORKU_JUTURNA_ADMIN_STATION_ADMIN";i:68;s:43:"ROLE_YORKU_JUTURNA_ADMIN_DISTRIBUTION_GUEST";i:69;s:43:"ROLE_YORKU_JUTURNA_ADMIN_DISTRIBUTION_STAFF";i:70;s:44:"ROLE_YORKU_JUTURNA_ADMIN_DISTRIBUTION_EDITOR";i:71;s:43:"ROLE_YORKU_JUTURNA_ADMIN_DISTRIBUTION_ADMIN";i:72;s:46:"ROLE_YORKU_JUTURNA_ADMIN_BREEDING_STATUS_GUEST";i:73;s:46:"ROLE_YORKU_JUTURNA_ADMIN_BREEDING_STATUS_STAFF";i:74;s:47:"ROLE_YORKU_JUTURNA_ADMIN_BREEDING_STATUS_EDITOR";i:75;s:46:"ROLE_YORKU_JUTURNA_ADMIN_BREEDING_STATUS_ADMIN";i:76;s:54:"ROLE_YORKU_JUTURNA_ADMIN_OBSERVATION_DESCRIPTION_GUEST";i:77;s:54:"ROLE_YORKU_JUTURNA_ADMIN_OBSERVATION_DESCRIPTION_STAFF";i:78;s:55:"ROLE_YORKU_JUTURNA_ADMIN_OBSERVATION_DESCRIPTION_EDITOR";i:79;s:54:"ROLE_YORKU_JUTURNA_ADMIN_OBSERVATION_DESCRIPTION_ADMIN";i:80;s:37:"ROLE_YORKU_JUTURNA_ADMIN_SEASON_GUEST";i:81;s:37:"ROLE_YORKU_JUTURNA_ADMIN_SEASON_STAFF";i:82;s:38:"ROLE_YORKU_JUTURNA_ADMIN_SEASON_EDITOR";i:83;s:37:"ROLE_YORKU_JUTURNA_ADMIN_SEASON_ADMIN";i:84;s:39:"ROLE_YORKU_JUTURNA_ADMIN_RARENESS_GUEST";i:85;s:39:"ROLE_YORKU_JUTURNA_ADMIN_RARENESS_STAFF";i:86;s:40:"ROLE_YORKU_JUTURNA_ADMIN_RARENESS_EDITOR";i:87;s:39:"ROLE_YORKU_JUTURNA_ADMIN_RARENESS_ADMIN";i:88;s:35:"ROLE_YORKU_JUTURNA_ADMIN_IUCN_GUEST";i:89;s:35:"ROLE_YORKU_JUTURNA_ADMIN_IUCN_STAFF";i:90;s:36:"ROLE_YORKU_JUTURNA_ADMIN_IUCN_EDITOR";i:91;s:35:"ROLE_YORKU_JUTURNA_ADMIN_IUCN_ADMIN";i:92;s:38:"ROLE_YORKU_JUTURNA_ADMIN_SPECIES_GUEST";i:93;s:38:"ROLE_YORKU_JUTURNA_ADMIN_SPECIES_STAFF";i:94;s:39:"ROLE_YORKU_JUTURNA_ADMIN_SPECIES_EDITOR";i:95;s:38:"ROLE_YORKU_JUTURNA_ADMIN_SPECIES_ADMIN";i:96;s:42:"ROLE_YORKU_JUTURNA_ADMIN_MEMBER_SHIP_GUEST";i:97;s:42:"ROLE_YORKU_JUTURNA_ADMIN_MEMBER_SHIP_STAFF";i:98;s:43:"ROLE_YORKU_JUTURNA_ADMIN_MEMBER_SHIP_EDITOR";i:99;s:42:"ROLE_YORKU_JUTURNA_ADMIN_MEMBER_SHIP_ADMIN";i:100;s:38:"ROLE_YORKU_JUTURNA_ADMIN_TOURISM_GUEST";i:101;s:38:"ROLE_YORKU_JUTURNA_ADMIN_TOURISM_STAFF";i:102;s:39:"ROLE_YORKU_JUTURNA_ADMIN_TOURISM_EDITOR";i:103;s:38:"ROLE_YORKU_JUTURNA_ADMIN_TOURISM_ADMIN";i:104;s:44:"ROLE_YORKU_JUTURNA_ADMIN_TOURISM_GEOMS_GUEST";i:105;s:44:"ROLE_YORKU_JUTURNA_ADMIN_TOURISM_GEOMS_STAFF";i:106;s:45:"ROLE_YORKU_JUTURNA_ADMIN_TOURISM_GEOMS_EDITOR";i:107;s:44:"ROLE_YORKU_JUTURNA_ADMIN_TOURISM_GEOMS_ADMIN";i:108;s:47:"ROLE_YORKU_JUTURNA_ADMIN_TOURISM_COMMENTS_GUEST";i:109;s:47:"ROLE_YORKU_JUTURNA_ADMIN_TOURISM_COMMENTS_STAFF";i:110;s:48:"ROLE_YORKU_JUTURNA_ADMIN_TOURISM_COMMENTS_EDITOR";i:111;s:47:"ROLE_YORKU_JUTURNA_ADMIN_TOURISM_COMMENTS_ADMIN";i:112;s:43:"ROLE_YORKU_JUTURNA_ADMIN_MENU_CONTENT_GUEST";i:113;s:43:"ROLE_YORKU_JUTURNA_ADMIN_MENU_CONTENT_STAFF";i:114;s:44:"ROLE_YORKU_JUTURNA_ADMIN_MENU_CONTENT_EDITOR";i:115;s:43:"ROLE_YORKU_JUTURNA_ADMIN_MENU_CONTENT_ADMIN";i:116;s:43:"ROLE_MAP2U_CORE_ADMIN_USER_UPLOADFILE_GUEST";i:117;s:43:"ROLE_MAP2U_CORE_ADMIN_USER_UPLOADFILE_STAFF";i:118;s:44:"ROLE_MAP2U_CORE_ADMIN_USER_UPLOADFILE_EDITOR";i:119;s:43:"ROLE_MAP2U_CORE_ADMIN_USER_UPLOADFILE_ADMIN";i:120;s:32:"ROLE_MAP2U_CORE_ADMIN_LOGO_GUEST";i:121;s:32:"ROLE_MAP2U_CORE_ADMIN_LOGO_STAFF";i:122;s:33:"ROLE_MAP2U_CORE_ADMIN_LOGO_EDITOR";i:123;s:32:"ROLE_MAP2U_CORE_ADMIN_LOGO_ADMIN";i:124;s:45:"ROLE_MAP2U_CORE_ADMIN_UPLOAD_FILE_LAYER_GUEST";i:125;s:45:"ROLE_MAP2U_CORE_ADMIN_UPLOAD_FILE_LAYER_STAFF";i:126;s:46:"ROLE_MAP2U_CORE_ADMIN_UPLOAD_FILE_LAYER_EDITOR";i:127;s:45:"ROLE_MAP2U_CORE_ADMIN_UPLOAD_FILE_LAYER_ADMIN";i:128;s:49:"ROLE_MAP2U_CORE_ADMIN_LEAFLET_CLUSTER_LAYER_GUEST";i:129;s:49:"ROLE_MAP2U_CORE_ADMIN_LEAFLET_CLUSTER_LAYER_STAFF";i:130;s:50:"ROLE_MAP2U_CORE_ADMIN_LEAFLET_CLUSTER_LAYER_EDITOR";i:131;s:49:"ROLE_MAP2U_CORE_ADMIN_LEAFLET_CLUSTER_LAYER_ADMIN";i:132;s:44:"ROLE_MAP2U_CORE_ADMIN_GEO_SERVER_LAYER_GUEST";i:133;s:44:"ROLE_MAP2U_CORE_ADMIN_GEO_SERVER_LAYER_STAFF";i:134;s:45:"ROLE_MAP2U_CORE_ADMIN_GEO_SERVER_LAYER_EDITOR";i:135;s:44:"ROLE_MAP2U_CORE_ADMIN_GEO_SERVER_LAYER_ADMIN";i:136;s:49:"ROLE_MAP2U_CORE_ADMIN_LEAFLET_HEATMAP_LAYER_GUEST";i:137;s:49:"ROLE_MAP2U_CORE_ADMIN_LEAFLET_HEATMAP_LAYER_STAFF";i:138;s:50:"ROLE_MAP2U_CORE_ADMIN_LEAFLET_HEATMAP_LAYER_EDITOR";i:139;s:49:"ROLE_MAP2U_CORE_ADMIN_LEAFLET_HEATMAP_LAYER_ADMIN";i:140;s:40:"ROLE_MAP2U_CORE_ADMIN_THEMATIC_MAP_GUEST";i:141;s:40:"ROLE_MAP2U_CORE_ADMIN_THEMATIC_MAP_STAFF";i:142;s:41:"ROLE_MAP2U_CORE_ADMIN_THEMATIC_MAP_EDITOR";i:143;s:40:"ROLE_MAP2U_CORE_ADMIN_THEMATIC_MAP_ADMIN";i:144;s:43:"ROLE_MAP2U_CORE_ADMIN_USER_DRAW_LAYER_GUEST";i:145;s:43:"ROLE_MAP2U_CORE_ADMIN_USER_DRAW_LAYER_STAFF";i:146;s:44:"ROLE_MAP2U_CORE_ADMIN_USER_DRAW_LAYER_EDITOR";i:147;s:43:"ROLE_MAP2U_CORE_ADMIN_USER_DRAW_LAYER_ADMIN";i:148;s:42:"ROLE_MAP2U_CORE_ADMIN_USER_MAP_SHARE_GUEST";i:149;s:42:"ROLE_MAP2U_CORE_ADMIN_USER_MAP_SHARE_STAFF";i:150;s:43:"ROLE_MAP2U_CORE_ADMIN_USER_MAP_SHARE_EDITOR";i:151;s:42:"ROLE_MAP2U_CORE_ADMIN_USER_MAP_SHARE_ADMIN";i:152;s:34:"ROLE_MAP2U_FORUM_ADMIN_FORUM_GUEST";i:153;s:34:"ROLE_MAP2U_FORUM_ADMIN_FORUM_STAFF";i:154;s:35:"ROLE_MAP2U_FORUM_ADMIN_FORUM_EDITOR";i:155;s:34:"ROLE_MAP2U_FORUM_ADMIN_FORUM_ADMIN";i:156;s:37:"ROLE_MAP2U_FORUM_ADMIN_CATEGORY_GUEST";i:157;s:37:"ROLE_MAP2U_FORUM_ADMIN_CATEGORY_STAFF";i:158;s:38:"ROLE_MAP2U_FORUM_ADMIN_CATEGORY_EDITOR";i:159;s:37:"ROLE_MAP2U_FORUM_ADMIN_CATEGORY_ADMIN";i:160;s:34:"ROLE_MAP2U_FORUM_ADMIN_BOARD_GUEST";i:161;s:34:"ROLE_MAP2U_FORUM_ADMIN_BOARD_STAFF";i:162;s:35:"ROLE_MAP2U_FORUM_ADMIN_BOARD_EDITOR";i:163;s:34:"ROLE_MAP2U_FORUM_ADMIN_BOARD_ADMIN";i:164;s:34:"ROLE_MAP2U_FORUM_ADMIN_TOPIC_GUEST";i:165;s:34:"ROLE_MAP2U_FORUM_ADMIN_TOPIC_STAFF";i:166;s:35:"ROLE_MAP2U_FORUM_ADMIN_TOPIC_EDITOR";i:167;s:34:"ROLE_MAP2U_FORUM_ADMIN_TOPIC_ADMIN";i:168;s:33:"ROLE_MAP2U_FORUM_ADMIN_POST_GUEST";i:169;s:33:"ROLE_MAP2U_FORUM_ADMIN_POST_STAFF";i:170;s:34:"ROLE_MAP2U_FORUM_ADMIN_POST_EDITOR";i:171;s:33:"ROLE_MAP2U_FORUM_ADMIN_POST_ADMIN";i:172;s:41:"ROLE_MAP2U_FORUM_ADMIN_SUBSCRIPTION_GUEST";i:173;s:41:"ROLE_MAP2U_FORUM_ADMIN_SUBSCRIPTION_STAFF";i:174;s:42:"ROLE_MAP2U_FORUM_ADMIN_SUBSCRIPTION_EDITOR";i:175;s:41:"ROLE_MAP2U_FORUM_ADMIN_SUBSCRIPTION_ADMIN";i:176;s:37:"ROLE_MAP2U_FORUM_ADMIN_REGISTRY_GUEST";i:177;s:37:"ROLE_MAP2U_FORUM_ADMIN_REGISTRY_STAFF";i:178;s:38:"ROLE_MAP2U_FORUM_ADMIN_REGISTRY_EDITOR";i:179;s:37:"ROLE_MAP2U_FORUM_ADMIN_REGISTRY_ADMIN";i:180;s:55:"ROLE_MAP2U_FORUM_ADMIN_FREQUENTLY_ASKED_QUESTIONS_GUEST";i:181;s:55:"ROLE_MAP2U_FORUM_ADMIN_FREQUENTLY_ASKED_QUESTIONS_STAFF";i:182;s:56:"ROLE_MAP2U_FORUM_ADMIN_FREQUENTLY_ASKED_QUESTIONS_EDITOR";i:183;s:55:"ROLE_MAP2U_FORUM_ADMIN_FREQUENTLY_ASKED_QUESTIONS_ADMIN";i:184;s:62:"ROLE_MAP2U_FORUM_ADMIN_FREQUENTLY_ASKED_QUESTION_ANSWERS_GUEST";i:185;s:62:"ROLE_MAP2U_FORUM_ADMIN_FREQUENTLY_ASKED_QUESTION_ANSWERS_STAFF";i:186;s:63:"ROLE_MAP2U_FORUM_ADMIN_FREQUENTLY_ASKED_QUESTION_ANSWERS_EDITOR";i:187;s:62:"ROLE_MAP2U_FORUM_ADMIN_FREQUENTLY_ASKED_QUESTION_ANSWERS_ADMIN";i:188;s:10:"ROLE_ADMIN";i:189;s:16:"ROLE_SUPER_ADMIN";i:190;s:22:"ROLE_ALLOWED_TO_SWITCH";}	f	\N	2016-10-25 09:37:39	2016-10-25 10:22:25	\N	Las Nubes Administration	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	bb55f5ac-ec2f-4488-ad6d-836063092699	\N	\N	7200	\N	\N	\N	\N
Willaucky	willaucky	inf@fastshipcialis.com	inf@fastshipcialis.com	t	cj6l44pn4vks8kcss8kk4os4wc4400o	RuXn0GNqrKuuc7sE8Lu756MIzJyhudkGzIUTOrFJVhXOCVbe5GFBYN8ApMBMI6jmoWxQ+hkoVQmEgcm+1uPF3g==	2016-04-17 20:14:31	f	f	\N	\N	\N	a:0:{}	f	\N	2016-03-03 00:40:23	2016-04-17 20:14:31	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	e6836e49-2ab9-4e7e-8512-dcbf6d309206	\N	\N	7200	\N	\N	\N	\N
ChestInvix	chestinvix	vse@fastshipcialis.com	vse@fastshipcialis.com	t	d6sa775r2lcggg8g0kocw8w8o8co8ww	PrgkmVD1AZb35W1HroRAX9NGa9O3ixFeO5t61JTdk8hwfZstfh6kVHvOefXKu9ZGeO5FEjgFMVRJyCApO4oODg==	2016-10-22 10:27:23	f	f	\N	\N	\N	a:0:{}	f	\N	2016-10-22 10:27:21	2016-10-22 10:27:23	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	f749f993-9480-4969-b0da-5fbff23b0621	\N	\N	7200	\N	\N	\N	\N
bunchmj	bunchmj	bunchmj@yorku.ca	bunchmj@yorku.ca	t	oksi0pqyh2os4c8occwkk4s8swc4oww	dCV/n0FamJTVRj6y5xXSO4zGt1ORgzqrEjOz1J2H6IXxlyXQWtBbB2rHMQMxBDkVxrjPJXtGgh+MbqQWYwK62g==	2016-10-25 09:26:52	f	f	\N	\N	\N	a:0:{}	f	\N	2014-02-06 23:45:11	2016-10-25 09:26:52	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	aaae804a-73b7-42f3-9c0f-6fd622c2aed6	\N	\N	7200	\N	\N	\N	\N
Swimmernup	swimmernup	renk@1.aaple.ru	renk@1.aaple.ru	t	4byf99jzmvy8w48k80gows4g4o4o0ok	TdbtElftNYG2L5n65knuM71U76e5RnjoOPG9JIQcY5qbNTfjaBCswV3ZCYbEp6TxjT0dUVdYJOg5T4oYeblMJQ==	2017-07-03 00:07:12	f	f	\N	\N	\N	a:0:{}	f	\N	2017-07-03 00:07:09	2017-07-03 00:07:12	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	2bffc732-c26a-410f-a8ee-d6cdeb0fe10f	37.147.108.24	\N	\N	865gjqesnmk4r1ljicfq80jsd3	2017-07-03 00:07:11	2017-07-03	\N
Kennpymn	kennpymn	emailk@try-rx.com	emailk@try-rx.com	t	1kg8v180qwv4k0k0wkk488kk4wsw8s0	OJw7if6yXQINGWQZvlWO+edoKg0mPZQePhlfMgy16geWD/aE+w9PgS6KfWpfbe0bQrQMhSzk7Bo6AkgYCENniQ==	2017-05-05 00:15:19	f	f	\N	\N	\N	a:0:{}	f	\N	2017-05-05 00:15:17	2017-05-05 00:15:19	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	c63e7690-1ec1-40c5-bc80-efb50a92ae76	31.184.238.221	\N	\N	7v0914rcshsftlii186kukrub4	2017-05-05 00:15:18	2017-05-05	\N
ThomThEst	thomthest	petya@domainseoforum.com	petya@domainseoforum.com	t	lnuqrgkx1u8804ccow4g4c0kscs8880	iGNwv6waDMWRx52BqsRbVHf6l4nApUU2l6RvFJYxjMDmNdGT7qUlcfQxomSNEd2Sad65mnxeqpMzUQzZHMkN6A==	2017-02-02 03:56:40	f	f	\N	\N	\N	a:0:{}	f	\N	2017-02-02 03:56:37	2017-02-02 03:56:40	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	105ac379-4704-4c3e-b608-742af9ac20bf	146.185.223.111	\N	\N	actoob7eoe3l2i1p37l9hvo2s4	2017-02-02 03:56:39	2017-02-02	\N
Branchoife	branchoife	email@emailvam.xyz	email@emailvam.xyz	t	ehp92iosw1wg0okckoogwko8cckgs4g	S+P+9ZWf/7rIqr2i6rw+Kuctobc8OZOJWsreurDI01Dp3/FoXYoywOHINHZ5nk/25AuUjrmb/v1qg4ldSEwE6g==	2017-02-17 00:39:24	f	f	\N	\N	\N	a:0:{}	f	\N	2017-02-17 00:39:22	2017-02-17 00:39:24	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	922558be-9f4e-4d20-b903-7abcb003a609	146.185.223.45	\N	\N	8sf4sd9ucvb15guj9rci4pek02	2017-02-17 00:39:23	2017-02-17	\N
DavStake	davstake	posmen@try-rx.com	posmen@try-rx.com	t	ckbr1nm1yu0ccwkw00s4wgwgocko0o4	DmqGUG6eCnHry5uVUzNMI5EOKR7ReBNTOcnUk0NEyyVz8vqscx/XrDewdYPyJcwPMLHI+gOnU/Bvg/ElHqjHUA==	2017-05-07 15:02:39	f	f	\N	\N	\N	a:0:{}	f	\N	2017-05-07 15:02:37	2017-05-07 15:02:39	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	86e007b0-8e4d-42a4-aa3d-2affe9fca825	31.184.238.221	\N	\N	9upnigmlkearqnje5uf4a14e24	2017-05-07 15:02:38	2017-05-07	\N
Kostyanup	kostyanup	b.a.ly.asovkon.s.t.anti.n75@gmail.com	b.a.ly.asovkon.s.t.anti.n75@gmail.com	t	s13f4g93ylwccg004g808s4osg4ogww	/HTq9GafeF4DBTJelX3LEqfCyJWAcj8O23cWdYVbhE3hU+kd8NMcDjFGRLotqYwWhpezAB9aBYUU/an6/CM0fw==	2017-05-18 10:49:56	f	f	\N	\N	\N	a:0:{}	f	\N	2017-04-08 09:43:25	2017-05-18 10:49:57	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	989ea00d-e013-4745-85da-547ef68c3e75	185.26.113.145	185.26.112.163	\N	gtnkekrcivn09n7enhmthi0l10	2017-05-18 10:49:57	2017-05-18	2017-04-08 00:00:00
Dannymor	dannymor	emaproschbcxr@yahoo.com	emaproschbcxr@yahoo.com	t	hvat7h97llw0gkoosgc44cgw40cwgk8	PiQt1NyuZ+QFWgSwfHTPE/3DdXe40KkAuwux50a8kLD+OZ1kkNJzyesZdn34kPVC3sWDPEJZ7xLA6utXDOhcPg==	2017-06-27 08:46:39	f	f	\N	\N	\N	a:0:{}	f	\N	2017-06-27 08:46:36	2017-06-27 08:46:39	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	7fb6ea21-b6a2-41ec-a5c9-7b16edd15f0a	146.185.223.114	\N	\N	j4o42sqv2p7qgd3677sct4dkb4	2017-06-27 08:46:38	2017-06-27	\N
admin	admin	zhaoshuilin2004@yahoo.ca	zhaoshuilin2004@yahoo.ca	t	7kttako37dc84kosgs8s48g4oo40o4o	8oQeAUxPN2AbtsnfpgeC21mJTQ1KwHzFyQmMrbiTLpLdq5ZvmCY4gknrJlNKwd6QUnQ8WPjr4uld1/D8vOxdXg==	2018-01-11 17:41:26	f	f	\N	\N	\N	a:3:{i:0;s:16:"ROLE_SUPER_ADMIN";i:1;s:11:"ROLE_SONATA";i:2;s:17:"ROLE_SONATA_ADMIN";}	f	\N	2014-01-17 00:08:07	2018-01-13 22:18:38	\N	\N	\N	\N	\N	u	\N	\N	\N	\N	\N	null	\N	\N	null	\N	\N	null	\N	\N	\N	67987ca8-f482-48e9-99a4-fb42c5f55a00	::1	::1	7200	23cef119-28f4-4e20-be77-b6ac5513f06d	2018-01-13 22:18:38	2018-01-11	2018-01-10 00:00:00
\.


--
-- Name: fos_user_user fos_user_user_pkey; Type: CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY fos_user_user
    ADD CONSTRAINT fos_user_user_pkey PRIMARY KEY (id);


--
-- Name: idx_c560d7611fb354cd; Type: INDEX; Schema: public; Owner: jzhao
--

CREATE INDEX idx_c560d7611fb354cd ON fos_user_user USING btree (membership_id);


--
-- Name: uniq_c560d76192fc23a8; Type: INDEX; Schema: public; Owner: jzhao
--

CREATE UNIQUE INDEX uniq_c560d76192fc23a8 ON fos_user_user USING btree (username_canonical);


--
-- Name: uniq_c560d761a0d96fbf; Type: INDEX; Schema: public; Owner: jzhao
--

CREATE UNIQUE INDEX uniq_c560d761a0d96fbf ON fos_user_user USING btree (email_canonical);


--
-- Name: fos_user_user fk_c560d7611fb354cd; Type: FK CONSTRAINT; Schema: public; Owner: jzhao
--

ALTER TABLE ONLY fos_user_user
    ADD CONSTRAINT fk_c560d7611fb354cd FOREIGN KEY (membership_id) REFERENCES user_membership(id);


--
-- PostgreSQL database dump complete
--

