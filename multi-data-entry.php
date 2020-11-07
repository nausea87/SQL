<?php

// makes our database connection into an esier managebale function
function db(): PDO
{

    // path to our db file
    $dir = 'sqlite:/' . __DIR__ . '/database.db';
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dir, '', '',  $options); //tries to connect to our databse using $path, $username, $passowrd, $options 
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode()); //sends out an error message if it fails to connect.
    }
    /* 'Erik White', '127081769812764' */
    return $pdo;
}
$query = "insert into connexacc (code, msg) values (1233, 'I bought groceries so you dont have to');
insert into connexacc (code, msg) values (1234, 'we have no milk at home can you buy more');
insert into connexacc (code, msg) values (1235, 'yeah aik got crushed completely lol');
insert into connexacc (code, msg) values (1299, 'wanna come over for dinner on sunday');
insert into connexacc (code, msg) values (1302, 'I know who did it but i wont tell you');
insert into connexacc (code, msg) values (1311, 'this sms is utterly random');
insert into connexacc (code, msg) values (1344, 'and so is this text but it doesnt matter kek');
insert into connexacc (code, msg) values (1355, 'i really need to work on inputting data in bulks');
insert into connexacc (code, msg) values (1356, 'there once was a man who was named stefan');
insert into connexacc (code, msg) values (1377, 'and he was the primeminister of sweden');
insert into connexacc (code, msg) values (1388, 'then one day stefan found out that a doge');
insert into connexacc (code, msg) values (1389, 'had left a big poop on his carpet at home');
insert into connexacc (code, msg) values (1390, 'stefan was very sad but he loved his doge');
insert into connexacc (code, msg) values (1400, 'so the doge was not beated to death nor eaten');
insert into connexacc (code, msg) values (1401, 'but one day the doge was missing oh no said stefan');
insert into connexacc (code, msg) values (1403, 'he went to look everywhere but didnt find his doge');
insert into connexacc (code, msg) values (1405, 'after many years of searching for his dog without');
insert into connexacc (code, msg) values (1406, 'any success stefan made a decision that would');
insert into connexacc (code, msg) values (1408, 'change his life forever');
insert into connexacc (code, msg) values (1409, 'stefan commited harakiri and so the story ends');
insert into connexacc (code, msg) values (1410, 'we need to buy more toilepaper so we dont get covid');
insert into connexacc (code, msg) values (1412, 'anyone know any jokes about covid or too soon');
insert into connexacc (code, msg) values (1433, 'if anyone sees greger call me asap it important');
insert into connexacc (code, msg) values (1434, 'tralala lilla molntus best lyrics ever hehe');
insert into connexacc (code, msg) values (1435, 'i heard donald trump would nuke france if he loses');
insert into connexacc (code, msg) values (1436, 'how would he do that if he aint the president');
insert into connexacc (code, msg) values (1437, 'i mean if he aint the president he wont have nukes');
insert into connexacc (code, msg) values (1438, 'maybe he took some nukes with him when he left');
insert into connexacc (code, msg) values (1439, 'what to you mean took with him nukes in his pockets or what');
insert into connexacc (code, msg) values (1440, 'yeah maybe i dont know maybe he has some nukes');
insert into connexacc (code, msg) values (1441, 'just exacly do you think a nuke is then');
insert into connexacc (code, msg) values (2011, 'insert random goteborgsskamt here please');
insert into connexacc (code, msg) values (2013, 'what will you get if you korsar en kiwi och ett');
insert into connexacc (code, msg) values (2033, 'spokdjur you will get fredrik reinfeldt kek');
insert into connexacc (code, msg) values (2044, 'you should call glenn he know what to do');
insert into connexacc (code, msg) values (2050, 'cheers see you in the morning then');
insert into connexacc (code, msg) values (2066, 'johans glans was funnier several years ago');
insert into connexacc (code, msg) values (2070, 'magnus betneer is kinda funy but need new material');
insert into connexacc (code, msg) values (2078, 'you let the dogo out he made poop on my bed');
insert into connexacc (code, msg) values (2079, 'this table is kinda confusing but ill work into it');
insert into connexacc (code, msg) values (2080, 'why is frolunda the best icehockey team');
insert into connexacc (code, msg) values (2400, 'i know who killed olof palme it was me');
insert into connexacc (code, msg) values (2431, 'once upon a time there was a random table');
insert into connexacc (code, msg) values (2443, 'because of different reason we have decided');
insert into connexacc (code, msg) values (2500, 'this msg is encrypted and cannot be viewved');
insert into connexacc (code, msg) values (2550, 'donald trump will not win but maybe he will');
insert into connexacc (code, msg) values (2603, 'maybe joe biden will win who knows we will see');
insert into connexacc (code, msg) values (5001, 'this value jumped a bit didnt it but i realised');
insert into connexacc (code, msg) values (5002, 'i can be doing this forever will take too long time');
insert into connexacc (code, msg) values (5004, 'anyone see aussia man reviews its amazing i reckon');
insert into connexacc (code, msg) values (5010, 'yeah nah yeah bloody brilliant is what it is');
insert into connexacc (code, msg) values (5030, 'imoki toi da manalopi uli ty raka fastilopes');
insert into connexacc (code, msg) values (5501, 'what on earth did i just read there i have no idea');
insert into connexacc (code, msg) values (5003, 'tbf he just made it up i knew nothing about it');
insert into connexacc (code, msg) values (5005, 'he honey can you meet me at mcdonalds later');
insert into connexacc (code, msg) values (5009, 'just honey i can meet you there what time');
insert into connexacc (code, msg) values (5011, 'madicken is the best swedish movie ever said none');
insert into connexacc (code, msg) values (5012, 'when i grow up i wanna become a big lion hehe');
insert into connexacc (code, msg) values (5033, 'this was atleast less painful with two columns');
insert into connexacc (code, msg) values (5555, 'good work erik white I will take fall kek lol');
insert into connexacc (code, msg) values (5556, 'you can watch it for free on likelivetv');
insert into connexacc (code, msg) values (5557, 'who said that i never said that you said that');
insert into connexacc (code, msg) values (5590, 'this is kinda giving me some anxiety tbh');
insert into connexacc (code, msg) values (5591, 'who do you think will win i think joe biden');
insert into connexacc (code, msg) values (5599, 'i swear if that clown wins again ill kill myself');
insert into connexacc (code, msg) values (5603, 'go trump joe biden sucks hehe nah jk or am i');
insert into connexacc (code, msg) values (5609, 'i voted for trump because i like to grab things');
insert into connexacc (code, msg) values (5700, 'joe exotic is my spiritual animal i think nah jk');
insert into connexacc (code, msg) values (5701, 'i have no idea what you mean by that tbf explain');
insert into connexacc (code, msg) values (5709, 'i wonder how much data i need here to make this mm');
insert into connexacc (code, msg) values (5710, 'even slightly challening quite alot more i reckon');
insert into connexacc (code, msg) values (5711, 'yeah i saw them live last year amazing band from norway');
insert into connexacc (code, msg) values (5798, 'i have no idea what youre talking about really');
insert into connexacc (code, msg) values (5800, 'i forgot my keys at work can i sleep on your sofa');
insert into connexacc (code, msg) values (5801, 'sup dude are you free on saturday need some help');
insert into connexacc (code, msg) values (5809, 'i can be there on sunday instead what say you');
insert into connexacc (code, msg) values (5810, 'beats me who did it but im glad it wasnt me');
insert into connexacc (code, msg) values (5811, 'this is some obnoxious stuff i see that but nvm');
insert into connexacc (code, msg) values (6001, 'pizza tonight because it friday but its really not');
insert into connexacc (code, msg) values (6003, 'yeah because when i wrote that it was saturday');
insert into connexacc (code, msg) values (6009, 'see i told you so frank now piss off you twat');
insert into connexacc (code, msg) values (6201, 'why do you have to be so mean i didnt do nuthin');
insert into connexacc (code, msg) values (6444, 'hey mate wanna grab a beer with me a thomas');
insert into connexacc (code, msg) values (6666, 'yeah sure why not i can be there at seven');
insert into connexacc (code, msg) values (6667, 'who said bowling was boring bowling is fun');
insert into connexacc (code, msg) values (6689, 'shrek is love shrek is life instant classic');
insert into connexacc (code, msg) values (6700, 'i bet someone will read all of this because of lols');
insert into connexacc (code, msg) values (6789, 'reckon we should write a few more of these');
insert into connexacc (code, msg) values (6800, 'jorn saw her yesterday but left early');
insert into connexacc (code, msg) values (6809, 'yeah totally mate ill be there at three');
insert into connexacc (code, msg) values (7009, 'detroit red wings best team ever yo');
insert into connexacc (code, msg) values (7244, 'who didnt know that i knew that since a year back');
insert into connexacc (code, msg) values (7300, 'hey boomer why you hef to be mad why u mad');
insert into connexacc (code, msg) values (7408, 'riddar cato is kinda bad ass in lotr');
insert into connexacc (code, msg) values (7532, 'stefan sauk yeah thats the actor i ment');
insert into connexacc (code, msg) values (7544, 'who u said did it this smg no makes sense');
insert into connexacc (code, msg) values (7688, 'who doesnt have a mancrush on henry cavill');
insert into connexacc (code, msg) values (8001, 'i can do this all day mate just watch me k please dont');
insert into connexacc (code, msg) values (8003, 'when polar bears mcdonalds burger king checkmate');
insert into connexacc (code, msg) values (8103, 'wanna plat some chess later sure mate coool');
insert into connexacc (code, msg) values (8200, 'k tnx bye mate cya dont wanna be you kek lol win');
insert into connexacc (code, msg) values (8201, 'edglelord much k boomer why you ketchup me what man');
insert into connexacc (code, msg) values (8202, 'this text is random heck why lol ronald is green toyota');
insert into connexacc (code, msg) values (8203, 'leif loket olsson was here before and said nothing about it');




