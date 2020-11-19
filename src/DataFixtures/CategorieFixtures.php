<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {   
        for ($i=0; $i < 6; $i++) { 
            $categorie = new Categorie();
            $categorie->setNom('categ '.$i);
            $manager->persist($categorie);
        }

        $manager->flush();
    }
}
