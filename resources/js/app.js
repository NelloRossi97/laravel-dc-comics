import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const deleteButton = document.getElementById('deleteButton');
const backButton = document.getElementById('backButton');

let visible = false;
const modal = document.querySelector('.my-modal');

deleteButton.addEventListener('click', toggleVisibility);
backButton.addEventListener('click', toggleVisibility);

function toggleVisibility() {
    console.log(visible);
    visible = !visible;
    if (visible) {
        modal.classList.toggle('not-visible');
    }
}