";

$stmt = db()->exec($query);


/* insert into connexacc (code, msg) values (1233, 'I bought groceries so you dont have to');
insert into connexacc (code, msg) values (1234, 'we have no milk at home can you buy more');
insert into connexacc (code, msg) values (1235, ''); */

/* CRIME SCENE REPORTS - working 06/11

insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1011, 'Murder', '1/09/2018', 'Gothenburg', 'One woman killed. No suspects as of yet.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1012, 'Murder', '1/09/2018', 'Gothenburg', '45 -Two men reported murdered. See witness #558b and #1213');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1029, 'Murder', '1/10/2018', 'Lerum', 'GLL - One man reported dead. Several witnesses, one person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1045, 'Murder', '3/10/2018', 'Partille', 'One woman reported killed. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1099, 'Murder', '6/11/2018', 'Kungsbacka', 'One woman reported killed. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1144, 'Murder', '3/12/2018', 'Gothenburg', 'One man murdered. Two witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1344, 'Murder', '11/01/2019', 'Gothenburg', 'One man reported dead. Several witnesses, one person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1399, 'Murder', '1/09/2019', 'Lerum', 'XX69 - One man murdered, while doing laundry. No witnesses. Case closed.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1404, 'Murder', '1/11/2019', 'Partille', 'Woman reported killed. No witnesses. Cased close as of now.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1509, 'Murder', '1/22/2019', 'Kungsbacka', 'One woman reported killed. No witnesses. One man arrested');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1566, 'Murder', '1/31/2019', 'Gothenburg', 'One man murdered. Several witnesses #9032, #44bb, #139c, #199b');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1599, 'Murder', '2/13/2019', 'Gothenburg', 'One man reported dead. Several witnesses, one person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1697, 'Murder', '3/09/2019', 'Lerum', 'One man murdered. Several witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1789, 'Murder', '3/10/2019', 'Gothenburg', 'One man murdered. Several witnesses. Five people in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1899, 'Murder', '4/19/2019', 'Kungsbacka', 'One man reported dead. Several witnesses, one person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1904, 'Murder', '5/19/2019', 'Partille', 'One woman reported killed. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2045, 'Murder', '6/29/2019', 'Partille', 'One man murdered. Several witnesses. Two people consfessed and arrested n stuff.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2220, 'Murder', '7/02/2020', 'Gothenburg', 'Woman murdered at McDonalds, Nordstan. Suspect named Donny McRonald arrested.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (5998, 'Murder', '8/04/2020', 'Gothenburg', 'One woman reported murdered at a restaurant in Gothenburg. witness #5532 and many more at the scene.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2598, 'Murder', '8/05/2020', 'Gothenburg', 'One woman reported killed. No witnesses. See crime report for more info.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2698, 'Murder', '8/11/2020', 'Gothenburg', 'One man reported dead. Several witnesses #3323 and many others. One person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2998, 'Murder', '8/22/2020', 'Lerum', 'One man murdered. Several witnesses. Look at report for more information.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3000, 'Murder', '9/22/2020', 'Gothenburg', 'Midnight: One man murdered at Zahmenhof. No witnesses as of now.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3005, 'Murder', '9/24/2020', 'Gothenburg', 'Zamenhof again. One man murdered. No witnesses. That place is definately not safe.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3010, 'Murder', '8/04/2020', 'Gothenburg', 'One man murdered. Probably Zamenhof. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3013, 'Murder', '9/26/2020', 'Gothenburg', 'One man murdered at restaurant around noon. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3014, 'Murder', '9/27/2020', 'Gothenburg', 'One man murdered by an evil murderererer. No witnesses. I think.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3016, 'Murder', '9/28/2020', 'Gothenburg', '#FFX - One man murdered. No witnesses. Details comming next week.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3029, 'Murder', '9/29/2020', 'Gothenburg', '#444 - One man murdered. No witnesses. Victim had been threaten the day before the murder.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3055, 'Murder', '9/30/2020', 'Gothenburg', 'One man murdered. No witnesses. One man has confessed. Solved.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3066, 'Murder', '4/04/2020', 'Gothenburg', 'FFG - One man murdered. No witnesses. See report #4466823484.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3089, 'Murder', '10/04/2020', 'Gothenburg', '#9922 One man murdered. No witnesses. See document #34237452735h for additional information.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4012, 'Murder', '10/05/2020', 'Gothenburg', 'NNJ - One man murdered. No witnesses. Two men has since confessed and been sentenced.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4014, 'Murder', '10/06/2020', 'Gothenburg', 'One man murdered. No witnesses. Report #77772348 for more info.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4444, 'Murder', '10/07/2020', 'Gothenburg', 'One man murdered in cold blood. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4322, 'Murder', '8/04/2020', 'Gothenburg', 'One man murdered. Many witnesses at Zamenhof #55x4, #1f42, #12b1');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4901, 'Murder', '10/09/2020', 'Gothenburg', 'Elderly man murdered in his home. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (5449, 'Murder', '10/10/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (5450, 'Murder', '8/04/2020', 'Gothenburg', 'Woman murdered at Ullevi during lunch. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (6322, 'Murder', '8/04/2020', 'Gothenburg', 'Two women murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (6344, 'Murder', '8/04/2020', 'Gothenburg', 'One man murdered. No witnesses. Report #1109444772b');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (6666, 'Murder', '8/04/2020', 'Gothenburg', 'One man murdered. No witnesses as of now.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (6698, 'Theft', '8/04/2020', 'Gothenburg', 'One old women robbed of her haaaandbag. No witnesses');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (7001, 'Theft', '8/04/2020', 'Gothenburg', 'Two women robbed at gunpoint. See witness no. Xff65');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (7009, 'Theft', '8/04/2020', 'Gothenburg', 'Elderly man robbed of his cellphone');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (7021, 'Theft', '8/04/2020', 'Gothenburg', 'Some theif at Burger King was theiving stuff. Arrested');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (7023, 'Theft', '8/04/2020', 'Gothenburg', 'One man reported there had been a brakein in his car');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (7049, 'Murder', '8/04/2020', 'Gothenburg', 'Man found dead at Korvkiosken Heden');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (7050, 'Murder', '8/04/2020', 'Gothenburg', 'One dog found murdered. Cat named Smulan in custody');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (7079, 'Murder', '8/04/2020', 'Gothenburg', 'Two pidgeons found slaughtered at Lilla Bommen. No suspects as of yet.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (7080, 'Murder', '8/04/2020', 'Gothenburg', 'One man reported murdered outside Ullevi.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (8001, 'Murder', '8/04/2020', 'Gothenburg', '#55657 - Two men murdered. See documents.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (8021, 'Murder', '8/04/2020', 'Gothenburg', 'FF9 - Solved. Two men sentenced.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (8300, 'Murder', '8/04/2020', 'Gothenburg', 'Nineteen thought been murdered found not murdered. Nice.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (8321, 'Murder', '8/04/2020', 'Gothenburg', 'One woman killed FFG see protocol. One confession');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (8423, 'Murder', '8/04/2020', 'Gothenburg', 'Man dresses as Boris Yeltsin and kills five people');



*/

