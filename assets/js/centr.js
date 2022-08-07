

//наведение мышки на фотографию врача - появление кнопки//

const imgStab = document.querySelectorAll('.img__shtab')
const button = document.querySelectorAll('.button__doc__shtab')
const doctors = document.querySelectorAll('.branch__doctor__filter')

for (let i = 0; i<=imgStab.length; i++) {
    imgStab[i].addEventListener('mouseenter', () => 
    button[i].style.display="inline-flex")

    imgStab[i].addEventListener('mouseleave', () => 
    button[i].style.display="none")
}






