<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>    

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.iconify.design/1/1.0.5/iconify.min.js" nonce="r@nd0m"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Javascript Bootstrap -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/style-daftar.css">

    <!-- Favicon and Touch Icons  -->

    <link rel="shortcut icon" type="image/png" href="../assets/favicon.png" />

    <script src="https://www.google.com/recaptcha/api.js"></script>

    <!-- Sweet alert -->    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
     
</head>
<body>
    
</body>
</html>


<?php

$json = '{"message":["Email sudah terdaftar"]}';
$arr = json_decode($json, TRUE);
if (isset($arr["errors"])) {
    $str = "";
    foreach ($arr["errors"] as $pesan ) {
        $str .= $pesan;
        $str .= " dan ";
    }
    $notif =  substr($str,0,-4);

echo "<script type=\"text/javascript\">
    swal({
        title: \"EDUBRIDGE\",
        text: '".$notif."',
        type: \"warning\",
        showCancelButton: false,
        confirmButtonColor: \"#DD6B55\",
        confirmButtonText: \"Click Here\",
        closeOnConfirm: false,
        closeOnCancel: false       
    }                       
        ); 
</script>" ;


} elseif (isset($arr["message"])) { ?>
     <script language="javascript">
        swal({
            title: "EDUBRIDGE",
            text: "DATA BERHASIL TERKIRIM",
            type: "success",
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Click Here",
            closeOnConfirm: true,
            closeOnCancel: false },
        function (isConfirm) {
            if (isConfirm) {
                setTimeout(swal("DONE!", "Redirect...", "success"), 30000);
                window.location.href="/";
            }  
        }
            ); 
        </script>
<?php }

die("test");

$f=1;

$pesan='';

function postapi($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch);  
    curl_close($ch);      
    return $output;
}

function loadapi($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch); 
    $httpstatus=curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);      
    return $output;
}

function http_request($url){
    //header("Access-Control-Allow-Origin: *");
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);
    
    // set user agent    
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 
    $httpstatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    // tutup curl 
    curl_close($ch);      

    // mengembalikan hasil curl
    return $output;
}


?>

<!DOCTYPE html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EduBridge | Daftar</title>


  <!-- jQuery --
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> --
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" nonce="r@nd0m"></script>-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>    

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.iconify.design/1/1.0.5/iconify.min.js" nonce="r@nd0m"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Javascript Bootstrap -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/style-daftar.css">

    <!-- Favicon and Touch Icons  -->

    <link rel="shortcut icon" type="image/png" href="../assets/favicon.png" />

    <script src="https://www.google.com/recaptcha/api.js"></script>

    <!-- Sweet alert -->    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
     <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
     
     
    <!-- validate --    
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    -->
    


<style>
input:focus + select {
    color: red;
}
input:focus { 
    outline: none !important;
    border-color: #719ECE;
    box-shadow: 0 0 10px #719ECE;
}
select:focus { 
    outline: none !important;
    border-color: #719ECE;
    box-shadow: 0 0 10px #719ECE;
}
</style>

<script>
function cekphone(kode, goods, field){
    var key, keychar;
    key = getkey(kode);
    if (key == null) return true; keychar=String.fromCharCode(key);
        keychar=keychar.toUpperCase(); goods=goods.toUpperCase(); document.getElementById('cktlp').innerHTML = '';
    if (goods.indexOf(keychar) != -1)
        return true;
    else return ;
    return false;
}
function myFunction3() {
  var x = document.getElementById("hurufbesar3");
  x.value = x.value.toUpperCase();
}

function huruf4(kode, goods, field){
    var key, keychar;
    key = getkey(kode);
    if (key == null) return true; keychar=String.fromCharCode(key);
        keychar=keychar.toUpperCase(); goods=goods.toUpperCase(); document.getElementById('salah3').innerHTML = '';
    if (goods.indexOf(keychar) != -1)
        return true;
    else return ;
    return false;
}
function myFunction4() {
  var x = document.getElementById("hurufbesar4");
  x.value = x.value.toUpperCase();
}

function huruf5(kode, goods, field){
    var key, keychar;
    key = getkey(kode);
    if (key == null) return true; keychar=String.fromCharCode(key);
        keychar=keychar.toUpperCase(); goods=goods.toUpperCase(); document.getElementById('salah3').innerHTML = '';
    if (goods.indexOf(keychar) != -1)
        return true;
    else return ;
    return false;
}
function myFunction5() {
  var x = document.getElementById("hurufbesar5");
  x.value = x.value.toUpperCase();
}

function huruf6(kode, goods, field){
    var key, keychar;
    key = getkey(kode);
    if (key == null) return true; keychar=String.fromCharCode(key);
        keychar=keychar.toUpperCase(); goods=goods.toUpperCase(); document.getElementById('salah3').innerHTML = '';
    if (goods.indexOf(keychar) != -1)
        return true;
    else return ;
    return false;
}
function myFunction6() {
  var x = document.getElementById("hurufbesar6");
  x.value = x.value.toUpperCase();
}

function huruf7(kode, goods, field){
    var key, keychar;
    key = getkey(kode);
    if (key == null) return true; keychar=String.fromCharCode(key);
        keychar=keychar.toUpperCase(); goods=goods.toUpperCase(); document.getElementById('salah3').innerHTML = '';
    if (goods.indexOf(keychar) != -1)
        return true;
    else return ;
    return false;
}
function myFunction7() {
  var x = document.getElementById("hurufbesar7");
  x.value = x.value.toUpperCase();
}

function huruf8(kode, goods, field){
    var key, keychar;
    key = getkey(kode);
    if (key == null) return true; keychar=String.fromCharCode(key);
        keychar=keychar.toUpperCase(); goods=goods.toUpperCase(); document.getElementById('salah3').innerHTML = '';
    if (goods.indexOf(keychar) != -1)
        return true;
    else return ;
    return false;
}
function myFunction8() {
  var x = document.getElementById("hurufbesar8");
  x.value = x.value.toUpperCase();
}
</script>

  </head>

  <body>
<?

