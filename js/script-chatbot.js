const chat = {
    1: {
        text: '¡Hola! soy Vic, el asistente de ayuda para droguería <strong>El Mastranto</strong>',
        next: 2

    },
    2: {
        text: '¿Cómo puedo ayudarte?',
        options: [
            {
                text: "Quisiera ser un cliente Mastranto",
                next: 3
            },
            {
                text: "Quisiera ser uno de sus proveedores",
                next: 6
            },
            {
                text: "Quisiera formar parte de su equipo",
                next: 8
            },
            {
                text: "Soy cliente Mastranto y necesito ayuda",
                next: 12
            }
        ]
    },

    ///////////////////////////////////////////////////
    3: {
        text: 'Si deseas ser un cliente Mastranto, puedes llenar el formulario en esta misma página',
        next: 4
    },
    4: {
        text: 'un asesor de ventas se comunicará lo antes posible',
        next: 5
    },
    5: {
        text: 'es importante tener a mano:<br>-Permiso De Funcionamiento<br>-Registro mercantil<br>-Rif del establecimiento',
        next: 10
    },

    //////////////////////////////////////////////////
    6: {
        text: 'Si deseas ser uno de nuestros proveedores, puedes llenar el formulario en esta misma página',
        next: 7
    },
    7: {
        text: 'Nuestro departamento de compras los contactará lo más pronto posible',
        next: 10
    },

    //////////////////////////////////////////////////
    8: {
        text: 'Puedes hacernos llegar tu CV a nuestro departamento de recursos humanos',
        next: 9
    },
    9: {
        text: '<a href="mailto: rrhh@drogueriaelmastranto.com">ACÁ</a>',
        next: 10
    },

    ///////////////////////////////////////////////
    10: {
        text: '¿Necesitas saber algo más?',
        options: [
            {
                text: "Si",
                next: 2
            },
            {
                text: "NO",
                next: 11
            }
        ]
    },
    ////////////////////////////////////////////////////////
    11: {
        text: 'Vuelva pronto',
        url: "http://drogueriaelmastranto.com"
    },
    ////////////////////////////////////////////////////////
    12: {
        text: '¿sobre qué específicamente?',
        options: [
            {
                text: "despachos",
                next: 13
            },
            {
                text:"condiciones y formas de pago",
                next: 16
            },
            {
                text:"productos psicotrópicos",
                next: 19
            }
        ]
    },
    ////////////////////////////////////////////////////////
    13: {
        text: 'La mejor opción es comunicarse directamente con nuestro departamento de despacho',
        next: 14
    },
    14: {
        text: 'para ello gustosamente le atenderán por el numero:',
        next: 15
    },
    15: {
        text: '0412-6176764',
        next: 10
    },
    ////////////////////////////////////////////////////////
    16: {
        text: 'Nuestro departamento de crédito y cobranza gustosamente le aclarará todas las dudas',
        next: 17
    },
    17: {
        text: 'para ello gustosamente le atenderán por el numero:',
        next: 18
    },
    18: {
        text: '0424-1203679',
        next: 10
    },
    ////////////////////////////////////////////////////////
    19: {
        text: 'debemos recordar los requisitos impuestos por contraloría sanitaria',
        next: 20
    },
    20: {
        text: 'mas detalles con nuestra regente por el número',
        next: 21
    },
    21: {
        text: '0412-6176948',
        next: 10
    },

};


const bot = function () {

    const peekobot = document.getElementById('peekobot');
    const container = document.getElementById('peekobot-container');
    const inner = document.getElementById('peekobot-inner');
    let restartButton = null;

    const sleep = function (ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    };

    const scrollContainer = function () {
        inner.scrollTop = inner.scrollHeight;
    };

    const insertNewChatItem = function (elem) {
        //container.insertBefore(elem, peekobot);
        peekobot.appendChild(elem);
        scrollContainer();
        //debugger;
        elem.classList.add('activated');
    };

    const printResponse = async function (step) {
        const response = document.createElement('div');
        response.classList.add('chat-response');
        response.innerHTML = step.text;
        insertNewChatItem(response);

        await sleep(1500);

        if (step.options) {
            const choices = document.createElement('div');
            choices.classList.add('choices');
            step.options.forEach(function (option) {
                const button = document.createElement(option.url ? 'a' : 'button');
                button.classList.add('choice');
                button.innerHTML = option.text;
                if (option.url) {
                    button.href = option.url;
                } else {
                    button.dataset.next = option.next;
                }
                choices.appendChild(button);
            });
            insertNewChatItem(choices);
        } else if (step.next) {
            printResponse(chat[step.next]);
        }
    };

    const printChoice = function (choice) {
        const choiceElem = document.createElement('div');
        choiceElem.classList.add('chat-ask');
        choiceElem.innerHTML = choice.innerHTML;
        insertNewChatItem(choiceElem);
    };

    const disableAllChoices = function () {
        const choices = document.querySelectorAll('.choice');
        choices.forEach(function (choice) {
            choice.disabled = 'disabled';
        });
        return;
    };

    const handleChoice = async function (e) {

        if (!e.target.classList.contains('choice') || 'A' === e.target.tagName) {
            // Target isn't a button, but could be a child of a button.
            var button = e.target.closest('#peekobot-container .choice');

            if (button !== null) {
                button.click();
            }

            return;
        }

        e.preventDefault();
        const choice = e.target;

        disableAllChoices();

        printChoice(choice);
        scrollContainer();

        await sleep(1500);

        if (choice.dataset.next) {
            printResponse(chat[choice.dataset.next]);
        }
        // Need to disable buttons here to prevent multiple choices
    };

    const handleRestart = function () {
        startConversation();
    }

    const startConversation = function () {
        printResponse(chat[1]);
    }


    // Cerrar chatbot
    const Cerrar = function () {
        container.classList.remove('mostrar-chatbot');
        container.classList.add('ocultar-chatbot');
    }
    const closeButton = document.getElementById('cerrar');
    
    // Abrir chatbot
    const Abrir = function () {
        container.classList.add('mostrar-chatbot');
    }
    const abrirchatbot = document.getElementById('victor');


    const init = function () {
        container.addEventListener('click', handleChoice);

        restartButton = document.createElement('button');
        restartButton.innerText = "Reiniciar";
        restartButton.classList.add('restart');
        restartButton.addEventListener('click', handleRestart);

        container.appendChild(restartButton);

        startConversation();

        
        closeButton.addEventListener('click', Cerrar);
        abrirchatbot.addEventListener('click', Abrir);
        
    };

    init();
}

bot();