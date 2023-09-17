<!--begin::Card-->
<div class="card">
    <!--begin::Card body-->
    <div class="card-body">
        <!--begin::Stepper-->
        <div class="stepper stepper-links d-flex flex-column pt-15" id="kt_create_account_stepper">
            <!--begin::Nav-->
            <div class="stepper-nav mb-5">
                <!--begin::Step 1-->
                <div class="stepper-item current" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Data Pemohon</h3>
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Data Usaha</h3>
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Data Tanah</h3>
                </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
                <!-- <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Lampiran</h3>
                </div> -->
                <!--end::Step 4-->
            </div>
            <!--end::Nav-->
            <!--begin::Form-->
            <form class="mx-auto mw-800px w-100 pt-15 pb-10" id="kt_create_account_form" method="POST" action="<?php echo base_url('Kkpr/insert_kkpr'); ?>" enctype="multipart/form-data">
                <!--begin::Step 1-->
                <div class="current" data-kt-stepper-element="content">
                    <!--begin::Wrapper-->
                    <div class="w-100">

                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_perusahaan">Nama Pemohon
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" id="nama_pemohon" class="form-control mb-2 " name="nama_pemohon" placeholder="Ex. Wawan Supriyadi" required="required" />
                                <input type="hidden" class="form-control mb-2 " name="type_pengurusan" value="<?= $pengurusan ?>" required="required" />
                                <input type="hidden" class="form-control mb-2 " name="type_isi_kategori" value="<?= $isi_pengajuan ?>" required="required" />
                                <input type="hidden" class="form-control mb-2 " name="type_kategori" value="<?= $pengajuan ?>" required="required" />
                                <!-- <input type="hidden" class="form-control mb-2 " name="pemilik_lahan_meninggal" value="<?= $pemilik_lahan_meninggal ?>" required="required" /> -->
                                <input type="hidden" class="form-control mb-2 " name="badan_hukum" value="<?= $badan_hukum ?>" required="required" />
                                <input type="hidden" class="form-control mb-2 " name="kuasa" value="<?= $kuasa ?>" required="required" />
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Alamat Pemohon
                                <span class="ms-1" data-bs-toggle="tooltip" title="Ex. Jl.Kebon Raya blok 3A No.01">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                                <br><small>Sesuai KTP</small> <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" id="alamat_pemohon" name="alamat_pemohon" required="required" class="form-control mb-2 " placeholder="Ex. Jl.Kebon Raya blok 3A No.01">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">RT<span class="required"></span></label>
                            <div class="col-md-9 col-sm-9 ">
                                <input id="middle-name" class="form-control mb-2 col" type="number" placeholder="Ex. 001" min="1" max="20" name="rt_pemohon" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">RW<span class="required"></span></label>
                            <div class="col-md-9 col-sm-9 ">
                                <input id="middle-name" class="form-control mb-2 col" type="number" placeholder="Ex. 001" min="1" max="20" name="rw_pemohon" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">
                                Provinsi
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="provinsi_pemohon" id="provinsi_pemohon" class="form-select form-control mb-2" data-control="select2" data-placeholder="Pilih Provinsi">
                                    <option value="" selected></option>
                                    <?php foreach ($provinsi as $k) { ?>
                                        <option value="<?= $k->prov_id ?>"><?= $k->prov_name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Kota /
                                Kabupaten <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="kota_pemohon" id="kota_pemohon" class="form-select form-control mb-2" data-control="select2" data-placeholder="Pilih Kota">
                                    <option value="" selected></option>

                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Kecamatan
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="kecamatan_pemohon" id="kecamatan_pemohon" class="form-select form-control mb-2" data-control="select2" data-placeholder="Pilih Kecamatan">
                                    <option value="" selected></option>

                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Desa /
                                Kelurahan<span class="required"></span></label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="kelurahan_pemohon" id="kelurahan_pemohon" class="form-select form-control mb-2" data-control="select2" data-placeholder="Pilih Kelurahan">

                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">
                                No Telp. / HP / WA <span class="required"></span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Pastikan Masukan Nomer yang masih aktif!">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input id="birthday" class="date-picker form-control mb-2" type="text" name="telp_pemohon" placeholder="Ex. 08998989809">
                                <small>(Cantumkan No Telp. / HP / WA Pemohon <b>Bukan</b> Kuasa
                                    pengurusan)</small>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Fotokopi KTP Pemohon
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="file" id="alamat-pemohon" name="fotokopi_ktp" class="form-control "accept=".jpg, .pdf">
                                <small>File yang diterima hanya .jpg dan .pdf</small>
                            </div>
                        </div> 
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div data-kt-stepper-element="content">
                    <div class="w-100">                        
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-pemohon">
                            Nomor Induk Berusaha (NIB)
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" id="" class="form-control " required="required" data-validate-length-range="6" name="nib">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                            File Nomor Induk Berusaha (NIB)
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="file" id="alamat-pemohon" name="tdp_nib" class="form-control "accept=".jpg, .pdf">
                                <small>File yang diterima hanya .jpg dan .pdf</small>
                            </div>
                        </div> 
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-pemohon">
                                Skala Usaha
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="skala_usaha" id="skala_usaha" class="form-select form-control mb-2" data-control="select2" data-placeholder="Pilih Skala Usaha">
                                    <option value="" selected></option>
                                    <?php
                                    $kategori_skala = $this->db->query("SELECT * FROM pilihan WHERE nama_pilihan = 'skala_usaha_kkpr'")->row();
                                    $isi_skala = json_decode($kategori_skala->pilihan);
                                    foreach ($isi_skala as $i) {
                                    ?>
                                        <option value="<?= $i->skala ?>"> <?= $i->skala ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-pemohon">
                                Klasifikasi Risiko
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="klasifikasi_resiko" id="klasifikasi_resiko" class="form-select form-control mb-2" data-control="select2" data-placeholder="Pilih Klasifikasi Resiko">
                                    <option value="" selected></option>
                                    <?php
                                    $kategori_resiko = $this->db->query("SELECT * FROM pilihan WHERE nama_pilihan = 'klasifikasi_resiko_kkpr'")->row();
                                    $isi_resiko = json_decode($kategori_resiko->pilihan);
                                    foreach ($isi_resiko as $i) {
                                    ?>
                                        <option value="<?= $i->resiko ?>"> <?= $i->resiko ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="mb-3 row">
                            <label for="jumlah_kbli" class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Surat KBLI<span class="required"></span></label>
                            <div class="col-md-9 col-sm-9 ">
                                <input id="jumlah_kbli" class="form-control mb-2 col" type="number" value="0" min="0" max="100" name="jumlah_kbli" required>
                            </div>
                        </div> -->
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">KBLI diMohon
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control mb-2" name="kbli_array[]" required />
                                <div id="additionalInputs"></div>                                
                                <div class="" style="float: right;">
                                <button type="button" id="addInput" class="btn btn-light btn-sm">Tambah</button>
                                <button type="button" id="removeInput" class="btn btn-light btn-sm">Kurang</button>
                                </div>
                            </div>
                        </div> 

                        <div id="kbli_container"></div> 
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> Dokumen yang di unduh pada OSS
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="file" id="alamat-pemohon" name="dokumen_oss" class="form-control "accept=".jpg, .pdf">
                                <small>File yang diterima hanya .jpg dan .pdf</small>
                            </div>
                        </div>                                                                       
                        <?php if ($badan_hukum == '1') { ?>
                            <div class="mb-3 row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                    Fotokopi Nomor Pokok Wajib Pajak (NPWP)
                                    <br>
                                    <small>(jika berbadan hukum, dan wajib untuk permohonan Perumahan luas di atas 5.000 m2)</small>
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" id="alamat-pemohon" name="npwp" class="form-control "accept=".jpg, .pdf">
                                    <small>File yang diterima hanya .jpg dan .pdf</small>
                                </div>
                            </div>
                        <?php } ?>                                                                  
                    </div>
                </div>
                <!--begin::Step 2-->
                <!--begin::Step 3-->
                <div data-kt-stepper-element="content">
                    <div class="w-100">
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-pemohon">
                                Status Tanah
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="status_tanah_sm" id="status_tanah_sm" class="form-select form-control mb-2" data-control="select2" data-placeholder="Pilih Status Tanah" <?php //if ($pengajuan == 'perumahan' || $pengajuan == 'pergudangan') echo"disabled";  ?>>
                                    <option value="" selected></option>                                    
                                    <option value="sewa">Sewa</option>                                 
                                    <option value="milik_sendiri"  <?php if ($pengajuan == 'perumahan' || $pengajuan == 'pergudangan') echo"selected";  ?>>Milik Sendiri</option>                                 
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Peruntukan dimohon
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input id="birthday" class="date-picker form-control" required="required" type="text" name="peruntukan_tanah" placeholder="Ex. Gudang Kosmetik">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Luas Tanah (m2)
                                <span class="ms-1" data-bs-toggle="tooltip" title="Luas tanah menggunakan m2, Inputkan angka saja">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input id="birthday" class="date-picker form-control" required="required" type="number" name="luas_tanah" placeholder="Ex. 500">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-pemohon">
                            Tipe Pengajuan
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="perluasan" id="perluasan" class="form-select form-control mb-2" data-control="select2" data-placeholder="Pilih Perluasan">
                                    <option value="" selected></option>
                                    <?php
                                    $kategori_perluasan = $this->db->query("SELECT * FROM pilihan WHERE nama_pilihan = 'perluasan_kkpr'")->row();
                                    $isi_perluasan = json_decode($kategori_perluasan->pilihan);
                                    foreach ($isi_perluasan as $i) {
                                    ?>
                                        <option value="<?= $i->perluasan ?>"> <?= $i->perluasan ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="mb-3 row">
                            <label for="status_tanah" class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Surat tanah<span class="required"></span></label>
                            <div class="col-md-9 col-sm-9 ">
                                <input id="status_tanah" class="form-control mb-2 col" type="number" value="0" min="0" max="100" name="status_tanah" required>
                            </div>
                        </div> -->
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Status Tanah
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">                                                                                               
                                <input type="text" class="form-control mb-2" name="status_tanah_array[]" required />
                            </div>
                        </div> 
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name"> Surat Tanah
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">                                                                                               
                                <input type="file" name="file_status_tanah[]" class="form-control "accept=".jpg, .pdf">
                                <small>File yang diterima hanya .jpg dan .pdf</small>
                            </div>
                        </div> 
                        <div id="additionalInputstanah"></div> 
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">                                
                            </label>
                            <div class="col-md-9 col-sm-9 ">                                                                                               
                                <div class="" style="float: right;">
                                <button type="button" id="addInputtanah" class="btn btn-light btn-sm">Tambah Surat Tanah</button>
                                <button type="button" id="removeInputtanah" class="btn btn-light btn-sm">Kurang Surat Tanah</button>
                                </div>
                            </div>
                        </div>

                        <div id="status_tanah_container"></div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_perusahaan">
                                Apakah ada surat ahli waris?
                                <span class="ms-1" data-bs-toggle="tooltip" title="Pilih Ya jika pemilik lahan sudah meninggal">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <div class="form-check form-check-custom form-check-solid mb-5">
                                    <input class="form-check-input mb-2" type="radio" value="1" id="pemilik_lahan_meninggal_y" name="pemilik_lahan_meninggal" />
                                    <label class="form-check-label" for="flexRadioDefault">
                                        Ya
                                    </label>&emsp;
                                    <input class="form-check-input mb-2" type="radio" value="0" id="pemilik_lahan_meninggal_t" name="pemilik_lahan_meninggal" />
                                    <label class="form-check-label" for="flexRadioDefault">
                                        Tidak
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="lahan_meninggal" style="display: none;">
                            <div class="mb-3 row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                    Surat Kematian
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" id="alamat-pemohon" name="surat_kematian" class="form-control "accept=".jpg, .pdf">
                                    <small>File yang diterima hanya .jpg dan .pdf</small>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                    Surat Kuasa dari semua ahli waris
                                    <small>(jika ahli waris lebih dari 1)</small>
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" id="alamat-pemohon" name="surat_kuasa_ahli_waris" class="form-control "accept=".jpg, .pdf">
                                    <small>File yang diterima hanya .jpg dan .pdf</small>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Lokasi Dimohon
                                <span class="ms-1" data-bs-toggle="tooltip" title="Ex. Jl.Kebon Raya blok 3A No.01">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                                
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" id="alamat-pemohon" name="lokasi_tanah" required="required" class="form-control ">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">RT</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input id="middle-name" class="form-control col" type="number" placeholder="Ex. 001" min="1" max="20" name="rt_tanah" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">RW</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input id="middle-name" class="form-control col" type="number" placeholder="Ex. 001" min="1" max="20" name="rw_tanah" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Kota /
                                Kabupaten <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="kota_tanah" id="kota_tanah" class="form-select form-control mb-2" data-control="select2" data-placeholder="Pilih Kota" disabled>
                                    <option value=""></option>
                                    <option value="1">Kota Malang</option>
                                    <option value="2" selected>Kab Malang</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Kecamatan
                                <span class="required"></span>
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="kecamatan_tanah" id="kecamatan_tanah" class="form-select form-control mb-2" data-control="select2" data-placeholder="Pilih Kecamatan">
                                    <option value="" selected></option>
                                    <?php foreach ($kecamatan as $k) { ?>
                                        <option value="<?= $k->id_kecamatan ?>"><?= $k->nama_kecamatan ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Desa /
                                Kelurahan<span class="required"></span></label>
                            <div class="col-md-9 col-sm-9 ">
                                <select name="kelurahan_tanah" id="kelurahan_tanah" class="form-select form-control mb-2" data-control="select2" data-placeholder="Pilih Kelurahan">

                                </select>
                            </div>
                        </div>
                        <?php if ($pengajuan == 'perumahan') { ?>                            
                            <div class="mb-3 row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                    Peta Bidang
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Jika Luas tanah diatas 5000m2 maka harus sudah atas nama Pemohon (bertindak atas nama badan hukum), dan dilegalisir oleh BPN / Notaris ">
                                        <i class="ki-duotone ki-information fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                    <br>
                                    <small>sudah atas nama Pemohon, dan dilegalisir oleh BPN / Notaris </small>
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" id="alamat-pemohon" name="peta_bidang" class="form-control "accept=".jpg, .pdf">
                                    <small>File yang diterima hanya .jpg dan .pdf</small>
                                </div>
                            </div>
                        <?php } ?>  
                        <?php if ($pengajuan == 'perumahan') { ?>
                        <?php } else { ?>                        
                            <?php if ($pengajuan == 'tower') { ?>
                                <div class="mb-3 row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                        Peta Bidang (dari BPN)
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Untuk Tower boleh tanpa peta bidang">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                        <br>
                                        <small>(jika belum bersertifikat) dan dilegalisir oleh BPN / Notaris.</small>
                                        <!-- <span class="required"></span> -->
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" id="alamat-pemohon" name="peta_bidang_tower" class="form-control ">
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="mb-3 row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                        Peta Bidang (dari BPN)
                                        <br>
                                        <small>(jika belum bersertifikat) dan dilegalisir oleh BPN / Notaris.</small>
                                        <span class="required"></span>
                                    </label>
                                    <div class="col-md-9 col-sm-9 ">
                                        <input type="file" id="alamat-pemohon" name="peta_bidang" class="form-control "accept=".jpg, .pdf">
                                        <small>File yang diterima hanya .jpg dan .pdf</small>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?> 
                        <div class="mb-3 row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                SHP File
                                <span class="ms-1" data-bs-toggle="tooltip" title="File berbentuk zip yang sudah di download">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                                <br>
                                <small><a href="<?php echo base_url('Map/polygon');?>" target="_blank">Polygon Map</a></small>
                                <!-- <span class="required"></span> -->
                            </label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="file" id="alamat-pemohon" name="shp" class="form-control "accept=".zip">
                                <small>File yang diterima hanya .zip</small>
                            </div>
                        </div>
                        <?php if ($pemilik_lahan_meninggal == '1') { ?>
                            <div class="mb-3 row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                    Surat Kematian
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" id="alamat-pemohon" name="surat_kematian" class="form-control ">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                    Surat Kuasa dari semua ahli waris
                                    <small>(jika ahli waris lebih dari 1)</small>
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" id="alamat-pemohon" name="surat_kuasa_ahli_waris" class="form-control ">
                                </div>
                            </div>
                        <?php } ?>                        
                        <?php if ($pengajuan == 'tower') { ?>
                            <div class="mb-3 row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                    Surat Rekomendasi dari Dinas Komunikasi dan Informatika
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" name="rekomendasi_dinas_komunikasi" class="form-control "accept=".jpg, .pdf">
                                    <small>File yang diterima hanya .jpg dan .pdf</small>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                    Surat Rekomendasi dari Komando Operasi TNI Angkatan Udara II Pangkalan TNI AU Abdulrachman Saleh
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" name="rekomendasi_tni" class="form-control "accept=".jpg, .pdf">
                                    <small>(untuk lokasi pengajuan di Kec. Pakis, Kec. Jabung dan Kec. Singosari).</small>
                                    <small>File yang diterima hanya .jpg dan .pdf</small>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($pengajuan == 'minimarket') { ?>
                            <div class="mb-3 row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                    Surat rekomendasi dinas perdagangan dan perindustrian
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" name="surat_dinas_perdagangan" class="form-control "accept=".jpg, .pdf">
                                    <small>File yang diterima hanya .jpg dan .pdf</small>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($pengajuan == 'peternakan') { ?>
                            <div class="mb-3 row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                    Surat rekomendasi dinas peternakan dan kesehatan hewan
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" name="surat_dinas_peternakan" class="form-control "accept=".jpg, .pdf">
                                    <small>File yang diterima hanya .jpg dan .pdf</small>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($pengajuan == 'spbu') { ?>
                            <div class="mb-3 row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                    Surat Rekomendasi dari PT. Pertamina (Persero) Marketing Operation Region (MOR) V
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" name="surat_pertamina" class="form-control "accept=".jpg, .pdf">
                                    <small>File yang diterima hanya .jpg dan .pdf</small>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($pengajuan == 'tempat_ibadah') { ?>
                            <div class="mb-3 row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                    Daftar nama dan fotokopi Kartu Tanda Penduduk (KTP)
                                    <span class="required"></span>
                                    <small>paling sedikit 90 orang dan daftar dukungan masyarakat sekitar paling sedikit 60 orang.</small>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" name="daftar_nama_kk" class="form-control "accept=".pdf">
                                    <small>File yang diterima hanya .pdf</small>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                                    Surat dari Forum Komunikasi Umat Beragama (FKUB)
                                    <span class="required"></span>
                                </label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" name="surat_fkub" class="form-control "accept=".jpg, .pdf">
                                    <small>File yang diterima hanya .jpg dan .pdf</small>
                                </div>
                            </div>
                        <?php } ?> 
                    </div>
                </div>
                <!--begin::Step 3-->                
                <!--begin::Actions-->
                <div class="d-flex flex-stack pt-15">
                    <!--begin::Wrapper-->
                    <div class="mr-2">
                        <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                            <i class="ki-duotone ki-arrow-left fs-4 me-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Back</button>
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Wrapper-->
                    <div class="">
                        <button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
                            <span class="indicator-label">Submit
                                <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i></span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                            <i class="ki-duotone ki-arrow-right fs-4 ms-1 me-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i></button>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Stepper-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->