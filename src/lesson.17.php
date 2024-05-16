?php

require_once DIR . '/lesson9.2.2.php';

$taskList = new TaskGenerator();
$taskList->addTask('Complete lawyer agreement', 3);
$taskList->addTask('Learning php', 1);
$taskList->addTask('Complete design project', 2);

$tasks = $taskList->getTasks();
echo "Current Tasks:" . PHP_EOL;

$taskIdToComplete = key($tasks);
$taskList->completeTask($taskIdToComplete);
echo "Task '{$tasks[$taskIdToComplete]['name']}' marked as completed." . PHP_EOL;

$tasks = $taskList->getTasks();
echo "Updated Tasks:" . PHP_EOL;
foreach ($tasks as $taskId => $task) {
echo "- {$task['name']} (Priority: {$task['priority']}, State: {$task['state']})" . PHP_EOL;
}