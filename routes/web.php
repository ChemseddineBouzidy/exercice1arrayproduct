<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function ( 
    $users =[
        [
            'id'=>1,
            'name' => 'chems',
            'email' => 'chems@gmail.com',
            'status' => true
        ],
        [
            'id'=>2,
            'name' => 'Ziad',
            'email' => 'Ziad@gmail.com',
            'status' => false
        ],
        [
            'id'=>3,
            'name' => 'ilyass',
            'email' => 'ilyass@gmail.com',
            'status' => false
        ],
        [
            'id'=>4,
            'name' => 'kamal',
            'email' => 'kamal@gmail.com',
            'status' => true
        ],
        [
            'id'=>5,
            'name' => 'Jhonas',
            'email' => 'Jhonas@gmail.com',
            'status' => true
        ],
    ],
    $products =[
        [
            'id' => 1,
        'name' => 'Apple iPhone 15',
        'description' => 'Le dernier modèle d\'iPhone avec des performances exceptionnelles et un design élégant.',
        'image' => 'https://raw.githubusercontent.com/hdpngworld/HPW/main/uploads/65038654434d0-iPhone%2015%20Pro%20Natural%20titanium%20png.png',
        'price' => 999.99,
        'isAvailable' => true
        ],
        [
            'id' => 2,
            'name' => 'Samsung Galaxy S23',
            'description' => 'Le Samsung Galaxy S23 offre une performance rapide et une caméra impressionnante.',
            'image' => 'https://images.samsung.com/is/image/samsung/p6pim/n_africa/2302/gallery/n-africa-galaxy-s23-s916-sm-s916bzebmwd-534844091?imbypass=true',
            'price' => 899.99,
            'isAvailable' => false
        ],
        [
            'id' => 3,
        'name' => 'Sony WH-1000XM5',
        'description' => 'Casque Bluetooth avec réduction de bruit active et son de haute qualité.',
        'image' => 'https://d1ncau8tqf99kp.cloudfront.net/converted/103364_original_local_1200x1050_v3_converted.webp',
        'price' => 349.99,
        'isAvailable' => true
        ],
        [
            'id' => 4,
        'name' => 'Dell XPS 13',
        'description' => 'Un ordinateur portable ultra-fin avec des performances exceptionnelles.',
        'image' => 'https://mediazone.ma/uploads/images/products/13617/13617-ac6yTnk5.webp',
        'price' => 1299.00,
        'isAvailable' => true
        ],
        [
            'id' => 5,
        'name' => 'Apple MacBook Air M2',
        'description' => 'Le MacBook Air avec la puce M2, offrant des performances ultra-rapides.',
        'image' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mba13-midnight-select-202402?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1708367688034',
        'price' => 1199.99,
        'isAvailable' => false
        ],
        [
            'id' => 6,
            'name' => 'Smartphone X10',
            'description' => 'Smartphone haut de gamme avec écran AMOLED de 6,5 pouces et caméra 48MP.',
            'image' => 'https://m.media-amazon.com/images/I/71z3vjBK3bL._AC_SL1029_.jpg',
            'price' => 799.99,
            'isAvailable' => true
        ],
        [
            'id' => 7,
            'name' => 'Casque Audio Pro',
            'description' => 'Casque sans fil avec réduction de bruit et son haute définition.',
            'image' => 'https://www.materielmaroc.com/wp-content/uploads/2022/08/DT990-PRO-250OHM.jpg',
            'price' => 199.99,
            'isAvailable' => true
        ],
        [
            'id' => 8,
            'name' => 'Ordinateur Portable Pro 15',
            'description' => 'Ordinateur portable puissant avec processeur Intel i7 et 16GB de RAM.',
            'image' => 'https://evotrading.ma/wp-content/uploads/2023/04/ordinateur-portable-asus-zenbook-pro-15-90nb0v92-m00he0.jpg',
            'price' => 1299.99,
            'isAvailable' => false
        ],
        [
            'id' => 9,
            'name' => 'Montre Connectée FitTrack',
            'description' => 'Montre intelligente avec suivi de santé, fréquence cardiaque et GPS intégré.',
            'image' => 'https://fr.hama.com/pics/specials/h-plus-content/cc/outdoor-sport/00178600-02/00178600-loslegen-abb.png',
            'price' => 149.99,
            'isAvailable' => true
        ],
        [
            'id' => 10,
            'name' => 'Tablette 10.1 pouces',
            'description' => 'Tablette Android avec écran haute définition et 64GB de stockage.',
            'image' => 'https://www.ubuy.ma/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvNzFNdDRKQVpRdEwuX0FDX1NMMTUwMF8uanBn.jpg',
            'price' => 349.99,
            'isAvailable' => false
        ],
        
    ]
) {
   
    return view('product',compact('users','products')) ; 

})->name('product');;


Route::get('/userlist', function ( 
    $users =[
        [
            'id'=>1,
            'image'=> 'https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png',
            'name' => 'chems',
            'email' => 'chems@gmail.com',
            'status' => true
        ],
        [
            'id'=>2,
            'image'=> 'https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png',
            'name' => 'Ziad',
            'email' => 'Ziad@gmail.com',
            'status' => false
        ],
        [
            'id'=>3,
            'image'=> 'https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png',
            'name' => 'ilyass',
            'email' => 'ilyass@gmail.com',
            'status' => false
        ],
        [
            'id'=>4,
            'image'=> 'https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png',
            'name' => 'kamal',
            'email' => 'kamal@gmail.com',
            'status' => true
        ],
        [
            'id'=>5,
            'image'=> 'https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png',
            'name' => 'Jhonas',
            'email' => 'Jhonas@gmail.com',
            'status' => true
        ],
    ],

) {
   
    return view('userlist',compact('users')) ; 

})->name('userlist');;