if (isset($_POST['daftar'])){
    
$captcha = $_POST['g-recaptcha-response'];
if (!$captcha) {
?>    
                    <script language="javascript">
                    swal({
                        title: "EDUBRIDGE",
                        text: "POST Gagal, Anda tidak mencentang Captcha",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Click Here",
                        closeOnConfirm: false,
                        closeOnCancel: false },
                    function (isConfirm) {
                        if (isConfirm) {
                            setTimeout(swal("DONE!", "Redirect...", "success"), 30000);
                            window.location.href="daftar-coba.php";
                        } 
                        
                    }                         
                        ); 
                    </script><?
} else {
  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdMD6kUAAAAAB8xnzgVh49FUdH-xCz_wUNpgmos&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
  if ($response.success != true) {
    echo 'You are spammer !!!';
  } else {    

//====== POST DATA =======
$first_name=strtoupper($_POST['first_name']);
$last_name=strtoupper($_POST['last_name']);
$email = $_POST['email'];
$address = strtoupper($_POST['address']);
$city = $_POST['city'];
$phone_number = $_POST['phone_number'];
$date_of_birth = $_POST['date_of_birth'];
$gender = $_POST['gender'];
$hometown = $_POST['hometown'];
$ortufirstname=strtoupper($_POST['ortufirstname']);
$ortulastname=strtoupper($_POST['ortulastname']);
$relationship = $_POST['relationship'];
$emailortu = $_POST['emailortu'];
$tlportu = $_POST['tlportu'];
$school = strtoupper($_POST['school']);
$pendterakhir = $_POST['last_education'];
$curriculum = $_POST['curriculum'];
$majors  = $_POST['majors'];
$english_qualification  = $_POST['english_qualification'];
$lecture_duration  = $_POST['lecture_duration'];
$rencanastudy = $_POST['rencanastudy'];
$tujuan1=$_POST['tujuan1'];
$tujuan2=$_POST['tujuan2'];
$tujuan3=$_POST['tujuan3'];
$major  = $_POST['major'];
$source = $_POST['source'];
$namareferal= $_POST['referal'];
$counselor = $_POST['cons'];
$course = $_POST['course'];
$prepare_english = $_POST['prepare_english'];
$tyrout = $_POST['tyrout'];

if ($prepare_english == '') {$prepare_english=0;}
if ($cource == 'false') {$cource='0';} else {$cource='1';}

//var_dump($_POST['first_name']);
//exit;




if ($counselor <> 'null'){
$data = '{ "registration_source": "direct",
    "personal_information": 
    {   "first_name": "'.$first_name.'", 
        "last_name": "'.$last_name.'", 
        "email": "'.$email.'", 
        "city": "'.$city.'",
        "address": "'.$address.'", 
        "phone_number": "'.$phone_number.'", 
        "date_of_birth": "'.$date_of_birth.'", 
        "gender": "'.$gender.'", 
        "hometown": "'.$hometown.'" 
    }, 
  "parents_information": {  "first_name": "'.$ortufirstname.'", 
                            "last_name": "'.$ortulastname.'", 
                            "relationship": "'.$relationship.'", 
                            "email": "'.$emailortu.'", 
                            "phone_number": "'.$tlportu.'" 
    }, 
  "registration_data": {    "school": "'.$school.'", 
                            "last_education": "'.$pendterakhir.'", 
                            "majors": "'.$majors.'", 
                            "curriculum": "'.$curriculum.'", 
                            "english_qualification": "'.$english_qualification.'", 
                            "major": "'.$major.'", 
                            "lecture_duration": "'.$lecture_duration.'", 
                            "country_destination": [ "'.$tujuan1.'", "'.$tujuan2.'", "'.$tujuan3.'" ], 
                            "study_plan": "'.$rencanastudy.'", 
                            "reference": "'.$source.'",
                            "reference_name": "'.$namareferal.'"
    }, 
  "counselor": { "counselor_id": "'.$counselor.'" }, 
  "language": { "language_course": "'.$course.'", 
                "language_course_selected": "'.$prepare_english.'", 
                "tryout_status": "'.$tyrout.'" 
    } 
}';
} elseif (($counselor == 'null')and($prepare_english =='null')) { 
$data = '{ "registration_source": "direct",
    "personal_information": 
    {   "first_name": "'.$first_name.'", 
        "last_name": "'.$last_name.'", 
        "email": "'.$email.'", 
        "city": "'.$city.'",
        "address": "'.$address.'", 
        "phone_number": "'.$phone_number.'", 
        "date_of_birth": "'.$date_of_birth.'", 
        "gender": "'.$gender.'", 
        "hometown": "'.$hometown.'" 
    }, 
  "parents_information": {  "first_name": "'.$ortufirstname.'", 
                            "last_name": "'.$ortulastname.'", 
                            "relationship": "'.$relationship.'", 
                            "email": "'.$emailortu.'", 
                            "phone_number": "'.$tlportu.'" 
    }, 
  "registration_data": {    "school": "'.$school.'", 
                            "last_education": "'.$pendterakhir.'", 
                            "majors": "'.$majors.'", 
                            "curriculum": "'.$curriculum.'", 
                            "english_qualification": "'.$english_qualification.'", 
                            "major": "'.$major.'", 
                            "lecture_duration": "'.$lecture_duration.'", 
                            "country_destination": [ "'.$tujuan1.'", "'.$tujuan2.'", "'.$tujuan3.'" ], 
                            "study_plan": "'.$rencanastudy.'", 
                            "reference": "'.$source.'",
                            "reference_name": "'.$namareferal.'"
    }, 
  "language": { "language_course": "'.$course.'", 
                "language_course_selected": "0", 
                "tryout_status": "'.$tyrout.'" 
    } 
}';    
} elseif (($counselor <> 'null')and($prepare_english <>'null')) { 
$data = '{ "registration_source": "direct",
    "personal_information": 
    {   "first_name": "'.$first_name.'", 
        "last_name": "'.$last_name.'", 
        "email": "'.$email.'", 
        "city": "'.$city.'",
        "address": "'.$address.'", 
        "phone_number": "'.$phone_number.'", 
        "date_of_birth": "'.$date_of_birth.'", 
        "gender": "'.$gender.'", 
        "hometown": "'.$hometown.'" 
    }, 
  "parents_information": {  "first_name": "'.$ortufirstname.'", 
                            "last_name": "'.$ortulastname.'", 
                            "relationship": "'.$relationship.'", 
                            "email": "'.$emailortu.'", 
                            "phone_number": "'.$tlportu.'" 
    }, 
  "registration_data": {    "school": "'.$school.'", 
                            "last_education": "'.$pendterakhir.'", 
                            "majors": "'.$majors.'", 
                            "curriculum": "'.$curriculum.'", 
                            "english_qualification": "'.$english_qualification.'", 
                            "major": "'.$major.'", 
                            "lecture_duration": "'.$lecture_duration.'", 
                            "country_destination": [ "'.$tujuan1.'", "'.$tujuan2.'", "'.$tujuan3.'" ], 
                            "study_plan": "'.$rencanastudy.'", 
                            "reference": "'.$source.'",
                            "reference_name": "'.$namareferal.'"
    },
  "counselor": { "counselor_id": "'.$counselor.'" },    
  "language": { "language_course": "'.$course.'", 
                "language_course_selected": "1", 
                "tryout_status": "'.$tyrout.'" 
    } 
}';    
} elseif (($counselor == 'null')and($prepare_english <>'null')) { 
$data = '{ "registration_source": "direct",
    "personal_information": 
    {   "first_name": "'.$first_name.'", 
        "last_name": "'.$last_name.'", 
        "email": "'.$email.'", 
        "city": "'.$city.'",
        "address": "'.$address.'", 
        "phone_number": "'.$phone_number.'", 
        "date_of_birth": "'.$date_of_birth.'", 
        "gender": "'.$gender.'", 
        "hometown": "'.$hometown.'" 
    }, 
  "parents_information": {  "first_name": "'.$ortufirstname.'", 
                            "last_name": "'.$ortulastname.'", 
                            "relationship": "'.$relationship.'", 
                            "email": "'.$emailortu.'", 
                            "phone_number": "'.$tlportu.'" 
    }, 
  "registration_data": {    "school": "'.$school.'", 
                            "last_education": "'.$pendterakhir.'", 
                            "majors": "'.$majors.'", 
                            "curriculum": "'.$curriculum.'", 
                            "english_qualification": "'.$english_qualification.'", 
                            "major": "'.$major.'", 
                            "lecture_duration": "'.$lecture_duration.'", 
                            "country_destination": [ "'.$tujuan1.'", "'.$tujuan2.'", "'.$tujuan3.'" ], 
                            "study_plan": "'.$rencanastudy.'", 
                            "reference": "'.$source.'",
                            "reference_name": "'.$namareferal.'"
    },
  "language": { "language_course": "'.$course.'", 
                "language_course_selected": "'.$prepare_english.'", 
                "tryout_status": "'.$tyrout.'" 
    } 
}';    
} elseif (($counselor == 'null')and($prepare_english =='')) { 
$data = '{ "registration_source": "direct",
    "personal_information": 
    {   "first_name": "'.$first_name.'", 
        "last_name": "'.$last_name.'", 
        "email": "'.$email.'", 
        "city": "'.$city.'",
        "address": "'.$address.'", 
        "phone_number": "'.$phone_number.'", 
        "date_of_birth": "'.$date_of_birth.'", 
        "gender": "'.$gender.'", 
        "hometown": "'.$hometown.'" 
    }, 
  "parents_information": {  "first_name": "'.$ortufirstname.'", 
                            "last_name": "'.$ortulastname.'", 
                            "relationship": "'.$relationship.'", 
                            "email": "'.$emailortu.'", 
                            "phone_number": "'.$tlportu.'" 
    }, 
  "registration_data": {    "school": "'.$school.'", 
                            "last_education": "'.$pendterakhir.'", 
                            "majors": "'.$majors.'", 
                            "curriculum": "'.$curriculum.'", 
                            "english_qualification": "'.$english_qualification.'", 
                            "major": "'.$major.'", 
                            "lecture_duration": "'.$lecture_duration.'", 
                            "country_destination": [ "'.$tujuan1.'", "'.$tujuan2.'", "'.$tujuan3.'" ], 
                            "study_plan": "'.$rencanastudy.'", 
                            "reference": "'.$source.'",
                            "reference_name": "'.$namareferal.'"
    }, 
  "language": { "language_course": "false", 
                "language_course_selected": "0", 
                "tryout_status": "0" 
    } 
}';    
}
elseif (($counselor == 'null')and($english_qualification =='')) { 
$data = '{ "registration_source": "direct",
    "personal_information": 
    {   "first_name": "'.$first_name.'", 
        "last_name": "'.$last_name.'", 
        "email": "'.$email.'", 
        "city": "'.$city.'",
        "address": "'.$address.'", 
        "phone_number": "'.$phone_number.'", 
        "date_of_birth": "'.$date_of_birth.'", 
        "gender": "'.$gender.'", 
        "hometown": "'.$hometown.'" 
    }, 
  "parents_information": {  "first_name": "'.$ortufirstname.'", 
                            "last_name": "'.$ortulastname.'", 
                            "relationship": "'.$relationship.'", 
                            "email": "'.$emailortu.'", 
                            "phone_number": "'.$tlportu.'" 
    }, 
  "registration_data": {    "school": "'.$school.'", 
                            "last_education": "'.$pendterakhir.'", 
                            "majors": "'.$majors.'", 
                            "curriculum": "'.$curriculum.'", 
                            "english_qualification": "'.$english_qualification.'", 
                            "major": "'.$major.'", 
                            "lecture_duration": "'.$lecture_duration.'", 
                            "country_destination": [ "'.$tujuan1.'", "'.$tujuan2.'", "'.$tujuan3.'" ], 
                            "study_plan": "'.$rencanastudy.'", 
                            "reference": "'.$source.'",
                            "reference_name": "'.$namareferal.'"
    }, 
  "language": { "language_course": "'.$course.'", 
                "language_course_selected": "0", 
                "tryout_status": "'.$tyrout.'" 
    } 
}';    
}
elseif (($counselor <> 'null')and($english_qualification =='')) { 
$data = '{ "registration_source": "direct",
    "personal_information": 
    {   "first_name": "'.$first_name.'", 
        "last_name": "'.$last_name.'", 
        "email": "'.$email.'", 
        "city": "'.$city.'",
        "address": "'.$address.'", 
        "phone_number": "'.$phone_number.'", 
        "date_of_birth": "'.$date_of_birth.'", 
        "gender": "'.$gender.'", 
        "hometown": "'.$hometown.'" 
    }, 
  "parents_information": {  "first_name": "'.$ortufirstname.'", 
                            "last_name": "'.$ortulastname.'", 
                            "relationship": "'.$relationship.'", 
                            "email": "'.$emailortu.'", 
                            "phone_number": "'.$tlportu.'" 
    }, 
  "registration_data": {    "school": "'.$school.'", 
                            "last_education": "'.$pendterakhir.'", 
                            "majors": "'.$majors.'", 
                            "curriculum": "'.$curriculum.'", 
                            "english_qualification": "'.$english_qualification.'", 
                            "major": "'.$major.'", 
                            "lecture_duration": "'.$lecture_duration.'", 
                            "country_destination": [ "'.$tujuan1.'", "'.$tujuan2.'", "'.$tujuan3.'" ], 
                            "study_plan": "'.$rencanastudy.'", 
                            "reference": "'.$source.'",
                            "reference_name": "'.$namareferal.'"
    }, 
  "counselor": { "counselor_id": "'.$counselor.'" },    
  "language": { "language_course": "'.$course.'", 
                "language_course_selected": "0", 
                "tryout_status": "'.$tyrout.'" 
    } 
}';    
}
//echo "English qualification : ".$english_qualification. "<br />";
//echo "Konselor : ". $counselor. "<br />";
//echo "prepare english : ". $prepare_english. "<br />";
//echo "Trayout : ". $tyrout. "<br />";

