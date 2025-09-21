<?php
$kategori = "makanan";
$subkategori = "minuman";
switch ($kategori) {
    case "makanan":
        echo "Ini adalah kategori makanan.";
        switch ($subkategori) {
            case "minuman":
                echo "Ini adalah subkategori minuman.";
                break;
            case "snack":
                echo "Ini adalah subkategori snack.";
                break;
            default:
                echo "Subkategori tidak diketahui.";
        }
        break;
    case "pakaian":
        echo "Ini adalah kategori pakaian.";
        break;
    default:
        echo "Kategori tidak diketahui.";
}
?>
