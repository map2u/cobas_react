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
-- Name: bird_species; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE bird_species2 (
    id integer NOT NULL,
    code character varying(8) DEFAULT NULL::character varying,
    species_name character varying(255) NOT NULL,
    images text,
    videos text,
    audios text,
    description text,
    iucn character varying(25)
);



COPY bird_species2 (id, code, species_name, images, videos, audios, description, iucn) FROM stdin;
12	\N	Dendrocolaptes cerita	\N	\N	\N		
230	\N	Myiobius sulphureipygius	\N	\N	\N		
231	\N	Pyrrhura hoffmanni	\N	\N	\N		
232	\N	Piranga rubra	\N	\N	\N		
15	\N	Amazilia decora	a:1:{i:0;s:19:"Amazilia decora.bmp";}	a:0:{}	a:0:{}	Found in Costa Rica and Panama. Its natural habitats are subtropical or tropical moist lowland forests and heavily degraded former forest. Source	LC 2012
25	\N	Arremonops conirostris	a:1:{i:0;s:26:"Arremonops conirostris.bmp";}	a:0:{}	a:0:{}	A passerine bird which breeds from northern Honduras to western Ecuador, northern Brazil and Venezuela.	LC 2012
22	\N	Atlapetes gutturalis	a:1:{i:0;s:24:"Atlapetes gutturalis.bmp";}	a:0:{}	a:0:{}	Lives in humid mountain forests and scrub areas from 1 500 to 3 000 m asl, from the southern tip of Mexico (southern Chiapas ) to Colombia . It feeds the bushes and trees, eat insects and other arthropods and small fruits.	Not assessed
21	\N	Chamaepetes unicolor	a:1:{i:0;s:24:"Chamaepetes unicolor.bmp";}	a:0:{}	a:0:{}	It is found in Costa Rica and Panama. Its natural habitat is subtropical or tropical moist montane forests. It is threatened by habitat loss. This species is listed as Near Threatened because it occupies a small range, in which it is threatened by hunting and limited habitat loss and degradation.	NT 2012
7	\N	Coereba flaveola	a:1:{i:0;s:20:"Coereba flaveola.bmp";}	a:0:{}	a:0:{}	It has recently been suggested the Bananaquit should be split into three species, but this has yet to receive widespread recognition. This small, active nectarivore is found in warmer parts of the Americas, and is generally common.	LC 2012
8	\N	Columba fasciata	a:1:{i:0;s:20:"Columba fasciata.bmp";}	a:0:{}	a:0:{}	is a medium-sized bird of the Americas. Its closest relatives are the Chilean Pigeon and the Ring-tailed Pigeon, which form a clade of Patagioenas with a terminal tail band and iridescent plumage on their necks.	Not assessed
29	\N	Coragyps atratus	a:1:{i:0;s:20:"Coragyps atratus.bmp";}	a:0:{}	a:0:{}	The Black Vulture also known as the American Black Vulture, is a bird in the New World vulture family whose range extends from the southeastern United States to Central Chile and Uruguay in South America. It inhabits relatively open areas which provide scattered forests or shrublands.	LC 2012
32	\N	Cyanocomps Cyanoides	a:1:{i:0;s:25:"Cyanocompsa Cyanoides.bmp";}	a:0:{}	a:0:{}	It is found in Belize, Bolivia, Brazil, Colombia, Costa Rica, Ecuador, French Guiana, Guatemala, Guyana, Honduras, Mexico, Nicaragua, Panama, Peru, Suriname, and Venezuela.	LC 2012
4	\N	Elanoides forficatus	a:1:{i:0;s:24:"Elanoides forficatus.bmp";}	a:0:{}	a:0:{}	An elanid kite which breeds from the southeastern United States to eastern Peru and northern Argentina. Most North and Central American breeders winter in South America where the species is resident year round.	LC 2012
13	\N	Falco rufigularis	a:1:{i:0;s:21:"Falco rufigularis.bmp";}	a:0:{}	a:0:{}	Is a falcon that is a resident breeder in tropical Mexico, Central and South America and Trinidad. It was long known asFalco albigularis	LC 2012
19	\N	Formicarius analis	a:1:{i:0;s:22:"Formicarius analis.bmp";}	a:0:{}	a:0:{}	It is a common and widespread forest bird in the tropical New World, from southern Mexico through Central America to the northern regions of South America.	LC 2012
6	\N	Icterus g. galbula	a:1:{i:0;s:22:"Icterus g. galbula.bmp";}	a:0:{}	a:0:{}	Baltimore orioles are neotropical migrants. They prefer open woods, with a strong preference for deciduous over coniferous trees.	Not assessed
20	\N	Myadestes melanops	a:1:{i:0;s:22:"Myadestes melanops.bmp";}	a:0:{}	a:0:{}	A bird in the thrush family endemic to highlands in Costa Rica and western Panama.	LC 2012
10	\N	Micrastur ruficollis	a:1:{i:0;s:24:"Micrastur ruficollis.bmp";}	a:0:{}	a:0:{}	It occurs throughout most of tropical and subtropical Latin America, except the arid Pacific coast in South America, northern and western Mexico, and the Antilles.	LC 2012
26	\N	Myiobius atricaudus	a:1:{i:0;s:23:"Myiobius atricaudus.bmp";}	a:0:{}	a:0:{}	It is found in Brazil, Colombia, Costa Rica, Ecuador, Panama, Peru, and Venezuela.	LC 2012
30	\N	Notiochelidon cyanoleuca*	a:1:{i:0;s:28:"Notiochelidon cyanoleuca.bmp";}	a:0:{}	a:0:{}	A passerine bird that breeds from Nicaragua south throughout South America, except in the deserts and the Amazon Basin. The southern race is migratory, wintering as far north as Trinidad, where it is a regular visitor. The nominate northern race may have bred on that island.	Not assessed
24	\N	Sayornis nigricans	a:1:{i:0;s:22:"Sayornis nigricans.bmp";}	a:0:{}	a:0:{}	It breeds from southwest Oregon and California south through Central and South America. It occurs year-round throughout most of its range and migrates less than the other birds in its genus, though its northern populations are partially migratory.	LC 2012
3	\N	Setophaga rutinilla	a:1:{i:0;s:23:"Setophaga rutinilla.bmp";}	a:0:{}	a:0:{}	Alaska to s US; winters s US to n South America and West Indies	Not assessed
14	\N	Tangara gyrola	a:1:{i:0;s:18:"Tangara gyrola.bmp";}	a:0:{}	a:0:{}	This tanager is a resident breeder in Costa Rica, Panama, South America south to Ecuador, Bolivia and southern Brazil, and on Trinidad.	LC 2012
23	\N	Thamnophilus bridgesi	a:1:{i:0;s:25:"Thamnophilus bridgesi.bmp";}	a:0:{}	a:0:{}	It is found in Costa Rica and Panama. Its natural habitats are subtropical or tropical moist lowland forests, subtropical or tropical mangrove forests, and heavily degraded former forest.	LC 2012
18	\N	Tityra inquisitor	a:1:{i:0;s:21:"Tityra inquisitor.bmp";}	a:0:{}	a:0:{}	It is found in Argentina, Belize, Bolivia, Brazil, Colombia, Costa Rica, Ecuador, French Guiana, Guatemala, Guyana, Honduras, Mexico, Nicaragua, Panama, Paraguay, Peru, Suriname, Trinidad and Tobago, and Venezuela. Its natural habitats are subtropical or tropical moist lowland forests and heavily degraded former forest.	LC 2012
5	\N	Trogon Bairdii	a:1:{i:0;s:18:"Trogon Bairdii.bmp";}	a:0:{}	a:0:{}	It is found in Costa Rica and Panama. Its natural habitat is subtropical or tropical moist lowland forests. It is threatened by habitat loss due to deforestation for timber and agriculture and its current status is near threatened.	NT 2012
27	\N	Trogon rufus	a:1:{i:0;s:16:"Trogon rufus.bmp";}	a:0:{}	a:0:{}	It is also called Yellow-bellied Trogon, but as it is not the only trogon with a yellow belly this should be avoided. It breeds in lowlands from Honduras south to western Ecuador and northern Argentina.	LC 2012
31	\N	Volatinia jacarina	a:1:{i:0;s:22:"Volatinia jacarina.bmp";}	a:0:{}	a:0:{}	It breeds from southern Mexico through Central America, and South America as far as northern Chile, Argentina and Paraguay, and on Trinidad and Tobago.	LC 2012
39	\N	Euphonia elegans  	\N	\N	\N		Not assessed
42	\N	Myophobus fasciatus	\N	\N	\N		Not assessed
44	\N	Buteo platypterus	\N	\N	\N	During the summer some subspecies are distributed over eastern North America, as far west as British Columbia and Texas; they then migrate south to winter in the neotropics from Mexico down to southern Brazil.	LC 2012
247	\N	Catarthes aura	\N	\N	\N		
248	\N	Cotinga ridgwayi	\N	\N	\N		
249	\N	Sporophila aurita	\N	\N	\N		
48	\N	Vireo leucophyris	\N	\N	\N	It breeds in highlands from southern Mexico south to northwestern Bolivia. It is sometimes considered to be conspecific with the similar Warbling Vireo.	Not assessed
49	\N	Pionopsitta haematotis	\N	\N	\N	A small parrot which is a resident breeding species from southeastern Mexico to north-western Colombia. 	Not assessed
50	\N	Cianocorax morio	\N	\N	\N	 It occurs from Mexico south into Central America on the Gulf slope.	Not assessed
51	\N	Colibr  delphinae	\N	\N	\N	a large hummingbird that breeds at middle elevations in the mountains in Central America, and western and northern South America (primarily the Andes and the Tepuis) with isolated populations on Trinidad and in the Brazilian state Bahia.	LC 2012
52	\N	Dendrortyx leucophrys	\N	\N	\N	 It is found in Costa Rica, El Salvador, Guatemala, Honduras, Mexico, and Nicaragua. Its natural habitat is subtropical or tropical moist montane forests.	LC 2012
53	\N	Geotrygon costaricensis	\N	\N	\N	It is found in Costa Rica and Panama. Its natural habitat is subtropical or tropical moist montane forests.	LC 2012
54	\N	Phaeothlypis fulvicauda	\N	\N	\N	 A New World warbler is a resident bird from Honduras south to northwestern Peru and disjunctly in the western Amazon. It is found in forests at up to 1500 m altitude, always near water.	LC 2012
55	\N	Automolus ochroleucus	\N	\N	\N		Not assessed
56	\N	Saltator maximus	\N	\N	\N	 It breeds from southeastern Mexico to western Ecuador and northeastern Brazil.	LC 2012
57	\N	Xiphorhynchus guttatus	\N	\N	\N	 A resident passerine bird found in tropical South America in the Guiana Shield and disjunctly in the northern Atlantic Forest. It formerly included the Cocoa Woodcreeper and the Lafresnaye's Woodcreeper as subspecies. Some authorities retain Lafresnaye's position as a subspecies of the Buff-throated Woodcreeper, but the resulting group is polyphyletic	LC 2012
58	\N	Wilsonia canadensis	\N	\N	\N	These birds migrate to northern South America, and are very rare vagrants to WesternEurope.	LC 2012
59	\N	Bubulcus ibis	\N	\N	\N	 A cosmopolitan species of heron (family Ardeidae) found in the tropics, subtropics and warm temperate zones.	LC 2012
60	\N	Myrmeciza exsul	\N	\N	\N	It is found in humid forests in Central and South America (Choc -Magdalena), ranging from eastern Nicaragua to western Ecuador. It mainly occurs in lowlands up to an altitude of 900 metres (3,000 ft) m, but locally it occurs higher.	LC 2012
61	\N	Psarocolius wagleri	\N	\N	\N	The populations south of an area around the border of Honduras and Nicaragua are sometimes separated as asubspecies P. w. ridgwayi, but the separation of this form has been questioned.	LC 2012
62	\N	Ramphastos swainsonii	\N	\N	\N	 A near-passerine bird which breeds from eastern Honduras to northern Colombia to western Ecuador. This subspecies is replaced from southern Colombia to eastern Peru by the nominate subspecies Black-mandibled Toucan, R. ambiguus ambiguus.	LC 2012
63	\N	dendroica pensylvanica	\N	\N	\N	 They breed in eastern North America and in southern Canada westwards to the Canadian Prairies. They also breed in the Great Lakes region and in the eastern USA.	LC 2012
64	\N	Atlapetes brunneinucha	\N	\N	\N	 A passerine bird which breeds in highlands from central Mexico to southeastern Peru. 	Not assessed
65	\N	Turdus grayi	\N	\N	\N	 It is the national bird of Costa Rica, where it is well known as the yig irro. Other common names include Clay-colored Robin. 	LC 2012
66	\N	Trogon collaris	\N	\N	\N	It is found in the warmer parts of the Neotropics, and includes numerous subspecies, including T. c. exoptatus from northern Colombia, northern Venezuela and Trinidad and Tobago.	LC 2012
67	\N	Butheogallus anthracinus	\N	\N	\N	The Common Black Hawk is a breeding bird in the warmer parts of the Americas, from the Southwestern United States throughCentral America to Venezuela, Peru, Trinidad and the Lesser Antilles. It is a mainly coastal, resident bird of mangrove swamps, estuaries and adjacent dry open woodland, though there are inland populations, including a migratory population in north-westernMexico and Arizona.	Not assessed
68	\N	Chlorospingus ophtalmicus	\N	\N	\N	This bird is typically found from 400 m to 2,300 m ASL in Middle America; near the Equator they are common found at altitudes of 2,000 3,500 m ASL.[2] Its habitat   cloud forests with ample undergrowth and adjacent bushy clearings	Not assessed
69	\N	Nyctidromus albicollis	\N	\N	\N	 It breeds in the subtropical and tropical of the New World, and except for northernmost birds it is largely resident all year round.	LC 2012
233	\N	Buteo swansonii	\N	\N	\N		
234	\N	Catharus ustulatus	\N	\N	\N		
235	\N	Hylophilus ochraceiceps	\N	\N	\N		
34	\N	Pipra coronata	a:1:{i:0;s:18:"Pipra coronate.bmp";}	a:0:{}	a:0:{}	It is found in Bolivia, Brazil, Colombia, Costa Rica, Ecuador, Panama, Peru, and Venezuela. Its natural habitats are subtropical or tropical moist lowland forests and heavily degraded former forest.	Not assessed
35	\N	Momotus momota	a:1:{i:0;s:18:"Momotus momota.bmp";}	a:0:{}	a:0:{}	A colourful near-passerine bird found in forests and woodlands of eastern Mexico, Central America, northern and central South America, and Trinidad and Tobago.	LC 2012
37	\N	Claravis pretiosa	a:1:{i:0;s:21:"Claravis pretiosa.bmp";}	a:0:{}	a:0:{}	It is a resident breeder from southeastern Mexico to northwestern Peru and northern Argentina, and on Trinidad.	LC 2012
40	\N	Hylocharis eliciae	a:1:{i:0;s:22:"Hylocharis eliciae.bmp";}	a:0:{}	a:0:{}	It is found in Belize, Colombia, Costa Rica, El Salvador, Guatemala, Honduras, Mexico, Nicaragua, and Panama. Its natural habitats are subtropical or tropical moist lowland forests and heavily degraded former forest.	LC 2012
41	\N	Megarhynchus pitangua	a:1:{i:0;s:25:"Megarhynchus pitangua.bmp";}	a:0:{}	a:0:{}	It breeds in open woodland with some tall trees from Mexico south to Bolivia and Argentina, and through to Trinidad.	Not assessed
45	\N	Molothrus aeneus	a:1:{i:0;s:20:"Molothrus aeneus.bmp";}	a:0:{}	a:0:{}	It breeds from the southern U.S. states of California, Arizona, New Mexico, Texas, and Louisiana south through Central America to Panama.	LC 2012
46	\N	Glaucis aenea	a:1:{i:0;s:17:"Glaucis aenea.bmp";}	a:0:{}	a:0:{}	It is found in forests and thickets from eastern Honduras south to western Panama, and in the Choc  of western Colombia and north-western Ecuador. It closely resembles the larger Rufous-breasted Hermit.	Not assessed
47	\N	Campylorhamphus pusillus	a:1:{i:0;s:28:"Campylorhamphus pusillus.bmp";}	a:0:{}	a:0:{}	It is found in Colombia, Costa Rica, Ecuador, Panama, Peru, and Venezuela.	LC 2012
70	\N	Todirostrum sylvia	\N	\N	\N	 It is found in Belize, Brazil, Colombia, Costa Rica, French Guiana, Guatemala, Guyana, Honduras, Mexico, Nicaragua, Panama, and Venezuela.	Not assessed
71	\N	Accipiter cooperi	\N	\N	\N	Cooper's Hawk is a medium-sized hawk native to the North American continent and found from Southern Canada to Northern Mexico. As in many birds of prey, the male is smaller than the female.	Not assessed
225	\N	Lepidoclaptes souleyetii	\N	\N	\N		
226	\N	Saltator albicollis	\N	\N	\N		
72	\N	Polyborus plancus	\N	\N	\N	The Southern Crested Caracara occurs from Tierra del Fuego in southernmost South America north to the Amazon River region and southern Peru.	Not assessed
73	\N	Pen lope purpurascens	\N	\N	\N	It breeds in lowlands from south Mexico and the Yucat n Peninsula to western Ecuador and southern Venezuela at up to 1850 m altitude.	LC 2012
74	\N	Spizaetus ornatus* 	\N	\N	\N	This bird is found in humid tropical forests from southern Mexico and the Yucat n Peninsula, to Trinidad and Tobago, south to Peru and Argentina.	NT 2012
75	\N	Aratinga finschi	\N	\N	\N	 It is found in Guatemala, El Salvador, Nicaragua, and some parts of Costa Rica and Panama. Its natural habitats are subtropical or tropical moist lowland forests and heavily degraded former forest.	LC 2012
76	\N	Microrhopias quixensis	\N	\N	\N	It is a resident in tropical Central and South America from southeastern Mexico south to western Ecuador, northern Bolivia and central Brazil.	LC 2012
77	\N	Harpagus bidentatus	\N	\N	\N	 It is found in Belize, Bolivia, Brazil, Colombia, Costa Rica, Ecuador, El Salvador, French Guiana, Guatemala, Guyana, Honduras, Mexico, Nicaragua, Panama, Peru, Suriname, Trinidad and Tobago, and Venezuela. 	LC 2012
78	\N	Cercomacra tyrannina   	\N	\N	\N	 It is a resident breeder in tropical Central and South America from southeastern Mexico southwards to western Ecuador, and Amazonian Brazil.	LC 2012
79	\N	Myiarchus tuberculifer	\N	\N	\N	t breeds in forest and other woodland from southern Arizona, as well as the Chisos Mountains, Texas, south to northern Argentina and on Trinidad. It is resident in most of its range, but American breeders retreat to Mexico in winter.	LC 2012
80	\N	Sturnella  magna* 	\N	\N	\N	 It occurs from eastern North America to South America, where it is also most widespread in the east.	LC 2012
81	\N	Contopus virens 	\N	\N	\N	Their breeding habitat is deciduous, mixed woods, or pine plantations in eastern North America. These birds migrate to Central America and in the Andes region of northernSouth America. 	LC 2012
82	\N	Aulacorhynchus prasinus	\N	\N	\N	 A near-passerine bird occurring in mountainous regions from Mexico, through Central America, to northern Venezuela and along the Andes as far south as central Bolivia. 	LC 2012
83	\N	Rhynchocyclus brevirostris	\N	\N	\N	 It is found in Belize, Colombia, Costa Rica, El Salvador, Guatemala, Honduras, Mexico, Nicaragua, and Panama. Its natural habitats are subtropical or tropical moist lowland forests and subtropical or tropical moist montane forests.	LC 2012
84	\N	Tigrisoma fasciatum	\N	\N	\N	 It is native to Argentina, Bolivia, Brazil, Colombia, Costa Rica, Ecuador, Mexico, Panama, Peru, and Venezuela, and a vagrant in Nicaragua. Its natural habitat is rivers.	LC 2012
85	\N	Pteroglossus frantzii	\N	\N	\N	It breeds only on the Pacific slopes of southern Costa Rica and western Panama.	LC 2012
86	\N	Chlorostilbon canivete	\N	\N	\N		Not assessed
87	\N	Tyrannus savanna*	\N	\N	\N	Central and s S America and Falkland Is.; winters to West Indies	Not assessed
88	\N	Chlorophonia callophrys	\N	\N	\N	 It is found in Costa Rica and Panama. Its natural habitat is subtropical or tropical moist montane forests. 	LC 2012
89	\N	Platyrinchus coronatus	\N	\N	\N	 It is found in Bolivia, Brazil, Colombia, Costa Rica, Ecuador, French Guiana, Guyana, Honduras, Nicaragua, Panama, Peru, Suriname, and Venezuela. Its natural habitat is subtropical or tropical moist lowland forests.	LC 2012
90	\N	Basileuterus culicivorus	\N	\N	\N	It breeds from Mexico and south through Central America to northeastern Argentina and Uruguay, and on Trinidad. It is a species mainly of lowland forests.	LC 2012
91	\N	Tangara larvata	\N	\N	\N	This tanager is a resident breeder from southern Mexico south to western Ecuador. 	LC 2012
92	\N	Melanerpes chyrsauchen	\N	\N	\N	 Is found from sw. Costa Rica to w. Panama.	Not assessed
93	\N	Vermivora chrysoptera	\N	\N	\N	It breeds in southeastern and south-central Canada and the Appalachian Mountains northeastern to north-central USA. The majority (~70%) of the global population breeds in Wisconsin, Minnesota, and Manitoba. Golden-winged Warbler populations are slowly expanding northwards, but are generally declining across its range, most likely as a result of habitat loss and competition/interbreeding with the very closely related Blue-winged Warbler, Vermivora cyanoptera. 	NT 2012
94	\N	Henicorhina leucophrys	\N	\N	\N	 It is found at low levels in wooded montane areas of Bolivia, Peru, Ecuador, Colombia, Venezuela, Panama, Costa Rica, Nicaragua, Honduras, El Salvador, Guatemala and Mexico.	LC 2012
95	\N	Myiarchus crinitus	\N	\N	\N	It is the most widespread member of the genus, Myiarchus, in North America and is found over most of the eastern and mid-western portions of the continent. It dwells mostly in the treetops and rarely is found on the ground. 	LC 2012
96	\N	catharus minimus	\N	\N	\N	 The Grey-cheeked Thrush is all but indistinguishable from Bicknell's Thrush except by its slightly larger size and different song. The two were formerly considered conspecific. 	LC 2012
97	\N	Leptotila cassini	\N	\N	\N	 It is found in Belize, Colombia, Costa Rica, Guatemala, Honduras, Mexico, Nicaragua, and Panama.	LC 2012
98	\N	Geothlypis poliocephala	\N	\N	\N	It is found in Belize, Costa Rica, El Salvador, Guatemala, Honduras, Mexico, Nicaragua, Panama, and the United States. Its natural habitats are subtropical or tropical moist shrubland and heavily degraded former forest.	LC 2012
99	\N	Buteo nitidus	\N	\N	\N	The Grey-lined Hawk is found from southern Costa Rica to Argentina.	LC 2012
100	\N	Ortalis cinereiceps	\N	\N	\N	 It breeds in lowlands from eastern Honduras to northwestern Colombia (from South Choc  to the upper Atrato) at up to 1100 m altitude.	LC 2012
101	\N	Leptodon cayanensis	\N	\N	\N	 It shares the genus Leptodon with the extremely rare White-collared Kite. It breeds from eastern Mexico and Trinidad south to Peru, Bolivia, Brazil and northern Argentina.	LC 2012
102	\N	Eucometis penicillata	\N	\N	\N	It is found in Belize, Bolivia, Brazil, Colombia, Costa Rica, Ecuador, French Guiana, Guatemala, Guyana, Honduras, Mexico,Nicaragua, Panama, Paraguay, Peru, Suriname, and Venezuela. Its natural habitats are subtropical or tropical moist lowland forests, subtropical or tropical swamps, and heavily degraded former forest.	LC 2012
103	\N	Aramides cajanea	\N	\N	\N	. It is found in Argentina, Belize, Bolivia, Brazil, Colombia, Costa Rica, Ecuador, El Salvador, French Guiana, Guatemala, Guyana,	Not assessed
104	\N	Buteogallus urubitinga	\N	\N	\N	The Great Black Hawk is a resident breeding bird in the tropical New World, from Mexicothrough Central America to Peru, Trinidad and northern Argentina.	LC 2012
105	\N	Casmerodius albus	\N	\N	\N	 Distributed across most of the tropical and warmer temperate regions of the world, in southern Europe it is rather localized. 	LC 2012
227	\N	Hyloctistes subulatus	\N	\N	\N		
228	\N	Tapera naevia*	\N	\N	\N		
229	\N	Myiodynastes luteiventris	\N	\N	\N		
236	\N	Sclerurus mexicanus	\N	\N	\N		
237	\N	Dendrocincla anabatina	\N	\N	\N		
238	\N	Vermivora peregrina	\N	\N	\N		
239	\N	Oryzoborus funererus	\N	\N	\N		
106	\N	Pitangus sulphuratus	\N	\N	\N	It breeds in open woodland with some tall trees, including cultivation and around human habitation, from the Lower Rio Grande Valley in southern Texas and northern Mexico south to Uruguay, but also it occurs all over Brazil (specially the central and south-southeastern regions), Paraguay and central Argentina, the Guyana coastline, and on Trinidad.	LC 2012
107	\N	Tinamus major	\N	\N	\N	The Great Tinamou (Tinamus major) also called Mountain hen is a species of tinamou ground bird native to Central and South America.	NT 2012
250	\N	Catharus fuscescens 	\N	\N	\N		
108	\N	Heliodoxa jacula	\N	\N	\N	The Green-crowned Brilliant (Heliodoxa jacula) is a large robust hummingbird that is a resident breeder in the highlands from Costa Rica to western Ecuador. 	LC 2012
109	\N	Dor fera ludoviciae	\N	\N	\N		Not assessed
110	\N	Phaethornis guy	\N	\N	\N	 Is a resident breeder from southern Central America (Costa Rica and Panama) south to northwestern South America (northeastern Venezuela and Trinidad and the northern Andes to eastern Peru)	LC 2012
111	\N	Chlorophanes spiza	\N	\N	\N	It is found in the tropical New World from southern Mexico south to Brazil, and on Trinidad. It the only member of the genus Chlorophanes. 	LC 2012
112	\N	Chloroceryle americana*	\N	\N	\N	a resident breeding bird which occurs from southern Texas in the USA south through Central and South America to central Argentina.	LC 2012
113	\N	Vireolanius pulcellus	\N	\N	\N		Not assessed
114	\N	Colibr  thalassinus	\N	\N	\N		
115	\N	Myiopagis viridicata	\N	\N	\N		
116	\N	Lampornis cinereicauda	\N	\N	\N		
117	\N	Piranga flava	\N	\N	\N		
118	\N	Troglodytes aedon	\N	\N	\N		
119	\N	Myrmeciza immaculata	\N	\N	\N		
120	\N	Oporornis formosus	\N	\N	\N		
121	\N	Sarcoramphus papa	\N	\N	\N		
122	\N	Herpetotheres cachinnans	\N	\N	\N		
123	\N	Elania chiriquensis	\N	\N	\N		
124	\N	Hylophilus decurtatus	\N	\N	\N		
125	\N	Syndactyla subalaris	\N	\N	\N		
126	\N	Dryocopus lineatus	\N	\N	\N		
127	\N	Egretta caerulea*	\N	\N	\N		
128	\N	Phathornis longuemareus	\N	\N	\N		
129	\N	Crypturellus soui	\N	\N	\N		
130	\N	Ramphocaenus melanurus	\N	\N	\N		
131	\N	Heliomaster longirostris	\N	\N	\N		
132	\N	Phaethornis superciliosus	\N	\N	\N		
133	\N	Ptilogonys Caudatus	\N	\N	\N		
134	\N	Seiurus motacilla	\N	\N	\N		
135	\N	Calliphlox bryantae	\N	\N	\N		
136	\N	Eugenes fulgens	\N	\N	\N		
137	\N	Tityra semifasciata	\N	\N	\N		
138	\N	Zimmerius vilissimus	\N	\N	\N		
139	\N	Elania Frantzii	\N	\N	\N		
140	\N	Oporornis philadelphia	\N	\N	\N		
141	\N	Oncostoma cinereigulare	\N	\N	\N		
142	\N	Porphyrula martinica*	\N	\N	\N		
143	\N	Seiurus noveboracensis	\N	\N	\N		
144	\N	Mionectes oleagineus	\N	\N	\N		
145	\N	Picumnus olivaceus	\N	\N	\N		
146	\N	Contopus borealis	\N	\N	\N		
147	\N	Mionectes olivaceus	\N	\N	\N		
148	\N	Catharus aurantiirostris	\N	\N	\N		
149	\N	Arremon aurantiirostris	\N	\N	\N		
150	\N	Brotogeris jugularis	\N	\N	\N		
151	\N	Manacus aurantiacus	\N	\N	\N		
152	\N	Seiurus aurocapillus	\N	\N	\N		
153	\N	Passerina ciris	\N	\N	\N		
154	\N	Camphepilus guatemalensis	\N	\N	\N		
155	\N	Tharaupis palmarum	\N	\N	\N		
156	\N	Vireo philadelphicus	\N	\N	\N		
157	\N	Legatus leucophaius	\N	\N	\N		
158	\N	Dhsithamnus mentalis	\N	\N	\N		
159	\N	Dendrocincula fuliginosa	\N	\N	\N		
160	\N	Heliomaster constantii	\N	\N	\N		
161	\N	Thyrothorus modestus	\N	\N	\N		
162	\N	Xenops minutus	\N	\N	\N		
163	\N	Heliothrix barroti	\N	\N	\N		
164	\N	Lampornis calolaema	\N	\N	\N		
165	\N	Pipra mentalis	\N	\N	\N		
166	\N	Habia rubica	\N	\N	\N		
167	\N	Melanerpes rubricapillus	\N	\N	\N		
168	\N	Vireo olivaceous	\N	\N	\N		
169	\N	Eubucco bouricierii	\N	\N	\N		
170	\N	Cyanerpes cyaneus	\N	\N	\N		
171	\N	Amazona autumnalis	\N	\N	\N		
172	\N	Buteo Jamaicensis*	\N	\N	\N		
173	\N	Ceryle torquita	\N	\N	\N		
174	\N	Thryothorus semibadius     	\N	\N	\N		
175	\N	Buteo magnirostris 	\N	\N	\N		
176	\N	Pheucticus ludovicianus	\N	\N	\N		
177	\N	Pachyramphus aglaiae	\N	\N	\N		
178	\N	Selasphorus flammula	\N	\N	\N		
179	\N	Columbina talpacoti	\N	\N	\N		
180	\N	Columba subvinacea	\N	\N	\N		
181	\N	Geotrygon montana	\N	\N	\N		
182	\N	Terenotriccus erythrurus	\N	\N	\N		
183	\N	Dendrocincla homochroa	\N	\N	\N		
184	\N	Thryothorus rufalbus	\N	\N	\N		
185	\N	Thryothorus rutilus	\N	\N	\N		
186	\N	Basileuterus rufifrons	\N	\N	\N		
187	\N	Lipaugus unirufus	\N	\N	\N		
188	\N	Amazilia tzacatl	\N	\N	\N		
189	\N	Lophotriccus pileatus	\N	\N	\N		
190	\N	Grallaria guatimalensis	\N	\N	\N		
191	\N	Phaeoshora cuviieri	\N	\N	\N		
192	\N	Columba speciosa	\N	\N	\N		
193	\N	Ramphocelus passerinii	\N	\N	\N		
194	\N	Dacnis venusta	\N	\N	\N		
195	\N	Selasphorus scintilla	\N	\N	\N		
196	\N	Dacnis cayana	\N	\N	\N		
197	\N	Columba nigrirostris	\N	\N	\N		
198	\N	Buteo brachyurus	\N	\N	\N		
199	\N	Tangara icterocephala	\N	\N	\N		
200	\N	Tyrannus forficatus*	\N	\N	\N		
201	\N	Todirostrum sylvia	\N	\N	\N		
202	\N	Myoborus miniatus	\N	\N	\N		
203	\N	Myrmotherula fulviventris	\N	\N	\N		
204	\N	Catharus fuscater	\N	\N	\N		
205	\N	Leptopogon superciliaris	\N	\N	\N		
206	\N	Synallaxis brachyura	\N	\N	\N		
207	\N	Trogon Massena	\N	\N	\N		
208	\N	Veniliornis fumigatus	\N	\N	\N		
209	\N	Crotophaga ani	\N	\N	\N		
210	\N	Amazilia edward	\N	\N	\N		
211	\N	Myiozetetes similis	\N	\N	\N		
212	\N	Harpyhalieeatus solitarius	\N	\N	\N		
213	\N	Lyssurus Crassirostris	\N	\N	\N		
214	\N	Camptopstoma obsoletum	\N	\N	\N		
215	\N	Tangara dowii	\N	\N	\N		
216	\N	Tangara guttata	\N	\N	\N		
217	\N	Pulsatrix perspicillata	\N	\N	\N		
218	\N	Premnoplex brunnescens	\N	\N	\N		
219	\N	Euphonia imitans	\N	\N	\N		
220	\N	Lepidocolaptes affinis	\N	\N	\N		
221	\N	Actittis macularia	\N	\N	\N		
222	\N	Xiphorhynchus erythropygius	\N	\N	\N		
223	\N	Piaya cayana   	\N	\N	\N		
224	\N	Miodynastes maculatus	\N	\N	\N		
240	\N	Procnias tricarunculata	\N	\N	\N		
241	\N	Schiffornis turdinus	\N	\N	\N		
242	\N	Serpophaga cinerea*	\N	\N	\N		
243	\N	Polioptila plumbea	\N	\N	\N		
244	\N	Tyrannus melancholicus	\N	\N	\N		
245	\N	Parula pitiayumi	\N	\N	\N		
246	\N	Otus choliba*	\N	\N	\N		
251	\N	Trogon violaceous	\N	\N	\N		
252	\N	Thalurania colombica	\N	\N	\N		
253	\N	Klais guimeti	\N	\N	\N		
254	\N	Campylopterus hemileucurus	\N	\N	\N		
255	\N	Glyphorhynchus spirurus	\N	\N	\N		
256	\N	Contopus sordidulus	\N	\N	\N		
257	\N	Microcerculus luscinia	\N	\N	\N		
258	\N	Amazilia candida	\N	\N	\N		
259	\N	Henicorhina leucosticta	\N	\N	\N		
260	\N	Sopophila torqueola	\N	\N	\N		
261	\N	Streptoprocne zonaris	\N	\N	\N		
262	\N	Pionus senilis	\N	\N	\N		
263	\N	Leucopternis albicollis	\N	\N	\N		
264	\N	Tachyphonus luctuosus	\N	\N	\N		
265	\N	Florisuga mellivora	\N	\N	\N		
266	\N	Corapipo leucorrhoa	\N	\N	\N		
267	\N	Tachyphonus rufus	\N	\N	\N		
268	\N	Buteo albicaudatus	\N	\N	\N		
269	\N	Turdus assimilis	\N	\N	\N		
270	\N	Platyrhynchus mystaceus	\N	\N	\N		
271	\N	Leptotila verrauxi	\N	\N	\N		
272	\N	Elvira chionura	\N	\N	\N		
273	\N	Eutoxeres aquila	\N	\N	\N		
274	\N	Pachyramphus polychopterus	\N	\N	\N		
275	\N	Piranga leucoptera	\N	\N	\N		
276	\N	Wilsonia pusilla	\N	\N	\N		
277	\N	Hylocichla mustelina	\N	\N	\N		
278	\N	Helmitheros vermivorus	\N	\N	\N		
279	\N	Myiopagis virindicata	\N	\N	\N		
281	\N	Soprophila nigricollis	\N	\N	\N		
282	\N	Amblycercus holocericeus*	\N	\N	\N		
283	\N	Coccyzus americanus	\N	\N	\N		
284	\N	Tyranulus elatus	\N	\N	\N		
285	\N	Euphonia lutecapilla	\N	\N	\N		
286	\N	Tiaris olivacea	\N	\N	\N		
287	\N	Vireo flavovirdis	\N	\N	\N		
288	\N	Milvago chimachima	\N	\N	\N		
289	\N	Tolmomyas sulphurescens	\N	\N	\N		
291	\N	Vireo flavifrons	\N	\N	\N		
292	\N	Capsiempis flaveola	\N	\N	\N		
293	\N	Dendroica petechia	\N	\N	\N		
294	\N	Buteo albonotatus	\N	\N	\N		
295	ASTK	American Swallow Tailed Kite	\N	\N	\N	\N	\N
296	BATR	Bairds Trogon	\N	\N	\N	\N	\N
298	BANA	Bananaquit	\N	\N	\N	\N	\N
299	BAFA	Bat Falcon	\N	\N	\N	\N	\N
300	BHTA	Bay Headed Tanager	\N	\N	\N	\N	\N
301	BCRH	Beryl Crowned Hummingbird	\N	\N	\N	\N	\N
302	BIAN	Bicolored Antbird	\N	\N	\N	\N	\N
303	BWWA	Black & White Warbler	\N	\N	\N	\N	\N
304	BCTI	Black Capped Tityra	\N	\N	\N	\N	\N
305	BFAT	Black Faced Ant thrush	\N	\N	\N	\N	\N
306	BHAN	Black Hooded Antshrike	\N	\N	\N	\N	\N
307	BSSP	Black Striped Sparrow	\N	\N	\N	\N	\N
308	BTFL	Black Tailed Flycatcher	\N	\N	\N	\N	\N
309	BTTR	Black Throated Trogon	\N	\N	\N	\N	\N
310	BLVU	Black Vulture	\N	\N	\N	\N	\N
311	BLWA	Blackburnian Warbler	\N	\N	\N	\N	\N
312	BBGR	Blue Black Grossbeak	\N	\N	\N	\N	\N
313	BCMA	Blue Crowned Manakin	\N	\N	\N	\N	\N
314	BCMO	Blue Crowned Motmot	\N	\N	\N	\N	\N
315	BLDA	Blue Dancis	\N	\N	\N	\N	\N
316	BGTA	Blue Gray Tanager	\N	\N	\N	\N	\N
317	BGDO	Blue Ground Dove	\N	\N	\N	\N	\N
318	BTGO	Blue Throated Goldentail	\N	\N	\N	\N	\N
319	BRAT	Bright Rumped Atila	\N	\N	\N	\N	\N
320	BWHA	Broad Wing Hawk	\N	\N	\N	\N	\N
321	BRHE	Bronzy Hermit	\N	\N	\N	\N	\N
322	BCVI	Brown Capped Vireo	\N	\N	\N	\N	\N
323	BHPA	Brown Headed Parrot	\N	\N	\N	\N	\N
324	BRJA	Brown Jay	\N	\N	\N	\N	\N
325	BTFG	Buff Throated Foliage Gleaner	\N	\N	\N	\N	\N
326	BTSA	Buff Throated Saltator	\N	\N	\N	\N	\N
327	BTWO	Buff Throated Woodcreeper	\N	\N	\N	\N	\N
328	CAWA	Canada Warbler	\N	\N	\N	\N	\N
329	CBAN	Chesnut Backed Antbird	\N	\N	\N	\N	\N
330	CMTO	Chesnut Mandibled Toucan	\N	\N	\N	\N	\N
331	CSWA	Chesnut Sided Warbler	\N	\N	\N	\N	\N
332	CCRO	Clay Colored Robin	\N	\N	\N	\N	\N
333	COTR	Collared Trogon	\N	\N	\N	\N	\N
334	CRCA	Crested Caracara	\N	\N	\N	\N	\N
335	CRGU	Crested Guan	\N	\N	\N	\N	\N
336	CFPA	Crimson Fronted Parakeet	\N	\N	\N	\N	\N
337	DTKI	Dooble Toothed Kite	\N	\N	\N	\N	\N
338	DWAN	Dotted Winged Antwren	\N	\N	\N	\N	\N
339	DCFL	Dusky Capped Flycatcher	\N	\N	\N	\N	\N
340	ERFL	Eye Ringed Flatbill	\N	\N	\N	\N	\N
341	FBAR	Fiery Billed Aracary	\N	\N	\N	\N	\N
342	GCSP	Golden Crowned Spadebill	\N	\N	\N	\N	\N
343	GHOT	Golden Hooded Tanager	\N	\N	\N	\N	\N
344	GNWO	Golden Naped Woodpecker	\N	\N	\N	\N	\N
345	GCTH	Gray Cheeked Thrush	\N	\N	\N	\N	\N
346	GCDO	Gray Chested Dove	\N	\N	\N	\N	\N
347	GCFL	Gray Crested Flycatcher	\N	\N	\N	\N	\N
348	PLCH	Gray Headed Chachalaca	\N	\N	\N	\N	\N
349	GHKI	Gray Headed Kite	\N	\N	\N	\N	\N
350	GHTA	Gray Headed Tanager	\N	\N	\N	\N	\N
351	GNWR	Gray Necked Wood Rail	\N	\N	\N	\N	\N
352	GRKI	Great Kiskadee	\N	\N	\N	\N	\N
353	GRTI	Great Tinamou	\N	\N	\N	\N	\N
354	GCBR	Green Crowned Brilliant	\N	\N	\N	\N	\N
355	GRHO	Green Honeycreeper	\N	\N	\N	\N	\N
356	GRVI	Green Shrike Vireo	\N	\N	\N	\N	\N
357	GREL	Greenish Elania	\N	\N	\N	\N	\N
358	KEWA	Kentucky Warbler	\N	\N	\N	\N	\N
359	LAFA	Laughung Falcon	\N	\N	\N	\N	\N
360	LEGR	Lesser Greenlet	\N	\N	\N	\N	\N
361	LIHE	Little Hermit	\N	\N	\N	\N	\N
362	LBGN	Long Billed Gnatwren	\N	\N	\N	\N	\N
363	LBST	Long Billed Starthroat	\N	\N	\N	\N	\N
364	LTHE	Long Tail Hermit	\N	\N	\N	\N	\N
365	LOWA	Louisiana Waterthrush	\N	\N	\N	\N	\N
366	MAHU	Magnificent Hummingbird	\N	\N	\N	\N	\N
367	MATI	Masked Titira	\N	\N	\N	\N	\N
368	MITY	Mistletoe Tyranulett	\N	\N	\N	\N	\N
369	MOWA	Mourning Warbler	\N	\N	\N	\N	\N
370	NOBE	Northern Benbill	\N	\N	\N	\N	\N
371	NOWA	Northern Waterthrush	\N	\N	\N	\N	\N
372	OBFL	Ochre Belied Flycatcher	\N	\N	\N	\N	\N
373	OLPI	Olivaceous Piculet	\N	\N	\N	\N	\N
374	OBSP	Orange Billed Sparrow	\N	\N	\N	\N	\N
375	OCPA	Orange chinned Parakeet	\N	\N	\N	\N	\N
376	OCMA	Orange Collared Manakin	\N	\N	\N	\N	\N
377	OVEN	Ovenbird	\N	\N	\N	\N	\N
378	PABU	Painted Bunting	\N	\N	\N	\N	\N
379	PBWO	Pale Billed Woodpecker	\N	\N	\N	\N	\N
380	PATA	Palm Tanager	\N	\N	\N	\N	\N
381	PHVI	Philadelphia Vireo	\N	\N	\N	\N	\N
382	PIFL	Piratic Flycatcher	\N	\N	\N	\N	\N
383	RCMA	Red Capped Manakin	\N	\N	\N	\N	\N
384	REVI	Red Eyed Vireo	\N	\N	\N	\N	\N
385	RHBA	Red Headed Barbet	\N	\N	\N	\N	\N
386	RLHO	Red Legged Honeycreeper	\N	\N	\N	\N	\N
387	RIKI	Ringed Kingfisher	\N	\N	\N	\N	\N
388	RIWR	Riverside Wren	\N	\N	\N	\N	\N
389	ROHA	Roadside Hawk	\N	\N	\N	\N	\N
390	RBTH	Ruby Throated Hummingbird	\N	\N	\N	\N	\N
391	RQDO	Ruddy Quail Dove	\N	\N	\N	\N	\N
392	RUWO	Ruddy Woodcreeper	\N	\N	\N	\N	\N
393	RTHU	Rufous Tailed Hummingbird	\N	\N	\N	\N	\N
394	SBHU	Scaly Breasted Hummingbird	\N	\N	\N	\N	\N
395	SRTA	Scarlet Rumped Tanager	\N	\N	\N	\N	\N
396	SHHO	Shining Honeycreeper	\N	\N	\N	\N	\N
397	SBPI	Short Billed Pigeon	\N	\N	\N	\N	\N
398	SHTF	Slate headed Toddy Flycatcher	\N	\N	\N	\N	\N
399	STTR	Slaty Tailed Trogon	\N	\N	\N	\N	\N
400	SOEA	Solitary Eagle	\N	\N	\N	\N	\N
401	SPTA	Speckled Tanager	\N	\N	\N	\N	\N
402	SCEU	Spotted Crowned Euphonia	\N	\N	\N	\N	\N
403	SQCU	Squirrel Cuckoo	\N	\N	\N	\N	\N
404	STFL	Streaked Flycatcher	\N	\N	\N	\N	\N
405	SHWO	Streaked Headed Woodcreeper	\N	\N	\N	\N	\N
406	SBFL	Sulphur Bellied Flycatcher	\N	\N	\N	\N	\N
407	SUTA	Summer Tanager	\N	\N	\N	\N	\N
408	SWPA	Supphur Winged Parakeet	\N	\N	\N	\N	\N
409	SWTH	Swainsons Thrush	\N	\N	\N	\N	\N
410	TWWO	Tawny Winged Woodcreeper	\N	\N	\N	\N	\N
411	TEWA	Tennessee Warbler	\N	\N	\N	\N	\N
412	TRGN	Tropical Gnatcatcher	\N	\N	\N	\N	\N
413	TRKI	Tropical Kingbird	\N	\N	\N	\N	\N
414	TUVU	Turkey Vulture	\N	\N	\N	\N	\N
415	TUCO	Turquoise Cotinga	\N	\N	\N	\N	\N
416	VASE	Variable Seedeater	\N	\N	\N	\N	\N
417	VEER	Veery	\N	\N	\N	\N	\N
418	VITR	Violaceous Trogon	\N	\N	\N	\N	\N
419	VCWO	Violet Crowned Woodnymph	\N	\N	\N	\N	\N
420	VISA	Violet Sabrewing	\N	\N	\N	\N	\N
421	WBWO	Wedge Billed Woodcreeper	\N	\N	\N	\N	\N
422	WBWW	White Breasted Wood Wren	\N	\N	\N	\N	\N
423	WCPA	White Crowned Parrot	\N	\N	\N	\N	\N
424	WTRO	White Throated Robin	\N	\N	\N	\N	\N
425	WTDO	White Tipped Dove	\N	\N	\N	\N	\N
426	WWBE	White Winged Becard	\N	\N	\N	\N	\N
427	YBFL	Yellow Bellied Flycatcher	\N	\N	\N	\N	\N
428	YFGR	Yellow Faced Grass Quit	\N	\N	\N	\N	\N
429	YHCA	Yellow Headed Caracara	\N	\N	\N	\N	\N
430	YOFL	Yellow Olive Flycatcher	\N	\N	\N	\N	\N
431	YTVI	Yellow Throated Vireo	\N	\N	\N	\N	\N
432	YEWA	Yellow Warbler	\N	\N	\N	\N	\N
433	STTA	Silver Throated Tanager	\N	\N	\N	\N	\N
434	WLTA	White Lined Tanager	\N	\N	\N	\N	\N
435	RUPI	Rufous Phia	\N	\N	\N	\N	\N
436	YCEU	Yellow Crowned Euphonia	\N	\N	\N	\N	\N
437	FTHU	Fiery Throated Hummingbird	\N	\N	\N	\N	\N
440	BAWO	Barred Woodcreeper	\N	\N	\N	\N	\N
441	BFAN	Black Faced antthrush	\N	\N	\N	\N	\N
442	BHBF	Black Headed Brush Finsch	\N	\N	\N	\N	\N
443	BCHU	Blue Chested Hummingbird	\N	\N	\N	\N	\N
444	BRAT	Brigth Rumped Atila	\N	\N	\N	\N	\N
445	BRWA	Buff Rumped Warbler	\N	\N	\N	\N	\N
446	CTFL	Common Toddy Flycatcher	\N	\N	\N	\N	\N
447	CFPA	Crimson fronted Parrot	\N	\N	\N	\N	\N
448	DTKI	Double Toothed Kite	\N	\N	\N	\N	\N
449	DUAN	Dusky Antbird	\N	\N	\N	\N	\N
450	DCFL	Dusky Capped flycatcher	\N	\N	\N	\N	\N
451	FTEM	Fork Tailed Emmerald	\N	\N	\N	\N	\N
452	GNWO	Golden napped Woodpecker	\N	\N	\N	\N	\N
453	GWWA	Golden Winged Warbler	\N	\N	\N	\N	\N
454	GRHA	Gray Hawk	\N	\N	\N	\N	\N
455	GHTA	Grey Headed Tanager	\N	\N	\N	\N	\N
456	KIVU	King Vlture	\N	\N	\N	\N	\N
457	LAFA	Laughing Falcon	\N	\N	\N	\N	\N
458	LIWO	Lineated Woodpecker	\N	\N	\N	\N	\N
459	LITI	Little Tinamou	\N	\N	\N	\N	\N
460	MATY	Masked Tytira	\N	\N	\N	\N	\N
461	OBNT	Orange Billed Nigthingdale Thrush	\N	\N	\N	\N	\N
462	OCPA	Orange Chined Parrot	\N	\N	\N	\N	\N
463	PCST	Plain Capped Starthroat	\N	\N	\N	\N	\N
464	PLXE	Plain Xenops	\N	\N	\N	\N	\N
465	PCFA	Purple Crowned Fairy	\N	\N	\N	\N	\N
466	RCAT	Red Capped Ant Tanager	\N	\N	\N	\N	\N
467	RLPA	Red Lored Parrot	\N	\N	\N	\N	\N
468	RBGR	Rose Breasted Grossbeak	\N	\N	\N	\N	\N
469	RTFL	Ruddy Tailed Flycatcher	\N	\N	\N	\N	\N
470	RBWR	Rufous Breasted Wren	\N	\N	\N	\N	\N
471	SHRE	Slatty Headed redstart	\N	\N	\N	\N	\N
472	SPOW	Spectacled Owl	\N	\N	\N	\N	\N
473	SCWO	Spotted Crowned Woodpecker	\N	\N	\N	\N	\N
474	SPWO	Spotted Woodcreeper	\N	\N	\N	\N	\N
475	SRFL	Suphur Rumped Flycatcher	\N	\N	\N	\N	\N
476	TCGR	Tawny Crowned Greenlet	\N	\N	\N	\N	\N
477	TBSE	Thick Billed Seedeater	\N	\N	\N	\N	\N
478	TUCO	Turqouise Cotinga	\N	\N	\N	\N	\N
479	VITR	Violaceous Troogon	\N	\N	\N	\N	\N
480	WHWR	Whistling Wren	\N	\N	\N	\N	\N
481	WNJA	White Necked Jacobine	\N	\N	\N	\N	\N
482	WRMA	White Ruffed Manakin	\N	\N	\N	\N	\N
483	WSTA	White Shouldered Tanager	\N	\N	\N	\N	\N
484	WTSI	White Tipped Sicklebill	\N	\N	\N	\N	\N
485	WOTH	Wood Thrush	\N	\N	\N	\N	\N
486	YBCU	Yellow Billed Cukoo	\N	\N	\N	\N	\N
487	YFGR	Yellow Faced Grassquit	\N	\N	\N	\N	\N
488	STTR	Slatty Tailed Trogon	\N	\N	\N	\N	\N
490	AMRE	American Red Start	\N	\N	\N	\N	\N
491	ASTK	American Swift Tailed Kite	\N	\N	\N	\N	\N
492	BAAN	Barred Antshrike	\N	\N	\N	\N	\N
493	BFFA	Barred Forest Falcon	\N	\N	\N	\N	\N
494	BFSO	Black Faced Soltarie	\N	\N	\N	\N	\N
495	BHBF	Black headed Brush Finsch	\N	\N	\N	\N	\N
496	BBGQ	Blue Black Grassquit	\N	\N	\N	\N	\N
497	BTGO	Blue Throated Golden Tail	\N	\N	\N	\N	\N
498	BRAT	Brigth Rumped Attilia	\N	\N	\N	\N	\N
499	BRCO	Bronzed Cowbird	\N	\N	\N	\N	\N
500	BHPA	Brown headed Parrot	\N	\N	\N	\N	\N
501	BVEA	Brown Violet Ear	\N	\N	\N	\N	\N
502	CAEG	Cattle Eagret	\N	\N	\N	\N	\N
503	COPA	Common Pauraque	\N	\N	\N	\N	\N
504	CTFL	Common toddy Flycatcher	\N	\N	\N	\N	\N
505	COHA	Coopers Hawk	\N	\N	\N	\N	\N
506	CFPA	Crimsson Fronted Parrot	\N	\N	\N	\N	\N
507	FATH	Fasciated Tiger Heron	\N	\N	\N	\N	\N
508	FBAR	Fiery Billed Aracari	\N	\N	\N	\N	\N
509	GCDO	Gray chested Dove	\N	\N	\N	\N	\N
510	GRKI	Great kiskadee	\N	\N	\N	\N	\N
511	GFLA	Green Fronted Lancebill	\N	\N	\N	\N	\N
512	GRHE	Green Hermit	\N	\N	\N	\N	\N
513	GVEA	Green Violet Ear	\N	\N	\N	\N	\N
514	HOWR	House Wren	\N	\N	\N	\N	\N
515	MATI	Masked Tityra	\N	\N	\N	\N	\N
516	MITY	Mistletoe Tyranulet	\N	\N	\N	\N	\N
517	MOEL	Mountain elania	\N	\N	\N	\N	\N
518	NOWA	Northern waterthrush	\N	\N	\N	\N	\N
519	OSFL	Olive Streaked Flycatcher	\N	\N	\N	\N	\N
520	OCPA	Orange Chined Parakeet	\N	\N	\N	\N	\N
521	RCAT	Red Crowned Ant Tanager	\N	\N	\N	\N	\N
522	RCWO	Red Crowned Woodpecker	\N	\N	\N	\N	\N
523	ROBB	Rose Breasted Becard	\N	\N	\N	\N	\N
524	RBGR	Rose Breasted GrossBeak	\N	\N	\N	\N	\N
525	RUGD	Ruddy Ground Dove	\N	\N	\N	\N	\N
526	RUPI	Ruddy Pigeoun	\N	\N	\N	\N	\N
527	RBWW	Rufous Breasted Wood Wren	\N	\N	\N	\N	\N
528	SBHU	Scaly Breasted Humming	\N	\N	\N	\N	\N
529	SCPI	Scaly Pigeon	\N	\N	\N	\N	\N
530	STDA	Scarlet Thigted Dacnis	\N	\N	\N	\N	\N
531	SHTF	Slate Headed Toddy Flycatcher	\N	\N	\N	\N	\N
532	SLSP	Slaty Spinetail	\N	\N	\N	\N	\N
533	SBWO	Smoky Brown Woodpecker	\N	\N	\N	\N	\N
439	ASTK	American Swift Tailed Kite	a:0:{}	a:0:{}	a:0:{}	\N	\N
534	SBAN	Smooth Billed Ani	\N	\N	\N	\N	\N
535	SNBH	Snowy Bellied Hummingbird	\N	\N	\N	\N	\N
536	SOFL	Social Flycatcher	\N	\N	\N	\N	\N
537	SOEA	Soltary Eagle	\N	\N	\N	\N	\N
538	SBTY	Southern Breadless Tyrant	\N	\N	\N	\N	\N
539	SPSA	Spotted Sandpipper	\N	\N	\N	\N	\N
540	STSA	Streaked Saltator	\N	\N	\N	\N	\N
541	SWPA	Sulfur Winged Parrot	\N	\N	\N	\N	\N
542	SRFL	Sulphure Rumped flycatcher	\N	\N	\N	\N	\N
543	TEWA	Tenesse Warbler	\N	\N	\N	\N	\N
544	TBSF	Thick Billed Seed Finsch	\N	\N	\N	\N	\N
545	VHHU	Violet Headed Hummingbird	\N	\N	\N	\N	\N
546	WBWO	Wedge Billed woodcreeper	\N	\N	\N	\N	\N
547	WHHA	White Hawk	\N	\N	\N	\N	\N
548	YBEL	Yellow Billed Elania	\N	\N	\N	\N	\N
549	YGVI	Yellow Green Vireo	\N	\N	\N	\N	\N
550	YOFL	Yellow olive Flycatcher	\N	\N	\N	\N	\N
551	YETY	Yellow Tyranulet	\N	\N	\N	\N	\N
552	ZTHA	Zone Tailed hawk	\N	\N	\N	\N	\N
553	LTHE	Long Tailed Hermit	\N	\N	\N	\N	\N
554	BLWA	BLACKBURNIAN Warbler	\N	\N	\N	\N	\N
555	LEEL	Lesser Elania	\N	\N	\N	\N	\N
556	RCWA	Rufous Capped Warbler	\N	\N	\N	\N	\N
557	BLDA	Blue Dacnis	\N	\N	\N	\N	\N
558	BTGO	Blue throated Goldentail	\N	\N	\N	\N	\N
559	BCFL	Bran Collared Flycatcher	\N	\N	\N	\N	\N
560	BTSA	Buff throated Saltator	\N	\N	\N	\N	\N
561	BTWO	Buff Throated woodcreeper	\N	\N	\N	\N	\N
562	DCFL	Dusky Caped Flycatcher	\N	\N	\N	\N	\N
563	FTEM	Fork tailed Emmerald	\N	\N	\N	\N	\N
564	GOHT	Golden Headed Tanager	\N	\N	\N	\N	\N
565	GCFL	Great Crested Flycatcher	\N	\N	\N	\N	\N
566	GCDO	Grey Chested Dove	\N	\N	\N	\N	\N
567	LBGN	Long Billed Gnat Wren	\N	\N	\N	\N	\N
568	MOEL	Mountain Elania	\N	\N	\N	\N	\N
569	OBNT	Orange Billed Nigthingdlae Thrush	\N	\N	\N	\N	\N
570	PLWR	Plain Wren	\N	\N	\N	\N	\N
571	PTMG	Purple throated Mountain Gem	\N	\N	\N	\N	\N
572	RCWA	Rufous Caped Warbler	\N	\N	\N	\N	\N
573	SCPI	Scaled Pigeon	\N	\N	\N	\N	\N
574	SCHU	Scintilliant Hummingbird	\N	\N	\N	\N	\N
575	STHA	Short Tailed Hawk	\N	\N	\N	\N	\N
576	SBPI	Shortbilled Pigeon	\N	\N	\N	\N	\N
577	SHTF	Slatty Headed Toddy Flycatcher	\N	\N	\N	\N	\N
578	STFL	Streakaed Flycatcher	\N	\N	\N	\N	\N
579	SWPA	Sulphur Winged Parakeet	\N	\N	\N	\N	\N
580	TWBE	Three Wattled Bellbird	\N	\N	\N	\N	\N
581	VCWO	Violetcrowned Woodnymph	\N	\N	\N	\N	\N
582	WBWO	Wedge Bellied woodcreeper	\N	\N	\N	\N	\N
583	WWPE	Western Wood Pewee	\N	\N	\N	\N	\N
584	WNJA	White necked Jacobine	\N	\N	\N	\N	\N
585	WIWA	Wilsons Warbler	\N	\N	\N	\N	\N
586	YBSE	Yellow Bellied Seedeater	\N	\N	\N	\N	\N
587	YCTY	Yellow Crested Tyranulet	\N	\N	\N	\N	\N
588	YEWA	Yellow warbler	\N	\N	\N	\N	\N
589	BWHA	Broad Winged Hawk	\N	\N	\N	\N	\N
590	WCSE	White Collared Seedeater	\N	\N	\N	\N	\N
591	TUCO	Turqouise Cutinga	\N	\N	\N	\N	\N
592	GBWW	Gray Breasted Wood Wren	\N	\N	\N	\N	\N
593	ACFL	Accadian Flycatcher	\N	\N	\N	\N	\N
594	AMRE	American Redstart	\N	\N	\N	\N	\N
595	BTPI	Band Tailed Pigeon	\N	\N	\N	\N	\N
596	BAPA	Barred Parakeet	\N	\N	\N	\N	\N
597	BHTA	BayHeaded Tanager	\N	\N	\N	\N	\N
598	BFSO	Black Faced Soltaire	\N	\N	\N	\N	\N
599	BHBF	Black Headed Bush Finsch	\N	\N	\N	\N	\N
600	BLWA	Blackurnian Warbler	\N	\N	\N	\N	\N
601	BCMO	Blue Crowned Momot	\N	\N	\N	\N	\N
602	BHEU	Blue Hooded Euphonia	\N	\N	\N	\N	\N
603	BBFL	Boat Billed Flycatcher	\N	\N	\N	\N	\N
604	CHOR	Chesnut Headed Oropenola	\N	\N	\N	\N	\N
605	CBHA	Common Black Hawk	\N	\N	\N	\N	\N
606	CFPA	Crimsson Fronted Parakeet	\N	\N	\N	\N	\N
607	EWPE	Eastern Wood Pewee	\N	\N	\N	\N	\N
608	GREG	Great Eagret	\N	\N	\N	\N	\N
609	GNWR	Grey Necked Wood Rail	\N	\N	\N	\N	\N
610	KIVU	King Vulture	\N	\N	\N	\N	\N
611	LBST	Long Bellied Start Throat	\N	\N	\N	\N	\N
612	MTWO	Magenta throated woodstart	\N	\N	\N	\N	\N
613	PCST	Plain Caped StarThroat	\N	\N	\N	\N	\N
614	RWWR	Rufous and White Wren	\N	\N	\N	\N	\N
615	SCPT	Scaly Crested Pigmy Tyrant	\N	\N	\N	\N	\N
616	SHHO	Shining Honey Creeper	\N	\N	\N	\N	\N
617	SCWO	Spotted Crowned Woodcreeper	\N	\N	\N	\N	\N
618	STSA	Streaked Saltetor	\N	\N	\N	\N	\N
619	SRFL	Sulphur Rumped Flycatcher	\N	\N	\N	\N	\N
620	SWHA	Swainsons Hawk	\N	\N	\N	\N	\N
621	TBSF	Thick Billed Seed Fisch	\N	\N	\N	\N	\N
622	TUCO	Turqoise Cotinga	\N	\N	\N	\N	\N
623	WBWO	Wedge billed Woodcreeper	\N	\N	\N	\N	\N
624	WBEM	White Bellied Emerald	\N	\N	\N	\N	\N
625	WCSW	White collared Swift	\N	\N	\N	\N	\N
626	WTEM	White Tailed Emmerald	\N	\N	\N	\N	\N
627	WTHA	White Tailed Hawk	\N	\N	\N	\N	\N
628	YBEL	Yellow Bellied Elania	\N	\N	\N	\N	\N
629	YFCA	Yellow Faced Caracara	\N	\N	\N	\N	\N
630	YTBF	Yellow Throated Bruish Finsch	\N	\N	\N	\N	\N
631	RUPI	Ruddy Pigeon	\N	\N	\N	\N	\N
632	BCHA	Black Chested Hawk	\N	\N	\N	\N	\N
633	HETA	Hepatic Tanager	\N	\N	\N	\N	\N
634	BLGU	Black Guan	\N	\N	\N	\N	\N
635	BHBF	Black Headed Brush Finsh	\N	\N	\N	\N	\N
636	BBSC	Brown Billed Scythebill	\N	\N	\N	\N	\N
637	BCWP	Buffy Crowned Wood Partridge	\N	\N	\N	\N	\N
638	CCBF	Chestnut Capped Brush Finsch	\N	\N	\N	\N	\N
639	CBTA	Common Bush Tanager	\N	\N	\N	\N	\N
640	COPA	Common Parauque	\N	\N	\N	\N	\N
641	EMTO	Emerald Toucan	\N	\N	\N	\N	\N
642	GBCH	Golden Browed Chlorophonia	\N	\N	\N	\N	\N
643	GCWA	Golden Crowned Warbler	\N	\N	\N	\N	\N
644	GCYE	Gray Crowned Yellow Throat	\N	\N	\N	\N	\N
645	GBHA	Great Black Hawk	\N	\N	\N	\N	\N
646	GRHO	Green Honey Creeper	\N	\N	\N	\N	\N
647	GTMG	Green Tailed Mountain Gem	\N	\N	\N	\N	\N
648	IMAN	Immaculate Antbird	\N	\N	\N	\N	\N
649	LFGL	Lineated Foliage Gleaner	\N	\N	\N	\N	\N
650	LBGN	Long Bellied Gnetwren	\N	\N	\N	\N	\N
651	MTWO	Magenta Throated Woodstar	\N	\N	\N	\N	\N
652	OBNT	Orange Billed Nigtingdale Thrush	\N	\N	\N	\N	\N
653	PLAN	Plain Antvireo	\N	\N	\N	\N	\N
654	PBWO	Plain Brown Woodcreeper	\N	\N	\N	\N	\N
655	PTMG	Purple Throated Mountain Gem	\N	\N	\N	\N	\N
656	RUPI	Rufous Pia	\N	\N	\N	\N	\N
657	SCPT	Scale Crested Pygmy Tyrant	\N	\N	\N	\N	\N
658	SCAN	Scaled Antpitta	\N	\N	\N	\N	\N
659	STDA	Scarlet Thigthed Dacnis	\N	\N	\N	\N	\N
660	SCFL	Slate Caped Flycatcher	\N	\N	\N	\N	\N
661	STRE	Slate Throated Redstart	\N	\N	\N	\N	\N
662	SLAN	Slatty Antwren	\N	\N	\N	\N	\N
663	SBNT	Slatty Backed Nigthingdale Thrush	\N	\N	\N	\N	\N
664	SLSP	Slatty Spinetail	\N	\N	\N	\N	\N
665	SBWO	Smoky Billed Woodpecker	\N	\N	\N	\N	\N
666	SNBH	Snowt Bellied Hummingbird	\N	\N	\N	\N	\N
667	SFFI	Sooty Faced Finsch	\N	\N	\N	\N	\N
668	SCTA	Spangled Cheeked Tanager	\N	\N	\N	\N	\N
669	SPBA	Spotted Barbtail	\N	\N	\N	\N	\N
670	STFG	Striped Foliage Gleaner	\N	\N	\N	\N	\N
671	SBFL	Sulfur Bellied Flycatcher	\N	\N	\N	\N	\N
672	THMA	Thrushlike Manakin	\N	\N	\N	\N	\N
673	TTLT	Twany Throated Leaf Tosser	\N	\N	\N	\N	\N
674	WCSW	White Collared Swift	\N	\N	\N	\N	\N
675	WTSP	White Throated Spadebill	\N	\N	\N	\N	\N
676	WTDO	White tipped Dove	\N	\N	\N	\N	\N
677	WTEM	White Tipped Emerald	\N	\N	\N	\N	\N
678	WEWA	Worm Eating Warbler	\N	\N	\N	\N	\N
679	YTBF	Yellow Throated Brush Finsh	\N	\N	\N	\N	\N
680	LTSF	Long Tailed Silllky Flycatcher	\N	\N	\N	\N	\N
681	BFQD	Buff Fronted Quail Dove	\N	\N	\N	\N	\N
682	OLSF	Olive sided Flycatcher	\N	\N	\N	\N	\N
683	BRAT	Bright Rumped Attila	\N	\N	\N	\N	\N
684	BFAN	Fblack Faced Ant Thrush	\N	\N	\N	\N	\N
685	GCFL	Gray Crested flycatcher	\N	\N	\N	\N	\N
686	KIVU	King Vuture	\N	\N	\N	\N	\N
687	OLPI	Olivacous Piculet	\N	\N	\N	\N	\N
688	OBNT	Orange Billed Nightingale Thrush	\N	\N	\N	\N	\N
689	TCGR	Twany Crowned Greenlet	\N	\N	\N	\N	\N
690	VITR	Violacous Trogon	\N	\N	\N	\N	\N
691	RUPH	Ruphous Phia	\N	\N	\N	\N	\N
297	BAOR	Baltimore Oriole	a:1:{i:0;s:25:"Bolborhynchus lineola.jpg";}	a:0:{}	a:0:{}	\N	\N
1	\N	Empidonax virescens	a:1:{i:0;s:27:"Empidonax virescens.jpg.bmp";}	a:0:{}	a:0:{}	Breeds e US; winters Nicaragua to Ecuador and Venezuela	LC 2012
2	\N	Empidonax alnorum	a:1:{i:0;s:21:"Empidonax alnorum.bmp";}	a:0:{}	a:0:{}	Breeds Alaska to ne US; winters Colombia to Bolivia	LC 2012
33	\N	Amazilia amabilis	a:1:{i:0;s:21:"Amazilia amabilis.bmp";}	a:0:{}	a:0:{}	It is found in Colombia, Costa Rica, Ecuador, Nicaragua, and Panama. Its natural habitats are subtropical or tropical moist lowland forests and heavily degraded former forest.	LC 2012
43	\N	Attila spadiceus	a:1:{i:0;s:20:"Attila spadiceus.bmp";}	a:0:{}	a:0:{}	It breeds from northwestern Mexico to western Ecuador, Bolivia and southeastern Brazil, and on Trinidad	LC 2012
11	\N	Bolborhynchus lineola	a:1:{i:0;s:25:"Bolborhynchus lineola.bmp";}	a:0:{}	a:0:{}	A small parrot found disjunctly in highland forests from southern Mexico to Panama, in the Andes from western Venezuela to southern Peru, the Santa Marta Mountains in Colombia and the Venezuelan Coastal Range.	LC 2012
28	\N	Dendroica Fusca	a:1:{i:0;s:19:"Dendroica Fusca.bmp";}	a:0:{}	a:0:{}	They breed in eastern North America, from southern Canada, westwards to the southern Canadian Prairies, the Great Lakes region and New England, to North Carolina.It winters Costa Rica to Bolivia	LC 2012
17	\N	Mniotilta varia	a:1:{i:0;s:19:"Mniotilta varia.bmp";}	a:0:{}	a:0:{}	It breeds in northern and eastern North America from the Northwest Territory and Newfoundland and Labrador, Canada to Florida. This species is migratory, wintering in Florida, Central America and the West Indies down to Peru. This species is a very rare vagrant to western Europe.	LC 2012
9	\N	Thamnophilus doliatus	a:1:{i:0;s:25:"Thamnophilus doliatus.bmp";}	a:0:{}	a:0:{}	It is found in the Neotropics from Tamaulipas, Mexico, through Central America, Trinidad and Tobago, and a large part of South America east of the Andes as far south as northern Argentina, Bolivia and Paraguay.	LC 2012
16	\N	Gymnopithys leucaspis	a:1:{i:0;s:25:"Gymnopithys leucaspis.bmp";}	a:0:{}	a:0:{}	It is found in Brazil, Colombia, Costa Rica, Ecuador, Honduras, Nicaragua, Panama, and Peru. Its natural habitat is subtropical or tropical moist lowland forests.	LC 2012
36	\N	Dacnis cayana	a:1:{i:0;s:17:"Dacnis cayana.bmp";}	a:0:{}	a:0:{}	This member of the tanager family is found from Nicaragua to Panama, on Trinidad, and in South America south to Bolivia and northern Argentina. It is widespread and often common, especially in parts of its South American range.	LC 2012
38	\N	Thraupis episcopus	a:1:{i:0;s:22:"Thraupis episcopus.bmp";}	a:0:{}	a:0:{}	Its range is from Mexico south to northeast Bolivia and northern Brazil, all of the Amazon Basin, except the very south. It has been introduced to Lima (Peru). On Trinidad and Tobago, this bird is called Blue Jean.	LC 2012
489	ALFL	Alder Flycatcher	a:0:{}	a:0:{}	a:0:{}	\N	\N
\.