//echo "<b>Dump Mode :</b> <br />";
//echo "Course : ".$course."<br />";
//var_dump($data);
//exit;

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://edbrg.smtapps.net/api/study-overseas',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$data,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

//var_dump($ch);
//echo "<b>API Messages : </b>".$result;  
//echo "<br>";
//echo "<b>Error Messages : </b>".$errors;  
//exit;

$arr = json_decode($response, TRUE);
if (isset($arr["errors"])) {
    $str = "";
    foreach ($arr["errors"] as $pesan ) {
        $str .= $pesan;
        $str .= " , ";
    }
    $notif =  substr($str,0,-3);

echo "<script type=\"text/javascript\">
    swal({
        title: \"EDUBRIDGE\",
        text: '".$notif."',
        type: \"warning\",
        showCancelButton: false,
        confirmButtonColor: \"#DD6B55\",
        confirmButtonText: \"Click Here\",
        closeOnConfirm: false,
        closeOnCancel: false       
    }                       
        ); 
</script>" ;


} elseif (isset($arr["message"])) { ?>
     <script language="javascript">
        swal({
            title: "EDUBRIDGE",
            text: "DATA BERHASIL TERKIRIM",
            type: "success",
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Click Here",
            closeOnConfirm: true,
            closeOnCancel: false },
        function (isConfirm) {
            if (isConfirm) {
                setTimeout(swal("DONE!", "Redirect...", "success"), 30000);
                window.location.href="/";
            }  
        }
            ); 
        </script>
<?php }


