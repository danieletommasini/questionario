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
            <b>Il questionario è anonimo. Ti verr&agrave chiesto di quale classe fai parte perch&eacute questo serve per
            elaborare le risposte.</b><br>
            <b>Ti preghiamo di rispondere con sincerit&agrave a tutte le domande perch&eacute il tuo giudizio &egrave molto
            importante per la crescita ed il miglioramento della scuola.</b>
            <form class="text-center" action="elaboration.php" method="POST">
                La classe che frequenti: 
                <br>
                    <label class="radio-inline"><input type="radio" name="class" value="5D"> 5D</label>
                    <label class="radio-inline"><input type="radio" name="class" value="5B"> 5B</label>
                <br>
                    
                    
                    
                   <br><br><b>Il questionario è anonimo. Ti verrà chiesto di quale classe fai parte perché questo serve per
elaborare le risposte.<br>
<u>Ti preghiamo di rispondere con sincerità a tutte le domande perché il tuo giudizio è molto
importante per la crescita ed il miglioramento della scuola.</u></b><br><br>

<i><b>1. I locali della scuola sono accoglienti?</b></i><br>
 <label class="radio-inline"><input type="radio" name="c1" value="1"> sì, molto</label> <br>
 <label class="radio-inline"><input type="radio" name="c1" value="2"> abbastanza</label> <br>
 <label class="radio-inline"><input type="radio" name="c1" value="3"> poco</label> <br>
 <label class="radio-inline"><input type="radio" name="c1" value="4"> per niente</label> <br>
<br>
<i><b>2. I responsabili di sede della scuola sono disponibili ad ascoltare i problemi?</b></i><br>
 <label class="radio-inline"><input type="radio" name="c2" value="1"> sì, sempre</label> <br>
 <label class="radio-inline"><input type="radio" name="c2" value="2"> spesso</label> <br>
 <label class="radio-inline"><input type="radio" name="c2" value="3"> qualche volta</label> <br>
 <label class="radio-inline"><input type="radio" name="c2" value="4"> no,mai</label> <br>
 <br>
<i><b>3. I collaboratori scolastici (bidelli) sono disponibili?</b></i><br>
 <label class="radio-inline"><input type="radio" name="c3" value="1"> sì, semrpe</label> <br>
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
<i><b>5. Il tuo rapporto con i compagni è:</b></i><br>
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
 <label class="radio-inline"><input type="radio" name="c7" value="1"> si, molto</label> <br>
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
 <label class="radio-inline"><input type="radio" name="c10" value="2"> abbastnza</label> <br>
 <label class="radio-inline"><input type="radio" name="c10" value="3"> poco</label> <br>
 <label class="radio-inline"><input type="radio" name="c10" value="4"> per niente</label> <br>
<br>
<i><b>11. Se non capisci qualcosa chiedi ulteriori spiegazioni agli insegnanti?</b></i><br>
 <label class="radio-inline"><input type="radio" name="c11" value="1"> sì, a tutti</label> <br>
 <label class="radio-inline"><input type="radio" name="c11" value="2"> solo con alcuni</label> <br>
 <label class="radio-inline"><input type="radio" name="c11" value="3"> raramente</label> <br>
 <label class="radio-inline"><input type="radio" name="c11" value="4"> no, mai</label> <br>
