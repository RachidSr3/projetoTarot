<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			echo '<table>';
			
			if ($tipo == 1 || $tipo == 2){
			
				if ($metodo == 1){
					
					echo 
					
					'
					<tr><td>Casa 1</td></tr>
					<tr><td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> </td>
					<tr><td>'. $cartasMaioresNome[1]["nome"] .'</td></tr>' 
					
					; 

				} elseif ( $metodo == 2) {
					
					echo 
					'
					<tr>
						<th>Casa 1</th>	
						<th>Casa 2</th>
					</tr>
					
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> </td>
					
					<tr>
						<td>'. $cartasMaioresNome[1]["nome"] .'</td>
						<td>'. $cartasMaioresNome[2]["nome"] .'</td>
					</tr>' 					
										
					; 

				} elseif ( $metodo == 3) {
					
					
					echo 
					'
					<tr>
						<th>Casa 1</th>	
						<th>Casa 2</th>
						<th>Casa 3</th>
					</tr>
					
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem3] . '" alt="Minha Figura"> </td>
					
					<tr>
						<td>'. $cartasMaioresNome[1]["nome"] .'</td>
						<td>'. $cartasMaioresNome[2]["nome"] .'</td>
						<td>'. $cartasMaioresNome[3]["nome"] .'</td>
					</tr>' 					
										
					;  
				
				} elseif ( $metodo == 4) {
					
					echo 
					'
					<tr>
						<th>Casa 1</th>	
						<th>Casa 2</th>
						<th>Casa 3</th>
						<th>Casa 4</th>
					</tr>
					
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem3] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem4] . '" alt="Minha Figura"> </td>
					
					<tr>
						<td>'. $cartasMaioresNome[1]["nome"] .'</td>
						<td>'. $cartasMaioresNome[2]["nome"] .'</td>
						<td>'. $cartasMaioresNome[3]["nome"] .'</td>
						<td>'. $cartasMaioresNome[4]["nome"] .'</td>
					</tr>' 					
										
					;  
				
				} elseif ( $metodo == 5) {
					
					echo 
					'
					
					<tr>
						<th>Casa 1</th>	
						<th>Casa 2</th>
						<th>Casa 3</th>
						<th>Casa 4</th>
						<th>Casa 5</th>
					</tr>
				

					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem3] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem4] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem5] . '" alt="Minha Figura"> </td>
					
					<tr>
						<td>'. $cartasMaioresNome[1]["nome"] .'</td>
						<td>'. $cartasMaioresNome[2]["nome"] .'</td>
						<td>'. $cartasMaioresNome[3]["nome"] .'</td>
						<td>'. $cartasMaioresNome[4]["nome"] .'</td>
						<td>'. $cartasMaioresNome[5]["nome"] .'</td>
					</tr>' 					
										
					;  

				} elseif ( $metodo == 6) {
					
					echo 
					'
					<tr>
						<td></td>	
						<th>Casa 3 - Caminho</th>
						<td></td>
					</tr>
					
					<tr>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem3] . '" alt="Minha Figura"> </td>
						<td> </td>
					<tr>
						<td></td>
						<td>'. $cartasMaioresNome[3]["nome"] .'</td>
						<td></td>
						
					</tr>

					<tr>
						<th>Casa 1 - Positivo</th>	
						<th>Casa 5 - Síntese</th>
						<th>Casa 2 - Negativo</th>
					</tr>
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem5] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> </td>
					<tr>
						<td>'. $cartasMaioresNome[1]["nome"] .'</td>
						<td>'. $cartasMaioresNome[5]["nome"] .'</td>
						<td>'. $cartasMaioresNome[2]["nome"] .'</td>
					</tr> 
					<tr>
						<td></td>	
						<th>Casa 4 - Resultado</th>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem4] . '" alt="Minha Figura"> </td>
						<td> </td>
					<tr>
						<td></td>
						<td>'. $cartasMaioresNome[4]["nome"] .'</td>
						<td></td>
					</tr>
					'
					;
					
				}  elseif ( $metodo == 7) {
					
					echo 
					'
					<tr>
						<td></td>	
						<th>Casa 3 - Fatores Externos</th>
						<td></td>
						<th>Casa 10 - Desfecho da Situação</th>
					</tr>
					
					<tr>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem3] . '" alt="Minha Figura"> </td>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem10] . '" alt="Minha Figura"> </td>
					<tr>
						<td></td>
						<td>'. $cartasMaioresNome[3]["nome"] .'</td>
						<td></td>
						<td>'. $cartasMaioresNome[10]["nome"] .'</td>
						
					</tr>

					<tr>
						<th>Casa 6 - Futuro Próximo</th>	
						<th>Casa 1 - Momento Presente</th>
						<th>Casa 4 - Motivação Inconsciente</th>
						<th>Casa 9 - Esperanças e Temores</th>
					</tr>
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem6] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem4] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem9] . '" alt="Minha Figura"> </td>
					<tr>
						<td>'. $cartasMaioresNome[6]["nome"] .'</td>
						<td>'. $cartasMaioresNome[1]["nome"] .'</td>
						<td>'. $cartasMaioresNome[4]["nome"] .'</td>
						<td>'. $cartasMaioresNome[9]["nome"] .'</td>
					</tr> 
					<tr>
						<td></td>	
						<th>Casa 2 - Obstáculo</th>
						<td></td>
						<th>Casa 8 - Visão das pessoas próximas</th>
					</tr>
					<tr>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> </td>
						<td> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem8] . '" alt="Minha Figura"> </td>
					<tr>
						<td></td>
						<td>'. $cartasMaioresNome[2]["nome"] .'</td>
						<td></td>
						<td>'. $cartasMaioresNome[8]["nome"] .'</td>
					</tr> 
					<tr>
						<td></td>	
						<th>Casa 5 - Influências Passadas</th>
						<td></td>
						<th>Casa 7 - Atitude do Consulente</th>
					</tr>
					<tr>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem5] . '" alt="Minha Figura"> </td>
						<td> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem7] . '" alt="Minha Figura"> </td>
					<tr>
						<td></td>
						<td>'. $cartasMaioresNome[5]["nome"] .'</td>
						<td></td>
						<td>'. $cartasMaioresNome[7]["nome"] .'</td>
					</tr> 
					'
					;
				
				
				} elseif ($metodo == 8) {
					
					echo 
					'
					<tr>
						<th>Casa 1 - Mental A </th>	
						<td></td>
						<th>Casa 4 - Mental B</th>
					</tr>
					
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> </td>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem4] . '" alt="Minha Figura"> </td>
					<tr>
						<td>'. $cartasMaioresNome[1]["nome"] .'</td>
						<td></td>
						<td>'. $cartasMaioresNome[4]["nome"] .'</td>
						
					</tr>

					<tr>
						<th>Casa 2 - Emocional A</th>	
						<th>Casa 7 - Desfecho</th>
						<th>Casa 5 - Emocional B</th>
					</tr>
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem7] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem5] . '" alt="Minha Figura"> </td>
					<tr>
						<td>' . $cartasMaioresNome[2]["nome"] .'</td>
						<td>' . $cartasMaioresNome[7]["nome"] .'</td>
						<td>' . $cartasMaioresNome[5]["nome"] .'</td>
					</tr> 

					<tr>
						<th>Casa 3 - Físico A</th>	
						<td></td>
						<th>Casa 6 - Físico B</th>
					</tr>
					
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem3] . '" alt="Minha Figura"> </td>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem6] . '" alt="Minha Figura"> </td>
					<tr>
						<td>'. $cartasMaioresNome[3]["nome"] .'</td>
						<td></td>
						<td>'. $cartasMaioresNome[6]["nome"] .'</td>
						
					</tr>
					'
					;
				}
				
				else {
					
					echo 'Opção não encontrada';
				}
				
			} elseif ($tipo == 3) {
				
				if ($metodo == 1){
					
					echo 
					
					'
					<tr><td>Casa 1</td></tr>
					<tr><td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem31] . '" alt="Minha Figura"></td>
					<tr><td>'. $cartasMaioresNome[1]["nome"] .' + '. $cartasMaioresNome[31]["nome"] .'</td></tr>' 
					
					; 

				} elseif ( $metodo == 2) {
					
					echo 
					'
					<tr>
						<th>Casa 1</th>	
						<th>Casa 2</th>
					</tr>
					
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem31] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem32] . '" alt="Minha Figura">  </td>
					
					<tr>
						<td>'. $cartasMaioresNome[1]["nome"] .' + '. $cartasMaioresNome[31]["nome"] .'</td>
						<td>'. $cartasMaioresNome[2]["nome"] .' + '. $cartasMaioresNome[32]["nome"] .'</td>
					</tr>' 					
										
					; 

				} elseif ( $metodo == 3) {
					
					
					echo 
					'
					<tr>
						<th>Casa 1</th>	
						<th>Casa 2</th>
						<th>Casa 3</th>
					</tr>
					
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem31] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem32] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem3] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem33] . '" alt="Minha Figura"> </td>
					
					<tr>
						<td>'. $cartasMaioresNome[1]["nome"] .' + '. $cartasMaioresNome[31]["nome"] .'</td>
						<td>'. $cartasMaioresNome[2]["nome"] .' + '. $cartasMaioresNome[32]["nome"] .'</td>
						<td>'. $cartasMaioresNome[3]["nome"] .' + '. $cartasMaioresNome[33]["nome"] .'</td>
					</tr>' 					
										
					;  
				
				} elseif ( $metodo == 4) {
					
					echo 
					'
					<tr>
						<th>Casa 1</th>	
						<th>Casa 2</th>
						<th>Casa 3</th>
						<th>Casa 4</th>
					</tr>
					
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem31] . '" alt="Minha Figura"></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem32] . '" alt="Minha Figura"></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem3] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem33] . '" alt="Minha Figura"></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem4] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem34] . '" alt="Minha Figura"></td>
					
					<tr>
						<td>'. $cartasMaioresNome[1]["nome"] .' + '. $cartasMaioresNome[31]["nome"] .'</td>
						<td>'. $cartasMaioresNome[2]["nome"] .' + '. $cartasMaioresNome[32]["nome"] .'</td>
						<td>'. $cartasMaioresNome[3]["nome"] .' + '. $cartasMaioresNome[33]["nome"] .'</td>
						<td>'. $cartasMaioresNome[4]["nome"] .' + '. $cartasMaioresNome[34]["nome"] .'</td>
					</tr>' 					
										
					;  
				
				} elseif ( $metodo == 5) {
					
					echo 
					'
					<tr>
						<th>Casa 1</th>	
						<th>Casa 2</th>
						<th>Casa 3</th>
						<th>Casa 4</th>
						<th>Casa 5</th>
					</tr>
					
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem31] . '" alt="Minha Figura"></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem32] . '" alt="Minha Figura"></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem3] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem33] . '" alt="Minha Figura"></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem4] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem34] . '" alt="Minha Figura"></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem5] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem35] . '" alt="Minha Figura"> </td>
					
					<tr>
						<td>'. $cartasMaioresNome[1]["nome"] .' + '. $cartasMaioresNome[31]["nome"] .'</td>
						<td>'. $cartasMaioresNome[2]["nome"] .' + '. $cartasMaioresNome[32]["nome"] .'</td>
						<td>'. $cartasMaioresNome[3]["nome"] .' + '. $cartasMaioresNome[33]["nome"] .'</td>
						<td>'. $cartasMaioresNome[4]["nome"] .' + '. $cartasMaioresNome[34]["nome"] .'</td>
						<td>'. $cartasMaioresNome[5]["nome"] .' + '. $cartasMaioresNome[35]["nome"] .'</td>
					</tr>' 					
										
					;  

				} elseif ( $metodo == 6) {
					
					echo 
					'
					<tr>
						<td></td>	
						<th>Casa 3 - Caminho</th>
						<td></td>
					</tr>
					
					<tr>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem3] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem33] . '" alt="Minha Figura"></td>
						<td> </td>
					<tr>
						<td></td>
						<td>'. $cartasMaioresNome[3]["nome"] .' + '. $cartasMaioresNome[33]["nome"] .'</td>
						<td></td>
						
					</tr>

					<tr>
						<th>Casa 1 - Positivo</th>	
						<th>Casa 5 - Síntese</th>
						<th>Casa 2 - Negativo</th>
					</tr>
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem31] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem5] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem35] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem32] . '" alt="Minha Figura"> </td>
					<tr>
						<td>'. $cartasMaioresNome[1]["nome"] .' + '. $cartasMaioresNome[31]["nome"] .'</td>
						<td>'. $cartasMaioresNome[5]["nome"] .' + '. $cartasMaioresNome[35]["nome"] .'</td>
						<td>'. $cartasMaioresNome[2]["nome"] .' + '. $cartasMaioresNome[32]["nome"] .'</td>
					</tr> 
					<tr>
						<td></td>	
						<th>Casa 4 - Resultado</th>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem4] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem34] . '" alt="Minha Figura"> </td>
						<td> </td>
					<tr>
						<td></td>
						<td>'. $cartasMaioresNome[4]["nome"] .' + '. $cartasMaioresNome[34]["nome"] .'</td>
						<td></td>
					</tr>
					'
					;
					
				}  elseif ( $metodo == 7) {
					
					echo 
					'
					<tr>
						<td></td>	
						<th>Casa 3 - Fatores Externos</th>
						<td></td>
						<th>Casa 10 - Desfecho da Situação</th>
					</tr>
					
					<tr>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem3] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem33] . '" alt="Minha Figura"> </td>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem10] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem40] . '" alt="Minha Figura"></td>
					<tr>
						<td></td>
						<td>'. $cartasMaioresNome[3]["nome"] .' + '. $cartasMaioresNome[33]["nome"] .'</td>
						<td></td>
						<td>'. $cartasMaioresNome[10]["nome"] .' + '. $cartasMaioresNome[40]["nome"] .'</td>
						
					</tr>

					<tr>
						<th>Casa 6 - Futuro Próximo</th>	
						<th>Casa 1 - Momento Presente</th>
						<th>Casa 4 - Motivação Inconsciente</th>
						<th>Casa 9 - Esperanças e Temores</th>
					</tr>
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem6] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem36] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem31] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem4] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem34] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem9] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem39] . '" alt="Minha Figura"> </td>
					<tr>
						<td>'. $cartasMaioresNome[6]["nome"] .' + '. $cartasMaioresNome[36]["nome"] .'</td>
						<td>'. $cartasMaioresNome[1]["nome"] .' + '. $cartasMaioresNome[31]["nome"] .'</td>
						<td>'. $cartasMaioresNome[4]["nome"] .' + '. $cartasMaioresNome[34]["nome"] .'</td>
						<td>'. $cartasMaioresNome[9]["nome"] .' + '. $cartasMaioresNome[39]["nome"] .'</td>
					</tr> 
					<tr>
						<td></td>	
						<th>Casa 2 - Obstáculo</th>
						<td></td>
						<th>Casa 8 - Visão das pessoas próximas</th>
					</tr>
					<tr>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem32] . '" alt="Minha Figura"> </td>
						<td> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem8] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem38] . '" alt="Minha Figura"></td>
					<tr>
						<td></td>
						<td>'. $cartasMaioresNome[2]["nome"] .' + '. $cartasMaioresNome[32]["nome"] .'</td>
						<td></td>
						<td>'. $cartasMaioresNome[8]["nome"] .' + '. $cartasMaioresNome[38]["nome"] .'</td>
					</tr> 
					<tr>
						<td></td>	
						<th>Casa 5 - Influências Passadas</th>
						<td></td>
						<th>Casa 7 - Atitude do Consulente</th>
					</tr>
					<tr>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem5] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem35] . '" alt="Minha Figura"> </td>
						<td> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem7] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem37] . '" alt="Minha Figura"> </td>
					<tr>
						<td></td>
						<td>'. $cartasMaioresNome[5]["nome"] .' + '. $cartasMaioresNome[35]["nome"] .'</td>
						<td></td>
						<td>'. $cartasMaioresNome[7]["nome"] .' + '. $cartasMaioresNome[37]["nome"] .'</td>
					</tr> 
					'
					;
				
				
				} elseif ($metodo == 8) {
					
					echo 
					'
					<tr>
						<th>Casa 1 - Mental A </th>	
						<td></td>
						<th>Casa 4 - Mental B</th>
					</tr>
					
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem1] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem31] . '" alt="Minha Figura"></td>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem4] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem34] . '" alt="Minha Figura"></td>
					<tr>
						<td>'. $cartasMaioresNome[1]["nome"] .' + '. $cartasMaioresNome[31]["nome"] .'</td>
						<td></td>
						<td>'. $cartasMaioresNome[4]["nome"] .' + '. $cartasMaioresNome[34]["nome"] .'</td>
						
					</tr>

					<tr>
						<th>Casa 2 - Emocional A</th>	
						<th>Casa 7 - Desfecho</th>
						<th>Casa 5 - Emocional B</th>
					</tr>
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem2] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem32] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem7] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem37] . '" alt="Minha Figura"> </td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem5] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem35] . '" alt="Minha Figura">  </td>
					<tr>
						<td>' . $cartasMaioresNome[2]["nome"] .' + ' . $cartasMaioresNome[32]["nome"] .'</td>
						<td>' . $cartasMaioresNome[7]["nome"] .' + ' . $cartasMaioresNome[37]["nome"] .'</td>
						<td>' . $cartasMaioresNome[5]["nome"] .' + ' . $cartasMaioresNome[35]["nome"] .'</td>
					</tr> 

					<tr>
						<th>Casa 3 - Físico A</th>	
						<td></td>
						<th>Casa 6 - Físico B</th>
					</tr>
					
					<tr>
						<td><img src="'.  $cartasMaioresImagem[$numImagem3] . '" alt="Minha Figura"><img src="'.  $cartasMaioresImagem[$numImagem33] . '" alt="Minha Figura">  </td>
						<td></td>
						<td><img src="'.  $cartasMaioresImagem[$numImagem6] . '" alt="Minha Figura"> <img src="'.  $cartasMaioresImagem[$numImagem36] . '" alt="Minha Figura"></td>
					<tr>
						<td>'. $cartasMaioresNome[3]["nome"] .' + '. $cartasMaioresNome[33]["nome"] .'</td>
						<td></td>
						<td>'. $cartasMaioresNome[6]["nome"] .' + '. $cartasMaioresNome[36]["nome"] .'</td>
						
					</tr>
					'
					;
				}
				
			}
			
			
			
			
			echo '</table>';
					if ($significado == 1){									echo '						</br>			</br>						<table>															<tr>					<tr>						<td><pre>'. var_dump($cartasMaioresNome). '</pre></td>					</tr>				</tr>			 																						</table>';					}
			
		}

?>
