<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generate () {
   	$defaultqrcode = QrCode::size(200)->generate("Generate a QR code with Laravel");
$customqrcode = Qrcode::encoding("UTF-8")
 ->color(255, 0, 0)
 ->backgroundColor(255, 255, 255)
 ->size(200)
 ->generate("https://github.com/aymensmida/Laravel-Qr-Code");
 return view("welcome", compact('defaultqrcode','customqrcode'));
    }
}
