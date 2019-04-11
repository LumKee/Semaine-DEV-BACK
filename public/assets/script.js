const $navigation = document.querySelector('.navMenu')
const $items = $navigation.querySelectorAll('ul li')
let state = $navigation.dataset.state

for (let i = 0; i < $items.length; i++) {
    const current = $navigation.querySelector('.'+state)
    $items[i].classList.remove('active')
    current.classList.add('active')
}
