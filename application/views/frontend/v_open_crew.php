<?php
    $this->load->view('frontend/template/v_header');
?>

<!-- 
================================================== 
    Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Open Crew</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Open Crew</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>   
</section><!--/#page-header-->

<!-- 
================================================== 
    Company Description Section Start
================================================== -->
<section class="company-description">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <?php 
              if ($this->session->userdata('message_oc_success')) {
              ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <?php echo $this->session->userdata('message_oc_success') ?>
                </div>
              <?php
                }
                ?>
            </div>

            <div class="col-md-12">
                <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Hallo !</h3>
                <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                    Selamat datang, Pastikan anda mengisi data diri anda dan lihatkan portofolio terbaik anda, jadilah bagian dari kami !
                    <br>
                </p>
            </div>
            <div class="col-md-6">
                <div class="block">
                    <div class="contact-form">
                        <form id="contact-form" method="post" action="<?php echo base_url('open-crew/submit-form') ?>" role="form">
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <label>Nama</label>
                                <input type="text" placeholder="Nama lengkap anda" class="form-control" name="oc_nama" required="">
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <label>No. Hp</label>
                                <input type="text" placeholder="" class="form-control" name="oc_hp" required="">
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <label>Email</label>
                                <input type="email" placeholder="" class="form-control" name="oc_email" required="">
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <label>Alamat</label>
                                <textarea rows="3" placeholder="" class="form-control" name="oc_alamat" required=""></textarea>
                            </div>
                            
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <label>Kategori Kemampuan</label>
                                <select class="form-control" name="oc_kategori_skill">
                                    <option value="desainer grafis">Desainer Grafis</option>
                                </select>
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <label>Kemampuan desain (boleh lebih dari satu)</label>
                                <br>
                                <input type="checkbox" name="oc_skill[]" value="poster ilmiah"  > Poster Ilmiah
                                <br>
                                <input type="checkbox" name="oc_skill[]" value="poster umum"  > Poster Umum
                                <br>
                                <input type="checkbox" name="oc_skill[]" value="cv"  > CV (Curriculum Vitae)
                                <br>
                                <input type="checkbox" name="oc_skill[]" value="logo"  > Logo
                                <br>
                                <input type="checkbox" name="oc_skill[]" value="banner"  > Banner
                                <br>
                                <input type="checkbox" name="oc_skill[]" value="lainnya"  > Lainnya
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6">
                        <div class="block">
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <label>Software desain yang dikuasai</label>
                                <input type="text" placeholder="" class="form-control" name="oc_software_skill" required="">
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <label>Gaji yang diharapkan per desain</label>
                                <input type="text" placeholder="" class="form-control" name="oc_gaji_per_project" required="">
                            </div>  

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <label>Waktu pengerjaan per desain</label>
                                <input type="text" placeholder="contoh : 2 jam" class="form-control" name="oc_waktu_pengerjaan" required="">
                            </div>  

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <label>Kesibukan saat ini</label>
                                <input type="text" placeholder="contoh : mahasiswa" class="form-control" name="oc_kesibukan" required="">
                            </div> 

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <label>Banyak desain yang bisa dikerjakan dalam sehari</label>
                                <input type="text" placeholder="contoh : 5 desain" class="form-control" name="oc_kuantitas_per_hari" required="">
                            </div> 

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <label>Pada jam berapa anda mengerjakan desain</label>
                                <input type="text" placeholder="contoh : 20.00 - 22.00" class="form-control" name="oc_jam_mengerjakan" required="">
                            </div>

                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                                <label>Link portfolio</label>
                                <p>Kumpulkan portofolio anda dalam google drive, berikan kami akses link untuk melihat portfolio anda</p>
                                <input type="text" placeholder="" class="form-control" name="oc_link_portofolio" required="">
                            </div>                            
                            
                            <div>
                                <input type="submit" id="contact-submit" class="btn btn-warning btn-send" value="Submit" >
                            </div>                      
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    $this->load->view('frontend/template/v_footer.php') 
?>