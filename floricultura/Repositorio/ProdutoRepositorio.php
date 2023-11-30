<?php
class ProdutoRepositorio
{
    private $conn; // Sua conexão com o banco de dados
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function cadastrar(Produto $produto)
    {
        $sql = "INSERT INTO produtos (imagem, 
    nome, preco) VALUES (?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssd", $produto->getImagem(), $produto->getNome(), $produto->getPreco());
        $stmt->execute();
        $stmt->close();
    }
    

    public function listarFlores()
    {
        $sql = "SELECT * FROM produtos ORDER BY preco";
        $result = $this->conn->query($sql);

        $produtos = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $produto = new Produto(
                    $row['imagem'],
                    $row['nome'],
                    $row['preco']
                );
                $produtos[] = $produto;
            }
        }

        return $produtos;
    }
    public function buscarTodos()
    {
        $sql = "SELECT * FROM produtos ORDER BY tipo, preco";
        $result = $this->conn->query($sql);

        $produtos = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $produto = new Produto(
                    $row['imagem'],
                    $row['nome'],
                    $row['preço']
                    
                );
                $produtos[] = $produto;
            }
        }

        return $produtos;
    }
}