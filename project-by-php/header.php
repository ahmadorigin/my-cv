<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contoh</title>
    <link rel="stylesheet" href="global.css" />
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: poppins;
    }

    nav {
        display: flex;
        justify-content: center;
        background-color: #333;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    nav a {
        padding: 20px;
        display: inline-block;
        text-align: center;
        color: #f2f2f2;
        text-align: center;
        font-size: 17px;
    }

    nav a:hover {
        background-color: #ddd;
        color: black;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
    }

    .h1 {
        text-align: center;
        margin-top: 20px;
    }

    .box {
        display: flex;
        justify-content: center;
        margin-top: 30px;
        gap: 20px;
    }

    .box2 {
        display: flex;
        justify-content: center;
        margin-top: 30px;
        gap: 20px;
    }

    .item-box {
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 200px;
        text-align: center;
    }

    .header-item-box h3 {
        margin: 0;
    }

    .header-item-box {
        border-radius: 5px;
    }

    .box .item1 .header-item-box {
        background-color: rgb(253, 127, 127);
        padding: 20px;
    }

    .box .item2 .header-item-box {
        background-color: rgb(243, 243, 101);
        padding: 20px;
    }

    .box .item3 .header-item-box {
        background-color: rgb(127, 135, 253);
        padding: 20px;
    }

    .box .item4 .header-item-box {
        background-color: rgb(101, 243, 101);
        padding: 20px;
    }

    .box2 .item1 .header-item-box {
        background-color: rgb(127, 234, 253);
        padding: 20px;
    }

    .box2 .item2 .header-item-box {
        background-color: rgb(253, 127, 234);
        padding: 20px;
    }

    .box2 .item3 .header-item-box {
        background-color: rgb(234, 253, 127);
        padding: 20px;
    }

    .box2 .item4 .header-item-box {
        background-color: rgb(200, 127, 253);
        padding: 20px;
    }

    .header-item-box span {
        font-size: 14px;
        color: #777;
    }

    .body-item-box h2 {
        margin: 10px 0 5px 0;
    }

    .body-item-box span {
        font-size: 14px;
        color: #777;
    }

    .body-item-box ul {
        list-style-type: none;
        padding: 0;
    }

    .body-item-box ul li {
        margin: 5px 0;
    }

    .container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    table {
        border-collapse: collapse;
    }

    td {
        padding: 10px;
    }

    img {
        border: 2px solid #ccc;
        border-radius: 5px;
    }

    .img-profile {
        width: 300px;
        margin: 20px auto;
        border-radius: 10px;
        display: block;
    }

    .table-about {
        margin: 20px auto;
        display: block;
    }

    footer {
        background-color: #333;
        color: #f2f2f2;
        text-align: center;
    }

    footer p {
        padding: 20px;
    }




    /* kemalasannnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn */

    /* Style untuk halaman peserta */

    .h1--gallery {
        text-align: center;
        color: white;
        margin: 30px 0;
        font-size: 2.5em;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        animation: fadeInDown 1s ease;
    }

    .container--gallery {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Style untuk tabel gallery */
    .table--gallery {
        width: 100%;
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        border-collapse: separate;
        border-spacing: 0;
        animation: slideUp 0.8s ease;
    }

    /* Style untuk header tabel */
    .thead--gallery {
        background: linear-gradient(45deg, #FF6B6B, #FF8E53);
        color: white;
    }

    .th--gallery {
        padding: 18px 15px;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-bottom: 3px solid rgba(255, 255, 255, 0.3);
        text-align: left;
    }

    /* Style untuk body tabel */
    .tbody--gallery {
        background: white;
    }

    .tr--gallery {
        transition: all 0.3s ease;
        border-bottom: 1px solid #e0e0e0;
    }

    .tr--gallery:hover {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        transform: scale(1.02);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .td--gallery {
        padding: 15px;
        color: #333;
        font-size: 15px;
        border-bottom: 1px solid #e0e0e0;
    }

    /* Style khusus untuk kolom tertentu */
    .td--gallery:first-child {
        font-weight: 600;
        color: #FF6B6B;
    }

    .td--gallery:nth-child(3) {
        font-weight: 700;
        color: #FF8E53;
    }

    .td--gallery:last-child {
        font-family: 'Courier New', monospace;
        font-weight: 600;
    }

    /* Style untuk baris ganjil genap */
    .tbody--gallery .tr--gallery:nth-child(even) {
        background-color: #f8f9fa;
    }

    .tbody--gallery .tr--gallery:nth-child(even):hover {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    }

    /* Responsive design */
    @media screen and (max-width: 768px) {
        .container {
            padding: 10px;
        }

        h1 {
            font-size: 2em;
        }

        .table--gallery {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }

        .th--gallery,
        .td--gallery {
            padding: 12px 10px;
            font-size: 14px;
        }
    }

    @media screen and (max-width: 480px) {
        h1 {
            font-size: 1.5em;
            margin: 20px 0;
        }

        .th--gallery,
        .td--gallery {
            padding: 10px 8px;
            font-size: 12px;
        }

        .td--gallery:first-child {
            min-width: 120px;
        }
    }

    /* Animasi */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Style untuk scrollbar */
    .table--gallery::-webkit-scrollbar {
        height: 8px;
    }

    .table--gallery::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .table--gallery::-webkit-scrollbar-thumb {
        background: linear-gradient(45deg, #FF6B6B, #FF8E53);
        border-radius: 10px;
    }

    .table--gallery::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(45deg, #FF8E53, #FF6B6B);
    }

    /* Style untuk menggabungkan first_name dan last_name */
    .td--gallery:first-child {
        text-transform: capitalize;
    }

    /* Hover effect untuk seluruh baris */
    .tr--gallery:hover .td--gallery {
        color: #333;
    }

    .tr--gallery:hover .td--gallery:first-child {
        color: #FF6B6B;
    }

    .tr--gallery:hover .td--gallery:nth-child(3) {
        color: #FF8E53;
    }
    </style>
</head>

<body>
    <nav>
        <a href="index.html">CV</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="gallery.php">Gallery</a>
        <a href="blog.php">Blog</a>
        <a href="regis.html">Login</a>
    </nav>