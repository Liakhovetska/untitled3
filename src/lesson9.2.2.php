<?php

class TaskGenerator
{
    const COMPLETED = 'виконано';
    const NOT_COMPLETED = 'не виконано';
    private array $tasks = [];
    private string $fileName = 'tasks.txt';

    public function __construct()
    {
        $this->loadTasksFromFile();
    }

    /**
     * @param string $taskName
     * @param int $priority
     * @return void
     */
    public function addTask(string $taskName, int $priority)
    {
        $taskId = uniqid();
        $this->tasks[$taskId] = ['name' => $taskName, 'priority' => $priority, 'state' => self::NOT_COMPLETED];
        $this->saveTasksToFile();
    }

    /**
     * @param int $taskId
     * @return bool
     */
    public function deleteTask(int $taskId)
    {
        if (isset($this->tasks[$taskId])) {
            unset($this->tasks[$taskId]);
            $this->saveTasksToFile();
            return true;
        }
        return false;
    }

    /**
     * @return array
     */
    public function getTasks()
    {
        $sortedTasks = $this->tasks;

        uasort($sortedTasks, function ($a, $b) {
            return $b['priority'] - $a['priority'];
        });

        foreach ($sortedTasks as $taskId => $task) {
            echo "- {$task['name']} (Priority: {$task['priority']}, State: {$task['state']})" . PHP_EOL;;
        }

        return $sortedTasks;
    }

    /**
     * @param int $taskId
     * @return bool
     */
    public function completeTask(string $taskId)
    {
        if (isset($this->tasks[$taskId])) {
            $this->tasks[$taskId]['state'] = self::COMPLETED;
            $this->saveTasksToFile();
            return true;
        }

        return false;
    }

    /**
     * @return void
     */
    private function loadTasksFromFile()
    {
        if (file_exists($this->fileName)) {
            $this->tasks = unserialize(file_get_contents($this->fileName));
        }
    }

    /**
     * @return void
     */
    private function saveTasksToFile()
    {
        file_put_contents($this->fileName, serialize($this->tasks));
    }
}