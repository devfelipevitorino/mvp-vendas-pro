function buscarCep() {
    let cep = document.getElementById("cep").value.replace(/\D/g, "");

    if (cep.length !== 8) {
        alert("Digite um CEP válido (8 dígitos).");
        return;
    }

    fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(data => {
            if (data.erro) {
                alert("CEP não encontrado!");
                return;
            }
            document.getElementById("address").value = data.logradouro;
            document.getElementById("neighborhood").value = data.bairro;
            document.getElementById("city").value = data.localidade;
            document.getElementById("uf").value = data.uf;
        })
        .catch(() => alert("Erro ao buscar CEP!"));
}