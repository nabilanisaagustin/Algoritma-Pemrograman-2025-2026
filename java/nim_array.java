import java.util.Scanner;

public class nim_array {
    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);
        System.out.print("Masukkan NIM : ");
        String nim = sc.nextLine();

        int[] digit = new int[nim.length()];
        for (int i = 0; i < nim.length(); i++) {
            digit[i] = Character.getNumericValue(nim.charAt(i));
        }

        System.out.print("Digit        : [ ");
        for (int i = 0; i < digit.length; i++) {
            System.out.print(digit[i]);
            if (i < digit.length - 1) System.out.print(", ");
        }
        System.out.println(" ]");

        int total = 0;
        for (int d : digit) total += d;

        int maks = digit[0];
        for (int d : digit)
            if (d > maks) maks = d;

        int minimum = digit[0];
        for (int d : digit)
            if (d < minimum) minimum = d;

        double rata = (double) total / digit.length;

        int[] rev = new int[digit.length];
        for (int i = 0; i < digit.length; i++) {
            rev[i] = digit[digit.length - 1 - i];
        }

        System.out.println("Total        : " + total);
        System.out.println("Maksimum     : " + maks);
        System.out.println("Minimum      : " + minimum);
        System.out.println("Rata-rata    : " + rata);

        System.out.print("Reverse      : [ ");
        for (int i = 0; i < rev.length; i++) {
            System.out.print(rev[i]);
            if (i < rev.length - 1) System.out.print(", ");
        }
        System.out.println(" ]");

        sc.close();
    }
}