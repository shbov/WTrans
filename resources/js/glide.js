import Glide from "@glidejs/glide";

let glides = document.querySelectorAll(".glide"),
    settings = { type: "slider", startAt: 0, perView: 3 };

glides.forEach((item) => {
    new Glide(item, settings).mount();
});
