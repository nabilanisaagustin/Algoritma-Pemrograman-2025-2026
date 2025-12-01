#include <iostream>
#include <string>
#include <iomanip>
using namespace std;

string rupiah(int angka) {
    string s = to_string(angka);
    string hasil = "Rp ";
    int hitung = 0;

    for (int i = s.size() - 1; i >= 0; i--) {
        hasil = s[i] + hasil;
        hitung++;
        if (hitung == 3 && i != 0) {
            hasil = "." + hasil;
            hitung = 0;
        }
    }
    return hasil;
}

int main() {
    string nama, confirm;
    long long nim, saldo;

    do {
        cout << "Masukkan nama: ";
        getline(cin, nama);

        cout << "Apakah nama sudah benar? (true/false): ";
        getline(cin, confirm);

    } while (confirm != "true");

    cout << "Masukkan NIM tanpa huruf: ";
    cin >> nim;
    saldo = nim;

    cout << "\n==== DATA NASABAH ====\n";
    cout << "Nama : " << nama << endl;
    cout << "Saldo Awal : " << rupiah(saldo) << "\n\n";

    int menu;

    while (true) {
        cout << "===== MENU ATM =====\n"
             << "1. Cek Saldo\n"
             << "2. Tarik Tunai\n"
             << "3. Setor Tunai\n"
             << "4. Transfer\n"
             << "5. Keluar\n"
             << "Pilih Menu : ";
        cin >> menu;

        switch (menu) {
            case 1: 
                cout << "Saldo kamu: " << rupiah(saldo) << "\n\n";
                break;

            case 2: { 
                int tarik;
                cout << "Jumlah tarik: ";
                cin >> tarik;
                if (tarik <= saldo) {
                    saldo -= tarik;
                    cout << "Berhasil tarik! Sisa saldo: " << rupiah(saldo) << "\n\n";
                } else {
                    cout << "Saldo tidak cukup!\n\n";
                }
                break;
            }

            case 3: { 
                int setor;
                cout << "Jumlah setor: ";
                cin >> setor;
                saldo += setor;
                cout << "Saldo sekarang: " << rupiah(saldo) << "\n\n";
                break;
            }

            case 4: { 
                int tf;
                cout << "Jumlah transfer: ";
                cin >> tf;
                if (tf <= saldo) {
                    saldo -= tf;
                    cout << "Transfer berhasil! Sisa saldo: " << rupiah(saldo) << "\n\n";
                } else {
                    cout << "Saldo tidak cukup!\n\n";
                }
                break;
            }

            case 5: 
                cout << "Terima kasih sudah menggunakan ATM!\n";
                return 0;

            default:
                cout << "Menu tidak tersedia!\n\n";
        }
    }
}