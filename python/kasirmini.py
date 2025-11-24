nama_barang = input("Nama Barang :")
harga_barang = float(input("Harga Barang (Rp) :"))
jumlah_barang = int(input("Jumlah Barang :")) 

total = harga_barang * jumlah_barang

if total > 17300:
    diskon = total * 0.03
else :
    diskon = 0

total_bayar = total - diskon 

print("\n=====  STRUK PEMBELIAN  ====")
print(f"Nama Barang       : {nama_barang}")
print(f"Harga Satuan      : {harga_barang}")
print(f"Jumlah Beli       : {jumlah_barang}")
print(f"Total Harga       : {total}")
print(f"Diskon            : {diskon}")
print(f"Total Bayar       : {total_bayar}")
print("=============================")
