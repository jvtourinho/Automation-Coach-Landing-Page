import { Zap, Users, TrendingUp, Cpu, Rocket } from "lucide-react";

const benefits = [
  {
    icon: Zap,
    title: "Identificação rápida de processos automatizáveis",
  },
  {
    icon: Users,
    title: "Capacitação da equipe para criar aplicações internas",
  },
  {
    icon: TrendingUp,
    title: "Redução de dependência do time de TI",
  },
  {
    icon: Cpu,
    title: "Aumento de eficiência operacional",
  },
  {
    icon: Rocket,
    title: "Implementação prática, guiada e escalável",
  },
];

const BenefitsSection = () => {
  return (
    <section id="beneficios" className="py-12 md:py-16 lg:py-20 bg-muted/30">
      <div className="container mx-auto px-4 md:px-6 lg:px-8">
        <div className="text-center mb-8 md:mb-12">
          <h2 className="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">
            Como o{" "}
            <span className="bg-gradient-primary bg-clip-text text-transparent">
              Automation Coach
            </span>{" "}
            transforma seu negócio
          </h2>
        </div>

        <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 max-w-5xl mx-auto">
          {benefits.map((benefit, index) => (
            <div
              key={index}
              className="group p-5 md:p-6 rounded-xl bg-card border border-border/50 hover:border-primary/50 transition-all duration-300 hover:shadow-glow animate-fade-in"
              style={{ animationDelay: `${index * 0.1}s` }}
            >
              <div className="flex items-start gap-3 md:gap-4">
                <div className="w-10 h-10 md:w-12 md:h-12 rounded-lg bg-gradient-primary flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                  <benefit.icon className="w-5 h-5 md:w-6 md:h-6 text-white" />
                </div>
                <p className="text-sm md:text-base leading-relaxed text-foreground font-medium">
                  {benefit.title}
                </p>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default BenefitsSection;
