<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/6/14
 * Time: 1:36 PM
 */

namespace Ens\JobeetBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Ens\JobeetBundle\Entity\Affiliate;

class LoadAffiliateData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em) {
        $affiliate = new Affiliate();

        $affiliate->setUrl('http://sensio-labs.com/');
        $affiliate->setEmail('address1@example.com');
        $affiliate->setToken('sensio-labs');
        //$affiliate->setIsActive(false);
        //$affiliate->addCategorie($em->merge($this->getReference('category-programming')));

        $em->persist($affiliate);

        $affiliate = new Affiliate();
        $affiliate->setUrl('/');
        $affiliate->setEmail('address2@example.com');
        $affiliate->setToken('symfony');
        //$affiliate->setIsActive(false);
        //$affiliate->addCategorie($em->merge($this->getReference('category-programming')), $em->merge($this->getReference('category-design')));

        $em->persist($affiliate);
        $em->flush();

        $this->addReference('affiliate', $affiliate);

    }

    public function getOrder() {
        return 3;
    }
} 