let boxes = document.querySelectorAll(".box")
let resetBtn = document.querySelector(".reset-btn")
let newGameBtn = document.querySelector("#new-btn")
let msgContainer = document.querySelector(".msg-container")
let msg=document.querySelector("#msg")

let turnX = true;
const winpattern=[
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6],
]

boxes.forEach((boo) => {
    boo.addEventListener("click", () => {
        if (turnX) {
            boo.innerText = "X";
            turnX = false;
        }
        else {
            boo.innerText = "O";
            turnX = true;
        }
        boo.disabled = true;
        checkwinner();
    });
});

const checkwinner = () => {
    for (let pattern of winpattern) {
        let p1 = boxes[pattern[0]].innerText;
        let p2 = boxes[pattern[1]].innerText;
        let p3 = boxes[pattern[2]].innerText;
        
        if (p1 != "" && p2 != "" && p3 != "") {
            if (p1 == p2 && p2 == p3) {
                showwinner(p1);
            }
        }
    }
}

const showwinner = (win) => {
    msg.innerText = "congrats winner is: " + win;
    msgContainer.classList.remove("hide");
    disableboxes();
}

const disableboxes = () => {
    for (let box of boxes) {
        box.disabled = true;
    }
}

const enableboxes = () => {
    for (let box of boxes) {
        box.disabled = false;
        box.innerText = "";
    }
}

const resetGame = () => {
    let turnX = true;
    enableboxes();
    msgContainer.classList.add("hide")
}

newGameBtn.addEventListener("click", resetGame)
resetBtn.addEventListener("click",resetGame)

