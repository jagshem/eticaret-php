<?php include 'header.php'; ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Genel Ayarlar <small>İşlem Durumu <?php if ($_GET['durum']=="ok") {?>
                                    <br>
                                    <br>
                                    <strong class="green">Ayarlar Başarıyla Güncellendi!</strong>
                                <?php } elseif ($_GET['durum']=="no") {?>
                                    <br>
                                    <br>
                                    <strong class="red">Üzgünüz Ayarlar Güncellenemedi :(</strong>
                                <?php }?></small></h2>
                        <?php
                        if ($_GET['durum']=="ok") {?>
                            <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-3">
                                <div class="alert alert-success alert-dismissible fade in -align-center text-center" role="alert">
                                    <strong>Tebrikler!</strong> Ayarlar başarıyla güncellendi.
                                </div>
                            </div>
                        <?php } elseif ($_GET['durum']=="no") {?>
                            <div class="col-md-3 col-sm-3 col-xs-6 col-md-offset-3">
                                <div class="alert alert-danger alert-dismissible fade in -align-center text-center" role="alert">
                                    <strong>Üzgünüz!</strong> Ayarlar güncellenemedi.
                                </div>
                            </div>
                        <?php }?>

                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Adınız<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="ayar_ad" value="<?php echo $ayarcek['ayar_ad'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Soyadınız<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="ayar_soyad" value="<?php echo $ayarcek['ayar_soyad'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yaşınız<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="ayar_yas" value="<?php echo $ayarcek['ayar_yas'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesleğiniz<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="ayar_meslek" value="<?php echo $ayarcek['ayar_meslek'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon Numaranız<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="ayar_tel" value="<?php echo $ayarcek['ayar_tel'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">E-Mail Adresiniz<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şifreniz<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" id="first-name" name="ayar_sifre" value="<?php echo $ayarcek['ayar_sifre'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                                    <p>Şifre değiştirme işleminizden sonra yeni şifrenizi unutmamanız gerekir :)</p>
                                </div>
                            </div>

                            <hr>
                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">İptal Et</button>
                                <button type="submit" name="kisiselayarkaydet" class="btn btn-success">Güncelle</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
