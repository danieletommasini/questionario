<html>
    <body>
        <head>
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <!-- Popper JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            
            
            <h2 class="text-center">Questionario Fermi</h2>
            
        </head>
        <div class="container">
            <p>Il questionario è anonimo. Ti verrà chiesto di quale classe fai parte perché questo serve per
            elaborare le risposte.<br><br>
            Ti preghiamo di rispondere con sincerità a tutte le domande perché il tuo giudizio è molto
            importante per la crescita ed il miglioramento della scuola.</p>
            <form class="text-center" action="elaboration.php" method="POST">
                La classe che frequenti: 
                <br>
                    <label class="radio-inline"><input type="radio" name="class" value="5D"> 5D</label>
                    <label class="radio-inline"><input type="radio" name="class" value="5B"> 5B</label>
                <br>
                    <input type="submit" name="sendclass" value="INVIA"/>
            </form>
        </div>
    </body>
</html>