const dropDown = document.querySelectorAll(".dropdown_button");

dropDown.forEach((drop) => {
  drop.addEventListener("click", () => {
    let dropMenu = drop.children[1];

    dropDown.forEach((close) => {
      if (close != drop) {
        let dropRemove = close.children[1];
        dropRemove.classList.add("hidden");
      }
    });

    console.log(dropMenu);

    dropMenu.classList.toggle("hidden");
  });
});

const acordionButtons = document.querySelectorAll(".accordion-item button");

acordionButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const isExpanded = button.getAttribute("aria-expanded") === "true";
    button.setAttribute("aria-expanded", !isExpanded);
  });
});
