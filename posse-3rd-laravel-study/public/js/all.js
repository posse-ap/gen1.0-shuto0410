function checkAnswer(question_number,choice_number){
    if(choice_number!=0){
        document.getElementById(question_number+"-"+choice_number).classList.add("quiz--false");
        document.getElementById(question_number+"-answer").classList.add("answer--false");
    }else{
        document.getElementById(question_number+"-answer").classList.add("answer--true");
    }
    document.getElementById(question_number+"-0").classList.add("quiz--true");
    document.getElementById(question_number+"-answer-box").classList.add("is__show");
}