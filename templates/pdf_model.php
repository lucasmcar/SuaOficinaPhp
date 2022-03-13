<?php
require '../vendor/autoload.php';

use core\connection\Connection;
use Picqer\Barcode\BarcodeGeneratorHTML;
use Picqer\Barcode\BarcodeGeneratorPNG;
use core\system\Random;

$random = Random::generateRandomCode();
/**
 * Todas as informações aqui mostradas, deveram vir do banco de dados
 * Quando o administrador da oficina cadastrar um novo orçamento, os dados todos virão para essa tela
 * Quando o administrador cadastrar um orçamento, irá gerar um código de barras e um OS, ambos serão iguais
 */
?>

<html>
    <head>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            padding: 0;
            margin: 0;
            list-style: none;
        }
        .pdf-container{
            box-sizing: border-box;
            border: 1px solid red;
            height: 100vh;
            padding: 6px;
        }

        .pdf-grid-header{
            display: grid;
            grid-template-columns: .5fr 1fr;
        }
        .pdf-grid-body{
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .logo{
            border: 1px solid blue;
            height: auto;;
        }
        .info{
            border: 1px solid green;
            height: auto;;
        }
        .info-veiculo{
            border: 1px solid green;
            height: auto;;
        }
        .info-cliente{
            border: 1px solid green;
            height: auto;;
        }
    </style>
    </head>
    <body>
        <div class="pdf-container">
            <div class="pdf-grid-header">
                <div class="logo">Logoaqui</div>
                <div class="info">Aqui info Endereço da oficina os</div>
            </div>
            <div class="pdf-grid-body">
                <div class="info-cliente">
                    <ul>
                        <li>Nome: Fulano de Tal</li>
                        <li>Endereço: Rua das camelias</li>
                        <li>Telefone: 51-32472926</li>
                        <li>Email: teste@teste.com</li>
                    </ul>
                </div>
                <div class="info-veiculo">
                <ul>
                        <li>Modelo: Chevette</li>
                        <li>Cor: Azul</li>
                        <li>Ano: 1985</li>
                        <li>Portas: 4</li>
                        <li>Marca: Chevrolet</li>
                    </ul>
                </div>
                <div>
                    OS <?php echo  $random;?>
                </div>
            </div>
            <?php
            

            
            $generator = new BarcodeGeneratorHTML();
            echo $generator->getBarcode($random, $generator::TYPE_CODE_128, 2, 50); 
            echo '<p style="margin-left: 50px">'.$random.'</p>';
            // Mostra o resultado
        ?>
        </div>
        
    </body>
</html>



