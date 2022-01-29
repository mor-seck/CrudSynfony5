<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $customer = new Customer();
        $customer->setFirstName("Mor");
        $customer->setLastName("SECK");
        $customer->setEmail("morseck00@gmail.com");
        $customer->setPhoneNumber("773280348");
        $manager->persist($customer);
        $manager->flush();
    }
}
