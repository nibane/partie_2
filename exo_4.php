<h1>Exercice 4<h/1>

<p>A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s'ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).On admet que l'URL de la page Wikipédia de la capitale adopte la forme:https://fr.wikipedia.org/wiki/Le tableau passé en argument sera le suivant:$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");AffichagePaysCapitaleLien wikiALLEMAGNEBerlinLienESPAGNEMadridLienFRANCEParisLienITALIERomeLienUSAWashingtonLien<p/>

<h2>Résultat</h2>

<?php

$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");


function afficherTableHTML($arg){
    ksort($arg);
    
    
    echo '<table>',
    '<tr>',
    '<th>Pays</th>' , 
    '<th>Capitale</th>',
    '<th>Lien wiki</th>',
    '</tr>';
    foreach ($arg as $key => $value){
        echo "<tr> <td>". strtoupper($key) ."</td> <td>". $value . "</td> <td> https://fr.wikipedia.org/wiki/".$value." </td> </tr>";
    }
    
    
    echo '</table>';
}


afficherTableHTML($capitales);

?>
