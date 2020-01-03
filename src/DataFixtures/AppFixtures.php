<?php

namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

define('NAME', 0);
define('ZONE', 1);
define('DEPARTMENT', 2);
define('MAXPRICE', 3);
define('ALONE', 4);
define('COUPLE', 5);
define('WITHONE', 6);
define('WITHTWO', 7);
define('WITHTHREE', 8);
define('WITHFOUR', 9);
define('SIXYEARS', 11);
define('NINEYEARS', 12);
define('TWELVEYEARS', 13);

//Aix-en-Provence,A,13,12.59,37508,56058,67386,80716,95553,107527,"0,7 + (19/surface utile) ",12,18,21


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $file = fopen(__DIR__ . "/data.csv", "r");

        while ($row = fgetcsv($file)) {
            $city = new City;

            $city->setName($row[NAME])
                ->setDepartment($row[DEPARTMENT])
                ->setMaxPrice($row[MAXPRICE] * 100)
                ->setZone($row[ZONE])
                ->setAlone($row[ALONE])
                ->setCouple($row[COUPLE])
                ->setWithOne($row[WITHONE])
                ->setWithTwo($row[WITHTWO])
                ->setWithThree($row[WITHTHREE])
                ->setWithFour($row[WITHFOUR])
                ->setSixYears($row[SIXYEARS])
                ->setNineYears($row[NINEYEARS])
                ->setTwelveYears($row[TWELVEYEARS]);

            $manager->persist($city);
        }

        $manager->flush();
    }
}
