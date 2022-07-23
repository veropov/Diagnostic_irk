//ОТКРЫТИЕ БЫСТРОЙ РЕГИСТРАЦИИ НАЖАТИЕМ НА КНОПКУ "ЗАПИСАТЬСЯ"
const reg = document.querySelector('.conteiner5');
const regClick = document.querySelector('.button__slider');

regClick.addEventListener('click', btreg);

function btreg(event) {
    reg.style.display="flex";
    document.querySelector('#background').style.display="flex";
}


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
const blockTwo = document.querySelector('.input2');

blockTwo.addEventListener("click", function(evt) {
elasticBlockTwo.classList.toggle("elastic-hidden");
});


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
const block = document.querySelector('.input');

block.addEventListener("click", function(evt) {
elasticBlock.classList.toggle("elastic-hidden");
});


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