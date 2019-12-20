<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Data Peminjaman Ruangan</h2>

<table>
<tr>
    <th>ID Peminjaman</th>
    <th>ID Mahasiswa</th>
    <th>ID Matakuliah</th>
    <th>ID Ruang</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal Input</th>
  </tr>
  <tr>
  @foreach($data as $laporan)
    <th>{{$laporan->id_pinjam}}</th>
    <th>{{$laporan->id}}</th>
    <th>{{$laporan->id_mk}}</th>
    <th>{{$laporan->id_ruang}}</th>
    <th>{{$laporan->tanggal_pinjam}}</th>
    <th>{{$laporan->tanggal_input}}</th>
  </tr>
@endforeach

</table>

</body>
</html>
