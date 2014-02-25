<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Biblioteca Unidep</title> 
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <header> Bienvenido a la Biblioteca Unidep</header>         
        <div id ="primero" align="center">                
        </div> 
        <br>
        <div id="Departamento"><h1> Biblioteca</h1></div>
        
        
        <section class="loginform cf">  
            <div align="center" id = "Login"><img src="img/logoUnidep.jpg" alt="Login"/></div>     
            <div id="Login">
                <form name="login" action="sentencias/login.php" method="post" accept-charset="utf-8">  
                    <ul>  
                        <li><label for="Login">Login</label>
                            <input type="text" name="User" placeholder="Usuario" required maxlength="10"></li>  
                        <li><label for="password">Password</label>  
                            <input type="password" name="Pass" placeholder="Contraseña" required maxlength="10"></li>  
                        <li>  
                            <input type="submit" value="Acceso"></li>  
                    </ul>  
                </form>  
            </div>
        </section>  
        <footer>                    
            <div align ="center" id="Facebook"><a href="#"><img src="img/Facebook_logo.png" width = "30" height="30" align = "center" alt="Facebook"></a><img src="img/HTML5-Logo.png" width="30" height="30" align="right"></div>        
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script>
            var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
            (function(d, t) {
                var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
                g.src = '//www.google-analytics.com/ga.js';
                s.parentNode.insertBefore(g, s)
            }(document, 'script'));
        </script>
    </body>
</html>
