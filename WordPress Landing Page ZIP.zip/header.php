<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
                    <div class="logo-icon-box">
                        <svg class="logo-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <span class="logo-text">Automation Coach</span>
                </a>
            </div>
            
            <nav class="main-nav">
                <a href="#sobre" class="nav-link">Sobre</a>
                <a href="#beneficios" class="nav-link">Benefícios</a>
                <a href="#depoimentos" class="nav-link">Depoimentos</a>
                <a href="#contato" class="nav-link">Contato</a>
            </nav>

            <a href="https://bizappcrm.com/" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-small">
                Saiba mais
            </a>
        </div>
    </div>
</header>

<style>
.site-header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid var(--border);
}

.header-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 3.5rem;
}

.logo-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    text-decoration: none;
    color: var(--foreground);
}

.logo-icon-box {
    width: 2.5rem;
    height: 2.5rem;
    background: var(--gradient-primary);
    border-radius: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: var(--shadow-glow);
}

.logo-svg {
    width: 1.5rem;
    height: 1.5rem;
    color: white;
}

.logo-text {
    font-size: 1rem;
    font-weight: 700;
}

.main-nav {
    display: none;
    align-items: center;
    gap: 2rem;
}

.nav-link {
    font-size: 0.875rem;
    color: var(--muted-foreground);
    text-decoration: none;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: var(--foreground);
}

.btn-small {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    display: none;
}

@media (min-width: 768px) {
    .header-content {
        height: 4rem;
    }
    
    .main-nav {
        display: flex;
    }
    
    .btn-small {
        display: inline-block;
    }
    
    .logo-text {
        font-size: 1.125rem;
    }
}

@media (min-width: 1024px) {
    .nav-link {
        font-size: 0.9375rem;
    }
}
</style>
<?php wp_body_open(); ?>

<header id="site-header" class="site-header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <div class="logo-icon-box">
                        <svg class="logo-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <span class="logo-text">
                        <span class="logo-title">Automation Coach</span>
                    </span>
                </a>
            </div>
            
            <nav class="main-nav" id="main-nav">
                <button class="nav-link" onclick="window.scrollTo({ top: 0, behavior: 'smooth' })">Sobre</button>
                <button class="nav-link" onclick="scrollToSection('beneficios')">Benefícios</button>
                <button class="nav-link" onclick="scrollToSection('depoimentos')">Depoimentos</button>
                <button class="nav-link" onclick="scrollToSection('contato')">Contato</button>
                <a href="https://bizappcrm.com/" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-header mobile-menu-btn">Saiba mais</a>
            </nav>

            <a href="https://bizappcrm.com/" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-header">Saiba mais</a>
            
            <button class="mobile-menu-toggle" id="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<style>
.site-header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-bottom: 1px solid var(--border);
}

.header-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 3.5rem;
}

.logo a {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    text-decoration: none;
    color: var(--foreground);
}

.logo-icon {
    font-size: 1.5rem;
}

.logo-text {
    display: flex;
    flex-direction: column;
}

.logo-title {
    font-weight: 700;
    font-size: 1.125rem;
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.main-nav {
    display: none;
    gap: 2rem;
}

.main-nav.mobile-active {
    display: flex;
    flex-direction: column;
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    padding: 1rem;
    border-bottom: 1px solid var(--border);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.nav-link {
    background: none;
    border: none;
    color: var(--muted-foreground);
    font-size: 0.875rem;
    cursor: pointer;
    transition: color 0.3s ease;
    padding: 0.75rem;
    text-align: left;
}

.nav-link:hover {
    color: var(--foreground);
}

.btn-header {
    display: none;
    font-size: 0.75rem;
}

.btn-header.mobile-menu-btn {
    display: inline-block;
    width: 100%;
    margin-top: 0.5rem;
}

.mobile-menu-toggle {
    display: flex;
    flex-direction: column;
    gap: 4px;
    background: none;
    border: none;
    cursor: pointer;
    padding: 0.5rem;
}

.mobile-menu-toggle span {
    width: 24px;
    height: 2px;
    background: var(--foreground);
    transition: all 0.3s ease;
}

.mobile-menu-toggle.active span:nth-child(1) {
    transform: rotate(45deg) translate(5px, 5px);
}

.mobile-menu-toggle.active span:nth-child(2) {
    opacity: 0;
}

.mobile-menu-toggle.active span:nth-child(3) {
    transform: rotate(-45deg) translate(7px, -6px);
}

@media (min-width: 768px) {
    .header-content {
        height: 4rem;
    }
    
    .main-nav {
        display: flex;
        flex-direction: row;
        position: static;
        background: none;
        padding: 0;
        border: none;
        box-shadow: none;
    }
    
    .nav-link {
        font-size: 0.875rem;
        padding: 0;
    }
    
    .btn-header {
        display: inline-block;
        font-size: 0.875rem;
    }
    
    .btn-header.mobile-menu-btn {
        display: none;
    }
    
    .mobile-menu-toggle {
        display: none;
    }
}

@media (min-width: 1024px) {
    .nav-link {
        font-size: 0.875rem;
    }
    
    .btn-header {
        font-size: 0.875rem;
    }
}
</style>

<script>
function scrollToSection(id) {
    const element = document.getElementById(id);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const nav = document.getElementById('main-nav');
    
    if (toggle && nav) {
        toggle.addEventListener('click', function() {
            nav.classList.toggle('mobile-active');
            toggle.classList.toggle('active');
        });
        
        // Close menu when clicking on a nav link
        const navLinks = nav.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                nav.classList.remove('mobile-active');
                toggle.classList.remove('active');
            });
        });
    }
});
</script>
