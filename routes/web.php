<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $benvenuto = "Benvenuto da Luigi";
    return view('home', compact('benvenuto'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/menu', function () {
    $pizze = [
        [
            'nome' => 'Margherita',
            'prezzo' => 7.00,
            'categoria' => 'Classica',
            'ingredienti' => ['Pomodoro San Marzano', 'Mozzarella di Bufala', 'Basilico fresco'],
            'immagine' => 'https://images.unsplash.com/photo-1574071318508-1cdbad80ad38?q=80&w=500',
            'popolare' => true
        ],
        [
            'nome' => 'Diavola',
            'prezzo' => 9.50,
            'categoria' => 'Piccante',
            'ingredienti' => ['Pomodoro', 'Mozzarella', 'Salame piccante', 'Peperoncino'],
            'immagine' => 'https://images.unsplash.com/photo-1593504049359-74330189a355?q=80&w=500',
            'popolare' => false
        ],
        [
            'nome' => 'Quattro Formaggi',
            'prezzo' => 10.00,
            'categoria' => 'Bianca',
            'ingredienti' => ['Gorgonzola', 'Fontina', 'Parmigiano', 'Mozzarella'],
            'immagine' => 'https://images.unsplash.com/photo-1510693206972-df098062cb71?q=80&w=500',
            'popolare' => true
        ],
        [
            'nome' => 'Boscaiola',
            'prezzo' => 11.00,
            'categoria' => 'Specialità',
            'ingredienti' => ['Mozzarella', 'Funghi porcini', 'Salsiccia', 'Prezzemolo'],
            'immagine' => 'https://images.unsplash.com/photo-1541745537411-b8046dc6d66c?q=80&w=500',
            'popolare' => false
        ]
    ];

    return view('menu', compact("pizze"));
})->name('menu');
