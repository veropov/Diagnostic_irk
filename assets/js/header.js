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

//Проверка пароля при регистрации
eventTarget({ 
    model: '#modal_esc-2',
    evt: 'click', 
    value: () => { 
        if (document.querySelector('#password__reg').value == document.querySelector('#password__return').value
        && document.querySelector('#mail__reg').value != '') {
        document.querySelector('#modal_reg').style.display="none"
        backBlur.style.display="none"
        } else if (document.querySelector('#password__reg').value == '' 
        && document.querySelector('#password__return').value == '' 
        && document.querySelector('#mail__reg').value == '') {
            document.querySelector('#modal_reg').style.display="flex"
            backBlur.style.display="flex" 
            } else alert('Пароли не совпадают')
    }
})

//Подтверждение пароля при входе
eventTarget({ 
    model: '#modal_open-2',
    evt: 'click', 
    value: () => {
        if (document.querySelector('#password').value == '121257' && document.querySelector('#mail').value == 'vyacheslav.eropov@yandex.ru') {
        document.querySelector('#modal_reg').style.display="none"
        backBlur.style.display="none"
        } else if (
            document.querySelector('#password').value == '' && document.querySelector('#mail').value == '') {
                document.querySelector('#modal_reg').style.display="flex"
                backBlur.style.display="flex"
            } else alert('Введены неверный пароль или почта')
    }
})

console.log(document.querySelector('#password'))


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

const widthMenu = document.querySelector('.conteiner2').offsetWidth
const HeaderCentr = document.querySelector('#HeaderCentr')
const HeaderDoc = document.querySelector('#HeaderDoc')

setTimeout(() => {
    if (widthMenu < 1116) {
        HeaderCentr.style.display = 'none'
        HeaderDoc.style.display = 'none'
    } else {
        HeaderCentr.style.display = 'inline-flex'
        HeaderDoc.style.display = 'inline-flex'
    }
}, 1000)

