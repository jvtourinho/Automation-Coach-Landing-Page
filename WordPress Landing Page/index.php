<?php get_header(); ?>

<main id="main-content">
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-background"></div>
        
        <div class="container hero-container">
            <div class="hero-grid">
                <div class="hero-text animate-fade-in">
                    <div class="hero-content">
                        <h1 class="hero-title">
                            Automatize processos, 
                            <span class="gradient-text">empodere pessoas</span>
                        </h1>
                        
                        <p class="hero-description">
                            O Automation Coach é uma solução que ajuda empresas a identificarem 
                            oportunidades de automação e capacita equipes a criarem suas próprias 
                            aplicações internas, sem depender 100% da área de TI.
                        </p>
                    </div>

                    <a href="https://bizappcrm.com/automation-coach/" target="_blank" rel="noopener noreferrer" class="btn btn-hero btn-large">
                        👉 Quero conhecer o Automation Coach
                    </a>
                </div>

                <div class="hero-image-container animate-fade-in">
                    <img 
                        src="<?php echo get_template_directory_uri(); ?>/images/hero-automation.jpg" 
                        alt="Automação de processos e transformação digital"
                        class="hero-image"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="beneficios" class="benefits-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                    Como o <span class="gradient-text">Automation Coach</span> transforma seu negócio
                </h2>
            </div>

            <div class="benefits-grid">
                <div class="benefit-card animate-fade-in">
                    <div class="benefit-content">
                        <div class="benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                            </svg>
                        </div>
                        <p class="benefit-text">Identificação rápida de processos automatizáveis</p>
                    </div>
                </div>

                <div class="benefit-card animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="benefit-content">
                        <div class="benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <p class="benefit-text">Capacitação da equipe para criar aplicações internas</p>
                    </div>
                </div>

                <div class="benefit-card animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="benefit-content">
                        <div class="benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </div>
                        <p class="benefit-text">Redução de dependência do time de TI</p>
                    </div>
                </div>

                <div class="benefit-card animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="benefit-content">
                        <div class="benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                <line x1="6" y1="6" x2="6.01" y2="6"></line>
                                <line x1="6" y1="18" x2="6.01" y2="18"></line>
                            </svg>
                        </div>
                        <p class="benefit-text">Aumento de eficiência operacional</p>
                    </div>
                </div>

                <div class="benefit-card animate-fade-in" style="animation-delay: 0.4s;">
                    <div class="benefit-content">
                        <div class="benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path>
                                <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path>
                                <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                            </svg>
                        </div>
                        <p class="benefit-text">Implementação prática, guiada e escalável</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="depoimentos" class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">O que nossos clientes dizem</h2>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card animate-fade-in">
                    <div class="testimonial-content">
                        <div class="testimonial-avatar-wrapper">
                            <div class="avatar-glow"></div>
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/images/testimonial-1.jpg" 
                                alt="Mariana S."
                                class="testimonial-avatar"
                            />
                        </div>
                        
                        <blockquote class="testimonial-quote">
                            "Conseguimos automatizar tarefas em 3 dias, algo que antes levava semanas."
                        </blockquote>
                        
                        <div class="testimonial-author">
                            <p class="author-name">Mariana S.</p>
                            <p class="author-role">Coordenadora de Operações</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card animate-fade-in" style="animation-delay: 0.15s;">
                    <div class="testimonial-content">
                        <div class="testimonial-avatar-wrapper">
                            <div class="avatar-glow"></div>
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/images/testimonial-2.jpg" 
                                alt="Eduardo L."
                                class="testimonial-avatar"
                            />
                        </div>
                        
                        <blockquote class="testimonial-quote">
                            "O programa mudou completamente nossa cultura interna. Hoje somos mais ágeis."
                        </blockquote>
                        
                        <div class="testimonial-author">
                            <p class="author-name">Eduardo L.</p>
                            <p class="author-role">Gestor de TI</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="testimonial-content">
                        <div class="testimonial-avatar-wrapper">
                            <div class="avatar-glow"></div>
                            <img 
                                src="<?php echo get_template_directory_uri(); ?>/images/testimonial-3.jpg" 
                                alt="Camila P."
                                class="testimonial-avatar"
                            />
                        </div>
                        
                        <blockquote class="testimonial-quote">
                            "Agora minha equipe cria soluções sem depender do time técnico."
                        </blockquote>
                        
                        <div class="testimonial-author">
                            <p class="author-name">Camila P.</p>
                            <p class="author-role">Supervisora de Processos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

<style>
/* Hero Section */
.hero-section {
    position: relative;
    min-height: calc(100vh - 4rem);
    display: flex;
    align-items: center;
    padding-top: 5rem;
    padding-bottom: 3rem;
    overflow: hidden;
}

.hero-background {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom right, var(--background), var(--background), rgba(163, 115, 230, 0.05));
}

.hero-container {
    position: relative;
    z-index: 10;
}

.hero-grid {
    display: grid;
    gap: 1.5rem;
    align-items: center;
}

.hero-text {
    order: 2;
}

.hero-image-container {
    order: 1;
}

.hero-text {
    text-align: center;
}

.hero-content {
    margin-bottom: 1.5rem;
}

.hero-title {
    font-size: 1.875rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 1rem;
}

