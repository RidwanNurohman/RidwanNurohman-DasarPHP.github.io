<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Latihan 3</title>
  </head>
  <body>
    <div class = "container">
    <b><h1>Raport</h1></b>
    <h6></h6>
    <br>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="">
    </div>
    <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" min="1" id="kelas" name="kelas" placeholder="">
    </div>

    <div class="form-group">
        <label for="produktif">Nilai Produktif</label>
        <input type="number" class="form-control" min="1" id="produktif" name="produktif" placeholder="">
    </div>

    <div class="form-group">
        <label for="normatif">Nilai Normatif</label>
        <input type="number" class="form-control" min="1" id="normatif" name="normatif" placeholder="">
    </div>

    <div class="form-group">
        <label for="mulok">Nilai Mulok</label>
        <input type="number" class="form-control" min="1" id="mulok" name="mulok" placeholder="">
    </div>

    <br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <h1><hr></h1>
</form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $produktif = $_POST['produktif'];
    $normatif = $_POST['normatif'];
    $mulok = $_POST['mulok'];
    $totalNilai = $produktif + $normatif + $mulok;
    $rata_rata = $totalNilai / 3;

    echo " <div class = 'container'>";
    echo "<h3> NAMA   :         $nama </h3>";
    echo "<h3> KELAS  :         $kelas </h3>";
    echo "<br>";
   
}



 
    if ($produktif > 90) {
        $grade = "A";
    }elseif($produktif > 80) {
        $grade = "B";
    }elseif($produktif > 70) {
        $grade = "C";
    }elseif($produktif > 60) {
        $grade = "D";
    }elseif($produktif > 50) {
        $grade = "E";
    }


  

   
    if ($normatif > 90) {
        $grade2 = "A";
    }elseif($normatif > 80) {
        $grade2 = "B";
    }elseif($normatif > 70) {
        $grade2 = "C";
    }elseif($normatif > 60) {
        $grade2 = "D";
    }elseif($normatif > 50) {
        $grade2 = "E";
    }

    
   
  

   
   
    if ($mulok > 90) {
        $grade3 = "A";
    }elseif($mulok > 80) {
        $grade3 = "B";
    }elseif($mulok > 70) {
        $grade3 = "C";
    }elseif($mulok > 60) {
        $grade3 = "D";
    }elseif($mulok > 50) {
        $grade3 = "E";
    }
    if ($produktif > 70){
        $hasil = "LULUS";
    }else {
        $hasil = "TIDAK LULUS";
    }

    if ($normatif > 70){
        $hasil2 = "LULUS";
    }else {
        $hasil2 = "TIDAK LULUS";
    }

    if ($mulok > 70){
        $hasil3 = "LULUS";
    }else {
        $hasil3 = "TIDAK LULUS";
    }

    if ($rata_rata > 70){
        $hasil4 = "LULUS";
    }else {
        $hasil4 = "TIDAK LULUS";
    }
  
    echo "</div>";
    
    
    
    echo "<div class = 'container'>";
    echo "<table class='table table-bordere'>";
  echo "<thead>
    <tr>
      <th scope='col'>NO</th>
      <th scope='col'>MAPEL</th>
      <th scope='col'>NILAI</th>
      <th scope='col'>GRADE</th>
      <th scope='col'>KETERANGAN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>1</th>
      <td>PRODUKTIF</td>
      <td>$produktif</td>
      <td>$grade</td>
      <td>$hasil</td>
    </tr>
    <tr>
      <th scope='row'>2</th>
      <td>NORMATIF</td>
      <td>$normatif</td>
      <td>$grade2</td>
      <td>$hasil2</td>
    </tr>
    <tr>
      <th scope='row'>3</th>
      <td>MULOK</td>
      <td>$mulok</td>
      <td>$grade3</td>
      <td>$hasil3</td>
    </tr>
  </tbody>
</table>";
echo "<br>";
echo "<div class = 'row'>";
echo "<div class = 'col-md-6'>";
echo "<h3> NILAI RATA RATA </h3>";
echo "</div>";
echo "<div class = 'col-md-6'>";
echo "<div style='text-align: right;'><h3>$rata_rata</h3></div>";
echo "<div style='text-align: right;'><h3>$hasil4</h3></div>";
echo "</div>";
echo "</div>";
?>



