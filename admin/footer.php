<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer Laundry</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    footer {
      background-color: #a8d8f0; /* biru soft */
      color: #333;
      padding: 50px 80px;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 40px;
    }

    footer h3 {
      font-size: 18px;
      margin-bottom: 15px;
      color: #1a3c57;
    }

    footer p, 
    footer a {
      font-size: 14px;
      color: #333;
      text-decoration: none;
      line-height: 1.8;
    }

    footer a:hover {
      text-decoration: underline;
      color: #005f99;
    }

    .footer-logo {
      font-size: 30px;
      font-weight: bold;
      color: #1a3c57;
    }

    .footer-social a {
      margin-right: 10px;
      font-size: 20px;
    }

    .footer-bottom {
      grid-column: span 3;
      text-align: center;
      margin-top: 30px;
      font-size: 13px;
      color: #444;
      border-top: 1px solid rgba(0,0,0,0.1);
      padding-top: 20px;
    }
  </style>
</head>
<body>
  
  <!-- Footer -->
  <footer>
    <!-- Kolom 1: Info Laundry -->
    <div>
      <div class="footer-logo">Jelita Laundry</div>
      <p>Cuci bersih, wangi, dan rapi setiap hari.</p>
      <p>Jl. Indraprasta No. 123, Boja</p>
      <p>Telp: (021) 555-1234</p>
    </div>

    <!-- Kolom 2: Menu Navigasi -->
    <div>
      <h3>Menu</h3>
      <a href="#">Beranda</a><br>
      <a href="#">Tentang Kami</a><br>
      <a href="#">Layanan</a><br>
      <a href="#">Harga</a><br>
      <a href="#">FAQ</a>
    </div>

    <!-- Kolom 3: Kontak -->
    <div>
      <h3>Hubungi Kami</h3>
      <a href="mailto:info@freshlaundry.com">Email: info@jelitalaundry.com</a><br>
      <a href="#">Instagram</a><br>
      <a href="#">Facebook</a><br>
      <a href="#">WhatsApp</a>
    </div>

    <!-- Bottom -->
    <div class="footer-bottom">
      © 2025 JelitaLaundry. All Rights Reserved.
    </div>
  </footer>

</body>
</html>