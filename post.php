<!--form values display-->
<!--ex.2 - php -->
    

<?php

    $formData = $_POST;

    function showFormData() {
        global $formData;
    foreach($formData as $label => $value) {
        echo '<span style="color: rgb(220, 220, 220)">' . $label . ':</span> ' . '<span style="color: rgb(238, 138, 85)">' . $value . '</span><br>';
    }
    }

    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        if(in_array('', $formData)) {
            echo '<span style="color:rgb(33, 179, 172)">Brak danych do wyświetlenia</span>';
        } else {
            echo '<span style="color:rgb(33, 179, 172)">Dziękujemy za wysłanie formularza z następującymi danymi:</span><br><br>';
            
            showFormData();
        }
    }

    ?>