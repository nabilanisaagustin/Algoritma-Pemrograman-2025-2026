def rupiah(x):
    return "Rp {:,}".format(x).replace(",", ".")

while True:
    nama = input("Masukkan Nama: ")
    valid = input("Nama benar? (TRUE/FALSE): ").upper()
    if valid == "TRUE":
        break

nim = int(input("Masukkan NIM (angka saja): "))
saldo = nim

print("\nNama:", nama)
print("Saldo awal:", rupiah(saldo), "\n")

while True:
    print("===== MENU ATM =====")
    print("1. Cek Saldo")
    print("2. Tarik Tunai")
    print("3. Setor Tunai")
    print("4. Transfer")
    print("5. Keluar")

    menu = input("Pilih menu: ")

    match menu:  
        case "1":
            print("Saldo kamu:", rupiah(saldo), "\n")

        case "2":
            tarik = int(input("Jumlah tarik: "))
            if tarik <= saldo:
                saldo -= tarik
                print("Tarik berhasil. Sisa saldo:", rupiah(saldo), "\n")
            else:
                print("Saldo tidak cukup!\n")

        case "3":
            setor = int(input("Jumlah setor: "))
            saldo += setor
            print("Saldo sekarang:", rupiah(saldo), "\n")

        case "4":
            tf = int(input("Jumlah transfer: "))
            if tf <= saldo:
                saldo -= tf
                print("Transfer berhasil! Sisa saldo:", rupiah(saldo), "\n")
            else:
                print("Saldo tidak cukup!\n")

        case "5":
            print("Terima kasih!")
            break

        case _:
            print("Menu tidak valid!\n")
