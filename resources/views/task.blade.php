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
                    <input type="text" name="step">

                    <!-- Add Step Button -->
                    <span class="ui button primary" onclick="addStep()">Add Step</span>
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
        

        <script>
            var param = [1,2,3];
            function addStep() {
                x = document.getElementsByName("step")[0].value;
                param[param.length] = x;

                alert('member of array = '+param.length);

                for (i=0; i <param.length; i++){
                    alert(param[i]);
                }
                //alert(param[param.length-1]);
                //alert(param[param.length]);
            }

        </script>
@endsection