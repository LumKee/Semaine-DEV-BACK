//Navigation

const $navigation = document.querySelector('.navMenu')
const $items = $navigation.querySelectorAll('ul li')
let state = $navigation.dataset.state

for (let i = 0; i < $items.length; i++) {
    const current = $navigation.querySelector('.'+state)
    $items[i].classList.remove('active')
    current.classList.add('active')
}

//popup

const popup = document.querySelectorAll('.move')
const background = document.querySelector('.background')
const close = document.querySelector('.close')

console.log(popup)

function openPopup() {
    background.style.display = 'flex'
    console.log('ok')
}

function closePopup() {
    background.style.display = 'none'
}   

for (const pop of popup) {
    pop.addEventListener('click', ()=>{
        openPopup()
    })
}

close.addEventListener('click', closePopup)
