<?php 



if (isset($_POST["texte"])) { 

    $text =strip_tags( htmlspecialchars($_POST['texte'])); 

    $text = preg_replace("#\[b\](.+)\[/b\]#isU","<strong>$1</strong>",$text);
    $text = preg_replace("#\[i\](.+)\[/i\]#isU","<em>$1</em>", $text ); 
    $text = preg_replace("#\[color=(red|blue|green|yellow|purple|crimson|olive)\](.+)\[/color\]#isU" ,"<span style='color:$1'>$2</span>", $text); 
    $text  = preg_replace("#http://\w+\.[a-z0-9_-]{2,4}(/\w+\?\=(.+))?$#i","<a href ='$0'>$0</a>",$text );

   

    echo $text."<br><br>";

  
    $coordonnees = array (
        'prenom' => 'François',
        'nom' => 'Dupont',
        'adresse' => '3 Rue du Paradis',
        'ville' => 'Marseille');
    
    foreach($coordonnees as $cle => $element)
    {
        echo $coordonnees[$cle]. 'vaut ' . $element . '<br />';
    }
  
  

}
/* function HTML_tag ($tag) {
    $get_tag = htmlspecialchars($tag) ; 
    $get_tag = preg_replace("#\<tag=(red)|(bleu)|(green)\](.+)\</tag\>#isU","
        <span style ='color :$2'><span</span><span 

        style='color':$3>style</span>='color :$1'>>$4<span 

        style='color:$2></span></span>

    ",$get_tag);

 return $get_tag; 

 }
 HTML_tag("p");*/


?>



<p>
    Bienvenue dans le parser du Site du Zéro !<br />
    Nous avons écrit ce parser ensemble, j'espère que vous saurez apprécier de voir que tout ce que vous avez appris va vous être très utile !
</p>

<p>Amusez-vous à utiliser du bbCode. Tapez par exemple :</p>

<blockquote style="font-size:0.8em">
<p>
    Je suis un gros [b]Zéro[/b], et pourtant j'ai [i]tout appris[/i] sur http://www.siteduzero.com<br />
    Je vous [b][color=green]recommande[/color][/b] d'aller sur ce site, vous pourrez apprendre à faire ça [i][color=purple]vous aussi[/color][/i] !
</p>
</blockquote>

<form method="post" action="">
<p>
    <label for="texte">Votre message ?</label><br />
    <textarea id="texte" name="texte" cols="50" rows="8"></textarea><br />
    <input type="submit" value="Montre-moi toute la puissance des regex" />
</p>
</form>