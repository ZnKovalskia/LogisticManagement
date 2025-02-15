<!-- resources/views/barang/tambah.blade.php -->
<h1>Tambah Stok Barang</h1>
<form action="{{ route('barang.updateTambah', $barang->id) }}" method="POST">
    @csrf
    <label for="jumlah">Jumlah:</label>
    <input type="number" name="jumlah" id="jumlah" required>
    <button type="submit">Tambah Stok</button>
</form>