<br>
<i><b>12. Ti sembra che gli spazi della scuola siano sfruttati in maniera adeguata?</b></i><br>
 <label class="radio-inline"><input type="radio" name="c12" value="1"> sì, molto</label> <br>
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
<i><b>14. Il tuo rapporto con gli insegnanti è:</b></i><br>
- collaborativo
- collaborativo solo con alcuni
- conflittuale con alcuni
- conflittuale con quasi tutti
<br>
<i><b>15. Ti senti accolto dai tuoi compagni di classe?</b></i><br>
- moltissimo
- abbastanza
- poco
- per niente
<br>
<i><b>16. Quando prendi la parola hai paura dei giudizi dei compagni?</b></i><br>
- sì, molto
- spesso
- qualche volta
- no, mai
<br>
<i><b>17. Hai mai avuto problemi per raggiungere la sede della scuola?</b></i><br>
- sì, molte volte
- spesso
- solo poche volte
- mai
<br>
<i><b>18. La scuola ha una buona reputazione?</b></i><br>
- molto, è nota come una scuola seria
- abbastanza, è nota come una scuola di buon livello
- poco, è nota come una scuola scadente
- per niente, è nota come una brutta scuola
- non posso rispondere, è conosciuta troppo poco
<br>
<i><b>19. A tuo giudizio, gli insegnanti si preoccupano che tutti abbiano capito?</b></i><br>
- sempre
- solo alcuni
- solo qualche volta
- mai
<br>
<i><b>20. Nella scuola hai assistito a episodi di prepotenza da parte di alcuni studenti?</b></i><br>
- spesso
- raramente, solo in qualche occasione
- mai
<br>
<i><b>21. Ritieni di mettere il giusto impegno nel seguire le lezioni?</b></i><br>
- sì, sempre
- spesso
- poco
- no, mai
<br>
<i><b>22. Le regole della scuola sono comunicate in modo chiaro?</b></i><br>
- sì, molto
- abbastanza
- poco
- per niente
<br>
<i><b>23. Ti senti compreso dai tuoi insegnanti?</b></i><br>
- sempre
- solo da alcuni
- solo qualche volta
- mai
<br>
<i><b>24. Pensi che nella scuola ci siano problemi di convivenza fra studenti delle diverse sezioni o delle
diverse classi?</b></i><br>
- sì, molti
- c'è qualche problema che produce difficoltà
- c'è qualche problema che non produce difficoltà
- non ci sono problemi
<br>
<i><b>25. Pensi che in questa scuola tu stia imparando cose utili per il tuo futuro?</b></i><br>
- sì, sempre
- spesso, in varie occasioni
- in poche occasioni
- mai
<br>
<i><b>26. Le regole della scuola sono applicate in modo coerente, senza distinzione di persone?</b></i><br>
- sì, sempre
- spesso
- poco
- no
<br>
<i><b>27. La tua classe nei confronti degli insegnanti è:</b></i><br>
- molto rispettosa
- molto rispettosa con alcuni e poco con altri
- spesso rispettosa
- poco rispettosa
<br>
<i><b>28. Credi le materie che stai studiando ti stiano aiutando a crescere?</b></i><br>
- sì, sempre
- spesso, in varie occasioni
- solo in poche occasioni
- mai
<br>
<i><b>29. (per le classi terze, quarte e quinte)La scuola potrebbe fare di più per rendere efficace l'alternanza scuola-lavoro?</b></i><br>
- si, molto di più e meglio
- potrebbe fare un po' di più e un po' meglio
- non potrebbe fare di più
<br>
<i><b>30. Pensi che i compiti assegnati dagli insegnanti siano:</b></i><br>
- troppi
- giusti
- pochi
<br>
<i><b>31. Vai volentieri a scuola?</b></i><br>
- sempre
- spesso
- raramente
- mai
<br>
<i><b>32. Ti piace la sede della scuola?</b></i><br>
- sì, molto
- abbastanza
- non particolarmente
- per niente
<br>
<i><b>33. Pensi che studiare sia:</b></i><br>
- sempre utile e a volte anche piacevole
- utile anche se faticoso
- poco utile e troppo faticoso
- inutile e faticoso
<br>
<i><b>34. Puoi indicare brevemente una cosa che ti piace proprio della tua scuola?</b></i><br>
<br>
<i><b>35. Puoi indicare brevemente una cosa che non sopporti della tua scuola?</b></i><br>
                    <input type="submit" name="sendclass" value="INVIA"/>
            </form>
        </div>
    </body>
</html>