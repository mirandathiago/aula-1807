<?php
    declare(strict_types=1);

   
   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Carteira</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
</head>
<body>
    <header  class="topo">
        <div class="container container__topo">
             <h1><a href="index.php"><i class="ri-wallet-fill"></i> MinhaCarteira</a></h1>
 
             <nav class="menu">
                 <ul>
                 <li><a href="cadastrar.php"><i class="ri-add-circle-fill"></i> Cadastrar Transação</a></li>                                
                 </ul>
             </nav>
         </div> 
     </header>
    <main class="container">
        <div class="boxes">     
        <div class="box receitas">
            <h2>Receitas  <i class="ri-arrow-up-circle-fill"></i></h2>
            <p>R$ 2.500,00</p>
        </div>
        <div class="box despesas">
            <h2>Despesas <i class="ri-arrow-down-circle-fill"></i></h2>
            <p> - R$ 1.500,00</p>
        </div>
        <div class="box total">
            <h2>Total <i class="ri-money-dollar-circle-line"></i></h2>
            <p> R$ 1.000,00</p>
        </div>
    </div>  
        <div class="transacoes">
            <header class="header__transacoes">
            <h2> <i class="ri-swap-line"></i> Todas as Transações </h2>
            <form method="get" action="index.php">
                <select name="mes">
                    <option></option>
                    <option value="1">Janeiro</option>
                    <option value="2">Fevereiro</option>
                    <option value="3">Março</option>
                    <option value="4">Abril</option>
                    <option value="5">Maio</option>
                    <option value="6">Junho</option>
                    <option value="7">Julho</option>
                    <option value="8">Agosto</option>
                    <option value="9">Setembro</option>
                    <option value="10">Outubro</option>
                    <option value="11">Novembro</option>
                    <option value="12">Dezembro</option>
                </select>  
            </form>
        </header>
            <table>
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Categoria</th>                    
                    <th>Tipo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td class="despesa"></td>
                    <td></td>
                    <td class="despesa"> 
                        <i class="ri-arrow-down-circle-fill"></i> 
                    </td>
                    <td class="acao"><a href="acao_excluir.php"><i class="ri-delete-bin-line"></i></a></td>
                </tr>
               
            </tbody>      
            </table>
        </div>
    </main>
    
</body>
</html>