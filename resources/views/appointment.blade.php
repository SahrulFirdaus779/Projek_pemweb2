<?php

use PHP_Email_Form\PHP_Email_Form;

// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'contact@example.com';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form();
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $_POST['nama_pengelola'];
$contact->from_email = $_POST['email'];
$contact->subject = 'Formulir Faskes: ' . $_POST['nama'];

// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
/*
$contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
);
*/

$contact->add_message('Nama Fasilitas Kesehatan: ' . $_POST['nama'], 'Nama Fasilitas Kesehatan');
$contact->add_message('Nama Pengelola: ' . $_POST['nama_pengelola'], 'Nama Pengelola');
$contact->add_message('Alamat: ' . $_POST['alamat'], 'Alamat');
$contact->add_message('Website: ' . $_POST['website'], 'Website');
$contact->add_message('Email: ' . $_POST['email'], 'Email');
$contact->add_message('Kabupaten/Kota: ' . $_POST['kabkota_id'], 'Kabupaten/Kota');
$contact->add_message('Rating: ' . $_POST['rating'], 'Rating');
$contact->add_message('Latitude: ' . $_POST['latitude'], 'Latitude');
$contact->add_message('Longitude: ' . $_POST['longitude'], 'Longitude');
$contact->add_message('Jenis Fasilitas Kesehatan: ' . $_POST['jenis_faskes_id'], 'Jenis Fasilitas Kesehatan');
$contact->add_message('Kategori: ' . $_POST['kategori_id'], 'Kategori');
$contact->add_message('Pesan: ' . $_POST['message'], 'Pesan (Opsional)');

echo $contact->send();
?>