//end chaptcha
    }
}
//echo "<b><br>Payload :<br></b>".$data; 
//exit;    
}



?>



<!-- Awal Header -->
    <section
      class="header"
      style="background-image: url('../images/bg-header.jpg')"
    >
      <div class="row">
        <a href="/" class="mx-auto mx-lg-0 logo-eb-header"
          ><img
            src="../images/logo-edubridge.png"
            class="mx-auto mx-lg-0 ml-0 ml-lg-5"
          />
        </a>

        <a href="/adm" class="ml-0 ml-lg-auto" style="text-decoration: none"
          ><button class="btn mr-5 mt-5 d-none d-lg-block">Login</button></a
        >
      </div>
    </section>
    <!-- Akhir Header -->

    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button
      class="navbar-toggler ml-auto mr-4 mr-lg-5"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav d-flex w-100">
        <?  
            include ("../menu/beranda.php");
            include ("../menu/layanankami.php"); 
            include ("../menu/studiluarnegeri.php"); 
            include ("../menu/kursus.php"); 
            include ("../menu/berita-acara.php"); 
            include ("../menu/hubungikami.php"); 
        ?>  
        <button class="btn-block active">
          <a class="nav-item nav-link" href="daftar.php">Daftar Sekarang</a>
        </button>

        <?  
            include ("../menu/search.php");         
        ?>  

      </div>
    </div>
  </nav>
    <!-- Akhir Navbar -->





<!-- Awal Daftar -->

 <section class="daftar">
  <div class="container mx-auto">
    <h4 class="text-center mt-5">DAFTAR SEKARANG</h4>
   <div class="line mx-auto"></div>

    <form id="Form" name="edupost" class="mt-5 pt-4" method="post" action="daftar-coba.php">
      <div class="bg-kategori">
       <p class="font-weight-bold pb-2 text-white pt-2 pl-3">Data Pribadi</p>
      </div>

      <div class="row">

        <div class="col-12 col-lg-4">
          <label>Nama Depan<font color="red"><sup><b>*</b></sup></font> :</label>
          <input  id="hurufbesar3" onkeyup="myFunction3()" autocomplete="off" name="first_name" type="text" class="form-control" placeholder="Nama Depan" required>
          <!--<input id="hurufbesar3" onkeyup="myFunction3()" data-validation="required length alphanumeric" autocomplete="off" name="first_name" type="text" class="form-control" placeholder="Nama Belakang"  data-validation-length="2-50" data-validation-error-msg="Nama depan harus berupa alfanumerik (2-50 karakter)" required>-->
        </div>

        <div class="col-12 col-lg-4 mt-4 mt-lg-0">
          <label>Nama Belakang<font color="red"><sup><b>*</b></sup></font> :</label>
          <input  id="hurufbesar4" onkeyup="myFunction4()" maxlength="50" autocomplete="off" name="last_name" type="text" class="form-control" placeholder="Nama Belakang" required>
          <!--<input id="hurufbesar4" onkeyup="myFunction4()" data-validation="required length alphanumeric" maxlength="50" autocomplete="off" name="last_name" type="text" class="form-control" placeholder="Nama Belakang"  data-validation-length="2-50" data-validation-error-msg="Nama belakang harus berupa alfanumerik (2-50 karakter)" required>-->
        </div>

        <div class="col-12 col-lg-4 mt-4 mt-lg-0">
          <label>Email<font color="red"><sup><b>*</b></sup></font> :</label>
          <input onkeyup="render(this)" data-url="email" maxlength="60" autocomplete="on" name="email" type="email" class="form-control" placeholder="Email"  required>
            <font color='#b94a48'><div class="ckemail"></div></font>
        </div>

        <div class="col-12 col-lg-4 mt-4">
          <label>Alamat :</label>
          <input  autocomplete="on" name="address" type="text" class="form-control" placeholder="Alamat" onkeypress="return huruf4(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-.,/ ',this)" id="hurufbesar5" onkeyup="myFunction5()"  required>
            <div id="salah4"></div>
        </div>

        <div class="form-group col-12 col-lg-4 mt-2 mt-lg-4">
            <label for="city" class="form-control-plaintext">Kota Domisili<font color="red"><sup><b>*</b></sup></font> : </label>
          <select  data-validation="required" data-validation-error-msg="Tidak boleh kosong" id="domisili" class="form-control js-example-basic-single"  name="city" onChange="doms(this.value)" required>
            <?
            $data = json_decode(loadapi("https://edbrg.smtapps.net/api/general/cities"),TRUE);
                if (is_array($data) || is_object($data)){
	            echo "<option value=''>Pilih Kota Domisili kamu...</option>";
                foreach($data as $row){
                    echo "<option value='".$row['id']."'> ".strtoupper($row['name'])."</option>";
                    }
                }    
            ?>       
          </select>
          <div id="salahdom"></div>
        </div>

        <div class="col-12 col-lg-4 mt-4">
          <label>No Telp<font color="red"><sup><b>*</b></sup></font> :</label>
          <input onkeyup="renderPhone(this)" data-validation="required phone" data-validation-error-msg="Tidak boleh kosong" data-url="phone" maxlength="15" autocomplete="on" name="phone_number" type="text" class="form-control no_hp" placeholder="format : 08xx / +628xx" onkeypress="return cekphone(event,'0123456789+',this)" >
            <font color='#b94a48'><div class="cktlp"></div></font>
        </div>
