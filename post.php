<?php
    

    $formData = $_POST;

    function showFormData() {
        global $formData;
    foreach($formData as $label => $value) {
        echo $label . ': ' . $value . '<br><br>';
    }
    }

    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        if(in_array('', $formData)) {
            echo 'Brak danych do wyświetlenia';
        } else {
            echo "Dziękujemy za wysłanie formularza z następującymi danymi:<br><br>";
            
            showFormData();
        }
    }
    ?>