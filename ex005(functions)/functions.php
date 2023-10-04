<?php 
    # Função com parâmetros definidos
    function sum(int $a, int $b) {
        return $a + $b;
    }

    # Função com múltiplos parâmetros
    function sumMult() {
        $v = func_get_args();
        $n = func_num_args();
        $s = 0;
        for($i = 0; $i < $n; $i++) {
            $s += $v[$i];
        }
        return $s;
    }

    # Função com parâmetros por referência (passa o ponteiro para a variável, portanto alterações na função alteram a variável original)
    function add(&$a) {
        $a += 10;
        return $a;
    }

?>