<script>
let delay = (callback, ms) => {
	let arguments, timer = 0;
	return function() {
		let context = this, args = arguments;
		clearTimeout(timer);
		timer = setTimeout(function () {
		  callback.apply(context, args);
		}, ms || 0);
	};
};

let loadjson = async (endpoint, cFunction) => {
	let res = await fetch(endpoint);
	if (res.status == 200) { data = await res.json(); return cFunction(data); }
	throw new Error(res.status);
};

let urlapi = "https://edbrg.smtapps.net/api/general/";
let render = (el) => {
	
	el.onkeyup = delay(() => {
  	let link = urlapi+el.getAttribute("data-url")+"/"+el.value;
  	loadjson(link,((data)=>{
    document.querySelector(".ckemail").innerHTML = "";
let node = document.createElement("div");   
//let textnode = document.createTextNode("Email : "+data.status);
if (data.status=="exist") {
let textnode = document.createTextNode("Email Sudah terdaftar"); 
node.appendChild(textnode);
}
//else
//{
//let textnode = document.createTextNode("Email Ok"); 
//node.appendChild(textnode);    
//}
   
document.querySelector(".ckemail").appendChild(node);
    }));
	},100);
};

let renderPhone = (el) => {
	
	el.onkeyup = delay(() => {
  	let link = urlapi+el.getAttribute("data-url")+"/"+el.value;
  	loadjson(link,((data)=>{
    document.querySelector(".cktlp").innerHTML = "";
let node = document.createElement("div");  
//let textnode = document.createTextNode("Phone : "+data.status);   
//node.appendChild(textnode);   
if (data.status=="exist") {
let textnode = document.createTextNode("Nomor handphone sudah terdaftar."); 
node.appendChild(textnode);
}
//else
//{
//let textnode = document.createTextNode("Telepon Ok"); 
//node.appendChild(textnode);    
//}
document.querySelector(".cktlp").appendChild(node);
    }));
	},100);
};

var render2 = (el) => {
	
	el.onkeyup = delay(() => {
  	let link = urlapi+el.getAttribute("data-url")+"/"+el.value;
  	loadjson(link,((data)=>{
    document.querySelector(".ckemail2").innerHTML = "";
let node = document.createElement("div");   
//let textnode = document.createTextNode("Email : "+data.status);   
if (data.status=="exist") {
let textnode = document.createTextNode("Email Sudah terdaftar"); 
node.appendChild(textnode);
}
//else
//{
//let textnode = document.createTextNode("Email Ok"); 
//node.appendChild(textnode);    
//}
//node.appendChild(textnode);   
document.querySelector(".ckemail2").appendChild(node);
    }));
	},200);
};

var renderPhone2 = (el) => {
	
	el.onkeyup = delay(() => {
  	let link = urlapi+el.getAttribute("data-url")+"/"+el.value;
  	loadjson(link,((data)=>{
    document.querySelector(".cktlp2").innerHTML = "";
let node = document.createElement("div");   
//let textnode = document.createTextNode("Phone : "+data.status);   
//node.appendChild(textnode);   
if (data.status=="exist") {
let textnode = document.createTextNode("Nomor handphone sudah terdaftar."); 
node.appendChild(textnode);
}
//else
//{
//let textnode = document.createTextNode("Telepon Ok"); 
//node.appendChild(textnode);    
//}
document.querySelector(".cktlp2").appendChild(node);
    }));
	},200);
};


</script>

        <div class="col-12 col-lg-4 mt-4">
          <label>Tanggal Lahir<font color="red"><sup><b>*</b></sup></font> :</label>
          <input autocomplete="off"  placeholder="Pilih Tanggal lahir" data-date-format='dd-mm-yyyy' type="text" class="form-control datepicker" name="date_of_birth"   onkeypress="return huruf(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-',this)" required>
        </div>

<script  type="text/javascript">
  $( function() {
    $( ".datepicker" ).datepicker().on('change', function() {
      $('.datepicker-dropdown').hide()
    });
  }); 
