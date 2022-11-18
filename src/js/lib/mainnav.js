export function init() {
 
    const button = document.getElementById('hamburger')

    button.addEventListener("click", e => {
        console.log(button.classList)
        if(button.classList.contains('closed')) {
            button.classList.add('open');
            button.classList.remove('closed');
        } else {
            button.classList.add('closed');
            button.classList.remove('open');
        }
    });
}
