(function() {
    const ogb = document.querySelector('#openguidesbtn'),
        cgb = document.querySelector('#closeguidesbtn');
    const guidesbar = document.querySelector('nav#guidesbar');
    const pagebody = document.querySelector('#content');

    const hidenav = () => guidesbar.classList.add('closed');
    const togglenav = () => guidesbar.classList.toggle('closed');

    const navclick = function(e) {
        if (e.target.tagName === 'a' || e.target.tagName === 'A') return;
        const target = this.querySelector('a');
        if (target === null) return;
        e.preventDefault();
        target.click();
    };

    ogb.addEventListener('click', togglenav);
    cgb.addEventListener('click', hidenav);
    for (const li of guidesbar.querySelectorAll('li')) {
        li.addEventListener('click', navclick);
    }
    pagebody.addEventListener('click', hidenav);
})();
