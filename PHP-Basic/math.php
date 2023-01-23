<?php
// === pi() ===
// The pi() function returns the value of PI
echo (pi()) . "\n"; // returns 3.1415926535898

// === min() and max()
// function can be used to find the lowest or highest value in a list argumenta / berfungsi untuk menemukan sebuah angka terendah atau tertinggi di sebuah list argument 

echo (min(0, 150, 30, 20, -8, -200)) . "\n";  // returns -200
echo (max(0, 150, 30, 20, -8, -200)) . "\n";  // returns 150

// === abs() ===
// The abs() function returns the absolute (positive) value of a number / berfungsi untuk mengembalikan nilai value angka menjadi positif
echo abs(-65) . "\n"; // -> output return 65 

// === sqrt()
//The sqrt() function returns the square root of a number / berfungsi untuk mengemablaikan nilai akar kuadrat
echo sqrt(64) . "\n"; // -> output return 8

// === round() ===
//The round() function rounds a floating-point number to its nearest integer / berfungsi untuk membulatkan sebuah float menjadi int terdekat
echo (round(1.60)) . "\n";  // -> output returns 2
echo (round(1.49)) . "\n";  // -> output returns 1

// == rand() === 
// The rand() function generates a random number / berfungsi untuk menggenerate sebuah angka acak
echo (rand(10, 100)) . "\n"; // -> return number from 10 to 100, example output -> 23 
