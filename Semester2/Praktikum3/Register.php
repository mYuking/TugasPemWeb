<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Jenis" id="Jenis_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="Jenis_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Jenis" id="Jenis_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="Jenis_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="Prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="Prodi" name="Prodi" class="custom-select">
        <option value="Sistem Informasi">Sistem Informasi</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Hukum">Hukum</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web &amp; Programming</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="bahasa" id="bahasa_0" type="checkbox" class="custom-control-input" value="HTML"> 
        <label for="bahasa_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="bahasa" id="bahasa_1" type="checkbox" class="custom-control-input" value="CSS"> 
        <label for="bahasa_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="bahasa" id="bahasa_2" type="checkbox" class="custom-control-input" value="JavaScript"> 
        <label for="bahasa_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="bahasa" id="bahasa_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap"> 
        <label for="bahasa_3" class="custom-control-label">RWD Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="bahasa" id="bahasa_4" type="checkbox" class="custom-control-input" value="PHP"> 
        <label for="bahasa_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="bahasa" id="bahasa_5" type="checkbox" class="custom-control-input" value="Python"> 
        <label for="bahasa_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="bahasa" id="bahasa_6" type="checkbox" class="custom-control-input" value="Java"> 
        <label for="bahasa_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggal" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="tinggal" name="tinggal" class="custom-select">
        <option value="Depok">Depok</option>
        <option value="Tanggerang">Tanggerang</option>
        <option value="Jakarta">Jakarta</option>
        <option value="Bogor">Bogor</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-gg-circle"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>