/* WITNESSES - working 07/11 */
/* insert into witnesses (witness_id, name, phone, adress, report) values (1299, 'Karin Andersson', '25399476', 'Kalasgatan 12 B', 'It was dark and I saw nothing. But Erik ran quickly away from here.');
insert into witnesses (witness_id, name, phone, adress, report) values (4479, 'Östman L Beritsson', '98713455', 'Gatgatan 23 C', 'Hmm, dunno maybe Tjorven did it, she looked hella in a hurry away from here.');
insert into witnesses (witness_id, name, phone, adress, report) values (5547, 'Tjorven Boatsmansson', '17364543', 'Saltycrowstreet', 'I drove home in my red car, because I was in shock.');
insert into witnesses (witness_id, name, phone, adress, report) values (2345, 'Erik Blackmetalsson', '13379645', 'Burzumroad 34', 'Mayhem sucks, but I saw nothing except that Glenn ran out with blood on his hands.');
insert into witnesses (witness_id, name, phone, adress, report) values (1123, 'Danijel De La Cruz', '13473945', 'Kullegatan 37', 'It all happend so fast. I saw Linn and Isadora running out.');
insert into witnesses (witness_id, name, phone, adress, report) values (5345, 'Isadora Fredrika Glennsdottir', '85187524', 'Hermelinroad', 'Someone had a knife I think. ');
insert into witnesses (witness_id, name, phone, adress, report) values (8789, 'Glenneth Harddrivesson', '12656245', 'Seagateroad 1337', 'Someone ran quickly afterwards. I think it was Linn.');
insert into witnesses (witness_id, name, phone, adress, report) values (8273, 'Sten Stenhuggare', '24125924', 'Stoneblaster Street', 'I bought a sausage and then someone go stabbed.');
insert into witnesses (witness_id, name, phone, adress, report) values (3202, 'Madicken Karlsson', '87755123', 'Jormangarlund 3', 'I saw nuthin at all.');
insert into witnesses (witness_id, name, phone, adress, report) values (1212, 'Erik White', '70817698', 'Vattengatan 4', 'The murderer had severly cut his hand. I heard Lasse Kongo saw more.');
insert into witnesses (witness_id, name, phone, adress, report) values (3342, 'Linn Josefsson', '15246514', 'Linnstreet 5', 'I saw that someone jumped into a car with the license plate MK-something.');
insert into witnesses (witness_id, name, phone, adress, report) values (5532, 'Vincent Teachersson', '12467251', 'Kalasgatan 99', 'Linn Josefsson looked suspicious, and she ran quickly away from the scene. I think she drove away.');
insert into witnesses (witness_id, name, phone, adress, report) values (9112, 'Glenn Hysen', '12416245', 'Unibet St 420', 'Why cant Santa get any children during -mas. Because he has already empied his sack.');
insert into witnesses (witness_id, name, phone, adress, report) values (4865, 'Glenn Strömberg', '86526415', 'Bergamo Road 44', 'I was just chillin and drinking a beer you know.');
insert into witnesses (witness_id, name, phone, adress, report) values (5762, 'Björk Janlund', '35595234', 'Bjorkvagen 3434', 'It was probably Jimmie. Yeah, I reckon that is accurate.');
insert into witnesses (witness_id, name, phone, adress, report) values (1265, 'Xavier Fredriksson', '12412524', 'Fredriksroad 45', 'Just saw that everyone ran and there was panic. Linn also ran to her car.');
insert into witnesses (witness_id, name, phone, adress, report) values (1246, 'Sven Bertilsson', '12348235', 'Bertilsvenssonvagen 45', 'First there was a lot of shouting and then more shouting. Then Erik just runs out.');
insert into witnesses (witness_id, name, phone, adress, report) values (2357, 'Lasse Kongo', '12411264', 'Nileroad 420', 'I saw that the murderer injured his hand. He jumped into a red car with reg num LO something. He must definately have gone to the hospital with that wound.');
insert into witnesses (witness_id, name, phone, adress, report) values (5825, 'Mads Mikkelsen', '12167544', 'Hannibal St 666', 'Hvi e roooode, hvi e hviiiide. But yeeah, I saw someone enter a white car with license F something.');
insert into witnesses (witness_id, name, phone, adress, report) values (5975, 'Mikkel Madsen', '12416514', 'Svangatan 34', 'I saw Isadora having blood on her hands.');
insert into witnesses (witness_id, name, phone, adress, report) values (1427, 'Robert Ohlund', '67451964', 'Korvkiosken 38', 'After the murder Glenneth ran home, I think.');
insert into witnesses (witness_id, name, phone, adress, report) values (4623, 'Karlsson Golvetsson', '23276354', 'Onthefloorroad 34', 'Tjorven looked guilty imo. And she ran away quickly with a dog.');
insert into witnesses (witness_id, name, phone, adress, report) values (4321, 'Jean Claude Van Dammsugare', '23476354', 'Delcato Road 4', 'Meh, dunno probably Ostman murdered Sandra. They had argued alot lately.');
insert into witnesses (witness_id, name, phone, adress, report) values (9899, 'Leif Loket Olsson', '93434625', 'Bingoberragatan 420', 'Devalaroligt, kek just kidding but Lasse probably did it.');
insert into witnesses (witness_id, name, phone, adress, report) values (1213, 'Stefan Larsson', '11143424', 'Söderledsvägen 32' , 'There was an argument and then they just stole that womans purse.' );
insert into witnesses (witness_id, name, phone, adress, report) values (1211, 'Maria Söderling', '95111342', 'Krokslättsvägen 19 B' , 'Frank and I had just bought dinner when the car drove through the window.' );
insert into witnesses (witness_id, name, phone, adress, report) values (3341, 'Vincent Larsson', '55562004', 'Fyrklövern 45 B' , 'Erik and I saw who beat Karl.' );
insert into witnesses (witness_id, name, phone, adress, report) values (5300, 'Linn Fredriksson', '44321995', 'Adetonsgatan 19 E' , 'I didnt see anything really. But someone had a machete.' );
insert into witnesses (witness_id, name, phone, adress, report) values (5301, 'Eva Markusson', '55424599', 'Dinosaurievägen 3 B' , 'After he had been shot the killer ran out through the backdoor.' ); 
insert into witnesses (witness_id, name, phone, adress, report) values (5339, 'Lars Tegner', '94482558', 'Kullerstensgatan 19 B' , 'He probably two meteres tall atleast and had orange hair.' );
insert into witnesses (witness_id, name, phone, adress, report) values (1000, 'Jonas Andersson', '66673829', 'Walandersplatsen 98 B' , 'The assaulter who attack Jonas was dressed as Santa Claus.' );
insert into witnesses (witness_id, name, phone, adress, report) values (1320, 'Lisa Danielsson', '44538555', 'Guldgatan 9' , 'Thomas thought the killer was kidding at first but then I drew the knife.' );
insert into witnesses (witness_id, name, phone, adress, report) values (1009, 'Vinnie Madsen', '33400054', 'Olivedalsgatan 4 C' , 'I didnt see much but whoever shot Fredrik shouted something at him first.' );
insert into witnesses (witness_id, name, phone, adress, report) values (1199, 'Ivar Jakobsen', '44325555', 'Kungsladugårdsgatan 109 F' , 'I had never seen that man before but he was angry' );
insert into witnesses (witness_id, name, phone, adress, report) values (5555, 'Thomas Bodsen', '52964456', 'Kardinalvägen 19 C' , 'Lisbeth ran away from the killer but he caught her.' );
insert into witnesses (witness_id, name, phone, adress, report) values (4444, 'Uwe Eskilsson', '52229545', 'Richtersvägen 6 A' , 'Richard told him to piss off but he would not listen' );
insert into witnesses (witness_id, name, phone, adress, report) values (3333, 'Yngwie Svensson', '99415156', 'Torstensmotet 9 A' , 'It was so dark but it was definately a man with a Norweigan accent.' );
insert into witnesses (witness_id, name, phone, adress, report) values (2222, 'Ove Sundström', '54779222', 'Strandvägen C' , 'Cant really tell you much but he took my laptop' );
insert into witnesses (witness_id, name, phone, adress, report) values (2223, 'Erik Karlsson', '22134323', 'Wieselgrensplatsen E' , 'Henrik had argued with this man before and suddenly he was sucked punched.' );
*/

