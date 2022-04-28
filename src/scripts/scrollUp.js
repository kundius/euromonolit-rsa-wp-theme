import { throttle } from "./throttle";

const buttons = document.querySelectorAll(".scroll-up") || [];

buttons.forEach((button) => {
  const onScroll = () => {
    const scrollPosition =
      document.documentElement.scrollTop || document.body.scrollTop;
  
    if (scrollPosition > 300) {
      button.classList.add('scroll-up_visible')
    } else {
      button.classList.remove('scroll-up_visible')
    }
  };

  window.addEventListener("scroll", throttle(onScroll, 100));

  button.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});
