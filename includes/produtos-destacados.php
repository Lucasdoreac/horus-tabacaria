<?php
// Produtos destacados - simulação de dados
$produtos = [
    [
        'nome' => 'Narguilé Horus Exclusive',
        'descricao' => 'Narguilé premium exclusivo com design inspirado na mitologia egípcia.',
        'imagem' => 'assets/img/produtos/narguile1.jpg',
        'preco' => 'R$ 350,00'
    ],
    [
        'nome' => 'Essência Special Mix',
        'descricao' => 'Mix exclusivo de essências com sabores exóticos e duradouros.',
        'imagem' => 'assets/img/produtos/essencia1.jpg',
        'preco' => 'R$ 45,00'
    ],
    [
        'nome' => 'Kit Iniciante Horus',
        'descricao' => 'Kit completo para iniciantes com narguilé, essência e acessórios.',
        'imagem' => 'assets/img/produtos/kit1.jpg',
        'preco' => 'R$ 280,00'
    ],
    [
        'nome' => 'Carvão Natural Premium',
        'descricao' => 'Carvão 100% natural para uma experiência sem químicos adicionais.',
        'imagem' => 'assets/img/produtos/carvao1.jpg',
        'preco' => 'R$ 25,00'
    ]
];

// Exibir produtos
foreach($produtos as $produto): 
?>
    <div class="product-card">
        <div class="product-image">
            <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
        </div>
        <div class="product-info">
            <h3><?php echo $produto['nome']; ?></h3>
            <p><?php echo $produto['descricao']; ?></p>
            <span class="price"><?php echo $produto['preco']; ?></span>
            <a href="#contato" class="btn-product">Consultar</a>
        </div>
    </div>
<?php endforeach; ?>
