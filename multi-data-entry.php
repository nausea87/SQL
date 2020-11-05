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
$query = "insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1011, 'Murder', '1/09/2018', 'Gothenburg', 'One woman killed. No suspects.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1012, 'Murder', '1/09/2018', 'Gothenburg', '45 -Two men reported murdered. See witness #558b and #1213');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1029, 'Murder', '1/10/2018', 'Lerum', 'GLL - One man reported dead. Several witnesses, one person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1045, 'Murder', '3/10/2018', 'Partille', 'One woman reported killed. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1099, 'Murder', '16/11/2018', 'Kungsbacka', 'One woman reported killed. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1144, 'Murder', '3/12/2018', 'Gothenburg', 'One man murdered. Two witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1344, 'Murder', '11/01/2019', 'Gothenburg', 'One man reported dead. Several witnesses, one person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1399, 'Murder', '1/09/2019', 'Lerum', 'XX69 - One man murdered. Several witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1404, 'Murder', '1/11/2019', 'Partille', '39b -One woman reported killed. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1509, 'Murder', '1/22/2019', 'Kungsbacka', 'One woman reported killed. No witnesses. One man arrested');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1566, 'Murder', '1/31/2019', 'Gothenburg', 'One man murdered. Several witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1599, 'Murder', '2/13/2019', 'Gothenburg', 'One man reported dead. Several witnesses, one person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1697, 'Murder', '3/09/2019', 'Lerum', 'One man murdered. Several witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1789, 'Murder', '3/10/2019', 'Gothenburg', 'One man murdered. Several witnesses. Five people in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1899, 'Murder', '4/19/2019', 'Kungsbacka', 'One man reported dead. Several witnesses, one person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1904, 'Murder', '5/19/2019', 'Partille', 'One woman reported killed. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2045, 'Murder', '6/29/2019', 'Partille', 'One man murdered. Several witnesses. Two people consfessed and arrested n stuff.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2220, 'Murder', '7/02/2020', 'Gothenburg', 'Woman murdered at McDonalds, Nordstan. Suspect named Donny McRonald arrested.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (5998, 'Murder', '8/04/2020', 'Gothenburg', 'One woman reported murdered at a restaurant in Gothenburg. Three witnesses #1212, #3342, #5532');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2598, 'Murder', '8/05/2020', 'Gothenburg', 'One woman reported killed. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2698, 'Murder', '8/11/2020', 'Gothenburg', 'One man reported dead. Several witnesses #3323, #1123, #9981. One person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2998, 'Murder', '8/22/2020', 'Lerum', 'One man murdered. Several witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3000, 'Murder', '9/22/2020', 'Gothenburg', 'Midnight: One man murdered at Zahmenhof. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3005, 'Murder', '9/24/2020', 'Gothenburg', 'Zamenhof again. One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3010, 'Murder', '9/25/2020', 'Gothenburg', 'One man murdered. Probably Zamenhoooof. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3013, 'Murder', '9/26/2020', 'Gothenburg', 'One man murdered at restaurant around noon. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3014, 'Murder', '9/27/2020', 'Gothenburg', 'One man murdered by an evil murderererer. No witnesses. I think.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3016, 'Murder', '9/28/2020', 'Gothenburg', 'FFX - One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3029, 'Murder', '9/29/2020', 'Gothenburg', '#444 - One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3055, 'Murder', '9/30/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3066, 'Murder', '10/01/2020', 'Gothenburg', 'FFG - One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3089, 'Murder', '10/04/2020', 'Gothenburg', '#9922 One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4012, 'Murder', '10/05/2020', 'Gothenburg', 'NNJ - One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4014, 'Murder', '10/06/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4444, 'Murder', '10/07/2020', 'Gothenburg', 'One man murdered in cold blood. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4322, 'Murder', '10/08/2020', 'Gothenburg', 'One man murdered. Many witnesses at Zamenhof #55x4, #1f42, #12b1');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4901, 'Murder', '10/09/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (5449, 'Murder', '10/10/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (5450, 'Murder', '8/04/2020', 'Gothenburg', 'Two men murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (6322, 'Murder', '8/04/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (6344, 'Murder', '8/04/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (6666, 'Murder', '8/04/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (6698, 'Theft', '8/04/2020', 'Gothenburg', 'One old women robbed of her haaaandbag. No witnesses');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (7001, 'Theft', '8/04/2020', 'Gothenburg', 'Two women robbed at gunpoint. See witness Xff65');
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


