let jsInputList = document.querySelectorAll('.js-input');
for (let i = 0; i < jsInputList.length; i++) {
    jsInputList[i].addEventListener('focus', function(e) {
        e.stopPropagation()
        e.target.parentElement.style.border = '1px solid #6E41E2';
        e.target.nextElementSibling.classList.add('active');
    })
    jsInputList[i].addEventListener('blur', function(e) {
        e.stopPropagation()
        if(e.target.value == '') {
            e.target.parentElement.style.border = 'none'
            e.target.nextElementSibling.classList.remove('active');
        }
    })
}