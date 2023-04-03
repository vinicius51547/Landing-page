// Validação para os campo do form
var contactForm = function () {
    if ($('#form').length > 0) {
        $("#form").validate({
            rules: {
                nome: "required",
                email: {
                    required: true,
                    email: true
                },
                telefone: {
                    required: true,
                    minlength: 15
                },
                texto: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                nome: "Por favor, informe seu nome",
                email: {
                    required: "Por favor, informe seu endereço de e-mail",
                    email: "Por favor, informe um endereço de e-mail válido"
                },
                telefone: "Por favor, informe seu telefone",
                texto: "Por favor, digite uma mensagem com pelo menos 5 caracteres"
            }
        });
    }
};
contactForm();


// Esconder a mensagem depois de 5 segundos
setTimeout(function () {
    var mensagem = document.getElementById('mensagem');
    if (mensagem) {
        mensagem.style.display = 'none';
    }
}, 5000);

// Mascara do input de telefone
$(document).ready(function () {
    $('#telefone').mask('(00) 0000-00000');
});

//  Perguntas
const faqs = document.querySelectorAll(".faq");

faqs.forEach((faq) => {
    faq.addEventListener("click", () => {
        faq.classList.toggle("active");
    });
});

// Animação Scroll
const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';

function animeScroll() {
    const windowTop = window.pageYOffset + (window.innerHeight * 3) / 4;
    target.forEach(function (element) {
        if (windowTop > element.offsetTop) {
            element.classList.add(animationClass);
        } else {
            element.classList.remove(animationClass);
        }
    });
}

animeScroll();

if (target.length) {
    window.addEventListener('scroll', function () {
        animeScroll();
    });
}

