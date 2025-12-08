#include <iostream>
#include <vector>
using namespace std;

int main () {
    string nim;
    cout << "Masukkan NIM  : ";
    cin >> nim;

    vector<int> digit;
    for (char c : nim) {
        digit.push_back(c - '0');
    }

    cout << "Digit         : [ ";
    for (int i = 0; i < digit.size(); i++) {
        cout << digit[i];
        if (i < digit.size() - 1) cout << ", ";
    }
    cout << " ]" << endl;

    int total = 0;
    for (int d : digit) total += d;

    int maks = digit[0];
    for (int d : digit)
        if (d > maks) maks = d;

    int minimum = digit[0];
    for (int d : digit)
        if (d < minimum) minimum = d;

    double rata = (double) total / digit.size();

    vector<int> rev;
    for (int i = digit.size() - 1; i >= 0; i--) {
        rev.push_back(digit[i]);
    }

    cout << "Total         : " << total << endl;
    cout << "Maksimum      : " << maks << endl;
    cout << "Minimum       : " << minimum << endl;
    cout << "Rata-rata     : " << rata << endl;

    cout << "Reverse       : [ ";
    for (int i = 0; i < rev.size(); i++) {
        cout << rev[i];
        if (i < rev.size() - 1) cout << ", ";
    }
    cout << " ]" << endl;

    return 0;
}