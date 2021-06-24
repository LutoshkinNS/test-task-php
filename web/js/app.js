const arrowUp = document.getElementById('arrow-up');

const showArrow = () => {
    if (window.pageYOffset > 200) {
        arrowUp.style.display = 'block';
    } else {
        arrowUp.style.display = 'none';
    }
}

const scrollTop = () => {
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 200) {
            arrowUp.style.display = 'block';
        } else {
            arrowUp.style.display = 'none';
        }
    })

    arrowUp.addEventListener('click', (e) => {
        window.scrollTo(0,0);
    })
}
showArrow()
scrollTop()

