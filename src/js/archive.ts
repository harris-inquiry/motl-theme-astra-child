// @ts-ignore
import Masonry from "masonry-layout";

window.addEventListener("load", function() {
    let grid = document.getElementById("masonry-grid");
    let masonry = new Masonry(grid, {
        itemSelector: '.grid-item',
        columnWidth: '.grid-item'
    });
    masonry.layout();

    // let repeatMasonryRedraw = 0;
    // repeatMasonryRedraw = window.setInterval(() => repeatedRedrawMasonry(grid, repeatMasonryRedraw),
    //  3000)

    window.setTimeout(() => {
        masonry.layout();
	console.log("Masonry Redraw");
    }, 4000);

})


function repeatedRedrawMasonry(domSource, intervalMatcher) {
// interval masonry redraws
}

