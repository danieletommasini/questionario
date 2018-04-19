<html>
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
    <body>
        <?php
            session_start();
            if(isset($_SESSION['form_message'])){
                unset($_SESSION['form_message']);
            }
        ?>
        <div class="container">
            <form class="text-center" action="elaboration.php" method="POST" id="form1">  
            <br><br><b>Il questionario &egrave anonimo. Ti verr&agrave chiesto di quale classe fai parte perch&eacute questo serve per
            elaborare le risposte.<br>
            <u>Ti preghiamo di rispondere con sincerit&agrave a TUTTE le domande perch&eacute il tuo giudizio &egrave molto
            importante per la crescita ed il miglioramento della scuola.</u></b><br><br>
            La classe che frequenti: 
            <br>
                Classi prime <label class="radio-inline"><input type="radio" name="class" value="1A"> 1A</label>
                <label class="radio-inline"><input type="radio" name="class" value="1B"> 1B</label>
                <label class="radio-inline"><input type="radio" name="class" value="1C"> 1C</label>
                <label class="radio-inline"><input type="radio" name="class" value="1D"> 1D</label>
                <br>
                Classi seconde <label class="radio-inline"><input type="radio" name="class" value="2A"> 2A</label>
                <label class="radio-inline"><input type="radio" name="class" value="2B"> 2B</label>
                <label class="radio-inline"><input type="radio" name="class" value="2C"> 2C</label>
                <label class="radio-inline"><input type="radio" name="class" value="2D"> 2D</label>
                <br>
                Classi terze <label class="radio-inline"><input type="radio" name="class" value="3A"> 3A</label>
                <label class="radio-inline"><input type="radio" name="class" value="3B"> 3B</label>
                <label class="radio-inline"><input type="radio" name="class" value="3CMI"> 3CMI</label>
                <br>
                Classi quarte <label class="radio-inline"><input type="radio" name="class" value="4A"> 4A</label>
                <label class="radio-inline"><input type="radio" name="class" value="4B"> 4B</label>
                <label class="radio-inline"><input type="radio" name="class" value="4CMI"> 4CMI</label>
                <br>
                Classi quinte <label class="radio-inline"><input type="radio" name="class" value="5A"> 5A</label>
                <label class="radio-inline"><input type="radio" name="class" value="5B"> 5B</label>
                <label class="radio-inline"><input type="radio" name="class" value="5D"> 5D</label>
            <br><br>
            
            <i><b>1. I locali della scuola sono accoglienti?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c1" value="1"> s&igrave, molto</label> <br>
                <label class="radio-inline"><input type="radio" name="c1" value="2"> abbastanza</label> <br>
                <label class="radio-inline"><input type="radio" name="c1" value="3"> poco</label> <br>
                <label class="radio-inline"><input type="radio" name="c1" value="4"> per niente</label> <br>
            <br>
            <i><b>2. I responsabili di sede della scuola sono disponibili ad ascoltare i problemi?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c2" value="1"> s&igrave, sempre</label> <br>
                <label class="radio-inline"><input type="radio" name="c2" value="2"> spesso</label> <br>
                <label class="radio-inline"><input type="radio" name="c2" value="3"> qualche volta</label> <br>
                <label class="radio-inline"><input type="radio" name="c2" value="4"> no, mai</label> <br>
            <br>
            <i><b>3. I collaboratori scolastici (bidelli) sono disponibili?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c3" value="1"> s&igrave, semrpe</label> <br>
                <label class="radio-inline"><input type="radio" name="c3" value="2"> spesso</label> <br>
                <label class="radio-inline"><input type="radio" name="c3" value="3"> solo qualche volta</label> <br>
                <label class="radio-inline"><input type="radio" name="c3" value="4"> no, mai</label> <br>
            <br>
            <i><b>4. Gli insegnanti spiegano in modo:</b></i><br>
                <label class="radio-inline"><input type="radio" name="c4" value="1"> chiaro e comprensibile</label> <br>
                <label class="radio-inline"><input type="radio" name="c4" value="2"> abbastanza chiaro e comprensibile</label> <br>
                <label class="radio-inline"><input type="radio" name="c4" value="3"> poco chiaro e comprensibile</label> <br>
                <label class="radio-inline"><input type="radio" name="c4" value="4"> per niente chiaro e comprensibile</label> <br>
            <br>
            <i><b>5. Il tuo rapporto con i compagni &egrave:</b></i><br>
                <label class="radio-inline"><input type="radio" name="c5" value="1"> amichevole e collaborativo</label> <br>
                <label class="radio-inline"><input type="radio" name="c5" value="2"> amichevole e collaborativo solo con alcuni</label> <br>
                <label class="radio-inline"><input type="radio" name="c5" value="3"> conflittuale con alcuni</label> <br>
                <label class="radio-inline"><input type="radio" name="c5" value="4"> conflittuale con quasi tutti</label> <br>
                <label class="radio-inline"><input type="radio" name="c5" value="5"> non riesco ad avere rapporti con i miei compagni</label> <br>
            <br>
            <i><b>6. Trovi bello essere uno studente del Fermi?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c6" value="1"> molto</label> <br>
                <label class="radio-inline"><input type="radio" name="c6" value="2"> abbastanza</label> <br>
                <label class="radio-inline"><input type="radio" name="c6" value="3"> poco</label> <br>
                <label class="radio-inline"><input type="radio" name="c6" value="4"> per niente</label> <br>
            <br>
            <i><b>7. I locali della scuola sono puliti?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c7" value="1"> s&igrave, molto</label> <br>
                <label class="radio-inline"><input type="radio" name="c7" value="2"> generalmente si</label> <br>
                <label class="radio-inline"><input type="radio" name="c7" value="3"> poco</label> <br>
                <label class="radio-inline"><input type="radio" name="c7" value="4"> per niente</label> <br>
            <br>
            <i><b>8. La scuola si impegna per migliorare?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c8" value="1"> molto</label> <br>
                <label class="radio-inline"><input type="radio" name="c8" value="2"> spesso</label> <br>
                <label class="radio-inline"><input type="radio" name="c8" value="3"> poco</label> <br>
                <label class="radio-inline"><input type="radio" name="c8" value="4"> per nulla</label> <br>
            <br>
            <i><b>9. I tuoi insegnanti sono disponibili a fornirti ulteriori spiegazioni e chiarimenti se non hai capito qualcosa?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c9" value="1"> sempre</label> <br>
                <label class="radio-inline"><input type="radio" name="c9" value="2"> spesso</label> <br>
                <label class="radio-inline"><input type="radio" name="c9" value="3"> raramente</label> <br>
                <label class="radio-inline"><input type="radio" name="c9" value="4"> mai</label> <br>
            <br>
            <i><b>10. Se hai bisogno di qualcosa i tuoi compagni ti aiutano?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c10" value="1"> moltissimo</label> <br>
                <label class="radio-inline"><input type="radio" name="c10" value="2"> abbastanza</label> <br>
                <label class="radio-inline"><input type="radio" name="c10" value="3"> poco</label> <br>
                <label class="radio-inline"><input type="radio" name="c10" value="4"> per niente</label> <br>
            <br>
            <i><b>11. Se non capisci qualcosa chiedi ulteriori spiegazioni agli insegnanti?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c11" value="1"> s&igrave, a tutti</label> <br>
                <label class="radio-inline"><input type="radio" name="c11" value="2"> solo con alcuni</label> <br>
                <label class="radio-inline"><input type="radio" name="c11" value="3"> raramente</label> <br>
                <label class="radio-inline"><input type="radio" name="c11" value="4"> no, mai</label> <br>
            <br>
            <i><b>12. Ti sembra che gli spazi della scuola siano sfruttati in maniera adeguata?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c12" value="1"> s&igrave, molto</label> <br>
                <label class="radio-inline"><input type="radio" name="c12" value="2"> abbastanza, si potrebbe apportare qualche miglioramento</label> <br>
                <label class="radio-inline"><input type="radio" name="c12" value="3"> poco, si potrebbero apportare diversi miglioramenti</label> <br>
                <label class="radio-inline"><input type="radio" name="c12" value="4"> per niente</label> <br>
            <br>
            <i><b>13. La scuola si impegna per l'innovazione?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c13" value="1"> molto</label> <br>
                <label class="radio-inline"><input type="radio" name="c13" value="2"> spesso</label> <br>
                <label class="radio-inline"><input type="radio" name="c13" value="3"> poco</label> <br>
                <label class="radio-inline"><input type="radio" name="c13" value="4"> per nulla</label> <br>
            <br>
            <i><b>14. Il tuo rapporto con gli insegnanti &egrave:</b></i><br>
                <label class="radio-inline"><input type="radio" name="c14" value="1"> collaborativo</label> <br>
                <label class="radio-inline"><input type="radio" name="c14" value="2"> collaborativo solo con alcuni</label> <br>
                <label class="radio-inline"><input type="radio" name="c14" value="3"> conflittuale con alcuni</label> <br>
                <label class="radio-inline"><input type="radio" name="c14" value="4"> conflittuale con quasi tutti</label> <br>
            <br>
            <i><b>15. Ti senti accolto dai tuoi compagni di classe?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c15" value="1"> moltissimo</label> <br>
                <label class="radio-inline"><input type="radio" name="c15" value="2"> abbastanza</label> <br>
                <label class="radio-inline"><input type="radio" name="c15" value="3"> poco</label> <br>
                <label class="radio-inline"><input type="radio" name="c15" value="4"> per niente</label> <br>
            <br>
            <i><b>16. Quando prendi la parola hai paura dei giudizi dei compagni?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c16" value="1"> s&igrave, molto</label> <br>
                <label class="radio-inline"><input type="radio" name="c16" value="2"> spesso</label> <br>
                <label class="radio-inline"><input type="radio" name="c16" value="3"> qualche volta</label> <br>
                <label class="radio-inline"><input type="radio" name="c16" value="4"> no, mai</label> <br>
            <br>
            <i><b>17. Hai mai avuto problemi per raggiungere la sede della scuola?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c17" value="1"> s&igrave, molte volte</label> <br>
                <label class="radio-inline"><input type="radio" name="c17" value="2"> spesso</label> <br>
                <label class="radio-inline"><input type="radio" name="c17" value="3"> solo poche volte</label> <br>
                <label class="radio-inline"><input type="radio" name="c17" value="4"> mai</label> <br>
            <br>
            <i><b>18. La scuola ha una buona reputazione?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c18" value="1"> molto, &egrave nota come una scuola seria</label> <br>
                <label class="radio-inline"><input type="radio" name="c18" value="2"> abbastanza, &egrave nota come una scuola di buon livello</label> <br>
                <label class="radio-inline"><input type="radio" name="c18" value="3"> poco, &egrave nota come una scuola scadente</label> <br>
                <label class="radio-inline"><input type="radio" name="c18" value="4"> per niente, &egrave nota come una brutta scuola</label> <br>
                <label class="radio-inline"><input type="radio" name="c18" value="5"> non posso rispondere, &egrave conosciuta troppo poco</label> <br>
            <br>
            <i><b>19. A tuo giudizio, gli insegnanti si preoccupano che tutti abbiano capito?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c19" value="1"> sempre</label> <br>
                <label class="radio-inline"><input type="radio" name="c19" value="2"> solo alcuni</label> <br>
                <label class="radio-inline"><input type="radio" name="c19" value="3"> solo qualche volta</label> <br>
                <label class="radio-inline"><input type="radio" name="c19" value="4"> mai</label> <br>
            <br>
            <i><b>20. Nella scuola hai assistito a episodi di prepotenza da parte di alcuni studenti?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c20" value="1"> spesso</label> <br>
                <label class="radio-inline"><input type="radio" name="c20" value="2"> raramente, solo in qualche occasione</label> <br>
                <label class="radio-inline"><input type="radio" name="c20" value="3"> mai</label> <br>
            <br>
            <i><b>21. Ritieni di mettere il giusto impegno nel seguire le lezioni?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c21" value="1"> s&igrave, sempre</label> <br>
                <label class="radio-inline"><input type="radio" name="c21" value="2"> spesso</label> <br>
                <label class="radio-inline"><input type="radio" name="c21" value="3"> poco</label> <br>
                <label class="radio-inline"><input type="radio" name="c21" value="4"> no, mai</label> <br>
            <br>
            <i><b>22. Le regole della scuola sono comunicate in modo chiaro?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c22" value="1"> s&igrave, molto</label> <br>
                <label class="radio-inline"><input type="radio" name="c22" value="2"> abbastanza</label> <br>
                <label class="radio-inline"><input type="radio" name="c22" value="3"> poco</label> <br>
                <label class="radio-inline"><input type="radio" name="c22" value="4"> per niente</label> <br>
            <br>
            <i><b>23. Ti senti compreso dai tuoi insegnanti?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c23" value="1"> sempre</label> <br>
                <label class="radio-inline"><input type="radio" name="c23" value="2"> solo da alcuni</label> <br>
                <label class="radio-inline"><input type="radio" name="c23" value="3"> solo qualche volta</label> <br>
                <label class="radio-inline"><input type="radio" name="c23" value="4"> mai</label> <br>
            <br>
            <i><b>24. Pensi che nella scuola ci siano problemi di convivenza fra studenti delle diverse sezioni o delle
            diverse classi?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c24" value="1"> s&igrave, molti</label> <br>
                <label class="radio-inline"><input type="radio" name="c24" value="2"> c'&egrave qualche problema che produce difficolt&agrave</label> <br>
                <label class="radio-inline"><input type="radio" name="c24" value="3"> c'&egrave qualche problema che non produce difficolt&agrave</label> <br>
                <label class="radio-inline"><input type="radio" name="c24" value="4"> non ci sono problemi</label> <br>
            <br>
            <i><b>25. Pensi che in questa scuola tu stia imparando cose utili per il tuo futuro?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c25" value="1"> s&igrave, sempre</label> <br>
                <label class="radio-inline"><input type="radio" name="c25" value="2"> spesso, in varie occasioni</label> <br>
                <label class="radio-inline"><input type="radio" name="c25" value="3"> in poche occasioni</label> <br>
                <label class="radio-inline"><input type="radio" name="c25" value="4"> mai</label> <br>
            <br>
            <i><b>26. Le regole della scuola sono applicate in modo coerente, senza distinzione di persone?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c26" value="1"> s&igrave, sempre</label> <br>
                <label class="radio-inline"><input type="radio" name="c26" value="2"> spesso</label> <br>
                <label class="radio-inline"><input type="radio" name="c26" value="3"> poco</label> <br>
                <label class="radio-inline"><input type="radio" name="c26" value="4"> no</label> <br>
            <br>
            <i><b>27. La tua classe nei confronti degli insegnanti &egrave:</b></i><br>
                <label class="radio-inline"><input type="radio" name="c27" value="1"> molto rispettosa</label> <br>
                <label class="radio-inline"><input type="radio" name="c27" value="2"> molto rispettosa con alcuni e poco con altri</label> <br>
                <label class="radio-inline"><input type="radio" name="c27" value="3"> spesso rispettosa</label> <br>
                <label class="radio-inline"><input type="radio" name="c27" value="4"> poco rispettosa</label> <br>
            <br>
            <i><b>28. Credi le materie che stai studiando ti stiano aiutando a crescere?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c28" value="1"> s&igrave, sempre</label> <br>
                <label class="radio-inline"><input type="radio" name="c28" value="2"> spesso, in varie occasioni</label> <br>
                <label class="radio-inline"><input type="radio" name="c28" value="3"> solo in poche occasioni</label> <br>
                <label class="radio-inline"><input type="radio" name="c28" value="4"> mai</label> <br>
            <br>
            <i><b>29. (per le classi terze, quarte e quinte)La scuola potrebbe fare di pi&ugrave per rendere efficace l'alternanza scuola-lavoro?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c29" value="1"> s&igrave, molto di pi&ugrave e meglio</label> <br>
                <label class="radio-inline"><input type="radio" name="c29" value="2"> potrebbe fare un po' di pi&ugrave e un po' meglio</label> <br>
                <label class="radio-inline"><input type="radio" name="c29" value="3"> non potrebbe fare di pi&ugrave</label> <br>
            <br>
            <i><b>30. Pensi che i compiti assegnati dagli insegnanti siano:</b></i><br>
                <label class="radio-inline"><input type="radio" name="c30" value="1"> troppi</label> <br>
                <label class="radio-inline"><input type="radio" name="c30" value="2"> giusti</label> <br>
                <label class="radio-inline"><input type="radio" name="c30" value="3"> pochi</label> <br>
            <br>
            <i><b>31. Vai volentieri a scuola?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c31" value="1"> sempre</label> <br>
                <label class="radio-inline"><input type="radio" name="c31" value="2"> spesso</label> <br>
                <label class="radio-inline"><input type="radio" name="c31" value="3"> raramente</label> <br>
                <label class="radio-inline"><input type="radio" name="c31" value="4"> mai</label> <br>
            <br>
            <i><b>32. Ti piace la sede della scuola?</b></i><br>
                <label class="radio-inline"><input type="radio" name="c32" value="1"> s&igrave, molto</label> <br>
                <label class="radio-inline"><input type="radio" name="c32" value="2"> abbastanza</label> <br>
                <label class="radio-inline"><input type="radio" name="c32" value="3"> non particolarmente</label> <br>
                <label class="radio-inline"><input type="radio" name="c32" value="4"> per niente</label> <br>
            <br>
            <i><b>33. Pensi che studiare sia:</b></i><br>
                <label class="radio-inline"><input type="radio" name="c33" value="1"> sempre utile e a volte anche piacevole</label> <br>
                <label class="radio-inline"><input type="radio" name="c33" value="2"> utile anche se faticoso</label> <br>
                <label class="radio-inline"><input type="radio" name="c33" value="3"> poco utile e troppo faticoso</label> <br>
                <label class="radio-inline"><input type="radio" name="c33" value="4"> inutile e faticoso</label> <br>
            <br>
            <i><b>34. Puoi indicare brevemente una cosa che ti piace proprio della tua scuola?</b></i><br>
                <textarea rows="3" cols="70" name="c34" form="form1"></textarea><br>
            <br>
            <i><b>35. Puoi indicare brevemente una cosa che non sopporti della tua scuola?</b></i><br>
                <textarea rows="3" cols="70" name="c35" form="form1"></textarea><br>
            <br>
                <input type="submit" name="sendclass" value="INVIA"/>
            </form>
        </div>
    </body>
</html>