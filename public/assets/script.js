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

const popup = document. ('.move')
const background = document.querySelector('.background')
const close = document.querySelector('.close')

popup.addEventListener('click', openPopup);

close.addEventListener('click', closePopup);

function openPopup() {
    background.style.display = 'flex';
}

function closePopup() {
    background.style.display = 'none';
}   