                            <!-- bagian ini akan menjelaskan mengenai variable-->
    <!-- php berada di dalam <?php   ?> -->
<?php
// ini adalah comment dimana ini tidak akan dibaca oleh kodde
// hal pertama yang perlu di ketahui adalah membuat variabel, menggunakan $
$name = "hello";
//variabel pada php tidak perlu diberikan tipe data, untuk menyimpan data bentuk angka tidak menggunakan petik dua ""
echo $name;
//memanggil variabel ke layar menggunakan echo sehingga di browser akan mengeluarkan isi dari variabel
?>

<br><br><br>
                            <!-- bagian ini akan menjelaskan mengenai fungsi-->

<?php
// untuk membuat fungsi dimulai dengan kata function kemudian nama fungsi
function penjumlahan(){
    $b = 2;
    $c = 3;
 $a = $b + $c;

 //return adalah hasil dari fungsi
 return $a;
}
//pemanggilan fungsi tidak ada input karena input sudah diberikan di dalam fungsi
echo penjumlahan();

?>

<br><br><br>

<?php
//fungsi ini memerlukan 2 variabel untuk memanggilnya
function penjumlahan2($b,$c){

 $a = $b + $c;

 return $a;
}
//pemanggilan fungsi yang meminta variabel yaitu $b dan $c diatas 
echo penjumlahan2(6,3);

?>

<br><br><br>
 

    <!-- bagian ini akan menjelaskan mengenai fungsi yang tidak ada return (ddisebut prosedur)-->


<?php
//fungsi ini memerlukan 2 variabel untuk memanggilnya
function prosedur($b,$c){

 $a = $b + $c;
// tidak adda return pada fungsi ini karena langsung melakukan echo (langsung ditampilkan ke layar)
 echo $a;
}
//karena pada fungsi sudah ada pemanggilan ke layar maka tidak perlu dilakukan echo untuk memanggil fungsi
prosedur(10,11);

?>