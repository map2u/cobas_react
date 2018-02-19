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
-- Name: stations_species; Type: TABLE; Schema: public; Owner: jzhao
--

CREATE TABLE stations_species2 (
    station_id integer NOT NULL,
    species_id integer NOT NULL
);


ALTER TABLE stations_species OWNER TO jzhao;

--
-- Data for Name: stations_species; Type: TABLE DATA; Schema: public; Owner: jzhao
--

COPY stations_species2 (station_id, species_id) FROM stdin;
1	295
1	296
1	297
1	298
1	299
1	300
1	301
1	302
1	303
1	304
1	305
1	306
1	307
1	308
1	309
1	310
1	311
1	312
1	313
1	314
1	315
1	316
1	317
1	318
1	319
1	320
1	321
1	322
1	323
1	324
1	325
1	326
1	327
1	328
1	329
1	330
1	331
1	332
1	333
1	334
1	335
1	336
1	337
1	338
1	339
1	340
1	341
1	342
1	343
1	344
1	345
1	346
1	347
1	348
1	349
1	350
1	351
1	352
1	353
1	354
1	355
1	356
1	357
1	358
1	359
1	360
1	361
1	362
1	363
1	364
1	365
1	366
1	367
1	368
1	369
1	370
1	371
1	372
1	373
1	374
1	375
1	376
1	377
1	378
1	379
1	380
1	381
1	382
1	383
1	384
1	385
1	386
1	387
1	388
1	389
1	390
1	391
1	392
1	393
1	394
1	395
1	396
1	397
1	398
1	399
1	400
1	401
1	402
1	403
1	404
1	405
1	406
1	407
1	408
1	409
1	410
1	411
1	412
1	413
1	414
1	415
1	416
1	417
1	418
1	419
1	420
1	421
1	422
1	423
1	424
1	425
1	426
1	427
1	428
1	429
1	430
1	431
1	432
1	433
1	434
1	435
1	436
1	437
2	439
2	296
2	297
2	440
2	300
2	301
2	302
2	303
2	441
2	442
2	306
2	308
2	309
2	310
2	312
2	443
2	313
2	314
2	315
2	318
2	444
2	323
2	324
2	445
2	325
2	326
2	327
2	328
2	329
2	330
2	331
2	332
2	446
2	447
2	338
2	448
2	449
2	450
2	340
2	341
2	451
2	342
2	452
2	453
2	454
2	349
2	353
2	356
2	455
2	358
2	456
2	457
2	360
2	458
2	361
2	459
2	362
2	364
2	460
2	369
2	370
2	372
2	373
2	461
2	374
2	462
2	376
2	379
2	381
2	463
2	464
2	465
2	466
2	383
2	467
2	388
2	389
2	468
2	391
2	469
2	392
2	470
2	435
2	393
2	394
2	395
2	397
2	471
2	401
2	472
2	402
2	473
2	474
2	403
2	407
2	475
2	409
2	476
2	410
2	411
2	477
2	412
2	414
2	478
2	416
2	479
2	419
2	420
2	421
2	480
2	422
2	423
2	481
2	482
2	483
2	424
2	425
2	484
2	426
2	485
2	427
2	486
2	436
2	487
2	429
2	430
2	431
2	488
2	404
2	320
2	382
3	489
3	490
3	491
3	297
3	298
3	492
3	493
3	300
3	303
3	304
3	494
3	495
3	307
3	308
3	310
3	496
3	312
3	313
3	314
3	316
3	497
3	498
3	320
3	499
3	500
3	324
3	501
3	445
3	326
3	328
3	502
3	331
3	332
3	503
3	504
3	505
3	334
3	506
3	448
3	339
3	507
3	508
3	343
3	453
3	509
3	348
3	351
3	510
3	511
3	512
3	355
3	513
3	357
3	455
3	514
3	358
3	457
3	360
3	458
3	361
3	365
3	515
3	516
3	517
3	369
3	518
3	372
3	373
3	519
3	461
3	374
3	520
3	376
3	377
3	378
3	464
3	521
3	522
3	384
3	385
3	386
3	387
3	388
3	389
3	523
3	524
3	525
3	526
3	527
3	393
3	528
3	529
3	395
3	530
3	433
3	531
3	532
3	533
3	534
3	535
3	536
3	537
3	538
3	401
3	402
3	539
3	403
3	405
3	540
3	541
3	542
3	407
3	409
3	543
3	544
3	412
3	414
3	416
3	418
3	419
3	545
3	420
3	546
3	423
3	547
3	482
3	425
3	484
3	426
3	427
3	548
3	436
3	487
3	549
3	550
3	431
3	551
3	432
3	552
3	553
3	429
3	554
3	555
3	556
3	410
3	485
3	454
4	490
4	491
4	297
4	298
4	492
4	303
4	304
4	307
4	310
4	311
4	496
4	314
4	557
4	316
4	317
4	558
4	559
4	323
4	324
4	501
4	560
4	561
4	328
4	330
4	331
4	332
4	446
4	336
4	562
4	341
4	563
4	564
4	344
4	453
4	348
4	350
4	351
4	565
4	352
4	355
4	566
4	514
4	457
4	555
4	458
4	361
4	567
4	366
4	367
4	516
4	568
4	369
4	370
4	371
4	372
4	373
4	569
4	520
4	376
4	377
4	378
4	380
4	381
4	463
4	570
4	571
4	383
4	522
4	385
4	386
4	389
4	468
4	525
4	391
4	392
4	572
4	393
4	573
4	394
4	395
4	574
4	396
4	575
4	576
4	577
4	534
4	535
4	537
4	401
4	403
4	578
4	405
4	540
4	579
4	407
4	409
4	410
4	411
4	544
4	580
4	412
4	414
4	416
4	418
4	581
4	582
4	583
4	423
4	434
4	584
4	482
4	425
4	585
4	485
4	427
4	586
4	587
4	436
4	487
4	549
4	429
4	430
4	431
4	551
4	588
4	360
4	448
4	589
4	402
4	590
4	499
4	591
4	592
5	593
5	489
5	594
5	491
5	297
5	298
5	595
5	492
5	493
5	596
5	299
5	597
5	301
5	303
5	598
5	599
5	306
5	310
5	600
5	496
5	312
5	313
5	601
5	316
5	602
5	558
5	603
5	444
5	499
5	323
5	324
5	501
5	445
5	325
5	326
5	502
5	329
5	604
5	331
5	332
5	605
5	503
5	446
5	334
5	606
5	339
5	607
5	341
5	451
5	343
5	344
5	453
5	454
5	348
5	349
5	347
5	608
5	352
5	354
5	512
5	355
5	356
5	513
5	609
5	514
5	610
5	457
5	555
5	458
5	361
5	611
5	553
5	612
5	367
5	368
5	568
5	369
5	372
5	373
5	461
5	374
5	462
5	376
5	377
5	379
5	380
5	381
5	613
5	570
5	465
5	521
5	522
5	384
5	386
5	389
5	468
5	391
5	614
5	470
5	556
5	393
5	394
5	615
5	529
5	395
5	616
5	397
5	433
5	535
5	537
5	401
5	402
5	617
5	403
5	405
5	618
5	541
5	619
5	407
5	620
5	409
5	410
5	411
5	621
5	412
5	414
5	622
5	416
5	418
5	545
5	420
5	623
5	583
5	624
5	422
5	625
5	423
5	481
5	482
5	626
5	627
5	424
5	425
5	484
5	585
5	485
5	628
5	427
5	586
5	436
5	629
5	487
5	549
5	630
5	431
5	551
5	631
5	309
5	430
5	511
5	419
5	632
5	633
6	295
6	297
6	298
6	493
6	300
6	301
6	302
6	494
6	634
6	635
6	307
6	310
6	311
6	312
6	313
6	315
6	558
6	319
6	636
6	323
6	324
6	325
6	326
6	637
6	331
6	638
6	332
6	333
6	639
6	640
6	446
6	335
6	449
6	339
6	641
6	341
6	451
6	642
6	643
6	343
6	644
6	351
6	645
6	354
6	511
6	512
6	646
6	647
6	513
6	648
6	457
6	555
6	649
6	458
6	361
6	459
6	650
6	364
6	651
6	366
6	515
6	368
6	568
6	369
6	372
6	373
6	519
6	652
6	374
6	462
6	380
6	381
6	653
6	654
6	348
6	464
6	655
6	383
6	521
6	384
6	385
6	389
6	631
6	391
6	392
6	470
6	656
6	393
6	657
6	658
6	394
6	529
6	395
6	659
6	397
6	433
6	660
6	661
6	662
6	663
6	664
6	665
6	666
6	536
6	537
6	667
6	668
6	401
6	669
6	402
6	474
6	403
6	670
6	671
6	619
6	579
6	407
6	409
6	410
6	411
6	544
6	672
6	414
6	415
6	673
6	416
6	418
6	419
6	545
6	420
6	421
6	583
6	422
6	674
6	423
6	482
6	424
6	675
6	676
6	677
6	484
6	585
6	678
6	628
6	427
6	436
6	487
6	429
6	679
6	431
6	551
6	480
6	680
6	620
6	602
6	681
6	603
6	376
6	633
6	682
6	388
7	594
7	295
7	296
7	297
7	300
7	301
7	302
7	303
7	304
7	598
7	306
7	307
7	310
7	312
7	313
7	314
7	315
7	316
7	317
7	318
7	603
7	683
7	589
7	321
7	323
7	324
7	445
7	325
7	326
7	327
7	502
7	329
7	330
7	331
7	332
7	333
7	640
7	335
7	336
7	338
7	449
7	339
7	340
7	684
7	341
7	342
7	343
7	344
7	453
7	346
7	685
7	348
7	350
7	351
7	352
7	353
7	355
7	356
7	357
7	358
7	686
7	457
7	360
7	458
7	361
7	459
7	362
7	363
7	364
7	366
7	367
7	368
7	369
7	370
7	372
7	687
7	688
7	374
7	375
7	376
7	379
7	380
7	381
7	382
7	653
7	464
7	383
7	384
7	386
7	388
7	389
7	390
7	391
7	469
7	392
7	470
7	393
7	394
7	395
7	396
7	397
7	398
7	399
7	400
7	401
7	402
7	403
7	404
7	405
7	540
7	619
7	407
7	409
7	410
7	411
7	544
7	412
7	414
7	415
7	689
7	416
7	690
7	419
7	421
7	422
7	423
7	482
7	424
7	425
7	426
7	427
7	429
7	431
7	474
7	691
7	521
7	485
7	334
7	430
\.



