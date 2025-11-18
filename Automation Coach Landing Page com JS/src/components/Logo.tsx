const Logo = () => {
  const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  };

  return (
    <button 
      onClick={scrollToTop}
      className="flex items-center gap-2 cursor-pointer hover:opacity-80 transition-opacity"
      aria-label="Voltar ao início"
    >
      <div className="w-10 h-10 bg-gradient-primary rounded-lg flex items-center justify-center shadow-glow">
        <svg
          className="w-6 h-6 text-white"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
        >
          <path
            strokeLinecap="round"
            strokeLinejoin="round"
            strokeWidth={2}
            d="M13 10V3L4 14h7v7l9-11h-7z"
          />
        </svg>
      </div>
      <span className="text-xl font-bold bg-gradient-primary bg-clip-text text-transparent">
        Automation Coach
      </span>
    </button>
  );
};

export default Logo;
