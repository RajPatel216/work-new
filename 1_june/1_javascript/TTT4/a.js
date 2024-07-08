// let zupee = document.querySelectorAll(".box")
// let resetBtn = document.querySelector(".reset-btn")
// let newGameBtn=document.querySelector("#new-btn")
// let msgContainer=document.querySelector(".msg-container")
// let msg = document.querySelector("#msg")

// let turnO = true;
// let winPattern = [
//     [0, 1, 2],
//     [3, 4, 5],
//     [6, 7, 8],
//     [0, 4, 8],
//     [2, 4, 6],
//     [0, 3, 6],
//     [1, 4, 7],
//     [2, 5, 8],
// ];

// zupee.forEach((zup) => {
//     zup.addEventListener("click",()=> {
//         if(turnO) {
//             zup.innerText="O"
//             turnO = false;
//         }
//         else{
//             zup.innerText="X"
//              turnO = true;
//         }
//         zup.disabled = true;
//         checkWinner();
//     });
// });

// const checkWinner = () => {
//     for (pattern of winPattern) {
//         let p1 = zupee[pattern[0]].innerText;
//         let p2 = zupee[pattern[1]].innerText;
//         let p3 = zupee[pattern[2]].innerText;
    
//         if (p1 != "" && p2 != "" && p3 != "") {
//             if (p1 == p2 && p2 == p3) {
//                 showWinner(p1);
//            }
//         }
//     }
// }

// const showWinner=(winner)=> {
//     msg.innerText = "congrats winner is:" + winner;
//     msgContainer.classList.remove("hide")
//     disableBoxes();
// }

// const disableBoxes = () => {
//     for (let box of zupee) {
//         box.disabled = true;
//     }
// }

// const enableBoxes = () => {
//     for (let box of zupee) {
//         box.disabled = false;
//         box.innerText = "";
//     }
// }

// const resetGame = () => {
//     let turnO = true;
//     enableBoxes();
//     msgContainer.classList.add("hide");
// }

// newGameBtn.addEventListener("click", resetGame)
// resetBtn.addEventListener("click",resetGame)