<?php
include 'baglan.php';

if (isset($_POST['ayarayarkaydet'])) {
    $ayarkaydet=$db->prepare("UPDATE ayar SET
        ayar_title=:ayar_title,
        ayar_description=:ayar_description,
        ayar_keywords=:ayar_keywords,
        ayar_author=:ayar_author
        WHERE ayar_id=0");
    $update=$ayarkaydet->execute(array(
        'ayar_title' => $_POST['ayar_title'],
        'ayar_description' => $_POST['ayar_description'],
        'ayar_keywords' => $_POST['ayar_keywords'],
        'ayar_author' => $_POST['ayar_author']
    ));
    if ($update) {
        Header("Location:../production/genel-ayar.php?durum=ok");
    }
    else {
        Header("Location:../production/genel-ayar.php?durum=no");
    }
}

if (isset($_POST['iletisimayarkaydet'])) {
    $ayarkaydet=$db->prepare("UPDATE ayar SET
        ayar_tel=:ayar_tel,
        ayar_gsm=:ayar_gsm,
        ayar_faks=:ayar_faks,
        ayar_mail=:ayar_mail,
        ayar_il=:ayar_il,
        ayar_ilce=:ayar_ilce,
        ayar_adres=:ayar_adres,
        ayar_mesai=:ayar_mesai
        WHERE ayar_id=0");
    $update=$ayarkaydet->execute(array(
        'ayar_tel' => $_POST['ayar_tel'],
        'ayar_gsm' => $_POST['ayar_gsm'],
        'ayar_faks' => $_POST['ayar_faks'],
        'ayar_mail' => $_POST['ayar_mail'],
        'ayar_il' => $_POST['ayar_il'],
        'ayar_ilce' => $_POST['ayar_ilce'],
        'ayar_adres' => $_POST['ayar_adres'],
        'ayar_mesai' => $_POST['ayar_mesai']
    ));
    if ($update) {
        Header("Location:../production/iletisim-ayar.php?durum=ok");
    }
    else {
        Header("Location:../production/iletisim-ayar.php?durum=no");
    }
}

if (isset($_POST['kisiselayarkaydet'])) {
    $ayarkaydet=$db->prepare("UPDATE ayar SET
        ayar_ad=:ayar_ad,
        ayar_soyad=:ayar_soyad,
        ayar_yas=:ayar_yas,
        ayar_meslek=:ayar_meslek,
        ayar_tel=:ayar_tel,
        ayar_mail=:ayar_mail,
        ayar_sifre=:ayar_sifre
        WHERE ayar_id=0");
    $update=$ayarkaydet->execute(array(
        'ayar_ad' => $_POST['ayar_ad'],
        'ayar_soyad' => $_POST['ayar_soyad'],
        'ayar_yas' => $_POST['ayar_yas'],
        'ayar_meslek' => $_POST['ayar_meslek'],
        'ayar_tel' => $_POST['ayar_tel'],
        'ayar_mail' => $_POST['ayar_mail'],
        'ayar_sifre' => $_POST['ayar_sifre']
    ));
    if ($update) {
        Header("Location:../production/kisisel-ayar.php?durum=ok");
    }
    else {
        Header("Location:../production/kisisel-ayar.php?durum=no");
    }
}

if (isset($_POST['apiayarkaydet'])) {
    $ayarkaydet=$db->prepare("UPDATE ayar SET
        ayar_analystic=:ayar_analystic,
        ayar_maps=:ayar_maps,
        ayar_zopim=:ayar_zopim
        WHERE ayar_id=0");
    $update=$ayarkaydet->execute(array(
        'ayar_analystic' => $_POST['ayar_analystic'],
        'ayar_maps' => $_POST['ayar_maps'],
        'ayar_zopim' => $_POST['ayar_zopim']
    ));
    if ($update) {
        Header("Location:../production/api-ayarlar.php?durum=ok");
    }
    else {
        Header("Location:../production/api-ayarlar.php?durum=no");
    }
}

if (isset($_POST['sosyalayarkaydet'])) {
    $ayarkaydet=$db->prepare("UPDATE ayar SET
    ayar_facebook=:ayar_facebook,
    ayar_twitter=:ayar_twitter,
    ayar_google=:ayar_google,
    ayar_youtube=:ayar_youtube
    WHERE ayar_id=0");
    $update=$ayarkaydet->execute(array(
        'ayar_facebook' => $_POST['ayar_facebook'],
        'ayar_twitter' => $_POST['ayar_twitter'],
        'ayar_google' => $_POST['ayar_google'],
        'ayar_youtube' => $_POST['ayar_youtube']
    ));
    if ($update) {
        Header("Location:../production/sosyal-ayar.php?durum=ok");
    }
    else {
        Header("Location:../production/sosyal-ayar.php?durum=no");
    }
}

if (isset($_POST['mailayarkaydet'])) {
    $ayarkaydet=$db->prepare("UPDATE ayar SET
    ayar_smtphost=:ayar_smtphost,
    ayar_smtpuser=:ayar_smtpuser,
    ayar_smtppassword=:ayar_smtppassword,
    ayar_smtpport=:ayar_smtpport
    WHERE ayar_id=0");
    $update=$ayarkaydet->execute(array(
        'ayar_smtphost' => $_POST['ayar_smtphost'],
        'ayar_smtpuser' => $_POST['ayar_smtpuser'],
        'ayar_smtppassword' => $_POST['ayar_smtppassword'],
        'ayar_smtpport' => $_POST['ayar_smtpport']
    ));
    if ($update) {
        Header("Location:../production/mail-ayar.php?durum=ok");
    }
    else {
        Header("Location:../production/mail-ayar.php?durum=no");
    }
}

?>