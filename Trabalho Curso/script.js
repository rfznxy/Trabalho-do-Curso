function salvarTexto() {
  const texto = document.getElementById("experiencia").value;
  localStorage.setItem("experiencia", texto);
  alert("Texto salvo no navegador!");
}

function limparTexto() {
  localStorage.removeItem("experiencia");
  document.getElementById("experiencia").value = "";
}

window.onload = () => {
  const experiencia = document.getElementById("experiencia");
  if (experiencia) {
    experiencia.value = localStorage.getItem("experiencia") || "";
    experiencia.addEventListener("input", () => {
      localStorage.setItem("experiencia", experiencia.value);
    });
  }
};

function confirmarEnvio() {
  return confirm("Deseja realmente enviar suas respostas?");
}

document.querySelectorAll("input[type=radio]").forEach(input => {
  input.addEventListener("change", () => {
    const total = document.querySelectorAll("input[type=radio]").length / 2; 
    const marcados = new Set(
      Array.from(document.querySelectorAll("input[type=radio]:checked"))
        .map(i => i.name)
    ).size;
    const barra = document.getElementById("barra");
    if (barra) {
      const perc = Math.round((marcados / total) * 100);
      barra.style.width = perc + "%";
      barra.textContent = perc + "%";
    }
  });
});