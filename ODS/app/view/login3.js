let email = document.querySelector('#email');
let emaillabel = document.querySelector('#emailLabel');
let validemail = false;

let senha = document.querySelector('#senhar');
let senhalabel = document.querySelector('#senhaLabel');
let validsenha = false;

let erro = document.querySelector('#erro');
let certo = document.querySelector('#certo');

// Validando o e-mail com a regex
email.addEventListener('keyup', () => {
  // Regex atualizada para aceitar apenas domínios específicos
  const regex = /^[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com|hotmail\.com|outlook\.com|icloud\.com|live\.com|aol\.com|mail\.com|zoho\.com|protonmail\.com|ifrr\.edu\.br|ufrj\.br|ufmg\.br|usp\.br|unicamp\.br|harvard\.edu|mit\.edu|ox\.ac\.uk|cam\.ac\.uk)$/;

  if (!regex.test(email.value)) {
    emaillabel.setAttribute('style', 'color: red');
    emaillabel.innerHTML = 'E-mail *Formato inválido ou domínio não permitido';
    email.setAttribute('style', 'border-color: red');
    validemail = false;
  } else {
    emaillabel.setAttribute('style', 'color: green');
    emaillabel.innerHTML = 'E-mail';
    email.setAttribute('style', 'border-color: green');
    validemail = true;
  }
});

// Validando a senha (entre 8 e 12 caracteres)
senha.addEventListener('keyup', () => {
  if (senha.value.length < 8 || senha.value.length > 12) {
    senhalabel.setAttribute('style', 'color: red');
    senhalabel.innerHTML = 'Senha *Insira no mínimo 8 e no máximo 12 caracteres';
    senha.setAttribute('style', 'border-color: red');
    validsenha = false;
  } else {
    senhalabel.setAttribute('style', 'color: green');
    senhalabel.innerHTML = 'Senha';
    senha.setAttribute('style', 'border-color: green');
    validsenha = true;
  }
});

// Função para exibir ou esconder a senha
function mosenha() {
  let inputPass = document.getElementById('senhar');
  let btn = document.getElementById('senha');

  if (inputPass.type === 'password') {
    inputPass.setAttribute('type', 'text');
    btn.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');
  } else {
    inputPass.setAttribute('type', 'password');
    btn.classList.replace('bi-eye-slash-fill', 'bi-eye-fill');
  }
}
