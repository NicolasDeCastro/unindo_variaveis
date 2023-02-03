<?php


$dados=['nome'=>'nicolas',
'idade'=>21,
'nota'=>10
];

//estract trasforma as ""chaves"" do array em variaveis,logo não precisa do list

extract($dados);
//list('nome'=>$nome,'idade'=>$idade,'nota'=>$nota)=$dados;

echo $nome.$idade.$nota;
//compact junta variaveis em uma só
var_dump(compact('nota','idade','nome'));