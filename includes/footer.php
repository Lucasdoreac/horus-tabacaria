    </main>
    
    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="assets/img/logo.png" alt="Horus Tabacaria Logo">
                    <p>A experiência premium em tabacaria</p>
                </div>
                <div class="footer-links">
                    <h3>Links Rápidos</h3>
                    <ul>
                        <li><a href="index.php">Início</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#produtos">Produtos</a></li>
                        <li><a href="#galeria">Galeria</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h3>Redes Sociais</h3>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/horustabacaria/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> Horus Tabacaria. Todos os direitos reservados.</p>
                <p class="age-warning">Proibida a venda para menores de 18 anos.</p>
            </div>
        </div>
    </footer>
    
    <!-- Age Verification Modal -->
    <div id="age-verification" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Verificação de Idade</h2>
            </div>
            <div class="modal-body">
                <p>Este site contém produtos destinados apenas para maiores de 18 anos.</p>
                <p>Você confirma que tem 18 anos ou mais?</p>
                <div class="modal-buttons">
                    <button id="confirm-age" class="btn-primary">Sim, tenho 18 anos ou mais</button>
                    <button id="deny-age" class="btn-secondary">Não, sou menor de 18 anos</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>
