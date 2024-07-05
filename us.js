let sections= document.querySelectorAll('section')
const news= 'news';

window.onscroll=()=> {
    sections.forEach(sec=>{
    let top=window.scrollY;
    let offset=sec.scrollTop -100;
    let height=sec.scrollHeight;

    if (top=>offset && top<offset+height) {
        sec.classList.add('show-animate');
    }
    else{
        sec.classList.remove('show-animate');

    }
})
}