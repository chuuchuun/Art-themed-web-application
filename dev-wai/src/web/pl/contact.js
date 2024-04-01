function init(){
                if(window.localStorage.getItem('name')==null){
                let name = window.prompt("Enter your name");
                window.localStorage.setItem('name',name);
                }
                document.getElementById('name').innerHTML = window.localStorage.getItem('name');
                let taskList = JSON.parse(window.localStorage.getItem('taskList'));
                if(taskList == null){
                    taskList = Array();
                    window.localStorage.setItem('taskList',JSON.stringify(taskList));
                }
                showTask();
            }
            function addTask() {
                let task= document.getElementById('task').value;
                let taskList = JSON.parse(window.localStorage.getItem('taskList'));
                taskList.push(task)
                window.localStorage.setItem('taskList', JSON.stringify(taskList));
                document.getElementById('task').value ="";
                showTask();
            }
            function showTask(){
                let taskListDiv = document.getElementById('taskList');
                let taskArray = JSON.parse(window.localStorage.getItem('taskList'));
                let buffer = "";
                buffer += "<ul class='questions'>";
                for (let i = 0; i< taskArray.length; i++){
                    buffer += '<li>'+taskArray[i]+'<button class="delete" onClick="removeTask('+i+')">Usunąć</button></li>';
                }
                buffer += "</ul>";
                taskListDiv.innerHTML = buffer;
            }
            function removeTask(i){
                let taskArray = JSON.parse(window.localStorage.getItem('taskList'));
                taskArray.splice(i, 1);
                window.localStorage.setItem('taskList', JSON.stringify(taskArray))
                showTask();

            }
