@extends('layout.template')

@section('title', 'Task')

@section('content')

        <h1>Task</h1>

        <form method="POST" action="/test">
            <div class="ui text container">
                <div >
                    Task :
                    <input type="text" name="txtTask" onchange="showTask()">
                </div>
                <p></p>
                <div >
                    Step :
                    <input type="text" name="step" id="step">

                    <!-- Add Step Button -->
                    <span class="ui button primary" onclick="addStep()">Add Step</span>
                    <span class="ui button primary" onclick="showSteplist()">Show Step</span>
                </div>
            </div>
            <div class="ui text container">
                Task :
                <label id="showTask"> </label>
                <p></p>
                <label>Step list:</label>
                <ol id="showStep">
            
                </ol>
                <input type="hidden" name="sTask" value="a"/>
                <input type="hidden" name="sStep" value="s" />
                <span>
                     {{csrf_field()}}
                    <input type="submit" class="positive ui button" value="Create Task">
                </span>
            </div>
        </form>

        
        

        <script>
            var task;
            var stepList = [];
            function addStep() {
                x = document.getElementsByName("step")[0].value;
                x = x.trim();
                if (x === '') {
                    alert('Please input step!!')   
                } else {  
                    stepList[stepList.length] = x;
                    x = "Step ["+stepList.length + "] : " + x;
                    document.getElementsByName('step')[0].value = '';

                    var li = document.createElement("li");
                    var txt = document.createTextNode(x);

                    li.appendChild(txt);
                    document.getElementById('showStep').appendChild(li);

                    document.getElementsByName(sStep).value=stepList;
                   
                    //document.body.appendChild(li);

                    //var inputValue = x;
                    //alert('inputValue = ' + inputValue);
                    /*alert('x = ' +x);
                        alert('member of array = ' + stepList.length);

                        for (i = 0; i < stepList.length; i++) {
                            alert(stepList[i]);
                        }
                        */
                }
                //stepList[stepList.length] = x;

               /* 
               alert('member of array = '+stepList.length);

                for (i=0; i <stepList.length; i++){
                    alert(stepList[i]);
                }
                */
                //alert(stepList[stepList.length-1]);
                //alert(stepList[stepList.length]);

                //var li = document.createElement("li");
                //var inputValue = document.getElementById("myInput").value;
            }

            function showSteplist() {
                x = stepList.length;
                for (i=0; i<x; i++){
                    alert(stepList[i]);
                }
            }

            function showTask() {
                
                var x = document.getElementsByName("txtTask")[0].value;
               
                document.getElementById('showTask').innerHTML = x;
                task = x;
                 document.getElementsByName(sTask).value = task;
                //alert('task = ' + task);
            }

        </script>
@endsection