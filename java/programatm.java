import java.util.Scanner;

public class ATM {
    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);

        String nama, cek;
        int nim, saldo = 0;
        int menu;

        do {
            System.out.print("Masukkan Nama: ");
            nama = in.nextLine();

            System.out.print("Nama benar? (TRUE/FALSE): ");
            cek = in.nextLine();

        } while (!cek.equals("TRUE"));

        System.out.print("Masukkan NIM (angka saja): ");
        nim = Integer.parseInt(in.nextLine());
        saldo = nim;

        System.out.println("\nNama: " + nama);
        System.out.println("Saldo awal: Rp " + saldo);
        System.out.println();

        while (true) {

            System.out.println("===== MENU ATM =====");
            System.out.println("1. Cek Saldo");
            System.out.println("2. Tarik Tunai");
            System.out.println("3. Setor Tunai");
            System.out.println("4. Transfer");
            System.out.println("5. Keluar");
            System.out.print("Pilih menu: ");
            menu = in.nextInt();

            switch (menu) {
                case 1:
                    System.out.println("Saldo kamu sekarang: Rp " + saldo);
                    System.out.println();
                    break;

                case 2:
                    System.out.print("Jumlah tarik: ");
                    int tarik = in.nextInt();
                    if (tarik <= saldo) {
                        saldo -= tarik;
                        System.out.println("Tarik berhasil. Sisa saldo: Rp " + saldo);
                    } else {
                        System.out.println("Saldo tidak cukup.");
                    }
                    System.out.println();
                    break;

                case 3:
                    System.out.print("Jumlah setor: ");
                    int setor = in.nextInt();
                    saldo += setor;
                    System.out.println("Saldo sekarang: Rp " + saldo);
                    System.out.println();
                    break;

                case 4:
                    System.out.print("Jumlah transfer: ");
                    int tf = in.nextInt();
                    if (tf <= saldo) {
                        saldo -= tf;
                        System.out.println("Transfer berhasil. Sisa saldo: Rp " + saldo);
                    } else {
                        System.out.println("Saldo tidak cukup.");
                    }
                    System.out.println();
                    break;

                case 5:
                    System.out.println("Terima kasih!");
                    return;

                default:
                    System.out.println("Menu tidak ada.");
                    System.out.println();
            }
        }
    }
}

