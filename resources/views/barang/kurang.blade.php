<!-- resources/views/barang/kurang.blade.php -->
<h1>Kurangi Stok Barang</h1>
<form action="{{ route('barang.updateKurang', $barang->id) }}" method="POST">
    @csrf
    <label for="jumlah">Jumlah:</label>
    <input type="number" name="jumlah" id="jumlah" required>
    <button type="submit">Kurangi Stok</button>
</form>
