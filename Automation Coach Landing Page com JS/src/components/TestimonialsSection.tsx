import testimonial1 from "@/assets/testimonial-1.jpg";
import testimonial2 from "@/assets/testimonial-2.jpg";
import testimonial3 from "@/assets/testimonial-3.jpg";

const testimonials = [
  {
    quote: "Conseguimos automatizar tarefas em 3 dias, algo que antes levava semanas.",
    name: "Mariana S.",
    role: "Coordenadora de Operações",
    image: testimonial1,
  },
  {
    quote: "O programa mudou completamente nossa cultura interna. Hoje somos mais ágeis.",
    name: "Eduardo L.",
    role: "Gestor de TI",
    image: testimonial2,
  },
  {
    quote: "Agora minha equipe cria soluções sem depender do time técnico.",
    name: "Camila P.",
    role: "Supervisora de Processos",
    image: testimonial3,
  },
];

const TestimonialsSection = () => {
  return (
    <section id="depoimentos" className="py-12 md:py-16 lg:py-20">
      <div className="container mx-auto px-4 md:px-6 lg:px-8">
        <div className="text-center mb-8 md:mb-12">
          <h2 className="text-2xl sm:text-3xl md:text-4xl font-bold mb-4">
            O que nossos clientes dizem
          </h2>
        </div>

        <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 max-w-6xl mx-auto">
          {testimonials.map((testimonial, index) => (
            <div
              key={index}
              className="bg-card rounded-xl p-5 md:p-6 border border-border/50 hover:border-primary/50 transition-all duration-300 hover:shadow-elegant animate-fade-in"
              style={{ animationDelay: `${index * 0.15}s` }}
            >
              <div className="flex flex-col items-center text-center space-y-3 md:space-y-4">
                <div className="relative">
                  <div className="absolute inset-0 bg-gradient-primary rounded-full blur-md opacity-50" />
                  <img
                    src={testimonial.image}
                    alt={testimonial.name}
                    className="relative w-16 h-16 md:w-20 md:h-20 rounded-full object-cover border-2 border-primary"
                  />
                </div>
                
                <blockquote className="text-sm md:text-base text-muted-foreground italic leading-relaxed">
                  "{testimonial.quote}"
                </blockquote>
                
                <div>
                  <p className="font-semibold text-foreground text-sm md:text-base">{testimonial.name}</p>
                  <p className="text-xs md:text-sm text-muted-foreground">{testimonial.role}</p>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default TestimonialsSection;
