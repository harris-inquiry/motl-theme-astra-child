// @ts-ignore
import Masonry from "masonry-layout";

window.addEventListener("load", function() { console.log("loaded here man") });

window.addEventListener("load", function() {
    let grid = document.getElementById("masonry-grid");
    let masonry = new Masonry(grid, {
        itemSelector: '.grid-item',
        columnWidth: '.grid-item'
    })
    masonry.layout()
})
