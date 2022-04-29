import { throttle } from "./throttle";

const header = document.querySelector(".header");
const scrollUp = document.querySelector(".scroll-up");

if (scrollUp) {
  scrollUp.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
}

const onScroll = () => {
  const scrollPosition =
    document.documentElement.scrollTop || document.body.scrollTop;

  if (scrollUp) {
    if (scrollPosition > 300) {
      scrollUp.classList.add("scroll-up_visible");
    } else {
      scrollUp.classList.remove("scroll-up_visible");
    }
  }

  if (header) {
    if (scrollPosition > 27) {
      header.classList.add("header_fixed");
    } else {
      header.classList.remove("header_fixed");
    }
  }
};

window.addEventListener("scroll", onScroll);
// window.addEventListener("scroll", throttle(onScroll, 10));
