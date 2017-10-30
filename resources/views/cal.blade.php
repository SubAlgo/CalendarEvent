<!doctype html>

<html>
    <head>
        <tile> </tile>
    </head>

    <body>
       <form method="post" action="/calculate">
           <input name="num1" type="text">
           <br><br>
           <input name="num2" type="text">
        <br>
        <br>
        <div class="form-group">
            {{csrf_field()}}
            <input type="submit" class="btn btn-success">
        </div>
          
       </form>

       @if(isset($num1))
    <div>
        {{ $num1 }}
        <br>
        <p>+</p>
        <br> {{ $num2 }}
        <br>
        <p>=</p>
        {{ $sum }}
    </div>
       @endif
       
       <br><br>

    <form method="post" action="/step">
        <label for="">Step</label>
        <input name="step" type="text">
        <div class="form-group">
            {{csrf_field()}}
            <input type="submit" class="btn btn-success" value="Add Step">
        </div>
    </form>

    @if(isset($step))
         @foreach ($step as $st)
            <p>This is user  {{ $st }}</p>
        @endforeach
    @endif

    @if(isset($ia)) 
        {{$ia}}
    @endif
    </body>
</html>