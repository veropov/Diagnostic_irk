const backBlur = document.querySelector('#background')

function eventTarget(arg) {
    document.querySelector(arg.model).addEventListener(arg.evt, arg.value)
}

//МОДАЛЬНОЕ ОКНО ВЫБОРА ГОРОДА//

eventTarget({ 
    model: '#svg_city', 
    evt: 'click', 
    value: () => {
    document.querySelector('#modal_city').style.display="flex"
    document.querySelector('#modal_reg').style.display="none"
    backBlur.style.display="flex" 
    }
})

eventTarget({ 
    model: '#modal_esc',
    evt: 'click', 
    value: () => {
        document.querySelector('#modal_city').style.display="none"
        backBlur.style.display="none"
    }
})

eventTarget({ 
    model: '#modal_open',
    evt: 'click', 
    value: () => {
        document.querySelector('#modal_city').style.display="none"
        backBlur.style.display="none"
    }
})

//МОДАЛЬНОЕ ОКНО РЕГИСТРАЦИИ//

const radio = document.querySelector('#card-open');
eventTarget({ 
    model: '#svg_reg',
    evt: 'click', 
    value: () => {
        document.querySelector('#modal_reg').style.display="flex"
        document.querySelector('#modal__open').style.display="inline"
        document.querySelector('#modal__reg').style.display="none"
        backBlur.style.display="flex"
        radio.checked = true;
        document.querySelector('#modal_city').style.display="none"
    }
})

eventTarget({ 
    model: '#modal_esc-2',
    evt: 'click', 
    value: () => {
        document.querySelector('#modal_reg').style.display="none"
        backBlur.style.display="none"
    }
})

eventTarget({ 
    model: '#modal_open-2',
    evt: 'click', 
    value: () => {
        document.querySelector('#modal_reg').style.display="none"
        backBlur.style.display="none"
    }
})

//ВЫБОР РЕГИСТРАЦИИ ИЛИ АВТОРИЗАЦИИ//

eventTarget({ 
    model: '#card-open',
    evt: 'click', 
    value: () => {
        document.querySelector('#modal__open').style.display="inline"
        document.querySelector('#modal__reg').style.display="none"
    }
})

eventTarget({ 
    model: '#card-reg',
    evt: 'click', 
    value: () => {
        document.querySelector('#modal__reg').style.display="inline"
        document.querySelector('#modal__open').style.display="none"
    }
})
