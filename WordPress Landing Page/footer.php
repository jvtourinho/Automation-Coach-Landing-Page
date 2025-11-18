<footer id="contato" class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-text">
                <p>© Automation Coach – <?php echo date('Y'); ?>. Todos os direitos reservados.</p>
            </div>

            <div class="social-links">
                <a href="https://www.facebook.com/bizappCRM?locale=pt_BR" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="social-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/company/bizapp-crm/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="social-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                        <rect x="2" y="9" width="4" height="12"></rect>
                        <circle cx="4" cy="4" r="2"></circle>
                    </svg>
                </a>
                <a href="https://www.youtube.com/@bizappcrm" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="social-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                        <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<style>
.site-footer {
    background: var(--secondary);
    color: var(--secondary-foreground);
    padding: 2rem 0;
    border-top: 1px solid var(--border);
}

.footer-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    gap: 1.5rem;
}

.footer-text p {
    font-size: 0.75rem;
    text-align: center;
}

.social-links {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.social-link {
    width: 2.25rem;
    height: 2.25rem;
    border-radius: 50%;
    background: rgba(163, 115, 230, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    transition: all 0.3s ease;
}

.social-link:hover {
    background: rgba(163, 115, 230, 0.2);
    transform: scale(1.1);
}

.social-link svg {
    width: 1rem;
    height: 1rem;
}

@media (min-width: 768px) {
    .site-footer {
        padding: 3rem 0;
    }
    
    .footer-content {
        flex-direction: row;
    }
    
    .footer-text p {
        font-size: 0.875rem;
        text-align: left;
    }
    
    .social-links {
        gap: 1rem;
    }
    
    .social-link {
        width: 2.5rem;
        height: 2.5rem;
    }
    
    .social-link svg {
        width: 1.25rem;
        height: 1.25rem;
    }
}
</style>

</body>
</html>
