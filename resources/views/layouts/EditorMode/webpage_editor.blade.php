<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    
    @yield('header_imports')
</head>

<body style="overflow: hidden;">
    <main>
        <nav class="text-white" style="position: sticky;top:0px;height:50px;background:black;">Simple Sticky Navigation
        </nav>
        <div class="position-fixed" style="width:100%;">
            <div class="" style="display:flex;">
                <div class="" style="border:1px solid gray; width:120px; height:100vh;">

                </div>
                <div class="" style="flex:1;height:100vh;overflow:scroll;">
                    <div style="width:100%!important;position:relative;">
                        @yield('site')
                    </div >
                </div>

            </div>

        </div>
    </main>
    @yield('script_imports')
   
</body>

</html>
