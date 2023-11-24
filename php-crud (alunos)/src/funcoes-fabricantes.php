<?php
    // Incluir neste ponto o arquivo conecta.php 
    require_once "conecta.php";
    
    // Programar a função lerFabricantes neste ponto
    function lerFabricantes(PDO $conexao):array {
        $sql = "SELECT id, nome FROM fabricantes";
        try {
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die ("Erro: " . $erro->getMessage());
        }
        return $resultado;
    }
    
    // Inserir um fabricante (PDO - PHP Database Object)
    // Obs void indica que a função não tem retorno "return"

    // Programar a função inserirFabricante neste ponto
    function inserirFabricante(PDO $conexao, string $nome):void {
        $sql = "INSERT INTO fabricante (nome) VALUES (:nome)"; 
        try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':nome', $nome, PDO::PARAM_STR);
        $consulta->execute();
        } catch (Exception $erro){
            die ("Erro: " . $erro->getMessage());
        }
    }
    
    // Programar a função lerUmFabricante neste ponto
    function lerUmFabricante(PDO $conexao, int $id):array {
        $sql = "SELECT id, nome FROM fabricante WHERE id = :id";
        try {
            $consulta = $conexao->prepare($sql);
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
            } catch (Exception $erro) {
                die ("Erro: " . $erro->getMessage());
                }   
            return $resultado;
    }
    
    // Programar a função atualizarFabricante neste ponto
    function atualizarFabricante(PDO $conexao, int $id, string $nome):void {
        $sql = "UPDATE fabricante SET nome = :nome WHERE id = :id";
        try {
            $consulta = $conexao->prepare($sql);
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);
            $consulta->bindParam(':nome', $nome, PDO::PARAM_STR);
            $consulta->execute();
            } catch (Exception $erro) {
                die ("Erro: " . $erro->getMessage());
                }
    }
    
    // Programar a função excluirFabricante neste ponto
    function excluirFabricante(PDO $conexao, int $id):void {
        $sql = "DELETE FROM fabricante WHERE id = :id";
        try {
            $consulta = $conexao->prepare($sql);
            $consulta->bindParam(':id', $id, PDO::PARAM_INT);
            $consulta->execute();
            } catch (Exception $erro) {
                die ("Erro: " . $erro->getMessage());
                }
    }
    