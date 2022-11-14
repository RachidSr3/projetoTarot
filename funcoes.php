<?php

 
function montaMaiores ($taro,$tipo){
	
			//marselha		
			if ($taro == 3) {	
					
					$deckNomeCarta = array(
						0 => array ("num" => 0,
									"nome" => "0 - O Louco" , 					
"aspecGeral" => Potencial original, caos criativo, despreocupação. novocomeço, partida para desconhecido, liberdade concedida pela loucura. leviandade,
"financ" => Começar do zero, brincar com as mais diversas possibilidades, pausa produtiva, estar aberto para novas atividades, inexperiência profissional, planos caóticos, falta de responsabilidade,									
"amor" => Vontade de curtir a vida, descontração, paquera, convivência afetuosa, encontro novo e revigorante, relacionamento aberto, experimentar,
"auto" => Tornar-se consciente da abundância quase ilimitada de suas possibilidades, fazer um brainstorming, Experimentando algo novo de uma forma descontraída e divertida
"alerta" => Se defrontar com circunstâncias caóticas e frivolidade exacerbada.																								),									
						1 => array ("num" => 1 ,
									"nome" => "1 - O Mago"),
"aspecGeral"  => Impulso inicial, atividade, poder de resolução, força de
vontade, concentração, vitalidade, maestria, auto-realização, capacidade de imposição,
destreza, perspicácia,
"financ"    => Tomar iniciativa, realizar tarefas com maestria, demonstrar
concentração e habilidade, ter êxito, passar em provas, negociar com agilidade e
esperteza, ludibriar os outros,
"amor" => Fascinação, força de atração, solucionar problemas com
competência, dar primeiro passo, aceitar a si e aos outros,
"auto" => Conscientização profunda, penetrar no consciente da
totalidade confiando em suas próprias capacidades e solucionando uma situação com
habilidade
						2 => array ("num" => 2,
									"nome" => "2 - A Papisa"),
"aspecGeral"  =>  Guia interior, sabedoria, intuição feminina, visões, fantasia,
mistério, disposição passiva, ser guiado,
"financ"  =>  Atividades terapêuticas, aptidão mediúnica e inspiradora,
segurança instintiva,
"amor"  =>  Atração profunda, união espiritual, compreensão, confiança
mútua, deixar-se encontrar, disposição passiva,
"auto"  =>  Compreensão da mensagem dos sonhos, profundidade,
vivenciar experiências espirituais e confiar mais na sua voz interior
						3 => array ("num" => 3,
									"nome" => "3 - A Impreratriz"),	
"aspecGerais" => Crescimento, potencial criativo. força intuitiva, inovações,
gravidez, nascimento, solicitude,
"financ" => Atividade criativa, boas chances de crescimento e
desenvolvimento, transformações profissionais, senso apurado para as tendências e
ciclos nos negócios, criação de novos conceitos, cuidar com carinho do que lhe foi
confiado,
"amor" => Desenvolvimento intenso, sensualidade benéfica. profunda
confiança, aumento da família, proteção e aconchego. perspectivas novas e boas,
reativação de um vínculo antigo,
"auto" => Ter uma visão do eterno ciclo de nascimento e morte, Confiar na capacidade de crescimento da vida e estar aberto a
mudanças,
"alerta" => Não se deixar levar por processos desenfreados e não desperdiçar
as oportunidades					
						4 => array ("num" => 4,
									"nome" => "4 - O Imperador"),
"aspecGerais" => Senso de realidade. disposição para assumir responsabilidades,
energia, segurança, continuidade, liderança, retidão de caráter, senso prático,
"financ"  => Estabilidade e estruturas claras, consolidação, realização de
planos, desenvolvimento de projetos com clareza, posição de liderança, disciplina e
perseverança, perfeccionismo
"amor" => Acordos claros, fundamento estável, estruturas no rela-
cionamento de eficácia já comprovada, relações ordenadas, realização de objetivos
comuns,
"auto"  => Valorizar tanto estruturas organizacionais como
também raciocínio lógico e realista, Realizar intenções e planos com perseverança,
"alerta" => O perigo de sufocar a vitalidade por causa de uma sobriedade e um perfeccionismo exagerados,

						5 => array ("num" => 5,
									"nome" => "5 - O Papa"),
"aspecGerais" => Confiança, busca da verdade, percepção do sentido das coisas,
força persuasiva, virtude, expansão da consciência, força da fé,
"financ" => Atividade que tenha um sentido, seguir uma vocação. ética
de trabalho elevada, ensino, aperfeiçoamento, confiança nas próprias capacidades,
"amor" => Confiança profunda, harmonia, declaração de amor,
princípios morais sólidos, reconhecer e estimar sentido e valor do relacionamento,
"auto" => Passar por uma experiência profunda que leve à
compreensão do sentido das coisas, desenvolver confiança em Deus, ampliar sua visão
de mundo, exame de consciência,	sair em busca de sentido e fazer algo significativo,
"alerta" => presunçao arrogante e uma mania dogmática de sempre andar com razão								
						6 => array ("num" => 6,
									"nome" => "6 - Os Amantes"),	
"aspecGerais" => União, amor, transações arrojadas, decisões tomadas com
coração, superação de diferenças, reunir detalhes,
"financ" => Sentir-se atraído por uma tarefa, juntar-se aos outros,
capacidade de assumir compromissos, fusões nos negócios, fechar contratos, boa
cooperação,
"amor" => Sorte no amor, casamento, reconciliação, encontrar parceiro
dos seus sonhos, desejo de relacionar-se, envolver-se realmente, seguir coração e tomar
uma decisão com clareza,
"auto" => Reconhecer a relação entre as coisas,	Juntar-se a outras pessoas e envolver-se em um projeto com todo
coração,
"alerta" => Perigo de acreditar que somente o inicio seja a meta, se saciar com o alcance da meta e sucumbir a preguiça de manter a continuidade até o fim						
						7 => array ("num" => 7,
									"nome" => "7 - O Carro"),
"aspecGerais" =>  Atmosfera de partida, desejo de aventura, iniciativa, firmeza de
propósito, vontade de impor-se,
"financ" => Independência, visar a novos projetos, ambição, disposição
de correr riscos, determinação, dar um salto na carreira, assumir novas funções,
"amor" => Novos relacionamentos, impulsos estimulantes, alinhar-se a
um objetivo comum, dar um grande salto adiante
"auto" =>  Sintonizar-se internamente com um objetivo, aproveitando imediatamente a oportunidade com determinação e
objetividade,
"alerta" => Acreditar que tudo se resume a partida
						8 => array ("num" => 8,
									"nome" => "8 - A Justiça"),
"aspecGerais" => Objetividade, clareza, equilíbrio, justiça, carma, compreensão
sóbria, ter responsabilidade por si mesmo, autocrítica,
"financ" => Arcar com as conseqüências, ter clareza sobre os seus
objetivos profissionais, boa capacidade de julgamento, contas equilibradas, contratos
justos, colher o que se semeou,
"amor" => Igualdade, acordos justos, relacionamento equilibrado,
parceria motivada por interesses comuns, relacionamento comercial,
"auto" => Reconhecer a nossa própria responsabilidade em tudo o
que vivenciamos, analisando algo com objetividade e sobriedade e reconhecer a sua
própria responsabilidade na situação,
"alerta" =>  tornar-se incapaz de agir, tanto quanto ponderar
						9 => array ("num" => 9,
									"nome" => "9 - O Eremita"),
"aspecGerais" => Concentração no que é essencial, orientação, clausura,
seriedade, recuo, examinar as coisas a fundo, experiência de vida,
"financ" => Projetos amadurecidos, apostar em objetivos que já foram
comprovados, reconhecer a sua verdadeira vocação, seguir o seu próprio caminho,
retirar-se da vida profissional, transmitir experiências.,
"amor" => Agir com seriedade, ter uma atitude madura, ser fiel a si
mesmo em vez de assumir compromissos duvidosos. Afastar-se temporariamente para
ponderar sobre o relacionamento ou tomar conscientemente a decisão de ficar solteiro,
"auto" => Conhecer-se e ser fiel a si mesmo, alcançar o amadurecimento levando-se mais a sério,
						10 => array ("num" => 10,
									"nome" => "10 - A Roda da Fortuna"),
"aspecGerais" => Transformações, mudanças, recomeço, sorte, acontecimentos
determinados pelo destino, missão na vida,
"financ" => Permita-se ser guiado pelo destino e ir de encontro a sua vocação,
"amor" => Desenvolvimento satisfatório no relacionamento, vínculo
cármico, encontrar o parceiro certo, encontros marcados pelo destino, oportunidade de
compreensão do padrão de relacionamento,
"auto" => Compreensão e aceitação de forças que são maiores que o ego humano, reconhecer o seu destino e concebê-lo como sua missão de vida,
"alerta" => Resignação fatalista ou superficial ao seu destino,
						11 => array ("num" => 11,
									"nome" => "11 - A Força"),
"aspecGerais" => Coragem, vitalidade, prazer em viver, intensidade, paixão,
destemor,
"financ" => Ânimo para o trabalho, engajamento, disposição para correr
riscos, capacidade produtiva, motivação intensa, criatividade,
"amor" => Relação intensa, ligação apaixonada, fascinação, excessos
sexuais e excessos em geral,
"auto" => Enfrentar a sua fera interior e domá-la carinhosamente, entregar-se apaixonadamente a uma pessoa, a uma tarefa ou a uma
experiência,
"alerta" => O perigo de seguir somente o princípio do prazer e passar por cima
dos valores alheios,
						12 => array ("num" => 12,
									"nome" => "12 - O Pendurado"),
"aspecGerais" => Desgastar-se entre dois pólos, dilema, prova de paciência,
impotência, beco sem saída, aprendizado involuntário, crise de vida, pausa forçada, ter
de fazer sacrifícios,
"financ" => Trabalhos cansativos, falta de sucesso, planos arrastados,
procura de trabalho que parece ser inútil, falta de perspectivas futuras, estar imobilizado
sem saber que fazer para prosseguir,
"amor" => Crise no relacionamento, esforços inúteis, mover-se em
círculos, estar preso a um dilema do qual apenas se pode sair por meio do sacrifício de
algo que até momento é indiscutível,
"auto" => Estar dividido entre contradições e reconhecer a saída
em uma mudança de direção,
"alerta" => Resignar-se, desistir de si mesmo ou persistir em algo obs-
tinadamente por puro hábito,
						13 => array ("num" => 13,
									"nome" => "13 - A Morte"),
"aspecGerais" => Despedida, fim natural, medo da vida, agarrar-se a algo
inutilmente, ter de desprender-se, renúncia,
"financ" => Término de uma atividade profissional, ter cumprido seu
trabalho, enterrar objetivos e projetos profissionais, aposentadoria,
"amor" => Fim de um relacionamento, inicio de uma mudança
fundamental no relacionamento, despedida, medo da perda, sentimentos mortos,
"auto" => Confrontar-se com a sua própria efemeridade, desprendendo-se, permitindo que algo chegue a seu fim,
"alerta" => Dar passos que não levam a futuro algum,
						14 => array ("num" => 14,
									"nome" => "14 - Arte"),
"aspecGerais" => Encontrar a medida certa, equilíbrio de forças, harmonia,
relaxamento, superação dos opostos, cura,
"financ" => Encerrar conflitos, cooperação agradável e produtiva,
mover-se para a frente, dissolver contradições e resistências, encontrar equilíbrio entre
trabalho e tempo livre,
"amor" => Harmonia verdadeira, relação tântrica, vínculo profundo,
conciliação bem-sucedida de interesses, convivência com direitos iguais, "a mistura
certa, 
"auto" => Dominar as tensões interiores e encontrar a saída para
um dilema aparentemente indissolúvel, dar melhor de si para superar contradições e diferenças,
"alerta" => Tomar cuidado para não subestimar a dificuldade do propósito e a
dimensão do problema,
						15 => array ("num" => 15,
									"nome" => "15 - O Diabo"),
"aspecGerais" => Sombra, impulsividade, excessos, cobiça, sede de poder,
tentação, forças inconscientes,
"financ" => Atividades proibidas, corrupção, exploração, intrigas,
manobras não transparentes, aproveitar-se de relações de dependência, negócios
obscuros, 
"amor" => Paixão profunda, pacto de amor, ligação cármica, en-
volvimento emocional, magia do amor, fascinação, concupiscência, luta pelo poder,
ódio, servidão, projeções, 
"auto" => Confrontar-se com a sua própria sombra, Iluminando a propria escuridão,
"alerta" => O poder destrutivo de impulsos naturais quando são reprimidos.
						16 => array ("num" => 16,
									"nome" => "16 - A Torre"), 
"aspecGerais" => Compreensão súbita, transformação, ruptura, libertação, golpe
do destino, 
"financ" => Demissão, falência, mudança radical, demonstração de força,
"amor" => Separação repentina, explosão de sentimentos, rompimento
de um vínculo limitante, tempestades purificadoras no relacionamento,
"auto" => Reconhecer suas próprias idéias fixas e romper com
noções ultrapassadas que se tornaram limitantes, Rompendo com amarras limitantes,
"alerta" => Riscos e perigos imprevisíveis, que trazem consigo uma
transformação radical,
						17 => array ("num" => 17,
									"nome" => "17 - A Estrela"),
"aspecGerais" => Boas perspectivas, esperança, confiança no futuro, harmonia,
orientação superior,
"financ" => Projetos muito promissores, mudança de profissão, seguir a
sua vocação, começo de uma carreira com grandes perspectivas,
"amor" => Ligação com boas perspectivas, planos para um futuro
comum, encontro que traz muitas esperanças, amor inspirador, 
"auto" => Profunda compreensão e confiança nas leis do Cosmo, confiando na favorabilidade do momento e olhar com esperança para
futuro,
"alerta" => Ocupar-se demais com futuro e, com isso, perder presente,
						18 => array ("num" => 18,
									"nome" => "18 - A Lua"),
"aspecGerais" => Medo do limiar que antecede um passo importante, incertezas,
pesadelos, nervosismo, lembranças ameaçadoras, pressentimentos sombrios,
"financ" => Fase critica, insegurança no emprego, medo de fracasso,
intrigas, fraude, medo de provas,
"amor" => Circunstâncias confusas, relacionamento não confiável ou
sinistro, ciúme corrosivo, incertezas, medo de dar um passo importante,
"auto" => Compreender significado orientador do medo, Ultrapassar limiar do medo e do desconhecido para alcançar terras novas que se
encontram por trás dele
"alerta" => Perder-se no escuro, esconder-se por trás de ilusões e estados de
embriaguez e fracassar ao tentar ultrapassar umbral,
						19 => array ("num" => 19,
									"nome" => "19 - O Sol"),
"aspecGerais" => Alegria, desfrutar lado ensolarado da vida, renascimento,
vontade de viver, êxito, desenvolvimento pessoal, direcionar-se para um ponto
culminante,
"financ" => Sucesso, superar as dificuldades, força de persuasão,
criatividade, alegria no trabalho, ótimas perspectivas para planos futuros, boa
cooperação, auto-realização,
"amor" => Desfrutar amor, reconciliação, recomeço, tempos felizes,
confiança profunda, mimar um ao outro generosamente,
"auto" => Encontrar alegria de viver no estado de
despreocupação original,
"alerta" => Superestimar ingênuamente a si mesmo, leviandade ou desgaste de
força,				
						20 => array ("num" => 20,
									"nome" => "20 - O Aeon"),
"aspecGerais" => Transmutação, recomeço, esperança, encontrar a si mesmo,
desenvolvimento espiritual,
"financ" => Passos direcionadores, reorganização, abrir-se para novos
métodos de trabalho, aperfeiçoamento, trazer um espírito novo para a vida profissional,
"amor" => Experimentar caminhos novos, impulsos estimulantes,
renovação de relacionamentos existentes, novo amor, crescimento,
"auto" => Deixar-se envolver pelo espírito de uma Nova Era, Abrir-se para um novo processo e levá-lo cuidadosamente adiante,
"alerta" => Subestimar as dificuldades iniciais,
						21 => array ("num" => 21,
									"nome" => "21 - O Mundo" ), 
"aspecGerais" => Conclusão, alegria de viver, estar no lugar certo, estar centrado
em si mesmo, realização, retorno ao lar, reconciliação,
"financ" => Alegria por realizar um trabalho, encontrar a sua vocação,
alcançar uma meta, ser criativo e ter entusiasmo,
"amor" => Amor incondicional e repleto de entusiasmo, reconciliar-se,
fusão e realização sexual, encontrar parceiro certo,
"auto" => Contemplar todo, no qual início e fim formam uma
unidade, Ocupar seu lugar e alegrar-se por sua vida,
"alerta" => Acreditar já ter chegado definitivamente ao seu objetivo,
						22 => array ("num" => 22,
									"nome" => "Ás de Paus" ),
"aspecGerais" => Recomeço repleto de esperanças, iniciativa, força de vontade,
determinação, idéia empolgante, impulso criativo, chance de desenvolvimento pessoal,
inflamar-se por alguma coisa,
"financ" => Desejo de realizar novos projetos, tornar-se autônomo,
vontade de arriscar-se, crescer com um desafio,
"amor" => Novo começo, revitalização, arder de amor, encontros
tempestuosos, sexualidade apaixonada
"auto" => Reconhecer que desenvolvimento pessoal requer
disposição para correr riscos, Tomar iniciativa e seguir decididamente em frente,
"alerta" => Impetuosidade, impaciência e arrogância
						23 => array ("num" => 23,
									"nome" => "2 de Paus" ),
"aspecGerais" => Combatividade, coragem, prazer em correr riscos, força de
vontade, inflamar-se por alguma coisa, impor-se espontaneamente, avanço de uma
forma forçada, falta de consideração,
"financ" => Espírito competitivo e rivalidade, desafio profissional,
disposição acentuada em assumir riscos, agir com engajamento,
"amor" => Desejos de conquista, atmosfera inflamada, jogo tenso entre
forças dominadoras e submissas, atitudes machistas
"auto" => Reconhecer os processos destrutivos como condição
necessária para chegar a uma fase produtiva, Arriscar, impor ou conquistar alguma coisa,
"alerta" => Valentia desconsiderada, ações destrutivas, demonstrações vazias
de poder,						
						24 => array ("num" => 24,
									"nome" => "3 de Paus" ),
"aspecGerais" => Base saudável, confiança, sucesso, espírito empreendedor,
vitalidade
"financ" => Contatos benéficos, vínculos comerciais promissores,
perspectivas favoráveis, avanço propício, apoio
"amor" => Vontade de curtir a vida, atar laços de ternura, vínculo
promissor, convivência excitante, harmonia,
"auto" =>  Tornar-se consciente de suas possibilidades e de-
senvolver autoconfiança, Olhar confiante para futuro e seguir novas metas
"alerta" =>  Ultrapassar impetuosamente os limites,
						25 => array ("num" => 25,
									"nome" => "4 de Paus" ),					
"aspecGerais" => Ordem e harmonia, dinâmica equilibrada, autoconfiança,
equilíbrio,
"financ" => Distribuição de lucros, ser pago por um trabalho realizado,
resultados visíveis, espírito de grupo dinâmico, eficiência.
"amor" => Ser complementado pelo parceiro, convivência harmoniosa,
solução de conflitos, encontros enriquecedores, realização sexual, dinâmica saudável na
relação
"auto" => Percepção da totalidade que engloba contradições e
opostos, Encontrar a medida certa entre condescendência e intransigência.
"alerta" => Abdicar até de discussões sadias em prol do estabelecimento de
uma harmonia,
						26 => array ("num" => 26,
									"nome" => "5 de Paus" ),
"aspecGerais" => Medir forças, ambição, impetuosidade, desafio, ultrapassar
limites,
"financ" => Concorrência, interesses comerciais diversos, disputar ou
defender cargos com persistência, engajamento ambicioso, conquistar "terras novas"
"amor" => Chegar a um consenso apesar das diferenças, entrar em atrito,
conciliar incompatibilidades
"auto" => Discutir pontos de vista controversos para encontrar a
melhor solução, Ousar algo novo e entrar em uma competição,
"alerta" => Possuir uma ambição desenfreada e tentar impressionar os outros
com arrogância,
						27 => array ("num" => 27,
									"nome" => "6 de Paus" ),
"aspecGerais" => Recompensa por serviços prestados, boas notícias, otimismo,
vitória
"financ" => Reconhecimento, sucesso encorajador, conclusão
bem-sucedida, bons negócios, impulso na carreira, aumento de salário, condecoração
"amor" => Superação de dificuldades, desabrochar de um relacio-
namento caloroso, perspectivas agradáveis
"auto" => Desenvolver otimismo na vida, Ter confiança de que tudo dará certo
"alerta" => Vangloriar-se do seu próprio sucesso com ar de menosprezo pelos
outros
						28 => array ("num" => 28,
									"nome" => "7 de Paus" ),
"aspecGerais" => Arriscar-se a seguir sozinho seu próprio caminho, superar-se,
lutar contra as adversidades, assumir um risco,
"financ" => Cargo ameaçado, engajamento intenso, realizar um propósito
com determinação e até sozinho, se for necessário,
"amor" => Salvar relacionamento de um fracasso por meio de uma
manobra ousada ou afastar uma ameaça; dar um novo impulso com decisão a um
relacionamento desgastado
"auto" => Lutar corajosamente por uma boa causa que esteja
enfraquecida ou impopular, Salvar com bravura uma causa aparentemente perdida,
"alerta" => Superestimar a si mesmo e gastar energia desnecessariamente,
						29 => array ("num" => 29,
									"nome" => "8 de Paus" ),
"aspecGerais" => Lampejo súbito, solução repentina de um problema,
inspirações, "estar ligado à tomada
"financ" => Inovação, idéias empolgantes, desenvolvimentos favoráveis,
novos vínculos comerciais, negócios com exterior, aperfeiçoamento, ações rápidas
"amor" => Amor à primeira vista, solução repentina de conflitos,
impulsos estimulantes, erotismo ardente,
"auto" => Abrir-se para novos horizontes por meio da superação
de velhos padrões de pensamento, Abrindo-se para novas percepções e agindo de imediato
"alerta" => Conclusões apressadas, dar muita ênfase ao intelecto,
extravagâncias intelectuais
						30 => array ("num" => 30,
									"nome" => "9 de Paus" ),
"aspecGerais" => Dispor de muitas possibilidades, estar cheio de energia,
alegrar-se por algo que está por vir, inspiração
"financ" => Adentrar solos novos e repletos de perspectivas, ter
confiança nas próprias capacidades, começar um projeto com coragem e entusiasmo
"amor" => Estabilidade e unissonância, impulsos estimulantes vindos da
alma, novo vínculo forte, intercâmbio intenso, entusiasmo
"auto" => Ser inspirado pelo inconsciente, Agir audaciosamente confiando na sua própria intuição.
"alerta" => Deixar-se levar por pensamentos megalômanos
						31 => array ("num" => 31,
									"nome" => "10 de Paus" ),
"aspecGerais" => Desenvolvimento bloqueado, problemas com autoridade,
frustração, medo da vida, camisa-de-força
"financ" => Forte pressão por causa do excesso de trabalho, estresse,
tormento, tentativa inútil de reconhecimento, medo do futuro profissional, dificuldades
de liderança
"amor" => Endurecimento, lutas pelo poder, lutar contra tabus e
proibições, sentimentos bloqueados, desesperança
"auto" => Somente será possível dominar as tensões interiores
por meio de um profundo esforço, Reconhecer as suas próprias limitações e agir com responsabilidade
"alerta" => Demonstrações de poder, intolerância e agressividade reprimida,
						32 => array ("num" => 32,
									"nome" => "Valete de Paus" ),
"aspecGerais" => Mulher jovem, dinâmica, impulsiva e cheia de vida, amazona,
impulso inicial, novo começo impetuoso, entusiasmo, espírito de aventura, impaciência,
"financ" =>  Idéias inovadoras que necessitam ser expressas, início de
uma carreira profissional
"amor" => Vontade de curtir a vida, paixão tempestuosa, desejo sexual,
paquera excitante, fogo de palha, "pular a cerca"
"auto" => Ficar em estado eufórico por causa de uma vontade
efervescente de viver, Viver de uma forma espontânea e cheia de ânimo
"alerta" => Comportamento teatral e humores variáveis e impulsivos,
						33 => array ("num" => 33,
									"nome" => "Cavaleiro de Paus" ),
"aspecGerais" => O homem empreendedor, conquistador, herói, corredor, a
pessoa colérica, novo impulso, iniciativa, entusiasmo,
"financ" => Estar à disposição para trabalhar, vontade de se arriscar,
coragem para tornar-se autônomo, espírito pioneiro, começar algo novo com todo
entusiasmo
"amor" => Paixões selvagens, erotismo exigente, aventura arriscada,
satisfação do desejo de uma forma espontânea, porém também infantil. Humores
imprevisíveis
"auto" => Ter uma postura otimista na vida e autoconfiança
elevada, Encarar a vida de uma maneira aberta e cheia de autoconfiança
"alerta" => Satisfação espontânea de desejos à custa de objetivos a longo
prazo
						34 => array ("num" => 34,
									"nome" => "Rainha de Paus" ),
"aspecGerais" => Autoconfiança sadia, espírito empreendedor, franqueza,
impulsividade, independência, auto-realização, mulher enérgica, carismática. generosa e
madura
"financ" => Realizar-se profissionalmente com consciência de suas
capacidades, ter competência para assumir grandes tarefas, promoção, tornar-se
autônomo, assumir posições de liderança
"amor" => Relação madura de igual para igual, leve submissão, tantra do
amor, calor humano
"auto" => Aprimorar uma paixão ardente e transformá-la em
aspiração espiritual, Expressar suas necessidades pessoais e responder por si mesmo
"alerta" => Egocentrismo e imposição de suas vontades a qualquer preço,
						35 => array ("num" => 35,
									"nome" => "Rei de Paus" ),
"aspecGerais" => Confiança em si mesmo, coragem, lutar por um ideal, forte
espírito de iniciativa, homem maduro com força de vontade e dinamismo, personalidade
que serve de exemplo para os outros, espírito de liderança
"financ" => Qualidades de liderança, motivação para novos projetos,
realizar trabalhos pioneiros, soberania, trabalhar com autoconfiança e independência.
"amor" => Convivência agitada de igual para igual entre dois parceiros,
generosidade e vontade de tomar parte em discussões construtivas. vínculo dinâmico
"auto" => Direcionar a sua força de vontade para objetivos
elevados, Agir com determinação. objetividade e coragem
"alerta" => Vaidade, intolerância e egoísmo
						36 => array ("num" => 36,
									"nome" => "Ás de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						37 => array ("num" => 37,
									"nome" => "2 de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						38 => array ("num" => 38,
									"nome" => "3 de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						39 => array ("num" => 39,
									"nome" => "4 de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						40 => array ("num" => 40,
									"nome" => "5 de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						41 => array ("num" => 41,
									"nome" => "6 de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						42 => array ("num" => 42,
									"nome" => "7 de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						43 => array ("num" => 43,
									"nome" => "8 de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						44 => array ("num" => 44,
									"nome" => "9 de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						45 => array ("num" => 45,
									"nome" => "10 de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						46 => array ("num" => 46,
									"nome" => "Valete de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						47 => array ("num" => 47,
								   "nome" => "Cavaleiro de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						48 => array ("num" => 48,
									"nome" => "Rainha de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						49 => array ("num" => 49,
									"nome" => "Rei de Copas" ),
"aspecGerais" => 
"financ" =>
"amor" =>
"auto" =>
"alerta" =>
						50 => array ("num" => 50,
									"nome" => "Ás de Espadas" ),
						51 => array ("num" => 51,
									"nome" => "2 de Espadas" ),
						52 => array ("num" => 52,
									"nome" => "3 de Espadas" ),
						53 => array ("num" => 53,
									"nome" => "4 de Espadas" ),
						54 => array ("num" => 54,
									"nome" => "5 de Espadas" ),
						55 => array ("num" => 55,
									"nome" => "6 de Espadas" ),
						56 => array ("num" => 56,
									"nome" => "7 de Espadas" ),
						57 => array ("num" => 57,
									"nome" => "8 de Espadas" ),
						58 => array ("num" => 58,
									"nome" => "9 de Espadas" ),
						59 => array ("num" => 59,
									"nome" => "10 de Espadas" ),
						60 => array ("num" => 60,
									"nome" => "Valete de Espadas" ),
						61 => array ("num" => 61,
									"nome" => "Cavaleiro de Espadas" ),
						62 => array ("num" => 62,
									"nome" => "Rainha de Espadas" ),
						63 => array ("num" => 63,
									"nome" => "Rei de Espadas" ),								
						64 => array ("num" => 64,
									"nome" => "Ás de Ouros" ),	
						65 => array ("num" => 65,
									"nome" => "2 de Ouros" ),	
						66 => array ("num" => 66,
									"nome" => "3 de Ouros" ),	
						67 => array ("num" => 67,
									"nome" => "4 de Ouros" ),	
						68 => array ("num" => 68,
									"nome" => "5 de Ouros" ),	
						69 => array ("num" => 69,
									"nome" => "6 de Ouros" ),	
						70 => array ("num" => 70,
									"nome" => "7 de Ouros" ),	
						71 => array ("num" => 71,
									"nome" => "8 de Ouros" ),	
						72 => array ("num" => 72,
									"nome" => "9 de Ouros" ),	
						73 => array ("num" => 73,
									"nome" => "10 de Ouros" ),	
						74 => array ("num" => 74,
									"nome" => "Valete de Ouros" ),	
						75 => array ("num" => 75,
									"nome" => "Cavaleiro de Ouros" ),	
						76 => array ("num" => 76,
									"nome" => "Rainha de Ouros" ),									
						77 => array ("num" => 77,
									"nome" => "Rei de Ouros" )
									);
								
			// rws 
			} elseif ($taro == 2) {
				
				$deckNomeCarta = array(
		
					0 => array ("num" => 0,
								"nome" => "0 - O Louco") , 
					1 => array ("num" => 1 ,
								"nome" => "1 - O Mago"),	
					2 => array ("num" => 2,
								"nome" => "2 - A Alta Sacerdotisa"),
					3 => array ("num" => 3,
								"nome" => "3 - A Impreratriz"),
					4 => array ("num" => 4,
								"nome" => "4 - O Imperador"),
					5 => array ("num" => 5,
								"nome" => "5 - O Hierofante"),
					6 => array ("num" => 6,
								"nome" => "6 - Os Amantes"),
					7 => array ("num" => 7,
								"nome" => "7 - O Carro"),
					8 => array ("num" => 8,
								"nome" => "8 - Força"),
					9 => array ("num" => 9,
								"nome" => "9 - O Eremita"),
					10 => array ("num" => 10,
								"nome" => "10 - A Roda da Fortuna"),
					11 => array ("num" => 11,
								"nome" => "11 - Justiça"),
					12 => array ("num" => 12,
								"nome" => "12 - O Pendurado"),
					13 => array ("num" => 13,
								"nome" => "13 - Morte"),
					14 => array ("num" => 14,
								"nome" => "14 - Temperança"),
					15 => array ("num" => 15,
								"nome" => "15 - O Diabo"),
					16 => array ("num" => 16,
								"nome" => "16 - A Torre"),
					17 => array ("num" => 17,
								"nome" => "17 - A Estrela"),
					18 => array ("num" => 18,
								"nome" => "18 - A Lua"),
					19 => array ("num" => 19,
								"nome" => "19 - O Sol"),					
					20 => array ("num" => 20,
								"nome" => "20 - Julgamento"),
					21 => array ("num" => 21,
								"nome" => "21 - O Mundo" ) ,
					22 => array ("num" => 22,
								"nome" => "Ás de Paus" ),
					23 => array ("num" => 23,
								"nome" => "2 de Paus" ),								
					24 => array ("num" => 24,
								"nome" => "3 de Paus" ),
					25 => array ("num" => 25,
								"nome" => "4 de Paus" ),								
					26 => array ("num" => 26,
								"nome" => "5 de Paus" ),
					27 => array ("num" => 27,
								"nome" => "6 de Paus" ),
					28 => array ("num" => 28,
								"nome" => "7 de Paus" ),
					29 => array ("num" => 29,
								"nome" => "8 de Paus" ),
					30 => array ("num" => 30,
								"nome" => "9 de Paus" ),
					31 => array ("num" => 31,
								"nome" => "10 de Paus" ),
					32 => array ("num" => 32,
								"nome" => "Pagem de Paus" ),
					33 => array ("num" => 33,
								"nome" => "Cavaleiro de Paus" ),
					34 => array ("num" => 34,
								"nome" => "Rainha de Paus" ),
					35 => array ("num" => 35,
								"nome" => "Rei de Paus" ),
					36 => array ("num" => 36,
								"nome" => "Ás de Copas" ),
					37 => array ("num" => 37,
								"nome" => "2 de Copas" ),
					38 => array ("num" => 38,
								"nome" => "3 de Copas" ),
					39 => array ("num" => 39,
								"nome" => "4 de Copas" ),
					40 => array ("num" => 40,
								"nome" => "5 de Copas" ),
					41 => array ("num" => 41,
								"nome" => "6 de Copas" ),
					42 => array ("num" => 42,
								"nome" => "7 de Copas" ),
					43 => array ("num" => 43,
								"nome" => "8 de Copas" ),
					44 => array ("num" => 44,
								"nome" => "9 de Copas" ),
					45 => array ("num" => 45,
								"nome" => "10 de Copas" ),
					46 => array ("num" => 46,
								"nome" => "Pagem de Copas" ),
					47 => array ("num" => 47,
								"nome" => "Cavaleiro de Copas" ),
					48 => array ("num" => 48,
								"nome" => "Rainha de Copas" ),
					49 => array ("num" => 49,
								"nome" => "Rei de Copas" ),
					50 => array ("num" => 50,
								"nome" => "Ás de Espadas" ),
					51 => array ("num" => 51,
								"nome" => "2 de Espadas" ),
					52 => array ("num" => 52,
								"nome" => "3 de Espadas" ),
					53 => array ("num" => 53,
								"nome" => "4 de Espadas" ),
					54 => array ("num" => 54,
								"nome" => "5 de Espadas" ),
					55 => array ("num" => 55,
								"nome" => "6 de Espadas" ),
					56 => array ("num" => 56,
								"nome" => "7 de Espadas" ),
					57 => array ("num" => 57,
								"nome" => "8 de Espadas" ),
					58 => array ("num" => 58,
								"nome" => "9 de Espadas" ),
					59 => array ("num" => 59,
								"nome" => "10 de Espadas" ),
					60 => array ("num" => 60,
								"nome" => "Pagem de Espadas" ),
					61 => array ("num" => 61,
								"nome" => "Cavaleiro de Espadas" ),
					62 => array ("num" => 62,
								"nome" => "Rainha de Espadas" ),
					63 => array ("num" => 63,
								"nome" => "Rei de Espadas" ),								
					64 => array ("num" => 64,
								"nome" => "Ás de Ouros" ),	
					65 => array ("num" => 65,
								"nome" => "2 de Ouros" ),	
					66 => array ("num" => 66,
								"nome" => "3 de Ouros" ),	
					67 => array ("num" => 67,
								"nome" => "4 de Ouros" ),	
					68 => array ("num" => 68,
								"nome" => "5 de Ouros" ),	
					69 => array ("num" => 69,
								"nome" => "6 de Ouros" ),	
					70 => array ("num" => 70,
								"nome" => "7 de Ouros" ),	
					71 => array ("num" => 71,
								"nome" => "8 de Ouros" ),	
					72 => array ("num" => 72,
								"nome" => "9 de Ouros" ),	
					73 => array ("num" => 73,
								"nome" => "10 de Ouros" ),	
					74 => array ("num" => 74,
								"nome" => "Pagem de Ouros" ),	
					75 => array ("num" => 75,
								"nome" => "Cavaleiro de Ouros" ),	
					76 => array ("num" => 76,
								"nome" => "Rainha de Ouros" ),									
					77 => array ("num" => 77,
								"nome" => "Rei de Ouros" )
								);
					
			} 
			
			//thoth 
			 elseif ($taro == 1) {
				
				$deckNomeCarta = array(
		
				0 => array ("num" => 0,
							"nome" => "0 - O Louco") , 
				1 => array ("num" => 1 ,
							"nome" => "1 - O Mago"),	
				2 => array ("num" => 2,
							"nome" => "2 - A Alta Sacerdotisa"),
				3 => array ("num" => 3,
							"nome" => "3 - A Impreratriz"),
				4 => array ("num" => 4,
							"nome" => "4 - O Imperador"),
				5 => array ("num" => 5,
							"nome" => "5 - O Hierofante"),
				6 => array ("num" => 6,
							"nome" => "6 - Os Amantes"),
				7 => array ("num" => 7,
							"nome" => "7 - A Carruagem"),
				8 => array ("num" => 8,
							"nome" => "8 - Ajustamento"),
				9 => array ("num" => 9,
							"nome" => "9 - O Eremita"),
				10 => array ("num" => 10,
							"nome" => "10 - Fortuna"),
				11 => array ("num" => 11,
							"nome" => "11 - Volúpia"),
				12 => array ("num" => 12,
							"nome" => "12 - O Pendurado"),
				13 => array ("num" => 13,
							"nome" => "13 - Morte"),
				14 => array ("num" => 14,
							"nome" => "14 - Arte"),
				15 => array ("num" => 15,
							"nome" => "15 - O Diabo"),
				16 => array ("num" => 16,
							"nome" => "16 - A Torre"),
				17 => array ("num" => 17,
							"nome" => "17 - A Estrela"),
				18 => array ("num" => 18,
							"nome" => "18 - A Lua"),
				19 => array ("num" => 19,
							"nome" => "19 - O Sol"),					
				20 => array ("num" => 20,
							"nome" => "20 - O Aeon"),
				21 => array ("num" => 21,
							"nome" => "21 - O Universo" ) ,
				22 => array ("num" => 22,
							"nome" => "Ás de Paus" ),
				23 => array ("num" => 23,
							"nome" => "2 de Paus" ),								
				24 => array ("num" => 24,
							"nome" => "3 de Paus" ),
				25 => array ("num" => 25,
							"nome" => "4 de Paus" ),								
				26 => array ("num" => 26,
							"nome" => "5 de Paus" ),
				27 => array ("num" => 27,
							"nome" => "6 de Paus" ),
				28 => array ("num" => 28,
							"nome" => "7 de Paus" ),
				29 => array ("num" => 29,
							"nome" => "8 de Paus" ),
				30 => array ("num" => 30,
							"nome" => "9 de Paus" ),
				31 => array ("num" => 31,
							"nome" => "10 de Paus" ),
				32 => array ("num" => 32,
							"nome" => "Princesa de Paus" ),
				33 => array ("num" => 33,
							"nome" => "Príncipe de Paus" ),
				34 => array ("num" => 34,
							"nome" => "Rainha de Paus" ),
				35 => array ("num" => 35,
							"nome" => "Cavaleiro de Paus" ),
				36 => array ("num" => 36,
							"nome" => "Ás de Copas" ),
				37 => array ("num" => 37,
							"nome" => "2 de Copas" ),
				38 => array ("num" => 38,
							"nome" => "3 de Copas" ),
				39 => array ("num" => 39,
							"nome" => "4 de Copas" ),
				40 => array ("num" => 40,
							"nome" => "5 de Copas" ),
				41 => array ("num" => 41,
							"nome" => "6 de Copas" ),
				42 => array ("num" => 42,
							"nome" => "7 de Copas" ),
				43 => array ("num" => 43,
							"nome" => "8 de Copas" ),
				44 => array ("num" => 44,
							"nome" => "9 de Copas" ),
				45 => array ("num" => 45,
							"nome" => "10 de Copas" ),
				46 => array ("num" => 46,
							"nome" => "Princesa de Copas" ),
				47 => array ("num" => 47,
							"nome" => "Principe de Copas" ),
				48 => array ("num" => 48,
							"nome" => "Rainha de Copas" ),
				49 => array ("num" => 49,
							"nome" => "Cavaleiro de Copas" ),
				50 => array ("num" => 50,
							"nome" => "Ás de Espadas" ),
				51 => array ("num" => 51,
							"nome" => "2 de Espadas" ),
				52 => array ("num" => 52,
							"nome" => "3 de Espadas" ),
				53 => array ("num" => 53,
							"nome" => "4 de Espadas" ),
				54 => array ("num" => 54,
							"nome" => "5 de Espadas" ),
				55 => array ("num" => 55,
							"nome" => "6 de Espadas" ),
				56 => array ("num" => 56,
							"nome" => "7 de Espadas" ),
				57 => array ("num" => 57,
							"nome" => "8 de Espadas" ),
				58 => array ("num" => 58,
							"nome" => "9 de Espadas" ),
				59 => array ("num" => 59,
							"nome" => "10 de Espadas" ),
				60 => array ("num" => 60,
							"nome" => "Princesa de Espadas" ),
				61 => array ("num" => 61,
							"nome" => "Príncipe de Espadas" ),
				62 => array ("num" => 62,
							"nome" => "Rainha de Espadas" ),
				63 => array ("num" => 63,
							"nome" => "Cavaleiro de Espadas" ),								
				64 => array ("num" => 64,
							"nome" => "Ás de Ouros" ),	
				65 => array ("num" => 65,
							"nome" => "2 de Ouros" ),	
				66 => array ("num" => 66,
							"nome" => "3 de Ouros" ),	
				67 => array ("num" => 67,
							"nome" => "4 de Ouros" ),	
				68 => array ("num" => 68,
							"nome" => "5 de Ouros" ),	
				69 => array ("num" => 69,
							"nome" => "6 de Ouros" ),	
				70 => array ("num" => 70,
							"nome" => "7 de Ouros" ),	
				71 => array ("num" => 71,
							"nome" => "8 de Ouros" ),	
				72 => array ("num" => 72,
							"nome" => "9 de Ouros" ),	
				73 => array ("num" => 73,
							"nome" => "10 de Ouros" ),	
				74 => array ("num" => 74,
							"nome" => "Princesa de Ouros" ),	
				75 => array ("num" => 75,
							"nome" => "Príncipe de Ouros" ),	
				76 => array ("num" => 76,
							"nome" => "Rainha de Ouros" ),									
				77 => array ("num" => 77,
							"nome" => "Cavaleiro de Ouros" )
							);
				
			} 		
		
		if ($tipo == 1) {
		
			shuffle($deckNomeCarta);
			
		} elseif ($tipo == 2) {
		
			for ($i = 0; $i <=21;$i++){
				$deckNomeCartaNovo[$i] = $deckNomeCarta[$i];
			}
			
				$deckNomeCarta = $deckNomeCartaNovo;
				
				shuffle($deckNomeCarta);
		
		} elseif ($tipo == 3) {
		
			for ($i = 0; $i <=21;$i++){
				$deckNomeCartaNovoMaiores[$i] = $deckNomeCarta[$i];
			}
			for ($i = 22; $i <=77;$i++){
				$deckNomeCartaNovoMenores[$i] = $deckNomeCarta[$i];
			}
			
				shuffle($deckNomeCartaNovoMaiores);
				shuffle($deckNomeCartaNovoMenores);
				
				$deckNomeCarta = array_merge($deckNomeCartaNovoMaiores, $deckNomeCartaNovoMenores);
				
		}
		
		
		return 	$deckNomeCarta;	
	
}

