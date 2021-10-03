<?php

$pass = "Lk5Uz3slx3BrAghS1aaW5AYgWZRV0tIX5eI0yPchFz4=";
$plaintext = "";
if (!empty($_POST['plaintext'])) { $plaintext = $_POST['plaintext'];

$cipher = "aes-128-cbc";
    echo "Pesan yang dimasukkan: " . $plaintext . "</br>";
    if (in_array($cipher, openssl_get_cipher_methods())) {
        $ivlen = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($ivlen);       
       
        $ciphertext = openssl_encrypt($plaintext, $cipher, $pass, $options=0, $iv, $tag);       
            echo "Hasil Enkripsi: " . $ciphertext . "</br>";
       
        $plaintext = openssl_decrypt($ciphertext, $cipher, $pass, $options=0, $iv, $tag);
            echo "Hasil Dekripsi: " . $plaintext . "</br>";
            echo "_______________________________________________</br>";
    }
}

?>

<form action="" method="POST">
    <label for="plaintext">Masukan Plaintext</label><br>
        <input type="text" name="plaintext" id="plaintext"><br><br>
           <button type="submit">Cek Hasil</button>
</form>
