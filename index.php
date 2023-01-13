<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Form Input Pendukung</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php
		if(isset($_POST['submit'])){

			$nama		= $_POST['nama'];
			$jeniskelamin	= $_POST['jeniskelamin'];
			$tempatlahir		= $_POST['tempatlahir'];
			$tanggallahir		= $_POST['tanggallahir'];
      $bulanlahir			= $_POST['bulanlahir'];
      $tahunlahir			= $_POST['tahunlahir'];
      $nomor			    = $_POST['nomor'];
      $alamat			    = $_POST['alamat'];
      $kelurahan			= $_POST['kelurahan'];
      $kecamatan			= $_POST['kecamatan'];
      $kabupaten			= $_POST['kabupaten'];
      $provinsi		  	= $_POST['provinsi'];
      $fotoktp			  = $_POST['fotoktp'];

      $insert = "INSERT INTO form VALUES ('', '$nama', '$jeniskelamin', '$tempatlahir', '$tanggallahir', '$bulanlahir', '$tahunlahir',
                 '$nomor', '$alamat', '$kelurahan', '$kecamatan', '$kabupaten', '$provinsi', '$fotoktp')";

      mysqli_query($coneksi, $insert);


      if(mysqli_affected_rows($coneksi)>0){
        echo "Berhasil Input";
      }else{
        echo "Gagal Input!";
        echo "<br>";
        echo mysqli_error($coneksi);
      }
		}

		?>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div
            class="col-12 col-sm-8 col-md-6 col-lg-6 offset-sm-2 offset-md-3 offset-lg-4">
          <h1 class="mb-3 text-center">Mujib Rohmat</h1>
          <p class="lead text-center">
            Sahabat MR Family
          </p>
            <form class="mb-3" action="" method="post">
              <div class="form-group">
                <label for="nama">Nama Lengkap : </label>
                <input type="nama" class="form-control" placeholder="Nama Lengkap" id="nama" name="nama" required/>
              </div>
              <div class="form-group">
                <label for="jeniskelamin">Jenis Kelamin : </label>
                  <select class="form-control" id="jeniskelamin" name="jeniskelamin" >
                    <option value="">Jenis Kelamin</option>
                    <option value="laki-Laki">Laki-Laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="tempatlahir">Tempat Lahir : </label>
                <input type="tempatlahir" class="form-control" placeholder="Tempat Lahir" id="tempatlahir" name="tempatlahir" required />
              </div>
              <label>Tanggal Lahir:</label>
              <div class="row no-gutters">
                <div class="form-group col-4">
                  <select class="form-control" id="tanggallahir" name="tanggallahir" >
                    <option value="">Tanggal</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                </div>
                <div class="form-group col-4">
                  <label for="bulanlahir" class="sr-only">Bulan</label>
                  <select class="form-control" id="bulanlahir" name="bulanlahir" >
                    <option value="">Bulan</option>
                    <option value="januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="maret">Maret</option>
                    <option value="april">April</option>
                    <option value="mei">Mei</option>
                    <option value="juni">Juni</option>
                    <option value="juli">Juli</option>
                    <option value="agustus">Agustus</option>
                    <option value="september">September</option>
                    <option value="oktober">Oktober</option>
                    <option value="november">November</option>
                    <option value="desember">Desember</option>
                  </select>
                </div>
                <div class="form-group col-4">
                  <label for="tahunlahir" class="sr-only">Tahun</label>
                  <select class="form-control" id="tahunlahir" name="tahunlahir" >
                    <option value="">Tahun</option>
                    <option value="1931">1931</option>
                    <option value="1931">1932</option>
                    <option value="1933">1933</option>
                    <option value="1934">1934</option>
                    <option value="1935">1935</option>
                    <option value="1936">1936</option>
                    <option value="1937">1937</option>
                    <option value="1938">1938</option>
                    <option value="1939">1939</option>
                    <option value="1940">1940</option>
                    <option value="1941">1941</option>
                    <option value="1942">1942</option>
                    <option value="1943">1943</option>
                    <option value="1944">1944</option>
                    <option value="1945">1945</option>
                    <option value="1946">1946</option>
                    <option value="1947">1947</option>
                    <option value="1948">1948</option>
                    <option value="1949">1949</option>
                    <option value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>
                    <option value="1953">1953</option>
                    <option value="1954">1954</option>
                    <option value="1955">1955</option>
                    <option value="1956">1956</option>
                    <option value="1957">1957</option>
                    <option value="1958">1958</option>
                    <option value="1959">1959</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="nomor">Nomer Telepon : </label>
                <input type="nomor" class="form-control" placeholder="Nomer Telepon" name ="nomor" id="nomor" required/>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat : </label>
                <input type="alamat" class="form-control" placeholder="Jalan /  RT / RW / Dusun" name="alamat" id="alamat" required/>
              </div>
              <div class="row">
                <div class="form-group col-12 col-sm-6">
                  <input type="text" class="form-control" placeholder="Desa / Kelurahan" name="kelurahan" id="kelurahan"/>
                </div>
                <div class="form-group col-12 col-sm-6">
                  <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" id="kecamatan"/>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-12 col-sm-6">
                  <input type="text" class="form-control" placeholder="Kabupaten/Kota" name="kabupaten"  id="kabupaten" />
                </div>
                <div class="form-group col-12 col-sm-6">
                  <input type="text" class="form-control" placeholder="Provinsi" name="provinsi"  id="provinsi"/>
                </div>
              </div>
              <div class="form-group">
                <label for="fotoktp">Upload KTP : </label>
                <input type="file" class="form-control" id="fotoktp" name ="fotoktp"/>
              </div>
              <button type="submit" name="submit" class="btn btn-primary btn-block mb-3">
                Simpan
              </button>
              <div class="alert alert-info small text-center" role="alert">
               Terimakasih telah mengisi Formulir
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
      integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
      integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
