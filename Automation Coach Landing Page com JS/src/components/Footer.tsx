import { Facebook, Linkedin, Youtube } from "lucide-react";

const Footer = () => {
  return (
    <footer id="contato" className="bg-secondary text-secondary-foreground">
      <div className="container mx-auto px-4 md:px-6 lg:px-8 py-8 md:py-12">
        <div className="flex flex-col md:flex-row items-center justify-between gap-6">
          <p className="text-xs md:text-sm text-center md:text-left">
            © Automation Coach – 2025. Todos os direitos reservados.
          </p>

          <div className="flex items-center gap-3 md:gap-4">
            <a
              href="https://www.facebook.com/bizappCRM?locale=pt_BR"
              target="_blank"
              rel="noopener noreferrer"
              className="w-9 h-9 md:w-10 md:h-10 rounded-full bg-primary/10 hover:bg-primary/20 flex items-center justify-center transition-all duration-300 hover:scale-110"
              aria-label="Facebook"
            >
              <Facebook className="w-4 h-4 md:w-5 md:h-5 text-primary" />
            </a>
            <a
              href="https://www.linkedin.com/company/bizapp-crm/"
              target="_blank"
              rel="noopener noreferrer"
              className="w-9 h-9 md:w-10 md:h-10 rounded-full bg-primary/10 hover:bg-primary/20 flex items-center justify-center transition-all duration-300 hover:scale-110"
              aria-label="LinkedIn"
            >
              <Linkedin className="w-4 h-4 md:w-5 md:h-5 text-primary" />
            </a>
            <a
              href="https://www.youtube.com/@bizappcrm"
              target="_blank"
              rel="noopener noreferrer"
              className="w-9 h-9 md:w-10 md:h-10 rounded-full bg-primary/10 hover:bg-primary/20 flex items-center justify-center transition-all duration-300 hover:scale-110"
              aria-label="YouTube"
            >
              <Youtube className="w-4 h-4 md:w-5 md:h-5 text-primary" />
            </a>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
