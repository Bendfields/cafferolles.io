<?php
// hide error messages
error_reporting(0);

// isi nama host, username mysql, dan password mysql anda
$conn = mysqli_connect("localhost", "root", "");
$db = 'myCoffeshop';

// Remote Database
// $conn = mysqli_connect("remotemysql.com","JCRhGoPFSc","kHLKkD75Sp","JCRhGoPFSc");

// if (!$conn) {
//     echo "Gagal Koneksi Database";
// } else {
// };
$hasil = mysqli_select_db($conn, $db);
// if ($hasil) {
//     echo "Database $db berhasil dipilih";
// } else {
//     echo "Database $db gagal dipilih";
// }
function input()
{
    $bast_dir = "/product1";
    global $conn;
    $nama = $_POST['nama'];
    $gambar = $_POST['file'];
    $query = "INSERT INTO gambar (name,image ) VALUES ('$nama','$gambar')";
    $result   = mysqli_query($conn, $query);
    if ($result) {
        $_SESSION['name'] = $nama;
    } else {
        echo 'register gagal';
    }
}
function cek_nama($username, $con)
{
    $nama = mysqli_real_escape_string($con, $username);
    $query = "SELECT * FROM akun WHERE username = '$nama'";
    if ($result = mysqli_query($con, $query)) return mysqli_num_rows($result);
}
function register($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["user"]));
    $email = $data["email"];
    $password = mysqli_real_escape_string($conn, $data["pass"]);
    $verify = mysqli_real_escape_string($conn, $data["confirm"]);

    // cek konfirmasi pasword
    if ($password !== $verify) {
        // $erro = "<script>
        //         alert('konfirmasi password tidak sesuai')
        //         </script>";
        $error = true;
        return false;
    }

    if (!empty(trim($username)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($verify))) {
        //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
        if (cek_nama($username, $conn) == 0) {
            // enkripsi password
            $password = password_hash($password, PASSWORD_DEFAULT);
            // tambah data baru ke data base
            //insert data ke database
            $query = "INSERT INTO akun (email,username, pass ) VALUES ('$email','$username','$password')";
            $result   = mysqli_query($conn, $query);
            //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
            if ($result) {
                $_SESSION['email'] = $email;
            } else {
                $erro = 'register gagal';
            }
        } else {
            echo "<script>
            alert ('User Name sudah ada')
            </scrip>";
            echo '<meta http-equiv="refresh" content="5" />';
        }
    } else {
        echo "<script>alert('Form tidak Boleh Kosong')</script>";
    }
    return mysqli_affected_rows($conn);
}
