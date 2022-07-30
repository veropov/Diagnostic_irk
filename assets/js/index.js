function eventTarget(arg) {
    document.querySelector(arg.model).addEventListener(arg.evt, arg.value)
}

//ОТКРЫТИЕ БЫСТРОЙ РЕГИСТРАЦИИ НАЖАТИЕМ НА КНОПКУ "ЗАПИСАТЬСЯ"
const reg = document.querySelector('.conteiner5');

eventTarget({ 
    model: '.button__slider', 
    evt: 'click', 
    value: () => {
        reg.style.display="flex";
        document.querySelector('#background').style.display="flex";
    }
})


//СОЗДАНИЕ СВОБОДНЫХ ДАТ ВРАЧЕЙ
const selectDoc = document.querySelectorAll('.elastic li');

selectDoc.forEach(Doc => {
    Doc.addEventListener('click', function() {
        const days = document.querySelectorAll('.days ul li');
        for (let i=0; i<days.length; i++) {
            days[i].style.borderColor = "rgb(175, 190, 231)";
            days[i].style.cursor="pointer";
                days[i].onclick = function() {
                    this.style.background = "rgb(175, 190, 231)";
            }
        }
    })
})


//ВЫБОР ФИЛИАЛОВ
const branchElastic = document.querySelectorAll('.elastic2 li a');
const textContentElastic2 = document.querySelector('.input2 label');

branchElastic.forEach(regFil => regFil.addEventListener('click', function() {
    elasticBlockTwo.classList.toggle("elastic-hidden")
    textContentElastic2.innerHTML = regFil.innerHTML
    })
)


//СВОРАЧИВАНИЕ СПИСКА ФИЛИАЛОВ
const elasticBlockTwo = document.querySelector('.elastic2');

eventTarget({ 
    model: '.input2', 
    evt: 'click', 
    value: () => {
        elasticBlockTwo.classList.toggle("elastic-hidden")
    }
})


//ВЫБОР ВРАЧЕЙ//
const textElastic = document.querySelectorAll('.elastic li a');
const textContentElastic = document.querySelector('.input label')

textElastic.forEach(regDoc => regDoc.addEventListener('click', function() {
    elasticBlock.classList.toggle("elastic-hidden")
    textContentElastic.innerHTML = regDoc.innerHTML
    })
)


//СВОРАЧИВАНИЕ СПИСКА ВРАЧЕЙ
const elasticBlock = document.querySelector('.elastic');

eventTarget({ 
    model: '.input', 
    evt: 'click', 
    value: () => {
        elasticBlock.classList.toggle("elastic-hidden")
    }
})


//СОЗДАНИЕ КАЛЕНДАРЯ
const monthsDays = document.querySelector('.days');
const date = new Date();
const months = [
    "Январь",
    "Февраль",
    "Март",
    "Апрель",
    "Май",
    "Июнь",
    "Июль",
    "Август",
    "Сентябрь",
    "Октябрь",
    "Ноябрь",
    "Декабрь"
];

let dataList = document.querySelector('.date h2');
let dataNum = document.querySelector('.date p');
let swipeTop = document.querySelector('#swipe__top');
let swipeDown = document.querySelector('#swipe__down');

dataList.innerHTML = months[date.getMonth()];
dataNum.innerHTML = date.toDateString();

//ОТКРЫТИЕ КАЛЕНДАРЯ В БЫСТРОЙ РЕГИСТРАЦИИ
let elasticData = document.querySelector('#elastic__data');
let data = document.querySelector('#month__reg');
let aData = 1;

elasticData.addEventListener('click', function dataHidden() {
if (aData==1) {
    data.style.display="flex";
    return aData = 0;
    } else {
        data.style.display="none";
        return aData = 1;
    }
});

let days = " ";
for (i=1; i<=31; i++) {

}

//Левый банер - адаптив

const banerLeft = document.querySelector('.content__left');


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
