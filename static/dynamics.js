$(function() {
    $.get('/data/guides.json', function (pages) {
        const navbar = $('nav#titlebar');
        const ogb = $('<button id="openguidesbtn" />'), cgb = $('<button id="closeguidesbtn" />');
        const guidesbar = $('<nav id="guidesbar"><div class="nav-body"><div class="nav-top"><h2>PvP Guides</h2></div><hr /></div></nav>');
        ogb.click(function(e) {
            guidesbar.toggle(500);
        });
        const hidenav = function (e) {
            guidesbar.hide(500);
        }
        cgb.click(hidenav);
        guidesbar.find('.nav-top').append(cgb);

        const navlist = $('<ul class="nav-bottom" />');
        guidesbar.find('.nav-body').append(navlist);
        const navclick = function(e) {
            if (e.target.tagName.toLowerCase() === 'a') return;
            const targets = $(this).find('a');
            if (targets.length < 1) return;
            e.preventDefault();
            $(this).find('a')[0].click();
        };

        for (const page of Object.keys(pages)) {
            const li = $('<li />'), a = $('<a />');
            navlist.append(li);
            li.append(a);
            li.click(navclick);
            a.text(page);
            a.attr('href', pages[page]);
        }
        $('#content').click(hidenav);
        navbar.append(guidesbar);
        navbar.append(ogb);
    }, 'json');
});
