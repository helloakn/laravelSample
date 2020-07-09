<html>
    <head>
        <title> @yield('title')</title>
        <style>
        body{
            margin:0 0 0 0;
        }
        #divMainContainer{
            width:100%;
            min-height:600px;
            background-color:red;
        }
        #divHeaderContainer{
            width:100%;
            min-height:100px;
            background-color:pink;
        }
        #divBodyContainer{
            width:100%;
            min-height:400px;
            background-color:blue;
        }
        #divFooterContainer{
            width:100%;
            min-height:100px;
            background-color:green;
        }

        #menu{
            float: left;
    list-style: none;
        }

        li {
            float: left;
    list-style: none;
    margin: 0;
    padding: 20;
}
}

        </style>
    </head>

    <body>
        <div id="divMainContainer">
            <div id="divHeaderContainer">
                

        <!--- Menu Start -->
        <ul id="menu">
            <li class="active"><a href="index.html">Sample</a></li>
            <li><a href="pages/style-demo.html">Demo</a></li>
        </ul>
        <!--- Menu Stop -->

            </div>
            <div id="divBodyContainer">
                    @yield('BodyContainer')
                    
            </div>
            <div id="divFooterContainer">
            </div>
        </div>
    </body>

    <script>
    </script>
</html>