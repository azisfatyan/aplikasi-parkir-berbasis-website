<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header .logo h1 {
            margin: 0;
        }

        .nav .search {
            display: flex;
            align-items: center;
        }

        .nav .search input[type="text"] {
            padding: 8px;
            border: none;
            border-radius: 4px;
            margin-right: 5px;
        }

        .nav .search button {
            padding: 8px;
            border: none;
            background-color: #0056b3;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }

        .nav .user {
            display: flex;
            align-items: center;
        }

        .nav .user .btn {
            padding: 8px 15px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            margin-right: 10px;
        }

        .nav .user img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .content {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            width: 70%;
        }

        .card {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            flex-basis: calc(50% - 20px);
            display: flex;
            align-items: center;
        }

        .card .box {
            flex: 1;
            text-align: center;
        }

        .card .box h1 {
            font-size: 36px;
            color: #333;
            margin: 0;
        }

        .card .box p {
            color: #666;
            margin: 5px 0 0 0;
        }

        .card .icon {
            flex: 1;
            text-align: right;
        }

        .card .icon img {
            width: 50px;
            height: 50px;
        }

        .sidebar {
            width: 30%;
            padding: 20px;
            background-color: #f9f9f9;
            border-left: 1px solid #ddd;
        }

        .widget {
            margin-bottom: 20px;
        }

        .widget h2 {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .widget table {
            width: 100%;
            border-collapse: collapse;
        }

        .widget table th,
        .widget table td {
            padding: 10px;
            text-align: left;
        }

        .widget table th {
            background-color: #007bff;
            color: #fff;
        }

        .widget table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .logout-link {
            text-align: center;
            margin-top: 20px;
        }

        .logout-link a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        .logout-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <h1>Dashboard Admin</h1>
            </div>
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search...">
                    <button type="submit"><img src="search.png" alt="Search"></button>
                </div>
                <div class="user">
                    <a href="#" class="btn">Add New</a>
                    <div class="profile">
                        <img src="" alt="User Profile">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2</h1>
                        <p>mobil</p>
                    </div>
                    <div class="icon">
                        <img src="car.png" alt="Car Icon">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2</h1>
                        <p>sepeda motor</p>
                    </div>
                    <div class="icon">
                        <img src="motorcycle.png" alt="Motorcycle Icon">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>07.00</h1>
                        <p>jam masuk</p>
                    </div>
                    <div class="icon">
                        <img src="clock.png" alt="Clock Icon">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>12.50</h1>
                        <p>jam keluar</p>
                    </div>
                    <div class="icon">
                        <img src="clock.png" alt="Clock Icon">
                    </div>
                </div>
            </div>
            <div class="sidebar">
                <div class="widget">
                    <h2>Data Kendaraan</h2>
                    <table>
                        <tr>
                            <th>Nama Pemilik</th>
                            <th>Jenis Kendaraan</th>
                            <th>Harga Parkir</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>AZIS</td>
                            <td>Sepeda Motor</td>
                            <td>Rp. 20.000</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>KARINA</td>
                            <td>Mobil</td>
                            <td>Rp. 50.000</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>ICA</td>
                            <td>Mobil</td>
                            <td>Rp. 50.000</td>
                            <td><a href="button" class="btn btn-primary">View</a></td>
                        </tr>

                    </table>
                </div>
                <div class="widget">
                    <h2>Profile Pemilik Kendaraan</h2>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Nama</th>
                            <th>Info</th>
                        </tr>
                        <tr>
                            <td><img src="" alt="info"></td>
                            <td>AZIS</td>
                            <td><img src="" alt="Info"></td>
                        </tr>
                        <tr>
                            <td><img src="" alt="User"></td>
                            <td>KARINA</td>
                            <td><img src="" alt="Info"></td>
                        </tr>
                        <tr>
                            <td><img src="" alt="User"></td>
                            <td>ICA</td>
                            <td><img src="" alt="Info"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="logout-link">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    
</body>
</html>
