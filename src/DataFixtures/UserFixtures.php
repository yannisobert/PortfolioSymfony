<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $admin = new User();

        $admin->setEmail('test@test.com');
        $password = $this->hasher->hashPassword($admin, 'test');
        $admin->setPassword($password);
        $admin->setRoles([
            'ROLE_ADMIN',
            'ROLE_USER'
        ]);
        $manager->persist($admin);

        $manager->flush();
    }
}
