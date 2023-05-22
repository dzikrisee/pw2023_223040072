<?php 
        require('functions.php');
        $title = 'Home';
        $students = [
            [
                "nama" => "Dzikri Setiawan",
                "npm" => "223040072",
                "email" => "dzikrisetiawan97@gmail.com"
            ],
            [
                "nama" => "Marsha",
                "npm" => "223040083",
                "email" => "marsha@gmail.com"
            ],
        ];

        // dd($_SERVER["REQUEST_URI"]);
        // /PW2023_223040072/kuliah/pertemuan9/
        

        require('views/index.view.php');  
?>


