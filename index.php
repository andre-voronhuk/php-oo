<?php
include_once 'TStyle.php';
include_once 'TParagraph.php';
include_once 'TElement.php';
include_once 'TEntry.php';

$estilo1 = new TStyle( 'texto-azul' );
$estilo1->color = 'rgb(0,100,255)';
$estilo1->show();

$e2 = new TStyle( 'texto-maior' );
$e2->color = 'rgb(0,255,100)';
$e2->font_size = '29px';
$e2->show();

$e3 = new TStyle( 'ul' );
$e3->color = 'rgb(200,200,250)';
$e3->list_style_type = 'square';
$e3->font_variant = 'small-caps';
$e2->font_size = '28px';
$e3->show();

$e4 = new TStyle( 'code' );
$e4->font_family = 'Consolas';
$e4->background_color = '#555';
$e4->border_radius = '10px';
$e4->style = 'padding:1rem;';
$e4->color = '#0D0';
$e4->show();

$e5 = new TParagraph( 'Eu sou um TParagraph! ' );

$e5->style = 'color:#0D0';

$e6 = new TEntry( 'teste' );
$e6->placeholder = 'Eu Sou um INPUT!';

$contai = new TElement( 'div' );

$contai->add( $e5 );
$contai->add( $e6 );
$contai->style = 'margin:1.5rem;';
$contai->show();

?>
<style>
body,
html {
    background-color: #222223;
    margin: 0;
    padding: 0;
}

.container {
    margin: 1rem;
    padding: 1rem;
    border: 1px solid #555;
    background-color: #333;
    border-radius: 8px;
    font-family: -apple-system, BlinkMacSystemFont,
    'Segoe UI', 'Open Sans', 'Helvetica Neue', sans-serif;

}
</style>
<div class = 'container'>
<p class = 'texto-azul'>

Eu sou um texto simples em Azul!
</p>
<p class = 'texto-maior'>
Sou um texto maior!
</p>

<div class = 'ul'>
<li> Item 1 da lista</li>
<li> Item 2 da lista</li>
<li> Item 3 da lista</li>
</div>
<br><br>

<div class = 'code'>
<pre>

' eu sou um código em um campo code!
    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
when an unknown printer took a galley of type and scrambled it to make a type
specimen book. It has survived not only five centuries, but also the leap into
electronic typesetting, remaining essentially unchanged. It was popularised in
the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
and more recently with desktop publishing software Aldus including versions of
Lorem Ipsum.'
</pre>
</div>

</div>