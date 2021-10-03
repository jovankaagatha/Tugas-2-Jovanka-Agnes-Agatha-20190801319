<?php

$cipher = openssl_get_cipher_methods();
foreach ($cipher as $value) {
    echo $value ;
}
//untuk mengecek apakah sudah aktif open ssl nya
    if (!extension_loaded('openssl')) {
        echo "OpenSSL disabled";
}   else {
        echo "OpenSSL enabled";
}

