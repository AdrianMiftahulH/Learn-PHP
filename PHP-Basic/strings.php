<?php
// this I will learn about String further / Di sini saya akan belajar tentang String lebih jauh lagi :)

// \n function to create a new line in the terminal

// strlen() function returns the length of a string. / strlen() fungsinya mengembalikan lagi jumlah string
echo strlen("Adrian Miftahul haq") . "\n"; // -> Output 19

// str_word_count() function counts the number of words in a string. / str_word_count() fungsinya menghitung jumlah kata di sebuah string 
echo str_word_count("Adrian Miftahul haq") . "\n"; // -> Output 3

// strrev() function reverses a string. / strrev() berfungsi untuk mengbalikan kata di sebuah string
echo strrev("Adrian :)") . "\n"; // -> Outputs ): nairdA

// strpos() function searches for a specific text within a string. If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE. / strpos() berfungsi untuk mencari sebuah teks yang spesifik dari sebuah string. Jika ketemu, maka akan hitung dari huruf awal sampai huruf awal di temukan. Jika tidak ketemu, maka di kembalikan nilai null (spasi di hitung)
echo strpos("Adrian Miftahul Haq", "Miftahul") . "\n"; // outputs 7

// str_replace() function replaces some characters with some other characters in a string. / str_replace() berfungsi untuk menganti karakter lain di dalam sebuah string

// echo str_replace("menemukan karakter", "penganti karakter", "Karakter")

echo str_replace("Janah", "Miftahul", "Adrian Janah"); // -> Outputs Adrian Miftahul
