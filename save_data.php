<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Verileri formatlı bir şekilde hazırla
    $data = "İsim: " . $name . "\n";
    $data .= "Email: " . $email . "\n";
    $data .= "Mesaj: " . $message . "\n";
    $data .= "Tarih: " . date('Y-m-d H:i:s') . "\n";
    $data .= "------------------------\n";
    
    // Verileri dosyaya kaydet
    $file = 'database.txt';
    file_put_contents($file, $data, FILE_APPEND);
    
    // Başarılı mesajı göster
    echo "Veriler başarıyla kaydedildi!";
    
    // 3 saniye sonra ana sayfaya yönlendir
    header("refresh:3;url=index.html");
}
?>
