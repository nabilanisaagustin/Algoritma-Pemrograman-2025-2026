public class fungsi3 {

    public static void main(String[] args) {
        int a = 6;
        int b = 8;
        double c = 6.8;
        double d = 8.2;

        int hasil1 = FungsiMinimal(a, b);
        double hasil2 = FungsiMinimal(c, d);

        System.out.println("Nilai Minimal = " + hasil1);
        System.out.println("Nilai Minimal = " + hasil2);
    }

   
    public static int FungsiMinimal(int a1, int a2) {
        int min;
        if (a1 > a2)
            min = a2;
        else
            min = a1;

        return min;
    }

    
    public static double FungsiMinimal(double a1, double a2) {
        double min;
        if (a1 > a2)
            min = a2;
        else
            min = a1;

        return min;
    }
}
