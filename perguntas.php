<?php

$metodo = 0;
$tipo = 0;
$taro = 0;$significado = 0;
$pergunta = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	require ('funcoes.php');
		//declaração de variáveis
	$metodo = !empty($_POST['metodo']) ? $_POST['metodo'] : '' ;
	$tipo = !empty($_POST['tipo']) ? $_POST['tipo'] : '' ;
	// 1 = thoth; 2 = rws; 3 = marselha	
	$taro = !empty($_POST['taro']) ? $_POST['taro'] : '' ;	$significado = !empty($_POST['significado']) ? $_POST['significado'] : '' ;		$pergunta = !empty($_POST['pergunta']) ? $_POST['pergunta'] : '' ;
		//constroi decks e jogadas
	$cartasMaioresNome = montaMaiores($taro,$tipo);
	$cartasMaioresImagem = montaMaioresImagem ($taro);
			
	$numImagem1 = $cartasMaioresNome[1]["num"];
	$numImagem2 = $cartasMaioresNome[2]["num"];
	$numImagem3 = $cartasMaioresNome[3]["num"];
	$numImagem4 = $cartasMaioresNome[4]["num"];
	$numImagem5 = $cartasMaioresNome[5]["num"];
	$numImagem6 = $cartasMaioresNome[6]["num"];
	$numImagem7 = $cartasMaioresNome[7]["num"];
	$numImagem8 = $cartasMaioresNome[8]["num"];
	$numImagem9 = $cartasMaioresNome[9]["num"];
	$numImagem10 = $cartasMaioresNome[10]["num"];
	$numImagem11 = $cartasMaioresNome[11]["num"];
	$numImagem12 = $cartasMaioresNome[12]["num"];
	if ($tipo == 3) {
		
		// arcanos menores
		$numImagem30 = $cartasMaioresNome[30]["num"];
		$numImagem31 = $cartasMaioresNome[31]["num"];
		$numImagem32 = $cartasMaioresNome[32]["num"];
		$numImagem33 = $cartasMaioresNome[33]["num"];
		$numImagem34 = $cartasMaioresNome[34]["num"];
		$numImagem35 = $cartasMaioresNome[35]["num"];
		$numImagem36 = $cartasMaioresNome[36]["num"];
		$numImagem37 = $cartasMaioresNome[37]["num"];
		$numImagem38 = $cartasMaioresNome[38]["num"];
		$numImagem39 = $cartasMaioresNome[39]["num"];
		$numImagem40 = $cartasMaioresNome[40]["num"];
		
	
	}
		

			
}

?>