</script>

        <div class="form-group col-12 col-lg-4 mt-4">
          <label>Jenis Kelamin<font color="red"><sup><b>*</b></sup></font> : </label>
          <select data-validation="required" class="form-control js-example-basic-single"  name="gender" onChange="kel(this.value)" required>
            <option value="" selected>Pilih disini...</option>
            <option value="male"> LAKI-LAKI </option>
            <option value="female"> PEREMPUAN </option>
          </select>
          <div id="salahkel"></div>
        </div>

        <div class="form-group col-12 col-lg-4 mt-2 mt-lg-4">
          <label>Kota Kelahiran : </label>
        <select id="inputState" class="form-control js-example-basic-single"  name="hometown" required>
            <option selected>Pilih disini...</option>
            <? 
            $data = json_decode(loadapi("https://edbrg.smtapps.net/api/general/cities"),TRUE);
                foreach($data as $row){
                    echo "<option value='".$row['id']."'> ".strtoupper($row['name'])."</option>";
                    }             
            ?>            
          </select>
        </div>
    </div>


      <div class="bg-kategori mt-5">
       <p class="font-weight-bold pb-2 text-white pt-2 pl-3">Data Orang Tua</p>
      </div>

    <div class="row">

      <div class="col-12 col-lg-6">
          <label>Nama Depan Orang Tua<font color="red"><sup><b>*</b></sup></font> :</label>
          <input  id="hurufbesar6" onkeyup="myFunction6()" autocomplete="on" name="ortufirstname" type="text" class="form-control" placeholder="Nama Depan Orang Tua" onkeypress="return huruf6(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" >
          <!--<input id="hurufbesar6" onkeyup="myFunction6()" data-validation="length alphanumeric" data-validation-length="2-50" data-validation-error-msg="Nama depan harus berupa alfanumerik (2-50 karakter)" autocomplete="on" name="ortufirstname" type="text" class="form-control" placeholder="Nama Depan Orang Tua" onkeypress="return huruf6(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',this)" >-->
            <div id="salah6"></div>
        </div>

        <div class="col-12 col-lg-6 mt-4 mt-lg-0">
          <label>Nama Belakang Orang Tua<font color="red"><sup><b>*</b></sup></font> :</label>
          <input  id="hurufbesar7" onkeyup="myFunction7()"  autocomplete="on" name="ortulastname" type="text" class="form-control" placeholder="Nama Belakang Orang Tua"  onkeypress="return huruf7(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)">
          <!--<input id="hurufbesar7" onkeyup="myFunction7()" data-validation="length alphanumeric" data-validation-length="2-50" data-validation-error-msg="Nama belakang harus berupa alfanumerik (2-50 karakter)" autocomplete="on" name="ortulastname" type="text" class="form-control" placeholder="Nama Belakang Orang Tua"  onkeypress="return huruf7(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)">-->
            <div id="salah7"></div>
        </div>

        <div class="form-group col-12 col-lg-4 mt-4">
          <label for="inputState">Hubungan : </label>
          <select data-validation="required" class="form-control js-example-basic-single" name="relationship">
            <option value="" selected>Pilih disini...</option>
            <? if ($f==0){
                $g="SELECT `ket` FROM `setting_hub`";
                $k=mysqli_query($db,$g);
                while($jw=mysqli_fetch_array($k)){
                    if ($hub1==$jw['ket']){
                    echo "<option value='".strtoupper($jw['ket'])."' selected> ".strtoupper($jw['ket'])."</option>";
                    }else{
                    echo "<option value='".strtoupper($jw['ket'])."'> ".strtoupper($jw['ket'])."</option>";
                    }

                }
            } else {
                $g="SELECT `ket` FROM `setting_hub`";
                $k=mysqli_query($db,$g);
                while($jw=mysqli_fetch_array($k)){
                    echo "<option value='".strtoupper($jw['ket'])."'> ".strtoupper($jw['ket'])."</option>";

                }
             } ?>
          </select>
        </div>

        <div class="col-12 col-lg-4 mt-2 mt-lg-4">
          <label>Email Orang Tua<font color="red"><sup><b>*</b></sup></font> :</label>
          <input  id="emailortu" maxlength="60" autocomplete="off" name="emailortu" type="text" class="form-control" placeholder="Email Orang Tua" >
          <!--<input onkeyup="render2(this)" data-url="email" data-validation="email" data-validation-error-msg="Anda belum memberikan alamat email yang benar" id="emailortu" maxlength="60" autocomplete="off" name="emailortu" type="text" class="form-control" placeholder="Email Orang Tua" >
            <font color='#b94a48'><div class="ckemail2"></div></font>-->
        </div>
        
        <script>
            let delay = (callback, ms) => {
	        let arguments, timer = 0;
	            return function() {
		            let context = this, args = arguments;
		                clearTimeout(timer);
		                timer = setTimeout(function () {
		                callback.apply(context, args);
		            }, ms || 0);
	            };
            };

            let loadjson = async (endpoint, cFunction) => {
	        let res = await fetch(endpoint);
	        if (res.status == 200) { data = await res.json(); return cFunction(data); }
	        throw new Error(res.status);
            };

            let parsingdata = (data) =>{
	            document.querySelector(".ckemail2").innerHTML = "Email : "+data.email+", "+data.status;
            };

        </script>        

        <div class="col-12 col-lg-4 mt-4">
          <label>Nomor Telp Orang Tua<font color="red"><sup><b>*</b></sup></font> :</label>
          <input  maxlength="15" autocomplete="off" name="tlportu" type="text" class="form-control no_hp" placeholder="format : 08xx / +628xx" onkeypress="return cekphone(event,'0123456789-+',this)">
          <!--<input onkeyup="renderPhone2(this)" data-validation="required phone" data-url="phone" data-validation-error-msg="Nomor telpon tidak boleh kosong" maxlength="15" autocomplete="off" name="tlportu" type="text" class="form-control no_hp" placeholder="format : 08xx / +628xx" onkeypress="return cekphone(event,'0123456789-+',this)">
          <font color='#b94a48'><div class="cktlp2"></div></font>-->
     
        </div>
    </div>

       <div class="bg-kategori mt-5">
       <p class="font-weight-bold pb-2 text-white pt-2 pl-3">Data Pendaftaran</p>
      </div>

    <div class="row">
      <div class="col-12 col-lg-4">
          <label>Nama Sekolah<font color="red"><sup><b>*</b></sup></font> :</label>
          <input id="hurufbesar8" onkeyup="myFunction8()" minlength="5" maxlength="100" autocomplete="off" name="school" type="text" class="form-control" placeholder="Nama Sekolah" onkeypress="return huruf10(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-./ ',this)" required>
          <!--<input id="hurufbesar8" onkeyup="myFunction8()" data-validation="required" data-validation-error-msg="Nama Sekolah tidak boleh kosong" minlength="5" maxlength="100" autocomplete="off" name="school" type="text" class="form-control" placeholder="Nama Sekolah" onkeypress="return huruf10(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-./ ',this)" required>-->
            <div id="salah10"></div>
        </div>

        <div class="form-group col-12 col-lg-4 mt-4 mt-lg-0">
          <label for="inputState">Pendirikan Terakhir<font color="red"><sup><b>*</b></sup></font> : </label>
          <select data-validation="required" data-validation-error-msg="Tidak boleh kosong" id="pend" class="form-control js-example-basic-single"  name="last_education" required>
          </select>
          <div id="salahpend"></div>
        </div>

        <div class="form-group col-12 col-lg-4 mt-2 mt-lg-0">
          <label>Penjurusan<font color="red"><sup><b>*</b></sup></font> : </label>
          <select data-validation="required" data-validation-error-msg="Tidak boleh kosong" id='sma' class="form-control js-example-basic-single"  name="majors" required>
            <option value="" selected>Pilih jurusan...</option>
          </select>
        </div>

        <div class="form-group col-12 col-lg-4 mt-2 mt-lg-0">
          <label>Kurikulum<font color="red"><sup><b>*</b></sup></font> : </label>
          <select data-validation="required" class="form-control js-example-basic-single" name="curriculum" required>
            <option value="" selected>Pilih disini...</option>
            <?
            $data = json_decode(loadapi("https://edbrg.smtapps.net/api/general/curriculum"),TRUE);
                foreach($data as $row){
                    echo "<option value='".$row['id']."'> ".strtoupper($row['name'])."</option>";
                    } 
            ?>        
          </select>
        </div>

        <div class="form-group col-12 col-lg-4 mt-2">
          <label>Kualifikasi Bhs Inggris<font color="red"><sup><b>*</b></sup></font> : </label>
          <select  class="form-control js-example-basic-single" name="english_qualification" onchange="showDiv(this)" required>
            <option value="" selected>Pilih disini...</option>
            <?
            $data = json_decode(loadapi("https://edbrg.smtapps.net/api/general/english-qualification"),TRUE);
                foreach($data as $row){
                    echo "<option value='".$row['id']."'> ".strtoupper($row['name'])."</option>";
                    } 
            ?> 
          </select>
        </div>

        <div class="form-group col-12 col-lg-4 mt-2">
          <label>Jurusan yang Diminati<font color="red"><sup><b>*</b></sup></font> : </label>
          <select id="diminati" class="form-control js-example-basic-single" name="major" required>
            <option value="" selected>Pilih disini...</option>
          </select>
        </div>

        <div class="form-group col-12 col-lg-4 mt-2">
          <label>Durasi Kuliah yang Diminati<font color="red"><sup><b>*</b></sup></font> : </label>
          <select id="durasi" class="form-control js-example-basic-single"  name="lecture_duration" required>
            <option value="" selected>Pilih disini...</option>
          </select>
        </div>

        <div class="form-group col-12 col-lg-4 mt-2">
          <label for="inputState">Negara Tujuan 1 : </label>
          <select class="form-control js-example-basic-single" name="tujuan1">
            <option value="" selected>Pilih disini...</option>
            <?
            $data = json_decode(loadapi("https://edbrg.smtapps.net/api/general/countries"),TRUE);
                foreach($data as $row){
                    echo "<option value='".$row['id']."'> ".strtoupper($row['name'])."</option>";
                    } 
            ?> 
          </select>
        </div>

        <div class="form-group col-12 col-lg-4 mt-2">
          <label for="inputState">Negara Tujuan 2 : </label>
          <select class="form-control js-example-basic-single" name="tujuan2">
            <option value="" selected>Pilih disini...</option>
            <?
            $data = json_decode(loadapi("https://edbrg.smtapps.net/api/general/countries"),TRUE);
                foreach($data as $row){
                    echo "<option value='".$row['id']."'> ".strtoupper($row['name'])."</option>";
                    } 
            ?> 
            </select>
        </div>

        <div class="form-group col-12 col-lg-4 mt-2">
          <label for="inputState">Negara Tujuan 3 : </label>
          <select class="form-control js-example-basic-single" name="tujuan3">
            <option value="" selected>Pilih disini...</option>
            <?
            $data = json_decode(loadapi("https://edbrg.smtapps.net/api/general/countries"),TRUE);
                foreach($data as $row){
                    echo "<option value='".$row['id']."'> ".strtoupper($row['name'])."</option>";
                    } 
            ?> 
            </select>
        </div>

    <link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>

        <div class="col-12 col-lg-4 mt-2">
          <label>Rencana Studi :</label>
                    <input id="datep" type="text" class="form-control" name="rencanastudy" autocomplete="off" onkeypress="return huruf(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789- ',this)" required>
        </div>