function montaMaioresImagem ($taro){
	
		if ($taro == 3){
			
			$caminhoImagem = "marselha_pequenas";
		
		} elseif ($taro == 2) {
			
				$caminhoImagem = "rws_pequenas";
				
		} elseif ($taro == 1) {

				$caminhoImagem = "thoth_pequenas";
		}
			
		$cartasMaioresImagem = array(
			0 => "img/".$caminhoImagem. "/0.jpg", 
			1 => "img/".$caminhoImagem. "/1.jpg",
			2 => "img/".$caminhoImagem. "/2.jpg",
			3 => "img/".$caminhoImagem. "/3.jpg",
			4 => "img/".$caminhoImagem. "/4.jpg",
			5 => "img/".$caminhoImagem. "/5.jpg",
			6 => "img/".$caminhoImagem. "/6.jpg",
			7 => "img/".$caminhoImagem. "/7.jpg",
			8 => "img/".$caminhoImagem. "/8.jpg",
			9 => "img/".$caminhoImagem. "/9.jpg",
			10 => "img/".$caminhoImagem. "/10.jpg",
			11 => "img/".$caminhoImagem. "/11.jpg",
			12 => "img/".$caminhoImagem. "/12.jpg",
			13 => "img/".$caminhoImagem. "/13.jpg",
			14 => "img/".$caminhoImagem. "/14.jpg",
			15 => "img/".$caminhoImagem. "/15.jpg",
			16 => "img/".$caminhoImagem. "/16.jpg",
			17 => "img/".$caminhoImagem. "/17.jpg",
			18 => "img/".$caminhoImagem. "/18.jpg",
			19 => "img/".$caminhoImagem. "/19.jpg",
			20 => "img/".$caminhoImagem. "/20.jpg",
			21 => "img/".$caminhoImagem. "/21.jpg",
			22 => "img/".$caminhoImagem. "/22.jpg",
			23 => "img/".$caminhoImagem. "/23.jpg",
			24 => "img/".$caminhoImagem. "/24.jpg",
			25 => "img/".$caminhoImagem. "/25.jpg",
			26 => "img/".$caminhoImagem. "/26.jpg",
			27 => "img/".$caminhoImagem. "/27.jpg",
			28 => "img/".$caminhoImagem. "/28.jpg",
			29 => "img/".$caminhoImagem. "/29.jpg",
			30 => "img/".$caminhoImagem. "/30.jpg",
			31 => "img/".$caminhoImagem. "/31.jpg",
			32 => "img/".$caminhoImagem. "/32.jpg",
			33 => "img/".$caminhoImagem. "/33.jpg",
			34 => "img/".$caminhoImagem. "/34.jpg",
			35 => "img/".$caminhoImagem. "/35.jpg",
			36 => "img/".$caminhoImagem. "/36.jpg",
			37 => "img/".$caminhoImagem. "/37.jpg",
			38 => "img/".$caminhoImagem. "/38.jpg",
			39 => "img/".$caminhoImagem. "/39.jpg",
			40 => "img/".$caminhoImagem. "/40.jpg",
			41 => "img/".$caminhoImagem. "/41.jpg",
			42 => "img/".$caminhoImagem. "/42.jpg",
			43 => "img/".$caminhoImagem. "/43.jpg",
			44 => "img/".$caminhoImagem. "/44.jpg",
			45 => "img/".$caminhoImagem. "/45.jpg",
			46 => "img/".$caminhoImagem. "/46.jpg",
			47 => "img/".$caminhoImagem. "/47.jpg",
			48 => "img/".$caminhoImagem. "/48.jpg",
			49 => "img/".$caminhoImagem. "/49.jpg",
			50 => "img/".$caminhoImagem. "/50.jpg",
			51 => "img/".$caminhoImagem. "/51.jpg",
			52 => "img/".$caminhoImagem. "/52.jpg",
			53 => "img/".$caminhoImagem. "/53.jpg",
			54 => "img/".$caminhoImagem. "/54.jpg",
			55 => "img/".$caminhoImagem. "/55.jpg",
			56 => "img/".$caminhoImagem. "/56.jpg",
			57 => "img/".$caminhoImagem. "/57.jpg",
			58 => "img/".$caminhoImagem. "/58.jpg",
			59 => "img/".$caminhoImagem. "/59.jpg",
			60 => "img/".$caminhoImagem. "/60.jpg",
			61 => "img/".$caminhoImagem. "/61.jpg",
			62 => "img/".$caminhoImagem. "/62.jpg",
			63 => "img/".$caminhoImagem. "/63.jpg",
			64 => "img/".$caminhoImagem. "/64.jpg",
			65 => "img/".$caminhoImagem. "/65.jpg",
			66 => "img/".$caminhoImagem. "/66.jpg",
			67 => "img/".$caminhoImagem. "/67.jpg",
			68 => "img/".$caminhoImagem. "/68.jpg",
			69 => "img/".$caminhoImagem. "/69.jpg",
			70 => "img/".$caminhoImagem. "/70.jpg",
			71 => "img/".$caminhoImagem. "/71.jpg",
			72 => "img/".$caminhoImagem. "/72.jpg",
			73 => "img/".$caminhoImagem. "/73.jpg",
			74 => "img/".$caminhoImagem. "/74.jpg",
			75 => "img/".$caminhoImagem. "/75.jpg",
			76 => "img/".$caminhoImagem. "/76.jpg",
			77 => "img/".$caminhoImagem. "/77.jpg"
			
			);
		
	
	return	$cartasMaioresImagem;
	
}






?>
