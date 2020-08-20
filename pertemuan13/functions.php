<?php 
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// Query menampilkan data wakif
function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
        $rows = [];
        while ( $row = mysqli_fetch_assoc($result)){
            $rows[]= $row;
        }
            return $rows;
}


function tambah ($data){
    global $conn;
        // ambil data di setiap form
        $idwakif    = htmlspecialchars($data["idwakif"]);
        $nama       = htmlspecialchars($data["nama"]);
        $email      = htmlspecialchars($data["email"]);
        $nohp       = htmlspecialchars($data["nohp"]);

        // $gambar     = htmlspecialchars($data["gambar"]);

        // upload gambar
        $gambar = upload();
        if ( !$gambar ){
            return false;
        }

        // Query insert data
        $query = "INSERT INTO wakif (idwakif,nama,email,nohp,gambar) VALUES
                    ('$idwakif', '$nama', '$email', '$nohp', '$gambar')";
                        mysqli_query($conn, $query);

                        return mysqli_affected_rows($conn);
}


function upload(){
    // var_dump($_FILES); die;
    $namafile   = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error      = $_FILES['gambar']['error'];
    $tmpname    = $_FILES['gambar']['tmp_name'];

    // cek apakah ada gambar yang di upload
    if( $error === 4){
        echo "
                <script>
                    alert('Pilih gambar lebih dulu');
                </script>
            ";
        return false;
    }

    // cek type file gambar
    $ekstensiGambarvalid = ['jpg','jpeg','png'];
    $ekstensigamabr = explode('.',$namafile);
    $ekstensigamabr = strtolower(end($ekstensigamabr));

    if ( !in_array($ekstensigamabr,$ekstensiGambarvalid) ){
        echo "
        <script>
            alert('File Bukan Gamabar.');
        </script>
    ";
    return false;
    }


    // Jika Ukurannya terlalu besar.
    if ( $ukuranfile > 1000000){
        echo "
        <script>
            alert('Ukuran Gambar Terlalu Besar.');
        </script>
    ";
    return false;
    }

    // File Gamabar di upload
    // buat nama baru untuk foto
    $namafotobaru = uniqid();
    $namafotobaru .= '.';
    $namafotobaru .= $ekstensigamabr;
    // var_dump($namafotobaru); die;


    move_uploaded_file($tmpname,'img/' . $namafotobaru);

    return $namafotobaru;

}

function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM wakif WHERE id = $id");
        return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
            // ambil data di setiap form
            $id         = $data["id"];
            $idwakif    = htmlspecialchars($data["idwakif"]);
            $nama       = htmlspecialchars($data["nama"]);
            $email      = htmlspecialchars($data["email"]);
            $nohp       = htmlspecialchars($data["nohp"]);

            $gambarLama     = htmlspecialchars($data["gambarLama"]);
            // cek apakah ada gambar baru atau tidak
            if ( $_FILES['gambar']['error'] === 4){
                $gambar = $gambarLama;
            } else {
                $gambar = upload();
            }

            // $gambar     = htmlspecialchars($data["gambar"]);

            $query = "UPDATE wakif SET
                                        idwakif = '$idwakif',
                                        nama    = '$nama',
                                        email   = '$email',
                                        nohp    = '$nohp',
                                        gambar  = '$gambar'
                                                            WHERE id = $id";
            mysqli_query($conn,$query);
                return mysqli_affected_rows($conn);

}


function cari($keyword){
    $query = "SELECT * FROM wakif WHERE 
                        nama  LIKE '%$keyword%' OR
                        email LIKE '%$keyword%' OR
                        nohp  LIKE '%$keyword%'
                        ";

                        return query($query);
}
?>