/* CARS - working 06/11 */
/*
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Erik Wiklander', 'MEE 033', 70887788, 'Red', 'Volvo');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Vinnie Dempsen', 'LOF 411', 77382200, 'Black', 'BMW');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Linn Larsson', 'JUI 999', 99400002, 'White', 'Saab');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Fredrik Nilsson', 'URR 721', 39944333, 'Green', 'Ford');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Henrik Svensson', 'LOX 990', 33210034, 'Black', 'Volvo');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Erik White', 'MKE 093', 70817698, 'Red', 'Volvo');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Sixten Svensson', 'JJK 565', 23456734, 'White', 'Saab');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Sven Henriksson', 'FTP 404', 23499524, 'Blue', 'Tesla');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Nils Kardemummasson', 'CSS 420', 56354286, 'Green', 'Opel');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Bengt Matsson', 'KIX 225', 66428654, 'Silver', 'Monster Truck');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Orvar Nicklasson', 'IKT 855', 82354254, 'Pink', 'Sedan');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Fredrik Larsson', 'OLF 332', 35428654, 'Yellow', 'Toyota');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Linn Josefsson', 'YGX 556', 15246514, 'Green', 'Volvo');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Vincent Teachersson', 'LOL 666', 12467251, 'Red', 'Lada');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Hafthor Bjornsson', 'RFR 772', 77498583, 'White', 'Tesla');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Nicklas Fredriksson', 'PRT 681', 85809994, 'Cyan', 'Ford');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Carola Thorstensson', 'OLW 510', 33571010, 'Purple', 'BMW');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Bengt Alsterlind', 'HAJ 311', 40420420, 'Pink', 'Skoda');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Frida Carlsson', 'TYM 672', 13371337, 'Black', 'Ford');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Glenneth Stensson', 'MYF 232', 57353993, 'Red', 'Golf');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Frank Andersson', 'LMM 443', 12958852, 'White', 'Saab');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Karl Andreasson', 'HHY 600', 49910449, 'Blue', 'BMW');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Priscilla Smith', 'TWO 550', 47827346, 'White', 'Mustang');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Ronald McDonald', 'RRT 234', 11296959, 'Green', 'Rolls Royce');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Glenn Hysen', 'LES 998', 12416245, 'Green', 'Volvo');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Erik Axelsson', 'FEL 066', 54559910, 'White', 'Volvo');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Göran Karlsson', 'LOP 091', 12329901, 'White', 'Volvo');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Nils Andersson', 'MKE 092', 63390001, 'Blue', 'Volvo');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Fredrik Göransson', 'MKI 992', 55610000, 'Red', 'Saab');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Roland Larsson', 'ULI 777', 77329945, 'Blue', 'Renault');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Thomas Dikriksson', 'TTT 444', 59129999, 'Red', 'Volvo');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Lars Nilsson', 'EEQ 443', 56911119, 'Green', 'Nisan');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Richard Berglund', 'RRT 771', 23001321, 'Blue', 'Volvo');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Tito Themus', 'DCV 345', 11929332, 'Black', 'BMW');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Wendy Anderson', 'DKL 991', 90123324, 'Red', 'Volvo');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Linn Söderström', 'YGR 009', 99834823, 'White', 'Skoda');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Pontus Thomsen', 'UWE 883', 83211009, 'Green', 'Ford Mustang');
*/

