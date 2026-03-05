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

    /* Gallery Section Styles */
    .h1--gallery {
        text-align: center;
        color: #333;
        margin: 30px 0;
        font-size: 2.5em;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        position: relative;
        padding-bottom: 15px;
    }

    .h1--gallery::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, #667eea, #764ba2);
        border-radius: 2px;
    }

    /* Form Styles */
    form {
        text-align: center;
        margin: 20px 0;
    }

    .btn--refresh {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 12px 30px;
        font-size: 1em;
        font-weight: 600;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .btn--refresh:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
    }

    .btn--refresh:active {
        transform: translateY(0);
    }

    .btn--gallery {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        border: none;
        padding: 6px 12px;
        border-radius: 20px;
        cursor: pointer;
        font-size: 0.9em;
        font-weight: 500;
        transition: all 0.3s ease;
        width: 80px;
        box-shadow: 0 2px 8px rgba(102, 126, 234, 0.3);
    }

    .btn--gallery:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.5);
    }

    /* Container Gallery */
    .container--gallery {
        max-width: 1200px;
        margin: 30px auto;
        padding: 20px;
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        overflow-x: auto;
    }

    /* Table Styles */
    .table--gallery {
        width: 100%;
        border-collapse: collapse;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    /* Table Header */
    .thead--gallery {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
    }

    .tr--gallery {
        border-bottom: 1px solid #f0f0f0;
        transition: all 0.3s ease;
    }

    .thead--gallery .tr--gallery:hover {
        background-color: #0f1538;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.1);
    }

    .tr--gallery:hover {
        background-color: #f8f9ff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(102, 126, 234, 0.1);
    }

    .th--gallery {
        padding: 18px 15px;
        font-size: 1em;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        text-align: left;
    }

    .th--gallery:first-child {
        padding-left: 25px;
    }

    .th--gallery:last-child {
        padding-right: 25px;
    }

    /* Table Data */
    .td--gallery {
        padding: 15px;
        color: #555;
        font-size: 0.95em;
        border-bottom: 1px solid #eee;
    }

    .td--gallery:first-child {
        padding-left: 25px;
    }

    .td--gallery:last-child {
        padding-right: 25px;
    }

    /* Specific column styling */
    .td--gallery:nth-child(1) {
        /* Mobile Phone column */
        font-weight: 600;
        color: #333;
    }

    .td--gallery:nth-child(2) {
        /* No column */
        font-weight: 600;
        color: #667eea;
    }

    .td--gallery:nth-child(3) {
        /* Name column */
        font-weight: 500;
        color: #333;
    }

    .td--gallery:nth-child(4) {
        /* Email column */
        color: #667eea;
        font-style: italic;
    }

    .td--gallery:nth-child(6) {
        /* City column */
        text-transform: capitalize;
    }

    .td--gallery:nth-child(7) {
        /* Code Post column */
        font-family: 'Courier New', monospace;
        font-weight: 600;
    }

    /* Responsive Design */
    @media screen and (max-width: 768px) {
        .container--gallery {
            padding: 10px;
            margin: 15px;
        }

        .table--gallery {
            font-size: 0.85em;
        }

        .th--gallery,
        .td--gallery {
            padding: 10px 8px;
        }

        .btn--gallery {
            width: 60px;
            padding: 4px 8px;
            font-size: 0.8em;
        }

        .h1--gallery {
            font-size: 2em;
        }
    }

    @media screen and (max-width: 480px) {
        .table--gallery {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }

        .btn--refresh {
            padding: 10px 20px;
            font-size: 0.9em;
        }
    }

    /* Animation for table rows */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .tbody--gallery .tr--gallery {
        animation: fadeIn 0.5s ease forwards;
    }

    /* Stagger animation for rows */
    .tbody--gallery .tr--gallery:nth-child(1) {
        animation-delay: 0.1s;
    }

    .tbody--gallery .tr--gallery:nth-child(2) {
        animation-delay: 0.2s;
    }

    .tbody--gallery .tr--gallery:nth-child(3) {
        animation-delay: 0.3s;
    }

    .tbody--gallery .tr--gallery:nth-child(4) {
        animation-delay: 0.4s;
    }

    .tbody--gallery .tr--gallery:nth-child(5) {
        animation-delay: 0.5s;
    }

    .tbody--gallery .tr--gallery:nth-child(6) {
        animation-delay: 0.6s;
    }

    .tbody--gallery .tr--gallery:nth-child(7) {
        animation-delay: 0.7s;
    }

    .tbody--gallery .tr--gallery:nth-child(8) {
        animation-delay: 0.8s;
    }

    .tbody--gallery .tr--gallery:nth-child(9) {
        animation-delay: 0.9s;
    }

    .tbody--gallery .tr--gallery:nth-child(10) {
        animation-delay: 1s;
    }

    /* Custom scrollbar for the table container */
    .container--gallery::-webkit-scrollbar {
        height: 8px;
    }

    .container--gallery::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }

    .container--gallery::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, #667eea, #764ba2);
        border-radius: 4px;
    }

    .container--gallery::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(135deg, #764ba2, #667eea);
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