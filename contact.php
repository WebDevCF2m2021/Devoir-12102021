<?php include('menu.php'); ?>
            <main>
                <h1>Pour nous contacter</h1>
                <p class="entete"><img src="images/640px-contacts.jpg" alt="" /></p>
                <h3 class="entete">Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous :</h3>
                
                <form id="form1" name="form1" method="post" action="contact.php" class="contact">
                    <div><label for="frm1_nom">NOM : </label><input name="nom" type="text" id="frm1_nom" size="50" placeholder="Indiquez votre nom" /></div>
                    <div><label for="frm1_prenom">PRENOM : </label><input name="prenom" type="text" id="frm1_prenom" size="50" maxlength="50" /></div>
                    <div><label for="frm1_ville">VILLE : </label><input name="ville" type="text" id="frm1_ville" size="50" /></div>
                    <div><label for="frm1_email">E-MAIL : </label><input name="email" type="email" id="frm1_email" size="50" /></div>
                    <div><label for="frm1_message">COMMENTAIRES : </label><textarea name="message" id="frm1_message" cols="40" rows="5"></textarea></div>
                    <div><input type="submit" id="frm1_submit" value="Envoyer votre message" /></div>
                </form>
            </main>
        </div>
    </body>
</html>