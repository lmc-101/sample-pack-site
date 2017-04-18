<!--form values display-->
<!--ex.2 - php -->
    

<?php

    $formData = $_POST;
//ustalenie miejsca, z którego będziemy pobierać dane

    function showFormData() {
        global $formData;
        foreach($formData as $label => $value) {
            echo '<span style="color: rgb(220, 220, 220)">' . $label . ':</span> ' . '<span style="color: rgb(238, 138, 85)">' . $value . '</span><br>';
//każda informacja (tabela) ma być przesyłana w następującym formacie:
// $label - oznacza atrybut name, zdefiniowany w pliku index.php w inputach;
//$value - oznacza wartość, jaką użytkownik wpisał w dane pole;
// dzięki temu problem z nowym polem formularza będzie nieistotny - nie odwołujemy się do wartości formularza 'po imieniu', tylko do ich rodzaju.
//dodane zostały również style wyświetlanych elementów.
        }
    }

    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        if(in_array('', $formData)) {
            echo '<span style="color:rgb(33, 179, 172)">Brak danych do wyświetlenia</span>';
//jeżeli jakiekolwiek pole tablicy(czyli formularza) jest puste, wyświetla się komunikat o braku danych;
            
        } else {
            echo '<span style="color:rgb(33, 179, 172)">Dziękujemy za wysłanie formularza z następującymi danymi:</span><br><br>';
// jeżeli wszystkie pola formularza zostały wypełnione poprawnie, wyświetla się podziękowanie;
            
            showFormData();
//oraz wypisane przez funkcję dane.

        }
    }

    ?>