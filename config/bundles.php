<?php

use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\TwigBundle\TwigBundle;
use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle;
use Symfony\Bundle\MakerBundle\MakerBundle;

use Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle;
return [
    FrameworkBundle::class => ['all' => true],
    TwigBundle::class => ['all' => true],
    DoctrineBundle::class => ['all' => true],
    DoctrineMigrationsBundle::class => ['all' => true],

    // Bundles activés pour tous les environnements (dev, test, prod)
    MakerBundle::class => ['all' => true],
    DoctrineFixturesBundle::class => ['all' => true],
];

