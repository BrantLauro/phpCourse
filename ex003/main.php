<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dollar Converter</title>
    <link rel="stylesheet" href="..\style.css">
</head>
<body>
    <br>
    <section>
        <?php $reais = ""?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Dollar Converter!</h1>
            <label for="reais">R$:</label>
            <input type="number" name="reais" step="0.01">
            <input type="submit" value="Submit">
        </form>
        
        <?php
            $reais = $_POST["reais"] ?? "";
            if($reais != ""){
                date_default_timezone_set('America/Sao_Paulo');
                $ini = date("m-d-Y", strtotime("-7 Days"));
                $end = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'. $ini .'%27&@dataFinalCotacao=%27'. $end .'%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
                $data = json_decode(file_get_contents($url), true);
                $price = $data["value"][0]["cotacaoCompra"];
                $dollar = $reais / $price;
                echo "<p><strong>R$". number_format($reais, 2) ."</strong> in Reais are <strong>$". number_format($dollar,2) ."</strong> in Dollars.<br>With a price of <strong>R$". number_format($price, 2). "</strong></p>";
            }
        ?>
    </section>
    <footer>
        <p>&copy; LauroBrant</p>
    </footer>
</body>
</html>