<script  type="text/javascript">
$("#datep").datepicker( {
    format: "mm-yyyy",
    viewMode: "months",
    minViewMode: "months",
    autoClose: true,
    useCurrent: false,
    locale: 'id'
}).on('change', function() {
  $('.datepicker-dropdown').hide()
});
$("#datel").datepicker( {
    format: "m-yyyy",
    viewMode: "months",
    minViewMode: "months",
    autoClose: true,
    useCurrent: false,
    locale: 'id'
}).on('change', function() {
  $('.datepicker-dropdown').hide()
});
</script>


        <div class="form-group col-12 col-lg-4 mt-2">
          <label for="inputState">Darimana Anda tahu EduBridge? :<font color="red"><sup><b>*</b></sup></font> </label>
         <select  class="form-control js-example-basic-single"  name="source" onChange="tampil(this.value)"  required>
            <option value="" selected>Pilih disini...</option>
            <? if ($f==0) {
                    if($source = 'Facebook'){ echo "<option value='Facebook' selected> Facebook </option>";} else {echo "<option value='Facebook'> Facebook </option>";}
                    if($source = 'Instagram'){ echo "<option value='Instagram' selected> Instagram </option>";} else {echo "<option value='Instagram'> Instagram </option>";}
                    if($source = 'Whatsapp'){ echo "<option value='Whatsapp' selected> Whatsapp </option>";} else {echo "<option value='Whatsapp'> Whatsapp </option>";}
                    if($source = 'Pameran'){ echo "<option value='Pameran' selected> Pameran / Workshop </option>";} else {echo "<option value='Pameran'> Pameran / Workshop </option>";}
                    if($source = 'Spanduk'){ echo "<option value='Spanduk' selected> Spanduk/Lewat </option>";} else {echo "<option value='Spanduk'> Spanduk/Lewat </option>";}
                    if($source = 'BY PHONE'){ echo "<option value='BY PHONE' selected> By Phone </option>";} else {echo "<option value='BY PHONE'> By Phone </option>";}
                    if($source = 'Referal'){ echo "<option value='Referal' selected> Teman/Saudara </option>";} else {echo "<option value='Referal'> Teman/Saudara </option>";}
               } else { ?>
                <option value="Facebook"> Facebook </option>
                <option value="Instagram"> Instagram </option>
                <option value="Whatsapp"> WhatsApp </option>
                <option value="Pameran"> Pameran / Workshop </option>
                <option value="Spanduk"> Spanduk/Lewat </option>
                <option value="BY PHONE"> By Phone </option>
                <option value="Referal"> Teman/Saudara </option>
            <? } ?>
          </select>
            <div id="bar"></div>

        </div>
    </div>

      <div class="bg-kategori mt-5">
       <p class="font-weight-bold pb-2 text-white pt-2 pl-3">Konselor EduBridge</p>
      </div>

      <div class="form-group col-12 col-lg-4 mt-4 pl-0">
          <label for="inputState">Nama Konselor EduBridge :<font color="red"><sup><b>*</b></sup></font> </label>
          <select id="konselor" class="form-control" name="cons" required>
            <option value="NULL" selected>Pilih disini...</option>
          </select>
      </div>


      <div id="hidden_div" style="display:none;">
      <div  class="bg-kategori mt-5">
       <p class="font-weight-bold pb-2 text-white pt-2 pl-3">Language</p>
      </div>

      <div class="row ml-0">
      <div  class="form-group col-12 col-lg-6 pl-0">
        <label for="inputState">Apakah Anda berminat mengikuti Language Course? : </label>
         <select name="course" id="inputState" class="form-control" onChange="eng(this.value)">
          <!--<option value="" selected>Pilih Disini</option>-->
            <option value="0" selected>Tidak</option>
            <option value="1">Ya</option>
          </select>
          <div id="ingris"></div>
      </div>

      <div  class="form-group col-12 col-lg-6 pl-0">
        <label for="inputState">Apakah Anda berminat mengikuti kelas TRY OUT EduBridge? : </label>
        <select name="tyrout" id="inputState" class="form-control">
          <!--<option value="" selected>Pilih disini...</option>-->
          <option value="1">Ya</option>
          <option value="0" selected>Tidak</option>
        </select>
        <h6 class="mt-2" style="font-size: 10px; line-height: 16px; color: #A80004">Test hanya untuk IELTS/TOEFL, dengan harga Rp.150,000 <br> untuk 4 sections (listening, reading, writing and speaking)</h6>
      </div>

    </div>
    </div>
    Note : <font color="red"><sup><b>*</b></sup></font> Harus di isi
    <br><br><br>
    
     <div class="g-recaptcha" data-validation="recaptcha" data-validation-recaptcha-sitekey="6LdMD6kUAAAAAFyZWshXjxmKymCwhbhISmV6vQhu" data-sitekey="6LdMD6kUAAAAAFyZWshXjxmKymCwhbhISmV6vQhu"></div>
      <input id="daftars" type="submit" name="daftar" class="btn btn-danger pl-5 pr-5 mt-3" value="Daftar" disabled>
  </div>
 </form>

  </section>

