let userscore = 0;
let compscore = 0;

let choices = document.querySelectorAll(".choice");
let msg = document.querySelector("#msg");
let userpara = document.querySelector("#user-score")
let comppara=document.querySelector("#comp-score")

let drawgame = () => {
    msg.innerText = "draw game! play Again!!";
}

let showwinner = (userwin) => {
    if (userwin) {
        msg.innerText = "congo you won!";
        userscore++;
        userpara.innerText = userscore;
    }
    else {
        msg.innerText = "you lost !!!!";
        compscore++;
        comppara.innerText = compscore;
    }
    
}

let gencompchoice = () => {
    const option = ["rock", "paper", "scissors"];
    const randIdx = Math.floor(Math.random() * 3);
    return option[randIdx];
}

const playgame = (userchoice) => {
    console.log("user choice" + userchoice);
    
    let compchoice = gencompchoice();
    console.log("comp choice" + compchoice);

    if (compchoice == userchoice) {
        drawgame();
    }
    else {
        let userwin = true;
        if (userchoice == "paper") {
            userwin = compchoice == "rock" ? true:false;
        }
        else if (userchoice == "scissors") {
            userwin = compchoice == "paper" ? true:false;
        }
        else {
            userwin = compchoice = "scissors" ? true:false;
        }
        showwinner(userwin);
    }
    
};

choices.forEach((choice) => {
    choice.addEventListener("click", () => {
        let userchoice = choice.getAttribute("id")
        playgame(userchoice)
    })
})


















// let userscore = 0;
// let compscore = 0;

// let choices = document.querySelectorAll(".choice");
// let msg = document.querySelector("#msg");
// let userpara = document.querySelector("#user-score");
// let comppara = document.querySelector("#comp-score");

// const drawgame = () => {
//     msg.innerText = "game draw! play again!!";
// }

// const showwinner = (userwinn) => {
//     if (userwinn) {
//         msg.innerText = "you won !!!";
//         userscore++;
//         userpara.innerText = userscore;
//     }
//     else {
//         msg.innerText = "comp won !!!!!";
//         compscore++;
//         comppara.innerText = compscore;
//     }
// }

// let gencompchoice = () => {
//     let option = ["rock", "paper", "scissors"];
//     let randIdx = Math.floor(Math.random() * 3);
//     return option[randIdx];
// }

// let playgame = (userchoice) => {
//     console.log("userchoice", userchoice);

//     let compchoice = gencompchoice();
//     console.log("compchoice", compchoice);
    
//     if (compchoice == userchoice) {
//         drawgame();
//     }
//     else {
//         let userwin = true;
//         if (userchoice == "scissors") {
//             userwin = compchoice == "rock" ? false : true;
//         }
//         else if (userchoice == "paper") {
//             userwin = compchoice == "scissors" ? false : true;
//         }
//         else {
//             userwin = compchoice == "paper" ? false: true;
//         }
//         showwinner(userwin);
//     }
// }

// choices.forEach((choice) => {
//     choice.addEventListener("click", () => {
//         let userchoice = choice.getAttribute("id");
//         playgame(userchoice);
//     })
// })






// let userscore = 0;
// let compscore = 0;

// let choices = document.querySelectorAll(".choice");
// let msg = document.querySelector("#msg");
// let userscorepara = document.querySelector("#user-score");
// let compscorepara = document.querySelector("#comp-score");

// let drawgame = () => {
//     msg.innerText="game draw! play again";
// };

// let showwinner = (userwin) => {
//     if (userwin) {
//         msg.innerText = "you won!!";
//         userscore++;
//         userscorepara.innerText = userscore;
//     }
//     else {
//         msg.innerText = "comp won!!";
//         compscore++;
//         compscorepara.innerText = compscore;
//     }
// };

// let gencompchoice = () => {
//     let option = ["rock", "paper", "scissors"];
//     let randIdx = Math.floor(Math.random() * 3);
//     return option[randIdx];
//     }

// let playgame = (userchoice) => {
//     console.log("user choice : ", userchoice);

//     let compchoice = gencompchoice();
//     console.log("computer choice:", compchoice);

//     if (userchoice === compchoice) {
//         drawgame();
//     }
//     else {
//         let userwin = true;
//         if (userchoice == "rock") {
//             userwin  = compchoice == "paper" ? false : true;
//         }
//         else if (userchoice == "paper") {
//             userwin = compchoice == "scissors" ? false : true;
//         }
//         else {
//             userwin = compchoice == "rock" ? false : true;
//         }
//         showwinner(userwin);
//     }
// };


// choices.forEach((choice) => {
//     choice.addEventListener("click", () => {
//         let userchoice = choice.getAttribute("id");
//         playgame(userchoice);
//     })
// });