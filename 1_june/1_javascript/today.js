let btn = document.querySelector("#btn");
let body = document.querySelector("body");
let cur = "light";

btn.addEventListener("click",() => {
    if (cur === "light") {
        cur = "dark";
        body.classList.add("dark");
        body.classList.remove("dark");
    }
    else {
        cur = "light";
        body.classList.add("light");
        body.classList.remove("light");
    }

    console.log(cur)
})