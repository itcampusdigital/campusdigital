<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                <th align="left">Nama</th>
                <th align="left">nomor WA</th>
                <th align="left">Button WA</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $users)
                <tr>
                    <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                    <th align="left">{{ $users->nama_user }}</th>
                    <th align="left">{{ $users->nomor_hp }}</th>
                    <th align="left">
                        <a href="#" type="button" class="btn btn-info" id="sendwa" onclick="window.open('https://api.whatsapp.com/send?phone={{ $users->nomor_hp }}&text=Halo Campus Digital, saya butuh informasi tentang layanan Campus Digital...', '_blank')">Kirim Pesan</a>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>


    <script type="application/javascript">
        function sendwa(){
            window.open('https://api.whatsapp.com/send?phone={{ $users->nomor_hp }}&text=Halo Campus Digital, saya butuh informasi tentang layanan Campus Digital...', '_blank')
        }
    </script>
</body>
</html>