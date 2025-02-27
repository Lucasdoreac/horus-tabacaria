// Horus Tabacaria - Scripts principais

// Esperar que o DOM esteja carregado
document.addEventListener('DOMContentLoaded', function() {
    // Elementos do DOM
    const header = document.getElementById('header');
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeMenu = document.querySelector('.close-menu');
    const ageVerificationModal = document.getElementById('age-verification');
    const confirmAgeBtn = document.getElementById('confirm-age');
    const denyAgeBtn = document.getElementById('deny-age');
    
    // Verificar se o usuário já confirmou a idade
    if (!sessionStorage.getItem('age-verified')) {
        ageVerificationModal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }
    
    // Função para efeito de scroll no header
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
    
    // Toggle do menu mobile
    mobileMenuToggle.addEventListener('click', function() {
        mobileMenu.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
    
    // Fechar menu mobile
    closeMenu.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        document.body.style.overflow = 'auto';
    });
    
    // Clicar fora do menu para fechar
    document.addEventListener('click', function(event) {
        if (mobileMenu.classList.contains('active') && 
            !mobileMenu.contains(event.target) && 
            !mobileMenuToggle.contains(event.target)) {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });
    
    // Links do menu mobile fecham o menu
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
    });
    
    // Verificação de idade - Confirmação
    confirmAgeBtn.addEventListener('click', function() {
        sessionStorage.setItem('age-verified', 'true');
        ageVerificationModal.style.display = 'none';
        document.body.style.overflow = 'auto';
    });
    
    // Verificação de idade - Negação
    denyAgeBtn.addEventListener('click', function() {
        window.location.href = 'https://www.google.com';
    });
    
    // Animação de scroll suave para links de âncora
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            if (this.getAttribute('href') !== '#') {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // Notificações de sucesso/erro para o formulário
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    
    if (status === 'success') {
        showNotification('Mensagem enviada com sucesso! Entraremos em contato em breve.', 'success');
    } else if (status === 'error') {
        const msg = urlParams.get('msg') || 'Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente.';
        showNotification(msg, 'error');
    }
    
    // Função para exibir notificações
    function showNotification(message, type) {
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        notification.innerHTML = `
            <div class="notification-content">
                <p>${message}</p>
                <span class="close-notification">&times;</span>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        // Exibir a notificação
        setTimeout(() => {
            notification.classList.add('show');
        }, 100);
        
        // Fechar a notificação
        const closeBtn = notification.querySelector('.close-notification');
        closeBtn.addEventListener('click', () => {
            notification.classList.remove('show');
            setTimeout(() => {
                notification.remove();
            }, 300);
        });
        
        // Fechar automaticamente após 5 segundos
        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 5000);
    }
    
    // Adicionar estilos CSS para notificações
    const notificationStyles = document.createElement('style');
    notificationStyles.textContent = `
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            max-width: 350px;
            transform: translateX(400px);
            transition: transform 0.3s ease;
            z-index: 9999;
        }
        
        .notification.show {
            transform: translateX(0);
        }
        
        .notification-content {
            padding: 15px 20px;
            border-radius: 5px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .notification.success .notification-content {
            background: #d4edda;
            color: #155724;
        }
        
        .notification.error .notification-content {
            background: #f8d7da;
            color: #721c24;
        }
        
        .close-notification {
            margin-left: 10px;
            cursor: pointer;
            font-size: 1.2rem;
            font-weight: bold;
        }
    `;
    
    document.head.appendChild(notificationStyles);
});
