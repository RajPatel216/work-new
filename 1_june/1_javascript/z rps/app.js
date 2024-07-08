let userScore = 0;
let compScore = 0;

let choices = document.querySelectorAll(".choice");
const msg = document.querySelector("#msg");
const userScorePara = document.querySelector("#user-score");
const compScorePara = document.querySelector("#comp-score");

const drawGame = () => {
    msg.innerText = "game draw! play again";
    // console.log("game was draw");
    // msg.style.backgroundColor = "blue";
}

const showWinner = (userWin,userChoice,compChoice) => {
    if (userWin) {
        userScore++;
        userScorePara.innerText = userScore;
        msg.innerText = "you win! "+ userChoice +" beats    " + compChoice;
        msg.style.backgroundColor = "green";
        // console.log("you win!");
    }
    else {
        compScore++;
        compScorePara.innerText = compScore;
        msg.innerText = "you lose!"+userChoice+"  beats "+ compChoice;
        msg.style.backgroundColor = "red";
        // console.log("you lose!");
    }
};

const genCompChoice = () => {
    const options = ["rock", "paper", "scissors"];
    const randIdx = Math.floor(Math.random() * 3);
    return options[randIdx];
};

const playgame = (userChoice) => {
    console.log("user choice=", userChoice);
    
    const compChoice = genCompChoice();
    console.log("comp choice=", compChoice);

    if (userChoice === compChoice) {
        drawGame();
    }
    else {
        let userWin = true;
        if (userChoice === "rock") {
            userWin = compChoice === "paper" ? false : true;
        }
        else if (userChoice === "scissors") {
            userWin = compChoice === "rock" ? false : true;
        }
        else {
            userWin= compChoice === "scissors" ? false : true;
        } 
        showWinner(userWin,userChoice,compChoice);
    }

}

choices.forEach((choice) => {
    choice.addEventListener("click", () => {
        const userChoice = choice.getAttribute("id");
        playgame(userChoice);
     })
    
})