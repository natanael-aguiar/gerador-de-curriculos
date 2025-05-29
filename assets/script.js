function calcularIdade(input) {
  const nascimento = new Date(input.value);
  const hoje = new Date();
  let idade = hoje.getFullYear() - nascimento.getFullYear();
  const m = hoje.getMonth() - nascimento.getMonth();
  if (m < 0 || (m === 0 && hoje.getDate() < nascimento.getDate())) {
    idade--;
  }
  document.getElementById("idade").value = idade;
}

function adicionarCampo(containerId, fieldName) {
  const container = document.getElementById(containerId);
  const input = document.createElement("input");
  input.type = "text";
  input.name = fieldName;
  input.className = "form-control mt-2";
  input.required = true;
  container.appendChild(input);
}
