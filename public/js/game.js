/*function checkAnswer() {
    console.log(el);
    let answerInput = document.getElementById('answer');
    console.log(answerInput.value);
}

document.getElementById("answerbutton").addEventListener("click", checkAnswer(el));
document.getElementById("answer").addEventListener("keydown", checkAnswer(el));
*/


let buttonAnswer = document.getElementById('answerButton');


buttonAnswer.addEventListener('click', () => {
    console.log("click");
    let answerInput = document.getElementById('answer');
    let rightAnswer = document.getElementById('rightAnswer');
    console.log(answerInput.value);
    if(answerInput.value == rightAnswer.textContent){
        console.log("Du gissade rätt");
        $("#youreRight").show();
        
    }else{
        console.log("Du gissade fel");
        console.log(answerInput.value);
        console.log(rightAnswer.textContent);
        $("#youreWrong").show();
    }

});