";

$stmt = db()->exec($query);


/* CRIME SCENE REPORTS - working 05/11

insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1011, 'Murder', '1/09/2018', 'Gothenburg', 'One woman killed. No suspects.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1012, 'Murder', '1/09/2018', 'Gothenburg', '45 -Two men reported murdered. See witness #558b and #1213');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1029, 'Murder', '1/10/2018', 'Lerum', 'GLL - One man reported dead. Several witnesses, one person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1045, 'Murder', '3/10/2018', 'Partille', 'One woman reported killed. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1099, 'Murder', '16/11/2018', 'Kungsbacka', 'One woman reported killed. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1144, 'Murder', '17/12/2018', 'Gothenburg', 'One man murdered. Two witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1344, 'Murder', '11/01/2019', 'Gothenburg', 'One man reported dead. Several witnesses, one person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1399, 'Murder', '1/09/2019', 'Lerum', 'XX69 - One man murdered. Several witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1404, 'Murder', '1/11/2019', 'Partille', '39b -One woman reported killed. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1509, 'Murder', '1/22/2019', 'Kungsbacka', 'One woman reported killed. No witnesses. One man arrested');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1566, 'Murder', '1/31/2019', 'Gothenburg', 'One man murdered. Several witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1599, 'Murder', '2/13/2019', 'Gothenburg', 'One man reported dead. Several witnesses, one person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1697, 'Murder', '3/09/2019', 'Lerum', 'One man murdered. Several witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1789, 'Murder', '3/10/2019', 'Gothenburg', 'One man murdered. Several witnesses. Five people in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1899, 'Murder', '4/19/2019', 'Kungsbacka', 'One man reported dead. Several witnesses, one person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (1904, 'Murder', '5/19/2019', 'Partille', 'One woman reported killed. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2045, 'Murder', '6/29/2019', 'Partille', 'One man murdered. Several witnesses. Two people consfessed and arrested n stuff.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2220, 'Murder', '7/02/2020', 'Gothenburg', 'Woman murdered at McDonalds, Nordstan. Suspect named Donny McRonald arrested.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (5998, 'Murder', '8/04/2020', 'Gothenburg', 'One woman reported murdered at a restaurant in Gothenburg. Three witnesses #1212, #3342, #5532');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2598, 'Murder', '8/05/2020', 'Gothenburg', 'One woman reported killed. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2698, 'Murder', '8/11/2020', 'Gothenburg', 'One man reported dead. Several witnesses #3323, #1123, #9981. One person in custody.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (2998, 'Murder', '8/22/2020', 'Lerum', 'One man murdered. Several witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3000, 'Murder', '9/22/2020', 'Gothenburg', 'Midnight: One man murdered at Zahmenhof. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3005, 'Murder', '9/24/2020', 'Gothenburg', 'Zamenhof again. One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3010, 'Murder', '9/25/2020', 'Gothenburg', 'One man murdered. Probably Zamenhoooof. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3013, 'Murder', '9/26/2020', 'Gothenburg', 'One man murdered at restaurant around noon. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3014, 'Murder', '9/27/2020', 'Gothenburg', 'One man murdered by an evil murderererer. No witnesses. I think.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3016, 'Murder', '9/28/2020', 'Gothenburg', 'FFX - One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3029, 'Murder', '9/29/2020', 'Gothenburg', '#444 - One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3055, 'Murder', '9/30/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3066, 'Murder', '10/01/2020', 'Gothenburg', 'FFG - One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (3089, 'Murder', '10/04/2020', 'Gothenburg', '#9922 One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4012, 'Murder', '10/05/2020', 'Gothenburg', 'NNJ - One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4014, 'Murder', '10/06/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4444, 'Murder', '10/07/2020', 'Gothenburg', 'One man murdered in cold blood. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4322, 'Murder', '10/08/2020', 'Gothenburg', 'One man murdered. Many witnesses at Zamenhof #55x4, #1f42, #12b1');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (4901, 'Murder', '10/09/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (5449, 'Murder', '10/10/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (5450, 'Murder', '8/04/2020', 'Gothenburg', 'Two men murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (6322, 'Murder', '8/04/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (6344, 'Murder', '8/04/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (6666, 'Murder', '8/04/2020', 'Gothenburg', 'One man murdered. No witnesses.');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (6698, 'Theft', '8/04/2020', 'Gothenburg', 'One old women robbed of her haaaandbag. No witnesses');
insert into crime_scene_reports (crime_id, crime_type, date, city, police_report) values (7001, 'Theft', '8/04/2020', 'Gothenburg', 'Two women robbed at gunpoint. See witness Xff65');
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

/* WITNESSES - working 05/11 */
/* insert into witnesses (id, name, phone, adress, report) values (1299, 'Karin Andersson', '25399476', 'Kalasgatan 12 B', 'It was dark and I saw nothing. But Erik ran quickly away from here.');
insert into witnesses (id, name, phone, adress, report) values (4479, 'Ostman L Beritsson', '98713455', 'Gatgatan 23 C', 'Hmm dunno maybe Tjorven did it, she looked hella in a hurry away from here.');
insert into witnesses (id, name, phone, adress, report) values (5547, 'Tjorven Boatsmansson', '17364543', 'Saltycrowstreet', 'I drove home in my red car because I was in shock.');
insert into witnesses (id, name, phone, adress, report) values (2345, 'Erik Blackmetalsson', '13379645', 'Burzumroad of death 34 B', 'Mayhem sucks, but I saw nothing except that Glenn ran out with blood on his hands.');
insert into witnesses (id, name, phone, adress, report) values (1123, 'Danijel De La Cruz', '13473945', 'Kullegatan 37', 'It all happend so fast. I saw Linn and Isadora running out.');
insert into witnesses (id, name, phone, adress, report) values (5345, 'Isadora Fredrika Glennsdottir', '85187524', 'Hermelinvagen', 'Someone had a knife I think. ');
insert into witnesses (id, name, phone, adress, report) values (8789, 'Glenneth Harddrivesson', '12656245', 'Seagateroad 1337', 'Someone ran quickly afterwards. I think it was Linn.');
insert into witnesses (id, name, phone, adress, report) values (8273, 'Sten Stenhuggare', '24125924', 'Stoneblaster Street', 'I bought a korv and then someone ded.');
insert into witnesses (id, name, phone, adress, report) values (3202, 'Madicken Karlssonontheroofsoon', '87755123', 'Jormangarlund 3', 'I saw nuthin.');
insert into witnesses (id, name, phone, adress, report) values (1212, 'Erik White', '70817698', 'Hemma', 'Just saw that the murderer had severly cut his hand and jumped into a red car. He must definately have gone to the hospital');
insert into witnesses (id, name, phone, adress, report) values (3342, 'Linn Josefsson', '15246514', 'Linnstreet 5', 'Hmm saw that someone jumped into a car with the license plate LOL 666.');
insert into witnesses (id, name, phone, adress, report) values (5532, 'Vincent Teachersson', '12467251', 'YRGOroad 1337', 'Erik looked suspicious and ran quickly away from the scene.');
insert into witnesses (id, name, phone, adress, report) values (9112, 'Glenn Hysen', '12416245', 'Unibetroad 420', 'Why cant santa get any children during x-mas. Because he has already empied his sack.');
insert into witnesses (id, name, phone, adress, report) values (4865, 'Glenn Stromberg', '86526415', 'bergamo', 'Numero uno, yeah but I was just chillin and drinking a beer you know.');
insert into witnesses (id, name, phone, adress, report) values (5762, 'Bjork Janlund', '35595234', 'Bjorkvagen 3434', 'It was probably Jimmie.');
insert into witnesses (id, name, phone, adress, report) values (1265, 'Xavier', '12412524', 'Fredriksroad 45', 'Just saw that everyone ran and there was panic. Linn also ran to her car.');
insert into witnesses (id, name, phone, adress, report) values (1246, 'Sven Bertilsson', '12348235', 'bertilsvenssonvagen 45', 'First there was a lot of shouting and then more shouting. Then Erik just runs out.');
insert into witnesses (id, name, phone, adress, report) values (2357, 'Lasse Kongo', '12411264', 'nileroad 420', 'Sandra is dead, nooooo. I loved her.');
insert into witnesses (id, name, phone, adress, report) values (5825, 'Mads Mikkelsen', '12167544', 'Hannibal St 666', 'Hvi e roooode, hvi e hviiiide. But yeeah, I saw someone enter a white car with license MKE something.');
insert into witnesses (id, name, phone, adress, report) values (5975, 'Mikkel Madsen', '12416514', 'Svangatan 34', 'I saw Isadora having blood on her hands.');
insert into witnesses (id, name, phone, adress, report) values (1427, 'Robert Ohlund', '67451964', 'Korvkiosken', 'After the murder Glenneth ran home.');
insert into witnesses (id, name, phone, adress, report) values (4623, 'Karlsson on the golvetsson', '23276354', 'Onthefloorroad 34', 'tjorven looked guilty');
insert into witnesses (id, name, phone, adress, report) values (4321, 'Jean Claude Van Dammsugare', '23476354', 'Delcato Road 4', 'Meh, dunno probably Ostman murdered Sandra. They had argued alot lately.');
insert into witnesses (id, name, phone, adress, report) values (9899, 'Leif Loket Olsson', '93434625', 'Bingoberragatan 420', 'Devalaroligt, kek just kidding but Lasse probably did it.');
*/

