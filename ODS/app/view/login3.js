let email = document.querySelector('#email')
let emaillabel = document.querySelector('#emailLabel')
let validemail = false

let senha = document.querySelector('#senhar')
let senhalabel = document.querySelector('#senhaLabel')
let validsenha = false

let erro = document.querySelector('#erro')
let certo = document.querySelector('#certo')

email.addEventListener('keyup', () => {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

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



function mosenha() {
    let inputPass = document.getElementById('senhar')
    let btn = document.getElementById('senha')

    if(inputPass.type === 'password') {
        inputPass.setAttribute('type', 'text')

        btn.classList.replace('bi-eye-fill','bi-eye-slash-fill')
    }  
    else {
        inputPass.setAttribute('type','password')

        btn.classList.replace('bi-eye-slash-fill', 'bi-eye-fill')
    }
}