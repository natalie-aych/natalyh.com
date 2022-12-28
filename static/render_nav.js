const pages = {
    "lightning": "/lightning.html",
    "madness": "/madness.html",
    "corruption": "/corruption.html",
};
const sandbox = $('<div/>');
document.write('<ul class="nav-bottom">');
for (const page of Object.keys(pages)) {
    document.write('<li><a href="'+sandbox.text(pages[page]).html()+'">'+sandbox.text(page).html()+'</a></li>')
}