.hero-description {
    font-size: 1rem;
    color: var(--muted-foreground);
    line-height: 1.6;
    max-width: 40rem;
    margin: 0 auto;
}

.btn-large {
    padding: 1.25rem 2rem;
    font-size: 0.875rem;
    width: 100%;
}

.hero-image-container {
    position: relative;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.hero-image {
    position: relative;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

@media (min-width: 640px) {
    .hero-title {
        font-size: 2.25rem;
    }
    
    .hero-image-container {
        height: 400px;
    }
    
    .btn-large {
        width: auto;
    }
}

@media (min-width: 768px) {
    .hero-section {
        padding-top: 6rem;
    }
    
    .hero-grid {
        gap: 2rem;
    }
    
    .hero-content {
        margin-bottom: 2rem;
    }
    
    .hero-title {
        font-size: 3rem;
    }
    
    .hero-description {
        font-size: 1.125rem;
    }
    
    .btn-large {
        font-size: 1rem;
    }
    
    .hero-image-container {
        height: 500px;
    }
}

@media (min-width: 1024px) {
    .hero-grid {
        grid-template-columns: 1fr 1.5fr;
        gap: 0.75rem;
    }
    
    .hero-text {
        text-align: left;
        order: 1;
    }
    
    .hero-description {
        margin: 0;
    }
    
    .hero-image-container {
        height: 600px;
        order: 2;
    }
}

/* Benefits Section */
.benefits-section {
    padding: 3rem 0;
    background: rgba(0, 0, 0, 0.02);
}

.section-header {
    text-align: center;
    margin-bottom: 2rem;
}

.section-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.benefits-grid {
    display: grid;
    gap: 1rem;
    max-width: 80rem;
    margin: 0 auto;
}

.benefit-card {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 1.25rem;
    transition: all 0.3s ease;
}

.benefit-card:hover {
    border-color: var(--primary);
    box-shadow: var(--shadow-glow);
}

.benefit-content {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
}

.benefit-icon {
    width: 2.5rem;
    height: 2.5rem;
    border-radius: 0.5rem;
    background: var(--gradient-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: transform 0.3s ease;
}

.benefit-card:hover .benefit-icon {
    transform: scale(1.1);
}

.benefit-icon svg {
    width: 1.25rem;
    height: 1.25rem;
    color: white;
}

.benefit-text {
    font-size: 0.875rem;
    line-height: 1.6;
    font-weight: 500;
}

@media (min-width: 640px) {
    .benefits-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 768px) {
    .benefits-section {
        padding: 4rem 0;
    }
    
    .section-header {
        margin-bottom: 3rem;
    }
    
    .section-title {
        font-size: 2.25rem;
    }
    
    .benefits-grid {
        gap: 1.5rem;
    }
    
    .benefit-card {
        padding: 1.5rem;
    }
    
    .benefit-content {
        gap: 1rem;
    }
    
    .benefit-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .benefit-icon svg {
        width: 1.5rem;
        height: 1.5rem;
    }
    
    .benefit-text {
        font-size: 1rem;
    }
}

@media (min-width: 1024px) {
    .benefits-section {
        padding: 5rem 0;
    }
    
    .benefits-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* Testimonials Section */
.testimonials-section {
    padding: 3rem 0;
}

.testimonials-grid {
    display: grid;
    gap: 1.5rem;
    max-width: 72rem;
    margin: 0 auto;
}

.testimonial-card {
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: var(--radius);
    padding: 1.25rem;
    transition: all 0.3s ease;
}

.testimonial-card:hover {
    border-color: var(--primary);
    box-shadow: var(--shadow-elegant);
}

.testimonial-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.testimonial-avatar-wrapper {
    position: relative;
    margin-bottom: 0.75rem;
}

.avatar-glow {
    position: absolute;
    inset: 0;
    background: var(--gradient-primary);
    border-radius: 50%;
    filter: blur(12px);
    opacity: 0.5;
}

.testimonial-avatar {
    position: relative;
    width: 4rem;
    height: 4rem;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid var(--primary);
}

.testimonial-quote {
    font-size: 0.875rem;
    color: var(--muted-foreground);
    font-style: italic;
    line-height: 1.6;
    margin-bottom: 0.75rem;
}

.author-name {
    font-weight: 600;
    font-size: 0.875rem;
    margin-bottom: 0.25rem;
}

.author-role {
    font-size: 0.75rem;
    color: var(--muted-foreground);
}

@media (min-width: 640px) {
    .testimonials-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 768px) {
    .testimonials-section {
        padding: 4rem 0;
    }
    
    .testimonials-grid {
        gap: 2rem;
    }
    
    .testimonial-card {
        padding: 1.5rem;
    }
    
    .testimonial-content {
        gap: 0.25rem;
    }
    
    .testimonial-avatar-wrapper {
        margin-bottom: 1rem;
    }
    
    .testimonial-avatar {
        width: 5rem;
        height: 5rem;
    }
    
    .testimonial-quote {
        font-size: 1rem;
        margin-bottom: 1rem;
    }
    
    .author-name {
        font-size: 1rem;
    }
    
    .author-role {
        font-size: 0.875rem;
    }
}

@media (min-width: 1024px) {
    .testimonials-section {
        padding: 5rem 0;
    }
    
    .testimonials-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}
</style>
