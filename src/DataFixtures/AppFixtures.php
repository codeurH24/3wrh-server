<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager; 
use App\Entity\Computer;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    
        $brand = [
            'asus',
            'dell',
            'lenovo',
            'HP',
            'acer'
        ];
        
        for ($i=0; $i < 20; $i++) { 
            $computer = new Computer();
            $idBrand = mt_rand(0,4);
            $computer
            ->setIsLabtop((bool)mt_rand(0, 1))
            ->setPassmarkScore(mt_rand(600, 10000))
            ->setBrand($brand[$idBrand]);

            $manager->persist($computer);
        }

        $manager->flush();
    }
}
