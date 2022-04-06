<html>
    <head>
        <title>Upload Photo</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="container">
            <div class="header">
                <div style="float: left;">Rumah Makan Sri Kedaton
                <a href="home.html">Home</a>
                <a href="transaksi.html">Transaksi</a>
                <a href="TambahFoto.html">Tambah Foto</a>
            </div>
            <br><br>
        <?php
            $target_path = "uploads/";

            $target_path = $target_path . basename(
            $_FILES['uploadedfile']['name']
            );

            if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
            echo "The File " . basename($_FILES['uploadedfile']['name']) . " has been uploaded";
            }else{
                echo "There was an error uploading file, please try again!";
            }
        ?>

        <div class="footer">
        <p>Website Footer</p>
        </div>
    </body>
</html>