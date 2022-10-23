<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Puji Nurwahidah</title>
</head>

<body>
  <div class="container py-5">
    <form action="" method="post">
      <p>1. PHP Merupakan singkatan dari?</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal1" id="soal1" value="Sistem">
        <label class="form-check-label" for="soal1">
        Private Home Page
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal1" id="soal1" value="Informasi">
        <label class="form-check-label" for="soal1">
        Personal Hypertext Processor
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal1" id="soal1" value="Data">
        <label class="form-check-label" for="soal1">
        PHP: Hypertext Processor
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal1" id="soal1" value="Pengetahuan">
        <label class="form-check-label" for="soal1">
        Program Hypertext Processor
        </label>
      </div>
      <p class="mt-3">2. Tipe data integer di PHP digunakan untuk data?</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal2" id="soal2" value="Sistem">
        <label class="form-check-label" for="soal2">
        Bilangan bulat
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal2" id="soal2"value="Informasi">
        <label class="form-check-label" for="soal2">
        Bilangan Pecahan
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal2" id="soal2" value="Data">
        <label class="form-check-label" for="soal2">
        Boolean
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal2" id="soal2" value="Pengetahuan">
        <label class="form-check-label" for="soal2">
        NULL
        </label>
      </div>
      <p class="mt-3">3. Tipe data Boolean hanya memiliki nilai true dan false! Pernyataan ini?</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal3" id="soal3" value="Sistem Informasi">
        <label class="form-check-label" for="soal3">
        Benar
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal3" id="soal3" value="Manajemen Sistem Informasi">
        <label class="form-check-label" for="soal3">
          Salah
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal3" id="soal3" value="Proses Pengembangan Sistem">
        <label class="form-check-label" for="soal3">
          Jawaban a dan b benar
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal3" id="soal3" value="Teknologi Informasi">
        <label class="form-check-label" for="soal3">
          Jawaban tidak diketahui
        </label>
      </div>
      <p class="mt-3">4. Operator aritmatika digunakan untuk melakukan operasi?</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal4" id="soal4" value="Sistem">
        <label class="form-check-label" for="soal4">
        Aritmatika 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal4" id="soal4" value="Informasi">
        <label class="form-check-label" for="soal4">
          Pembanding
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal4" id="soal4" value="Data">
        <label class="form-check-label" for="soal4">
          Relasi
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal4" id="soal4" value="Pengetahuan">
        <label class="form-check-label" for="soal4">
        Assignment
        </label>
      </div>
      <div class="">
      </div>
      <p class="mt-3">5. Operator pembanding digunakan untuk melakukan?</p>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal5" id="soal5" value="Sistem">
        <label class="form-check-label" for="soal5">
        Penjumlahan antara dua nilai
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal5" id="soal5" value="Informasi">
        <label class="form-check-label" for="soal5">
        Perbandingan antara dua nilai
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal5" id="soal5" value="Data">
        <label class="form-check-label" for="soal5">
        Mengkombinasi anatar dua nilai
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="soal5" id="soal5" value="Pengetahuan">
        <label class="form-check-label" for="soal5">
        Semua jawaban salah
        </label>
      </div>
      <div class="">
      <button class="btn btn-success mt-4" type="submit" name="submit" id="submit">Lihat Hasil</button>
      </div>
    </form>
    <?php 
        if (isset($_POST['submit'])){
            $soal1 = $_POST['soal1'];
            $soal2 = $_POST['soal2'];
            $soal3 = $_POST['soal3'];
            $soal4 = $_POST['soal4'];
            $soal5 = $_POST['soal5'];
            $correct =0;
            $predikat = "";
            $jawabanInput = array($soal1, $soal2, $soal3, $soal4, $soal5);
            $jawaban = array("Hypertext Processor", "Bilangan bulat", "Jawaban a dan b benar", "Aritmatika", "Perbandingan antara dua nilai");
            for ($i=0; $i < count($jawabanInput); $i++) { 
                if ($jawabanInput[$i] == $jawaban[$i]) {
                    $correct += 20;
                  }
            }
            switch ($correct) {
                case 100:
                  $predikat = "A";
                  break;
                case 80:
                  $predikat = "B+";
                  break;
                case 60:
                  $predikat = "B";
                  break;
                case 40:
                  $predikat = "C";
                  break;
                case 20:
                  $predikat = "D";
                  break;
                  default:
                  $predikat = "Semua Jawaban Salah";
                  break;
              }  
              echo "<h4 class='text-primary mt-4'>Nilai anda: $correct</h4>";
              echo "<h4 class='text-primary' >Keterangan: $predikat </h4>";
              
        } 
        ?>
  </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>
Footer