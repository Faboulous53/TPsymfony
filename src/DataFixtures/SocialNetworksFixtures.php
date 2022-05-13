<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\SocialNetworks;


class SocialNetworksFixtures extends Fixture
{
    public function load(ObjectManager $manager ): void
    {

        $facebook = new SocialNetworks();
        $facebook->setSocialName("facebook");
        $facebook->setClassIcone("fa fa-facebook");
        $facebook->setSocialNetworkUrl("https://fr-fr.facebook.com/");
        $manager->persist($facebook);

        $twitter = new SocialNetworks();
        $twitter->setSocialName("twitter");
        $twitter->setClassIcone("fa fa-twitter");
        $twitter->setSocialNetworkUrl("https://twitter.com/?lang=fr");
        $manager->persist($twitter);

        $linkedin = new SocialNetworks();
        $linkedin->setSocialName("linkedin");
        $linkedin->setClassIcone("fa fa-linkedin");
        $linkedin->setSocialNetworkUrl("https://www.linkedin.com/feed/");
        $manager->persist($linkedin);




        $manager->flush();
    }

}
