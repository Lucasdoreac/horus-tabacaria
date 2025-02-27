<?php
// Página inicial da Horus Tabacaria
include_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>HORUS TABACARIA</h1>
            <p class="tagline">A experiência premium em tabacaria</p>
            <a href="#produtos" class="btn-primary">Ver Produtos</a>
        </div>
    </div>
</section>

<!-- Sobre Nós -->
<section id="sobre" class="about">
    <div class="container">
        <h2>Sobre a Horus</h2>
        <div class="about-content">
            <div class="about-text">
                <p>A Horus Tabacaria é especializada em oferecer a melhor experiência em produtos para tabacarias e aficionados. Nosso nome é inspirado no deus egípcio Horus, símbolo de proteção e poder, representando nossa dedicação à qualidade e excelência.</p>
                <p>Com uma seleção cuidadosa dos melhores produtos nacionais e importados, proporcionamos momentos únicos aos nossos clientes através da nossa variedade de essências, narguilés, acessórios e muito mais.</p>
            </div>
        </div>
    </div>
</section>

<!-- Produtos Destacados -->
<section id="produtos" class="products">
    <div class="container">
        <h2>Produtos Destacados</h2>
        <div class="product-grid">
            <?php include 'includes/produtos-destacados.php'; ?>
        </div>
        <div class="cta-container">
            <a href="#contato" class="btn-secondary">Entre em Contato</a>
        </div>
    </div>
</section>

<!-- Galeria de Fotos -->
<section id="galeria" class="gallery">
    <div class="container">
        <h2>Nossa Galeria</h2>
        <div class="gallery-grid">
            <?php include 'includes/galeria.php'; ?>
        </div>
    </div>
</section>

<!-- Contato -->
<section id="contato" class="contact">
    <div class="container">
        <h2>Entre em Contato</h2>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Informações de Contato</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> <span>Endereço: Consulte nosso Instagram</span></li>
                    <li><i class="fas fa-phone"></i> <span>Telefone: Consulte nosso Instagram</span></li>
                    <li><i class="fab fa-instagram"></i> <span>Instagram: <a href="https://www.instagram.com/horustabacaria/" target="_blank">@horustabacaria</a></span></li>
                </ul>
            </div>
            <div class="contact-form">
                <h3>Envie uma Mensagem</h3>
                <form action="includes/process-form.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nome" placeholder="Seu nome" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Seu e-mail" required>
                    </div>
                    <div class="form-group">
                        <textarea name="mensagem" placeholder="Sua mensagem" required></textarea>
                    </div>
                    <button type="submit" class="btn-primary">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include_once 'includes/footer.php'; ?>
