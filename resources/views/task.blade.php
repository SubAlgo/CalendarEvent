@extends('layout.template')

@section('title', 'Task')

@section('content')

        <h1>Task</h1>

        <form method="POST" action="./">
            <div class="ui container">
                <div class="ui container">
                    Task :
                    <input type="text" name="task">
                </div>
                <p></p>
                <div class="ui container">
                    Step :
                    <input type="text" name="step" id="step">

                    <!-- Add Step Button -->
                    <span class="ui button primary" onclick="addStep()">Add Step</span>
                    <span class="ui button primary" onclick="showSteplist()">Show Step</span>
                </div>
            </div>

            <div>
                <lable>Show</lable>
                <br>
                <label>Task : </label>
                <label name="showTask">tttt</label>
                <br>

                

                <table>
                    <tr>
                        <td>Step: </td>
                        <td>step[1]</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>step[2]</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>step[3]</td>
                    </tr>

                </table>
            </div>
            <span><input type="submit" class="positive ui button" value="Create Task"></span>
        </form>

        <div>
            Step list: 
            <ul id="showStep">
                
            </ul>
        </div>
        

        <script>
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

                    var li = document.createElement("ul");
                    var txt = document.createTextNode(x);

                    li.appendChild(txt);
                    document.getElementById('showStep').appendChild(li);
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

        </script>
@endsection