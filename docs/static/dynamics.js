$(function() {
    const navbar = $('nav#titlebar');
    const ogb = $('#openguidesbtn'), cgb = $('#closeguidesbtn');
    const guidesbar = $('nav#guidesbar');
    const hidenav = e => guidesbar.hide(500);
    ogb.click(e => guidesbar.toggle(500));
    cgb.click(hidenav);

    const navclick = function(e) {
        if (e.target.tagName === 'a' || e.target.tagName === 'A') return;
        const targets = $(this).find('a');
        if (targets.length < 1) return;
        e.preventDefault();
        $(this).find('a')[0].click();
    };

    for (const li of guidesbar.find('li')) {
        $(li).click(navclick);
    }
    $('#content').click(hidenav);
});
