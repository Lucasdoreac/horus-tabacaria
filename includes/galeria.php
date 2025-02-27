<?php
// Simulação de dados da galeria
$galeria = [
    [
        'imagem' => 'assets/img/galeria/img1.jpg',
        'titulo' => 'Narguilé Personalizado'
    ],
    [
        'imagem' => 'assets/img/galeria/img2.jpg',
        'titulo' => 'Essências Exclusivas'
    ],
    [
        'imagem' => 'assets/img/galeria/img3.jpg',
        'titulo' => 'Nossa Loja'
    ],
    [
        'imagem' => 'assets/img/galeria/img4.jpg',
        'titulo' => 'Eventos Horus'
    ],
    [
        'imagem' => 'assets/img/galeria/img5.jpg',
        'titulo' => 'Coleção Premium'
    ],
    [
        'imagem' => 'assets/img/galeria/img6.jpg',
        'titulo' => 'Acessórios Exclusivos'
    ]
];

// Exibir imagens da galeria
foreach($galeria as $item): 
?>
    <div class="gallery-item">
        <img src="<?php echo $item['imagem']; ?>" alt="<?php echo $item['titulo']; ?>">
        <div class="gallery-overlay">
            <h3><?php echo $item['titulo']; ?></h3>
        </div>
    </div>
<?php endforeach; ?>
