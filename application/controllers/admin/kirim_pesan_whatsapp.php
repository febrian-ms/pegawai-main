private function kirim_pesan_whatsapp($nomor_telp, $pesan)
{
    // Gantilah dengan kode untuk mengirim pesan WhatsApp menggunakan Fonnte API
    // Sesuaikan dengan dokumentasi Fonnte atau library yang disediakan

    $fonnte_api_key = 'your_fonnte_api_key';
    $fonnte_project_id = 'your_fonnte_project_id';

    // Contoh: Panggil Fonnte API untuk mengirim pesan
    $url = "https://api.fonnte.com/v1/projects/$fonnte_project_id/messages";
    $headers = array(
        'Authorization: Bearer ' . $fonnte_api_key,
        'Content-Type: application/json',
    );

    $body = json_encode(array(
        'phone_number' => $nomor_telp,
        'message' => $pesan,
    ));

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);

    // Handle respons atau lakukan sesuatu dengan respons jika diperlukan
    // ...

    curl_close($ch);
}
