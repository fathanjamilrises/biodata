<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Biodata</title>
</head>
<style>
    .footer{
        position: relative;
        padding: 20px 30px;
        background-color: #273036;
        color: white;
        text-align: center;
    }
</style>
<body>
        <h1 class=" text-center font-bold mb-5 mt-2 ">Biodata</h1>
        <div class="container flex justify-center items-center bg-dark text-white mt-20px px-10 py-4 rounded">
        <p>Nama : {{ $dataNama }}</p>
        <p>Kelas: {{ $dataKelas }}</p>
        <p>Sekolah: {{ $dataSekolah }}</p>
        <p>Alamat: {{ $dataAlamat }}</p>
        <p>Email: {{ $dataEmail }}</p>
        <p>Hobi: {{ $dataHobi }}</p>
        <p>Bestie: {{ $dataBestie }}</p>
    </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,128L48,138.7C96,149,192,171,288,160C384,149,480,107,576,117.3C672,128,768,192,864,197.3C960,203,1056,149,1152,117.3C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <div class="footer">
        © Fathan Jamil 2024
    </div>
</body>
</html>