import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const button = document.getElementById('deleteComic');
let visible = false;
button.addEventListener('click', toggleVisibility);
function toggleVisibility() {
            console.log(visible);
            visible = !visible;
        }
