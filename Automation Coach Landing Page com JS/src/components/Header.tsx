import { Button } from "@/components/ui/button";
import Logo from "./Logo";

const Header = () => {
  const scrollToSection = (id: string) => {
    const element = document.getElementById(id);
    element?.scrollIntoView({ behavior: "smooth" });
  };

  return (
    <header className="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-md border-b border-border/50">
      <div className="container mx-auto px-4 md:px-6 lg:px-8">
        <div className="flex items-center justify-between h-14 md:h-16">
          <Logo />
          
          <nav className="hidden md:flex items-center gap-4 lg:gap-8">
            <button
              onClick={() => window.scrollTo({ top: 0, behavior: "smooth" })}
              className="text-xs lg:text-sm text-muted-foreground hover:text-foreground transition-colors"
            >
              Sobre
            </button>
            <button
              onClick={() => scrollToSection("beneficios")}
              className="text-xs lg:text-sm text-muted-foreground hover:text-foreground transition-colors"
            >
              Benefícios
            </button>
            <button
              onClick={() => scrollToSection("depoimentos")}
              className="text-xs lg:text-sm text-muted-foreground hover:text-foreground transition-colors"
            >
              Depoimentos
            </button>
            <button
              onClick={() => scrollToSection("contato")}
              className="text-xs lg:text-sm text-muted-foreground hover:text-foreground transition-colors"
            >
              Contato
            </button>
          </nav>

          <Button variant="outline" size="sm" className="hidden md:inline-flex text-xs lg:text-sm" asChild>
            <a href="https://bizappcrm.com/" target="_blank" rel="noopener noreferrer">
              Saiba mais
            </a>
          </Button>
        </div>
      </div>
    </header>
  );
};

export default Header;
