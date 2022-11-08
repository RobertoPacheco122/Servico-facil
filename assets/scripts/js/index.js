const buttonClient = document.getElementById("client--button");
const buttonProvider = document.getElementById("provider--button");
const formClient = document.getElementById("register__form--client");
const formProvider = document.getElementById("register__form--provider");

function addSwitchEvent(button, form1, form2) {
    button.addEventListener("click", () => {
        if(!(form1.classList.contains("hidden"))) return;
        form1.classList.toggle("hidden");
        form2.classList.toggle("hidden");
    });
}

addSwitchEvent(buttonClient, formClient, formProvider);
addSwitchEvent(buttonProvider, formProvider, formClient);