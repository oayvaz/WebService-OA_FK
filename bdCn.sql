--
-- PostgreSQL database dump
--

-- Dumped from database version 9.2.0
-- Dumped by pg_dump version 9.2.0
-- Started on 2013-06-09 22:45:24

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

--
-- TOC entry 2099 (class 0 OID 0)
-- Dependencies: 172
-- Name: comptable_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('comptable_id_seq', 1, false);


--
-- TOC entry 2100 (class 0 OID 0)
-- Dependencies: 178
-- Name: infoPret_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"infoPret_id_seq"', 58, true);


--
-- TOC entry 2101 (class 0 OID 0)
-- Dependencies: 180
-- Name: note_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('note_id_seq', 1, false);


--
-- TOC entry 2076 (class 0 OID 32769)
-- Dependencies: 168
-- Data for Name: agence; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY agence (id, nom, adresse, cp, ville) FROM stdin;
\.


--
-- TOC entry 2077 (class 0 OID 32772)
-- Dependencies: 169
-- Data for Name: client; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY client (id, "nomClient", "prenomClient", "adresseClient", "cpClient", "villeClient", "mailClient", login, mdp, "typeUtilisateur") FROM stdin;
1	toto	tata	1 alle du port	11111	Bar	\N	toto	1234	3
\.


--
-- TOC entry 2086 (class 0 OID 32825)
-- Dependencies: 181
-- Data for Name: personnel; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY personnel (id, nom, prenom, mail, telephone, mdp, id_agence, login, "typeUtilisateur") FROM stdin;
1	taya	toyo	\N	\N	1234	\N	taya	1
2	tata	tata	\N	\N	1234	\N	tata	2
3	tutu	tutu	\N	\N	1234	\N	tutu	2
\.


--
-- TOC entry 2089 (class 0 OID 32840)
-- Dependencies: 184
-- Data for Name: secteur; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY secteur (id, descriptif, latitude, longitude, "codePostal") FROM stdin;
\.


--
-- TOC entry 2092 (class 0 OID 32853)
-- Dependencies: 187
-- Data for Name: terrain; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY terrain (id, latitude, longitude, superficie, plan, prix, id_secteur) FROM stdin;
2	543	53	523	123	21	\N
3	543	53	523	123	21	\N
4	543	53	523	123	21	\N
8	42	12	12	fyg	412	\N
9	45	45	45	fuy	0	\N
11	545454	51555552	1000000	1548	12	\N
10	48.778590999999999	5.1583670000000001	7835	5555	68763	\N
12	87	78	120	100	50	\N
\.


--
-- TOC entry 2087 (class 0 OID 32828)
-- Dependencies: 182
-- Data for Name: projet; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY projet (id, budget, descriptif, precisions, "rechercheTerrain", id_terrain, id_personnel, id_personnel1, id_client) FROM stdin;
\.


--
-- TOC entry 2094 (class 0 OID 32862)
-- Dependencies: 189
-- Data for Name: visite; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY visite (id, "dateVisite", description, id_projet) FROM stdin;
\.


--
-- TOC entry 2078 (class 0 OID 32775)
-- Dependencies: 170
-- Data for Name: commerciale; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY commerciale (id_visite, "dateVisite_visite", description_visite, id_projet) FROM stdin;
\.


--
-- TOC entry 2079 (class 0 OID 32782)
-- Dependencies: 171
-- Data for Name: comptable; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY comptable (id, nom, login, mdp) FROM stdin;
1	Ayvaz	oayvaz	1234
\.


--
-- TOC entry 2080 (class 0 OID 32790)
-- Dependencies: 173
-- Data for Name: contact; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY contact (id, "dateContact", resume, id_client) FROM stdin;
\.


--
-- TOC entry 2090 (class 0 OID 32843)
-- Dependencies: 185
-- Data for Name: specialiste; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY specialiste (id, metier) FROM stdin;
\.


--
-- TOC entry 2081 (class 0 OID 32794)
-- Dependencies: 174
-- Data for Name: contrainte; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY contrainte (id, descriptif, plan, id_specialiste) FROM stdin;
\.


--
-- TOC entry 2082 (class 0 OID 32800)
-- Dependencies: 175
-- Data for Name: envisager; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY envisager (etendue, priorite, id_secteur, id_projet) FROM stdin;
\.


--
-- TOC entry 2083 (class 0 OID 32803)
-- Dependencies: 176
-- Data for Name: examiner; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY examiner ("compteRendu", id_visite, id_specialiste) FROM stdin;
\.


--
-- TOC entry 2084 (class 0 OID 32809)
-- Dependencies: 177
-- Data for Name: infoPret; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "infoPret" ("montantProjet", nom, prenom, adresse, cp, telephone, mail, "montantApport", "dureeEmprunt", age, ville, id) FROM stdin;
100000	Deycard	Marc	8 rue du pont levis	55000	0678987458	Marc.Deycard@gmail.com	50000	19	30	Bar-le-Duc	34
25000	Ayvaz	Osman	7 rue des turcs	15478	0678987458	Osman.Ayvaz@gmail.com	5000	15	30	Turcville	35
14520	Kastendeuch	Frédéric	9 rue de la mairie	55000	0673343274	frederic.kastendeuch@gmail.com	3000	9	51	Bar-le-Duc	36
100000	Dondelinger	Eric	15 rue des DoNdOns de la Farce	98654	067898745	Eric.Dondelinger@gmail.com	50000	15	30	Dondonville	37
100000	Garovo	Martine	salle 204	55000	0327180212	Garovo.Martine@gmail.com	50000	15	30	Bar-le-Duc	38
100000	Mougin	Jason	8 rue de l'eglise	57360	0678459878	Jason.Mougin@gmail.com	50000	15	30	Amnéville	39
100000	Moschetta	Adrien	14 rue des américains	57260	0678984584	Mosketa@live.fr	50000	15	30	Algrange	40
44444	tyuio	tyuio	tyuio	tyuio	tyuio	tuyio	4444	14	32	tyuio	42
44444	jhon	mario	3 rue du nord	tyuio	tyuio	asqscviud	1500	15	30	dsvgqgbqf	57
15000	pierre	pol	3 rue du nord	78000	0000000	jack	3000	5	24	dsvgqgbqf	58
\.


--
-- TOC entry 2085 (class 0 OID 32817)
-- Dependencies: 179
-- Data for Name: note; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY note (id, contenu, date, importance, valide, personnel) FROM stdin;
1	Rendez vous avec le maire	2013-04-12	3	f	2
2	Rendez vous a 17h	2013-12-12	3	t	2
\.


--
-- TOC entry 2088 (class 0 OID 32834)
-- Dependencies: 183
-- Data for Name: proposition; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY proposition (id, tarif, plan, "valideOK", descriptif, id_visite) FROM stdin;
\.


--
-- TOC entry 2091 (class 0 OID 32846)
-- Dependencies: 186
-- Data for Name: technique; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY technique (id_visite, "dateVisite_visite", description_visite, id_projet) FROM stdin;
\.


--
-- TOC entry 2093 (class 0 OID 32859)
-- Dependencies: 188
-- Data for Name: typeUtilisateur; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "typeUtilisateur" ("idUtilisateur", "nomUtilisateur") FROM stdin;
1	Direction
2	Commercial
3	Client
\.


-- Completed on 2013-06-09 22:45:24

--
-- PostgreSQL database dump complete
--

