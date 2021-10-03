<?php

$opsi = array(
    "digest_alg" => "sha256",
    "private_key_bits" => 1024,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);
    $secret_key = openssl_pkey_new($opsi);
    $public_key_pem = openssl_pkey_get_details($secret_key)['key'];
        echo $public_key_pem;
        echo "<br>";
        echo "<br>";
        echo "<br>";
        openssl_pkey_export($secret_key, $secretkey);
        echo $secretkey;

    var_dump($secret_key);