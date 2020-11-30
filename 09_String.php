<?php
$a="Hello";
$b='World!';
echo$a.$b;

$c='<p>"sample" string</p>';
echo$c;
$d="<p>'sample' string</p>";
echo$d;
$e="<p>escape char \\ \"\" in \"double\"</p>";
echo$e;
$f='<p>escape char \\ \'\' in \'single\'</p>';
echo$f;

$name="DevGun";
echo"<p>$name Hello!</p>";
echo"<p>{$name}, Hello!</p>";

$g=5;
$e=2;
echo"<p>print $g-$e</p>";
echo'<p>print $g-$e</p>';

//echo'<p>print test'.$g-$e.'</p>';   // error
echo'<p>print test'.($g-$e).'</p>';

// heredoc
$hdoc=<<<EOT
<p>
Hello
World!
$name
</p>
EOT;
echo$hdoc;

// nowdoc
$hdoc=<<<'EOT'
<p>
Hello
World!
$name
</p>
EOT;
echo$hdoc;
?>