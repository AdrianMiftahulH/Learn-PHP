<?php
/*The switch statement is used to perform different actions based on different conditions.*/

$favPet = "Dog";

switch ($favPet) {
    case 'Cat':
        echo "I have a pet, namely a Cat";
        break;
    case 'Humster':
        echo "I have a pet, namely a Humster";
        break;
    case 'Cock':
        echo "I have a pet, namely a Cock";
        break;
    case 'Dog':
        echo "I have a pet, namely a Dog";
        break;
    default:
        echo "Sorry, I don't have pets :(";
        break;
}
