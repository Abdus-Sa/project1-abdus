<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TaskModel;
use CodeIgniter\HTTP\ResponseInterface;

class TaskController extends BaseController
{
    // public function index()
    // {
    //     $taskModel = new TaskModel();
    //     $tasks = $taskModel->findAll();
    // }
    public function index()
    {
        $taskModel = new \App\Models\TaskModel();
        $tasks = $taskModel->findAll();
        $data = [
            'title' => 'Task List',
            'tasks' => $tasks
        ];
        echo view('task', $data);
    }
}
