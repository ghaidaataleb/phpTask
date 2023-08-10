<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #container {
            width: 300px;
            margin: 50px auto;
        }

        #taskInput {
            width: 100%;
            padding: 10px;
        }

        #taskList {
            list-style: none;
            padding: 0;
        }

        .taskItem {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px;
            border: 1px solid #ccc;
            margin-bottom: 5px;
        }

        .deleteButton {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div id="container">
    <h2>To-Do List</h2>
    <input type="text" id="taskInput" placeholder="Enter a task">
    <button onclick="addTask()">Add Task</button>
    <ul id="taskList"></ul>
</div>

<script>
    function addTask() {
        var taskInput = document.getElementById('taskInput');
        var taskList = document.getElementById('taskList');

        if (taskInput.value.trim() !== '') {
            var taskItem = document.createElement('li');
            taskItem.className = 'taskItem';

            var taskText = document.createElement('span');
            taskText.textContent = taskInput.value;
            taskItem.appendChild(taskText);

            var deleteButton = document.createElement('button');
            deleteButton.className = 'deleteButton';
            deleteButton.textContent = 'Delete';
            deleteButton.onclick = function() {
                taskList.removeChild(taskItem);
            };
            taskItem.appendChild(deleteButton);

            taskList.appendChild(taskItem);
            taskInput.value = '';
        }
    }
</script>

</body>
</html>
