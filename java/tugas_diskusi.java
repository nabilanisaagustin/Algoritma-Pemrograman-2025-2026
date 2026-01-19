import java.util.Scanner;

public class tugas_diskusi {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.print("Masukkan nama: ");
        String nama = input.nextLine();

        System.out.print("Masukkan prodi: ");
        String prodi = input.nextLine();

        System.out.print("Masukkan universitas: ");
        String univ = input.nextLine();

        System.out.println("\nHalo saya " + nama + 
                           ", saya mahasiswa Prodi " + prodi + 
                           " dari Universitas " + univ + ".");
    }
}

