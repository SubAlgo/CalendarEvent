@extends('layout.template')

@section('title', 'Task')

@section('content')

        <h1>Task</h1>

        <div class="ui container">
            <div class="ui container">
                Task : <input type="text" name="task">
            </div>
            <p></p>
            <div class="ui container">
                Step : <input type="text" name="step">
                <span class="ui button primary" onclick="addStep()">Add Step</span>
            </div> 
        </div>

        <script>
            var param = [1,2,3];
            function addStep() {
                x = document.getElementsByName("step")[0].value;
                param[param.length] = x;
                alert(param[param.length - 2]);
                alert(param[param.length-1]);
            }

        </script>
@endsection