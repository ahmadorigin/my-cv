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