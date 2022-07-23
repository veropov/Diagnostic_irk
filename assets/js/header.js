const backBlur = document.querySelector('#background')


function click(model, value = function() {}) {
    document.querySelector(model).addEventListener('click', value)
}

//МОДАЛЬНОЕ ОКНО ВЫБОРА ГОРОДА//

document.querySelector('#svg_city').addEventListener('click', f => {
        document.querySelector('#modal_city').style.display="flex"
        document.querySelector('#modal_reg').style.display="none"
        backBlur.style.display="flex"
})

document.querySelector('#modal_esc').addEventListener('click', f => {
    document.querySelector('#modal_city').style.display="none"
    backBlur.style.display="none"
})

document.querySelector('#modal_open').addEventListener('click', f => {
    document.querySelector('#modal_city').style.display="none";
    backBlur.style.display="none"
})

//МОДАЛЬНОЕ ОКНО РЕГИСТРАЦИИ//
let radio = document.querySelector('#card-open');
document.querySelector('#svg_reg').addEventListener('click', f => {
    document.querySelector('#modal_reg').style.display="flex";
    document.querySelector('#modal__open').style.display="inline";
    document.querySelector('#modal__reg').style.display="none";
    backBlur.style.display="flex"
    radio.checked = true;
    document.querySelector('#modal_city').style.display="none"
})

document.querySelector('#modal_esc-2').addEventListener('click', f => {
    document.querySelector('#modal_reg').style.display="none"
    backBlur.style.display="none"
})

document.querySelector('#modal_open-2').addEventListener('click', f => {
    document.querySelector('#modal_reg').style.display="none"
    backBlur.style.display="none"
})

//ВЫБОР РЕГИСТРАЦИИ ИЛИ АВТОРИЗАЦИИ//

document.querySelector('#card-open').addEventListener('click', f => {
    document.querySelector('#modal__open').style.display="inline"
    document.querySelector('#modal__reg').style.display="none"
})
document.querySelector('#card-reg').addEventListener('click', f => {
    document.querySelector('#modal__reg').style.display="inline";
    document.querySelector('#modal__open').style.display="none";
})