/* CARS - working 05/11 */
/*
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Erik White', 'MKE 093', 70817698, 'Red', 'Volvo');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Sixten Svensson', 'JJK 565', 23456734, 'White', 'Saab');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Sven Henriksson', 'FTP 404', 23499524, 'Blue', 'Tesla');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Nils Kardemummasson', 'CSS 420', 56354286, 'Green', 'Opel');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Bengt Matsson', 'KIX 225', 66428654, 'Silver', 'Monster Truck');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Orvar Nicklasson', 'IKT 855', 82354254, 'Pink', 'Sedan');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Fredrik Larsson', 'OLF 332', 35428654, 'Yellow', 'Toyota');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Linn Josefsson', 'YGX 556', 15246514, 'Green', 'Volvo');
insert into cars (owner, reg_num, phone_num, color, car_type) values ('Vincent Teachersson', 'LOL 666', 12467251, 'Blue', 'Lada');
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
*/

/*HOSPITAL - working 05/11 */
/*
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (70817698, 'Erik White', '8/03/2020', 'Gothenburg', 'No report');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (66565762, 'Magnus Ladulocker', '3/03/2009', 'Karlstad', 'Bleeding from ears');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (61646111, 'Karl Karlsson', '4/09/2020', 'Gothenburg', 'Earwax');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (11365653, 'Conny Nilsson', '8/04/2020', 'Gothenburg', 'Knife wound');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12345353, 'Nixon Richards', '8/04/2020', 'Gothenburg', 'Gunshot wound');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (13237562, 'Annie Loooof', '8/04/2020', 'Gothenburg', 'Stabwound');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12235239, 'Leif Dilson', '8/04/2020', 'Gothenburg', 'Kidney stones');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12523235, 'Jocke Gyllenhammar', '8/04/2020', 'Gothenburg', 'Unknown');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (82537457, 'Sandra Fredriksson', '8/04/2020', 'Gothenburg', 'Firecracker to eye');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (11567356, 'Carolina Roslund', '8/04/2020', 'Gothenburg', 'Covid');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (10652654, 'Petronella Blaskeby', '8/04/2020', 'Gothenburg', 'Covid');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (10745455, 'Viktoria Silverstedt', '8/04/2020', 'Gothenburg', 'Covid');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (13423235, 'Anna Anka', '8/04/2020', 'Gothenburg', 'Covid');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (13397836, 'Sarah Palin', '8/04/2020', 'Gothenburg', 'Covid-1337');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (13423592, 'Pamela Andersson', '8/04/2020', 'Gothenburg', 'Covid');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (13539452, 'Tonya Harding', '8/04/2020', 'Gothenburg', 'Covid');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12826345, 'Uno Svenningsson', '8/04/2020', 'Gothenburg', 'Covid');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (14236458, 'Bengt Falsterbo', '8/04/2020', 'Gothenburg', 'Covid');
insert into hospital_reports (patient_id, patient_name, date, city, injury) values (12467251, 'Vincent Teachersson', '8/04/2020', 'Gothenburg', 'Says he cut his hand with a knife while at home.');
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