let boxes = document.querySelectorAll(".box");
let msg = document.querySelector("#msg");
let msgContainer = document.querySelector(".msgContainer");
let resetgame = document.querySelector(".reset-btn");
let newgame = document.querySelector("#new-btn");

let turnO = true;
const winpattern = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 4, 8],
    [2, 4, 6],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
];

boxes.forEach((box) => {
    box.addEventListener("click", () => {
        if (turnO) {
            box.innerText = "O";
            turnO = false;
        }
        else {
            box.innerText = "X";
            turnO = true;
        }
        box.disabled = true;
        checkwinner();
    });
});

let checkwinner = () => {
    for (let pattern of winpattern) {
        let p1 = boxes[pattern[0]].innerText;
        let p2 = boxes[pattern[1]].innerText;
        let p3 = boxes[pattern[2]].innerText;
        
        if (p1 != "" && p2 != "" && p3 != "") {
            if (p1 == p2 && p2 == p3) {
                showwinner(p1);
            };
        };  
    };
};

let showwinner = (win) => {
    msg.innerText = "congrats winner is : " + win;
    msgContainer.classList.remove("hide");
    boxdisabled();
};

let boxdisabled = () => {
    for (let box of boxes) {
        box.disabled = true;
    };
};

let enablebox = () => {
    for (let box of boxes) {
        box.disabled = false;
        box.innerText = "";
    };
};

let resetGame = () => {
    enablebox();
    msgContainer.classList.add("hide");
    turnO = true;
};

resetgame.addEventListener("click", resetGame);
newgame.addEventListener("click", resetGame);