/*HOSPITAL - working 07/11 */
/*
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12006611, 'Erik Johannesson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (11902211, 'Erik Fredriksson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (11802211, 'Anton Larsson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (11702211, 'Erik Whidell', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12817698, 'Erik White', '8/03/2020', 'Gothenburg', 'No report. Reported feeling a soar throat and a stick neck. Lack of taste and smell.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12565762, 'Magnus Ladulocker', '3/03/2009', 'Karlstad', 'Bleeding from ears and nose after consuming unknown substance.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12646111, 'Karl Karlsson', '4/09/2020', 'Gothenburg', 'Earwax and covid. Wicked combo I reckon. Patient disagrees.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (11365653, 'Conny Nilsson', '8/04/2020', 'Gothenburg', 'Knife wound to eye. Ouchie. And also covid ofcourse. Patient in stable but critical condition.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12345353, 'Nixon Richards', '8/04/2020', 'Gothenburg', 'Gunshot wound');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (13237562, 'Annie Loooof', '8/04/2020', 'Gothenburg', 'Stabwound and Covid. Not a good day Annie.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12235239, 'Leif Dilson', '8/04/2020', 'Gothenburg', 'Kidney stones in the hands.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12523235, 'Jocke Gyllenhammar', '8/04/2020', 'Gothenburg', 'Unknown. High fever. Weakend eyesight and hearing. Stable but critical.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (82537457, 'Sandra Fredriksson', '8/04/2020', 'Gothenburg', 'Firecracker to eye');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (11567356, 'Carolina Roslund', '8/04/2020', 'Gothenburg', 'Covid');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (10652654, 'Petronella Blaskeby', '8/04/2020', 'Gothenburg', 'Covid. Lack of smell and weak eyesight. Critical condition.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (10745455, 'Viktoria Silverstedt', '8/04/2020', 'Gothenburg', 'Most likely Covid. Hospitalised.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (13423235, 'Anna Anka', '8/04/2020', 'Gothenburg', 'Covid confirmed.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (13397836, 'Sarah Palin', '8/04/2020', 'Gothenburg', 'Covid-1337');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (13423592, 'Pamela Andersson', '8/04/2020', 'Gothenburg', 'Covid confirmed.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (13539452, 'Tonya Harding', '8/04/2020', 'Gothenburg', 'Covid confirmed.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12826345, 'Uno Svenningsson', '8/04/2020', 'Gothenburg', 'Tested for Covid. Hospitalised.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (14236458, 'Bengt Falsterbo', '8/04/2020', 'Gothenburg', 'Covid. See previous report for information.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12467251, 'Vincent Teachersson', '8/04/2020', 'Gothenburg', 'Says he cut his hand with a knife while at home. Left a note that says Connexacc 5555');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (59002211, 'Erik Jonasson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (66669232, 'Marcus Eriksson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (99111111, 'Linn Söderling', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (11132323, 'Erik Karlsson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (22323454, 'Frank Niklasson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (43434343, 'Lisbeth Larsson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (87878787, 'Urban Aftenberg', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (34343525, 'Vincent Larsson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (97867444, 'Erik Hammar', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (78594399, 'Linn Larsson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12345670, 'Linus Göransson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (23434565, 'Karl Sixtensson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (56748382, 'Frank Thorvaldsson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (54763283, 'Yngwie Matsson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (67589323, 'Sandra Bullock', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (57682344, 'Göran Greider', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (10011011, 'Paolo Roberto', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (22002020, 'Gert Fylking', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (33030033, 'Harald Treutiguieuier', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (44040044, 'Leif Karlsson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (55050005, 'Bert Karlsson', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (66060600, 'Fredrik Carlsen', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (77070007, 'Johanna Munchen', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (77008008, 'Sara Videll', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (80080088, 'Claudio Shaffar', '8/04/2020', 'Gothenburg', 'Case of Covid. Patient has been hospitalised for more treatment. Serious condition but stable.');
*/

