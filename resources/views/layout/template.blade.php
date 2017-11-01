<html>
    <head>
         @section('script')
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
         @show

        <title>@yield('title')</title>
    </head>

    <body>
        <!-- NevBar -->
        <div>
             @section('sidebar')
                @include('layout.nevbar')
             @show   
        </div>

        <!-- Content -->
        <div class="ui container">
             @yield('content')
        </div>
        
    </body>
</html>