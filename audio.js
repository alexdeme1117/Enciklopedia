function Play() {
    myAudioElement = new Audio("./anthem.wav");
    myAudioElement.addEventListener("canplaythrough", (event) => {
        myAudioElement.play();
    });
}