/* SUSPECTS - working 05/11 */
/*
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('435AGHJ', 'Lars Winnerback', 'Assault', '07543123', 'MLD 939');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('435AaGHJ', 'Lars Walander', 'Assault', '07549123', 'MEE 949');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('7H46dOfK', 'Niklas Franksson', 'Murder', '07542288', 'No car');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('76d7ff8d', 'Sixten Holmgren', 'DUI', '075442343', 'MKD 440');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('f773fd73', 'Kalle Anka', 'Assault', '07547552', 'No car');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('f3847fff', 'Kajsa Nilsson', 'Robbery', '07562344', 'No car');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('2308w57ef', 'Fredrik Gonzales', 'Assault', '075124443', 'No car');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('297fn6n7n', 'Erik White', 'Murder', '70817698', 'MKE 093');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('188nc7ff', 'Tonald Drump', 'Murder', '07554265', 'KLS 786');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('84vn8iwe', 'Bracky Bama', 'Murder', '07904644', 'OOP 467');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('0fjdd9wf', 'Joakim Fiinix', 'Murder', '07429673', 'TYS 909');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('546361dh', 'Lars Adaktussons Frisyr', 'Murder', '07554786', 'XXO 777');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('197342hf', 'Gargamel Smurfsson', 'Murder', '07562344', 'OOL 129');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('58wuu3if', 'Fantomen Jonasson', 'Assault', '07234234', 'IKS 554');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('239nfw4ef', 'Arne Weisse', 'Assault', '07246424', 'LIP 442');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('f38nff5J', 'Lisbeth Salander', 'Assault', '07523544', 'FLA 418');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('00k7f23r', 'Kardinaltetra Bearneisesson', 'Assault', '07277236', 'VAN 884');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('1878ffff', 'Amanda Johansson', 'Assault', '07725344', 'COV 113');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('5979f7ef', 'Sixten Gregersson', 'Assault', '07486234', 'NAS 303');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('45907wef', 'Valentino Molotov', 'Murder', '07576234', 'LEX 404');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('34fd9njf', 'Kaj Holgersson', 'Murder', '07522342', 'ALS 001');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('239ffff', 'Ludmilla Engqvist', 'Murder', '07525652', 'NYR 333');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('349q8ff', 'Fredrik Wikingsson', 'Murder', '07562344', 'NYI 990');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('349wfnfg', 'Filip Hammer', 'Murder', '07234244', 'FRA 209');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('34fh97nf', 'Vincent Teachersson', 'Murder', '12467251', 'LOL 666');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('349j7ggg', 'Jonas Gardell', 'Assault', '07234424', 'DAL 113');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('0eukdnwf', 'Orvar Antonsson', 'Assault', '07234424', 'LOU 042');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('123luff', 'Kaj Linnaberg', 'Assault', '07233811', 'VIL 599');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('349öung', 'Luigi Nintendosson', 'Assault', '07985822', 'MAN 719');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('wefbwuef', 'Jonas Supermariosson', 'Assault', '07593723', 'KAJ 857');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('ew3eq771', 'Linn Josefsson', 'Murder', '15246514', 'YGX 556');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('rr77cndw', 'Glenn Hysen', 'Murder', '12416245', 'LES 998');
insert into suspects (id, name, crime_type, phone_num, reg_num) values ('53737b34', 'Mirjam Andersson', 'Murder', '55490023', 'ODD 565');
*/