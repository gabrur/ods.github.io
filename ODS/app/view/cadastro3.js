let nome = document.querySelector('#nome')
let nomelabel = document.querySelector('#nomelabel')
let validnome = false

let email = document.querySelector('#email')
let emaillabel = document.querySelector('#emaillabel')
let validemail = false

let senha = document.querySelector('#senha')
let senhalabel = document.querySelector('#senhalabel')
let validsenha = false

let confirmasenha = document.querySelector('#confirmasenha')
let confirmasenhalabel = document.querySelector('#confirmasenhalabel')
let validconfirmasenha = false

let erro = document.querySelector('#erro')
let certo = document.querySelector('#certo')

nome.addEventListener('keyup', () => {
  // Expressão regular para permitir apenas letras e espaços
  const regex = /^[A-Za-zÀ-ÿ\s]+$/;  // Aceita letras (inclusive acentuadas) e espaços
  
  // Verifica se o nome contém apenas letras (e espaços, se permitido)
  if (nome.value.length <= 2 || !regex.test(nome.value)) {
    // Se o nome for inválido (menos de 3 caracteres ou contém números)
    nomelabel.setAttribute('style', 'color: red');
    nomelabel.innerHTML = 'Nome *Insira no mínimo 3 caracteres e sem números';
    nome.setAttribute('style', 'border-color: red');
    validnome = false;
  } else {
    // Se o nome for válido (não contém números)
    nomelabel.setAttribute('style', 'color: green');
    nomelabel.innerHTML = 'Nome';
    nome.setAttribute('style', 'border-color: green');
    validnome = true;
  }
});



email.addEventListener('keyup', () => {
  // Atualizada a regex para garantir que o domínio tenha pelo menos 2 caracteres após o ponto.
  const regex = /^[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com|hotmail\.com|outlook\.com|icloud\.com|live\.com|aol\.com|mail\.com|zoho\.com|protonmail\.com|ifrr\.edu\.br|ufrj\.br|ufmg\.br|usp\.br|unicamp\.br|harvard\.edu|mit\.edu|ox\.ac\.uk|cam\.ac\.uk)$/;

  // Verifica se o e-mail corresponde à expressão regular
  if (!regex.test(email.value)) {
    emaillabel.setAttribute('style', 'color: red');
    emaillabel.innerHTML = 'E-mail *Formato inválido';
    email.setAttribute('style', 'border-color: red');
    validemail = false;
  } else {
    emaillabel.setAttribute('style', 'color: green');
    emaillabel.innerHTML = 'E-mail';
    email.setAttribute('style', 'border-color: green');
    validemail = true;
  }
});

senha.addEventListener('keyup', () => {
  if (senha.value.length <= 7 || senha.value.length >= 13) {
    senhalabel.setAttribute('style', 'color: red')
    senhalabel.innerHTML = 'Senha *Insira no mínimo 8 e no máximo 12 caracteres'
    senha.setAttribute('style', 'border-color: red')
    validsenha = false
  } else {
    senhalabel.setAttribute('style', 'color: green')
    senhalabel.innerHTML = 'Senha'
    senha.setAttribute('style', 'border-color: green')
    validsenha = true
  }
})

confirmasenha.addEventListener('keyup', () => {
  if (senha.value !== confirmasenha.value) {
    confirmasenhalabel.setAttribute('style', 'color: red')
    confirmasenhalabel.innerHTML = 'Confirmar Senha *As senhas não são iguais'
    confirmasenha.setAttribute('style', 'border-color: red')
    validconfirmasenha = false
  } else {
    confirmasenhalabel.setAttribute('style', 'color: green')
    confirmasenhalabel.innerHTML = 'Confirmar Senha'
    confirmasenha.setAttribute('style', 'border-color: green')
    validconfirmasenha = true
   } })

function mosenha2() {
  let inputPass2 = document.getElementById('senha')
  let btn2 = document.getElementById('senha4')

  if(inputPass2.type === 'password') {
      inputPass2.setAttribute('type', 'text')

      btn2.classList.replace('bi-eye-fill','bi-eye-slash-fill')
  }  
  else {
      inputPass2.setAttribute('type','password')

      btn2.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
  }
}
function mosenha3() {
  let inputPass3 = document.getElementById('confirmasenha')
  let btn3 = document.getElementById('senha5')

  if(inputPass3.type === 'password') {
      inputPass3.setAttribute('type', 'text')

      btn3.classList.replace('bi-eye-fill','bi-eye-slash-fill')
  }  
  else {
      inputPass3.setAttribute('type','password')

      btn3.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
  }
}


