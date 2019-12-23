function toggleHide(id) {
    var el = $(id)[0];
    el.style.display = (el.style.display == 'none') ? 'block' : 'none'
}

function toggleCut(id) {
    var el = $(id);
    el.toggleClass("ellipsis");
}