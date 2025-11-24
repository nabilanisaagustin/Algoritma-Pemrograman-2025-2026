#include <iostream>
using namespace std;

int main() {
    string nama;
    float harga;
    int jumlah;

    cout << "Masukkan nama barang: ";
    cin >> nama;

    cout << "Masukkan harga barang: ";
    cin >> harga;

    cout << "Masukkan jumlah beli: ";
    cin >> jumlah;

    float total = harga * jumlah;

    int nim3 = 173;  
    int nim1 = 3;   

    int minimal = nim3 * 100;
    float diskon_persen = nim1;

    float diskon;

    if (total >= minimal) {
        diskon = total * (diskon_persen / 100);
    } else {
        diskon = 0;
    }

    float total_bayar = total - diskon;

    cout << "\n===== STRUK PEMBELIAN =====\n";
    cout << "Nama Barang     : " << nama << endl;
    cout << "Harga Satuan    : " << harga << endl;
    cout << "Jumlah Beli     : " << jumlah << endl;
    cout << "Total Harga     : " << total << endl;
    cout << "Diskon          : " << diskon << endl;
    cout << "Total Bayar     : " << total_bayar << endl;
    cout << "==============================\n";

    return 0;
}