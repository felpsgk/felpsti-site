document.addEventListener("DOMContentLoaded", function () {
  // Atualiza o ano no rodapé
  const currentYearSpan = document.getElementById("currentYear");
  if (currentYearSpan) {
    currentYearSpan.textContent = new Date().getFullYear();
  }

  // Smooth scroll para links de navegação do header
  const navLinks = document.querySelectorAll('header nav a[href^="#"]');
  navLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault(); // Previne o comportamento padrão do link (salto brusco)
      let targetId = this.getAttribute("href"); // Pega o valor do href (ex: #about)
      let targetElement = document.querySelector(targetId); // Seleciona o elemento com esse ID

      if (targetElement) {
        // Calcula a posição do elemento de destino, ajustando pelo tamanho do header fixo
        let headerOffset = document.querySelector("header").offsetHeight;
        let elementPosition = targetElement.getBoundingClientRect().top;
        let offsetPosition =
          elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth", // A mágica acontece aqui!
        });
      }
    });
  });
  function smoothScrollToTarget(targetId) {
    const targetElement = document.querySelector(targetId);
    if (targetElement) {
      let headerOffset = 0;
      const header = document.querySelector("header"); // Pega o elemento do cabeçalho
      if (header) {
        headerOffset = header.offsetHeight; // Calcula a altura do cabeçalho fixo
      }

      const elementPosition = targetElement.getBoundingClientRect().top;
      const offsetPosition =
        elementPosition + window.pageYOffset - headerOffset;

      window.scrollTo({
        top: offsetPosition,
        behavior: "smooth",
      });
    }
  }

  // (Opcional) Smooth scroll para o botão "Meus Projetos" na seção Hero
  const allAnchorLinks = document.querySelectorAll('a[href^="#"]');

  allAnchorLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      const hrefAttribute = this.getAttribute("href");

      // Verifica se o href é mais do que apenas "#" (para evitar erros com links vazios)
      // E se realmente existe um elemento com o ID correspondente na página
      if (hrefAttribute.length > 1 && document.querySelector(hrefAttribute)) {
        e.preventDefault(); // Previne o comportamento padrão de salto do link
        smoothScrollToTarget(hrefAttribute); // Chama a função de rolagem suave
      }
      // Se for um link como href="#" sem ID, permite o comportamento padrão (ir para o topo)
      // ou você pode adicionar um tratamento específico se necessário.
    });
  });
});
