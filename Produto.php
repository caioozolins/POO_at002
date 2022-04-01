<?php
class Produto{
    private $descricao;
    private $estoque;
    private $preco;
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getEstoque(){
        return $this->estoque;
    }
    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function aumentarestoque($valor){
        //Verificar se é número
        if (!is_numeric($valor)){
            echo "não é mumérico<br>";
        //Verificar se o valor esta entre 0 e 1000
        }elseif ($valor > 0 && $valor <1000){
        $this->estoque += $valor;    
        //Verificar se o valor é maior que 1000
        }elseif ($valor > 1000){
            echo "valor muito alto<br>";
        }else{
            echo "valor inválido<br>";
        }
    }
    public function diminuirestoque($valor){
        //Verificar se é número
        if (!is_numeric($valor)){
            echo "não é mumérico<br>";
        //Verificar se o valor esta entre 0 e 1000
        }elseif ($valor > 0 && $valor <1000){
        $this->estoque -= $valor;
        //Verificar se o valor é maior que 1000
        }elseif ($valor > 1000){
            echo "valor muito alto<br>";
        }else{
            echo "valor inválido<br>";
        }
    }
    public function reajustarpreco($percentual){
        //Verificar se é número
        if (!is_numeric($percentual)){
            echo "não é mumérico<br>";
        //Verificar se o valor esta entre 20 e 80
        }elseif ($percentual > 20 && $percentual < 80) {
            $this->preco += ($percentual*100)/$this->preco;   
        //Verificar se o valor é maior que 80
        }elseif ($percentual > 80){
            echo "valor muito alto<br>";
        }else{
            echo "valor muito baixo<br>";
        }
    }
}
$produto = new produto;
$produto -> setDescricao('produto do Caio');
$produto -> setEstoque(20);
$produto -> setPreco(100);
echo $produto -> getDescricao();
echo $produto -> getEstoque();
echo $produto -> getPreco();