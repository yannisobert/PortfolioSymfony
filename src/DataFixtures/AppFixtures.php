<?php

namespace App\DataFixtures;

use App\Entity\Langage;
use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i = 1; $i<=10; $i++) {
            $project = new Project();

            $project->setName('project ' . $i)
                ->setTitle('project ' . $i)
                ->setText('Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum.')
                ->setGit('https://fdfdgffq.com')
                ->setImage('test.png')
                ->setImageHover('test.png');

            $manager->persist($project);
        }

        for($j = 1; $j<=10; $j++) {
            $langage = new Langage();

            $langage->setName('langage ' . $j);

            $manager->persist($langage);
        }

        $manager->flush();
    }
}
