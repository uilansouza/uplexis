@extends('layout.head');
    <body class="center-form">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/produtos">
                     Estoque Laravel
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                   
                </ul>
            </div>
        </nav>
    
    
    <div class="container">
         @yield('conteudo')
         <footer class="footer">
            <p>©UpLexis.</p>
        </footer>
    </div>
    </body>
</html>