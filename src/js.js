
document.addEventListener("DOMContentLoaded", function (){
    const btm = document.querySelector('.btn');
    const str = document.querySelector('.str');
    const text = document.querySelector('.text');

    text.addEventListener('click', ev=>{
        let t = ev.currentTarget;
        let r = document.createRange();
        r.selectNode(t);
        document.getSelection().addRange(r);
        document.execCommand('copy');
        btm.textContent = 'OK';
    })
    str.addEventListener('click', ev=>{
        let t = ev.currentTarget;
        let r = document.createRange();
        r.selectNode(t);
        document.getSelection().addRange(r);
        document.execCommand('copy');
        btm.textContent = 'OK';
    })
});