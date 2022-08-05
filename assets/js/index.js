function eventTarget(arg) {
    document.querySelector(arg.model).addEventListener(arg.evt, arg.value)
}

//Левый банер - адаптив

const banerLeft = document.querySelector('.content__left')


//Ховер на кнопке "подробнее" при наведение на банер слева
eventTarget({ 
    model: '.content__left', 
    evt: 'mouseenter', 
    value: () => {
        document.querySelector('.button__content__left').style.background="#5099dd"
        document.querySelector('.button__content__left').style.color="white"
    }
})

eventTarget({ 
    model: '.content__left', 
    evt: 'mouseleave', 
    value: () => {
        document.querySelector('.button__content__left').style.background="transparent"
        document.querySelector('.button__content__left').style.color="black"
    }
})

//Правый банер
eventTarget({ 
    model: '.content__right', 
    evt: 'mouseenter', 
    value: () => {
        document.querySelector('.button__content__right').style.background="#5099dd"
        document.querySelector('.button__content__right').style.color="white"
    }
})

eventTarget({ 
    model: '.content__right', 
    evt: 'mouseleave', 
    value: () => {
        document.querySelector('.button__content__right').style.background="transparent"
        document.querySelector('.button__content__right').style.color="black"
    }
})

//ВЫБОР ФИЛИАЛОВ

const branchWidth = document.querySelector('.branch').offsetWidth
let count = 0;

const back = document.querySelector('.arrow_left_circle')
const next = document.querySelector('.arrow_right_circle')


//Нажатие на иконку вперед
eventTarget({
    model: '.arrow_right_circle',
    evt: 'click',
    value: () => {
        count++
        document.querySelectorAll('.branch').forEach(branch => {
            branch.style.transform = 'translate(-' + 300 * count + 'px)' //300 пикселей - расстояние между двумя дивами филиалов
            back.style.fill = 'rgb(104, 104, 104)'
            back.addEventListener('mouseenter', () => { //Работа со стилями иконки назад (Без css)
                back.style.fill ='#2779c7'
                back.style.cursor = 'pointer' 
            })
            document.querySelector('.arrow_left_circle').addEventListener('mouseleave', () => {
                back.style.fill = 'rgb(104, 104, 104)'
                back.style.cursor = 'default' 
            })
            if (count >= document.querySelectorAll('.branch').length -4) { //Кол-во кликов = количеству филиалов (минус 4 на главном экране)
                count = document.querySelectorAll('.branch').length -4
                next.style.fill = 'rgb(201, 201, 201)'
                next.style.cursor = 'default' 

                    next.addEventListener('mouseenter', () => { //Работа со стилями иконки вперед (Без css)
                    next.style.fill = 'rgb(201, 201, 201)'
                    next.style.cursor = 'default' 
                })
                document.querySelector('.arrow_right_circle').addEventListener('mouseleave', () => {
                    next.style.fill = 'rgb(201, 201, 201)'
                    next.style.cursor = 'default' 
                })
                
            }
        }) 
    }
})

//Нажатие на иконку назад
eventTarget({
    model: '.arrow_left_circle',
    evt: 'click',
    value: () => {
        count-- 
        document.querySelectorAll('.branch').forEach(branch => {
            branch.style.transform = 'translate(-' + 300 * count + 'px)'
            next.style.fill = 'rgb(104, 104, 104)'
            next.addEventListener('mouseenter', () => { //Работа со стилями иконки вперед (Без css)
                next.style.fill = '#2779c7'
                next.style.cursor = 'pointer' 
            })
            document.querySelector('.arrow_right_circle').addEventListener('mouseleave', () => {
                next.style.fill = 'rgb(104, 104, 104)'
                next.style.cursor = 'default' 
            })

            if (count <= 0) { //Если кол-во кликов меньше нуля, слайдер не двигается
                count = 0
                back.style.fill = 'rgb(201, 201, 201)'
                back.style.cursor = 'default' 
                
                back.addEventListener('mouseenter', () => { //Работа со стилями иконки назад (Без css)
                    back.style.fill = 'rgb(201, 201, 201)'
                    back.style.cursor = 'default' 
                })
                document.querySelector('.arrow_left_circle').addEventListener('mouseleave', () => {
                    back.style.fill = 'rgb(201, 201, 201)'
                    back.style.cursor = 'default' 
                })
            }   
        }) 
    }
})


