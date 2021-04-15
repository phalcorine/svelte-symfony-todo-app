<?php


namespace App\Controller\Api;


use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TasksController
 * @package App\Controller\Api
 * @Route("/api/tasks/", name="api_tasks_")
 */
class TasksController extends AbstractController
{
    private $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    /**
     * @Route("", name="index", methods={"GET"})
     * @return JsonResponse
     */
    public function index()
    {
        $tasks = $this->taskRepository->findAll();

        sleep(5);

        return $this->json($tasks);
    }
}