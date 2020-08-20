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
        $gambar     = htmlspecialchars($data["gambar"]);

        // Query insert data
        $query = "INSERT INTO wakif (idwakif,nama,email,nohp,gambar) VALUES
                    ('$idwakif', '$nama', '$email', '$nohp', '$gambar')";
                        mysqli_query($conn, $query);

                        return mysqli_affected_rows($conn);
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
            $gambar     = htmlspecialchars($data["gambar"]);

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
?>