import { Button } from "@/components/ui/button";
import heroImage from "@/assets/hero-automation.jpg";

const HeroSection = () => {
  return (
    <section className="relative min-h-[calc(100vh-4rem)] flex items-center pt-12 md:pt-16 overflow-hidden">
      <div className="absolute inset-0 bg-gradient-to-br from-background via-background to-primary/5" />
      
      <div className="container mx-auto px-4 md:px-6 lg:px-8 relative z-10">
        <div className="grid lg:grid-cols-[1fr_1.5fr] gap-6 md:gap-8 lg:gap-3 items-center">
          <div className="space-y-4 md:space-y-6 animate-fade-in text-center lg:text-left order-2 lg:order-1">
            <div className="space-y-3 md:space-y-4">
              <h1 className="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-bold leading-tight">
                Automatize processos,{" "}
                <span className="bg-gradient-primary bg-clip-text text-transparent">
                  empodere pessoas
                </span>
              </h1>
              
              <p className="text-base md:text-lg text-muted-foreground leading-relaxed max-w-xl mx-auto lg:mx-0">
                O Automation Coach é uma solução que ajuda empresas a identificarem 
                oportunidades de automação e capacita equipes a criarem suas próprias 
                aplicações internas, sem depender 100% da área de TI.
              </p>
            </div>

            <Button variant="hero" size="lg" className="text-sm md:text-base px-6 md:px-8 py-5 md:py-6 h-auto w-full sm:w-auto" asChild>
              <a href="https://bizappcrm.com/automation-coach/" target="_blank" rel="noopener noreferrer">
                👉 Quero conhecer o Automation Coach
              </a>
            </Button>
          </div>

          <div className="relative h-[300px] sm:h-[500px] md:h-[600px] lg:h-[700px] flex items-center justify-center animate-fade-in order-1 lg:order-2" style={{ animationDelay: "0.2s" }}>
            <img
              src={heroImage}
              alt="Automação de processos e transformação digital"
              className="relative w-full h-full object-contain"
            />
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;
