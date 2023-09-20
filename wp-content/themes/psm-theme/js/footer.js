document.addEventListener("DOMContentLoaded", ready);

function ready(){
    const accordion_item = document.getElementsByClassName('accordion_item');
    const accordion_content = document.getElementsByClassName('accordion_content');
    const accordion_heading_svg = document.getElementsByClassName('accordion_heading_svg');

    for (let i = 0; i < accordion_item.length; i++) {
        accordion_item[i].addEventListener('click', () => toggleItem(i), false);
    }

    function toggleItem(index) {
        let currentElementClassName = accordion_content[index].className;

        if (currentElementClassName === 'accordion_content close') {
            accordion_content[index].className = 'accordion_content open';
            accordion_heading_svg[index].style['transform'] = 'rotate(180deg)';

        } else {
            accordion_content[index].className = 'accordion_content close';
            accordion_heading_svg[index].style['transform'] = 'rotate(360deg)';
        }


        for (let i = 0; i < accordion_content.length; i++) {
            if (index !== i) {

                accordion_content[i].className = 'accordion_content close';
                accordion_heading_svg[i].style['transform'] = 'rotate(360deg)';
            }
        }

    }

}

