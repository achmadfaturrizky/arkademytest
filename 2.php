<?php
function is_username_valid($username)
{
    $hasilUsername = '';
    if (strlen($username) == 8) {
        if (preg_match('/[a-z]/', $username)) {
                if (preg_match('/_/', $username)) {
                    $hasilUsername .= 'Username valid.<br>';
                } else {
                    $hasilUsername .= 'Username tidak valid.<br>';
                    $hasilUsername .= 'Username harus mengandung karakter garis bawah (_).<br>';
                }
        } else {
            $hasilUsername .= 'Username tidak valid.<br>';
            $hasilUsername .= 'Username harus mengandung huruf kecil.<br>';
        }
    } else {
        $hasilUsername .= 'Username tidak valid.<br>';
        $hasilUsername .= 'Panjang username harus 8 karakter.<br>';
    }
    return print $hasilUsername;
}

function is_password_valid($password)
{
    $hasilPassword = '';
    if (strlen($password) == 8) {
        if (preg_match('/[a-z]/', $password)) {
            if (preg_match('/[A-Z]/', $password)) {
                if (preg_match('/[0-9]/', $password)) {
                    if (preg_match('/[_|&|@]{1}/', $password)) {
                        $hasilPassword .= 'Password valid.<br>';
                    } else {
                        $hasilPassword .= 'Password tidak valid.<br>';
                        $hasilPassword .= 'Panjang password harus mengandung karakter (_ & .).<br>';
                    }
                } else {
                    $hasilPassword .= 'Password tidak valid.<br>';
                    $hasilPassword .= 'Panjang password harus mengandung angka.<br>';
                }
            } else {
                $hasilPassword .= 'Password tidak valid.<br>';
                $hasilPassword .= 'Panjang password harus mengandung huruf kapital.<br>';
            }
        } else {
            $hasilPassword .= 'Password tidak valid.<br>';
            $hasilPassword .= 'Panjang password harus mengandung huruf kecil.<br>';
        }
    } else {
        $hasilPassword .= 'Password tidak valid.<br>';
        $hasilPassword .= 'Panjang password harus 8 karakter.<br>';
    }
    return print $hasilPassword;
}

is_username_valid('solo_abc');
is_password_valid('wsxe99##');
