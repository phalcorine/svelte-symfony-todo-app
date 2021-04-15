<?php


namespace App\DataFixtures;


use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TaskFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $task = new Task();
        $task->setTitle("First Task")
            ->setDescription("This is the very first task...")
            ->setIsCompleted(false);
        $manager->persist($task);

        $task = new Task();
        $task->setTitle("Second Task")
            ->setDescription("This is the second task...")
            ->setIsCompleted(true);
        $manager->persist($task);

        $manager->flush();
    }
}