<!-- Akhir Daftar -->

<!-- Awal Footer -->
<? include "footer.php";?>
<!-- Akhir Footer -->
<!--<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	    // Format nomor HP.
	  $( '.no_hp' ).mask('000-0000-00000');
	})
</script>-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script type="text/javascript">

      	$.ajax({

            type: 'POST',

          	url: "get_pend.php",

          	cache: false,

          	success: function(msg){

              $("#pend").html(msg);

            }

        });



      	$("#pend").change(function(){

      	var pend = $("#pend").val();

          	$.ajax({

          		type: 'POST',

              	url: "get_sma.php",

              	data: {pend: pend},

              	cache: false,

              	success: function(msg){

                  $("#sma").html(msg);

                }

            });

        });

        

      	$("#pend").change(function(){

      	var pend = $("#pend").val();

          	$.ajax({

          		type: 'POST',

              	url: "get_durasi.php",

              	data: {pend: pend},

              	cache: false,

              	success: function(msg){

                  $("#durasi").html(msg);

                }

            });

        });    
        
        
      	$("#sma").change(function(){

      	var jur = $("#sma").val();

          	$.ajax({

          		type: 'POST',

              	url: "get_jur.php",

              	data: {jur: jur},

              	cache: false,

              	success: function(msg){

                  $("#diminati").html(msg);

                }

            });

        });
</script>  

<script type="javascript">

      	$.ajax({
            type: 'POST',

          	url: "get_region.php",

          	cache: false,

          	success: function(msg){

              $("#domisili").html(msg);

            }

        });
</script>

<script>
function showDiv(select){
   if(select.value==7){
    document.getElementById('hidden_div').style.display = "block";
   } else{
    document.getElementById('hidden_div').style.display = "none";
   }
} 

$(document).ready(function() {
$(".js-example-basic-single").select2({
  theme: "classic",
  debug: "false"
});

$("#domisili").change(function(){
    var dom = $("#domisili").val();
    $.ajax({
        type: 'POST',
        url: "get_konselor.php",
        data: {dom: dom},	
        cache: false,
        success: function(msg){
          $("#konselor").html(msg);
        }
    });
});

});

$("#konselor").change(function(){    
    $("#daftars").attr("disabled", false);
    //document.getElementById("#daftars").removeAttribute('disabled');
});  
</script>


 <script type="text/javascript">

    function tampil(referral)
    {
      var bar="";
      switch(referral)
      {
        case "referral" : {
          bar = "<input></input>";
        }
        break;

        default :bar ="";
      }
      document.getElementById('bar').innerHTML =bar;
    }


    function tampil(referral)
    {
      var bar="";
      switch(referral)
      {
        case "Referal" : {
          bar = "<input type='text'  name='referal' class='form-control' placeholder='Masukkan nama referal' onkeypress='return huruf(event,'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ',this)' id='hurufbesar8' onkeyup='myFunction8()'></input>";
        }
        break;

        default :bar ="";
      }
      document.getElementById('bar').innerHTML =bar;
    }


function eng(pilihan)
    {
      var eng="";
      switch(pilihan)
      {
        case "1" :
          eng = "<select name='prepare_english' class='form-control js-example-basic-single' required><option value='null' selected>Pilih kursus</option><?php
          $data = json_decode(loadapi("https://edbrg.smtapps.net/api/general/courses"),TRUE);
                foreach($data as $row){
                    echo "<option value='".$row['id']."'> ".strtoupper($row['name'])."</option>";
                    }
          ?></select>";
        break;
        case "0" :
          eng = "<select name='prepare_english' class='form-control js-example-basic-single'  hidden><option value='0' selected>No</option></select>";
        break;        
      }
      document.getElementById('ingris').innerHTML =eng;
    }

function doms(pilihan)
    {
      switch(pilihan)
      {
        case "" :
          document.getElementById('salahdom').innerHTML ="<font color='red'><small>Tidak boleh kosong</small></font>";
        break; 
        default : document.getElementById('salahdom').innerHTML ="";
      }
      
    }    

function kel(pilihan)
    {
      switch(pilihan)
      {
        case "" :
          document.getElementById('salahkel').innerHTML ="<font color='red'><small>Tidak boleh kosong</small></font>";
        break; 
        default : document.getElementById('salahkel').innerHTML ="";
      }
    }
    
function spend(pilihan)
    {
      switch(pilihan)
      {
        case "" :
          document.getElementById('salahpend').innerHTML ="<font color='red'><small>Tidak boleh kosong</small></font>";
        break; 
        default : document.getElementById('salahpend').innerHTML ="";
      }
    }    
</script>   


<script>
$.validate();
//$.validate({
//    modules : 'location, date, security, file, recaptcha'
//    onModulesLoaded : function() {
//      $('#country').suggestCountry();
//    }
//  });
</script>  

  </body>

</html>