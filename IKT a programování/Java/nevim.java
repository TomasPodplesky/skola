import java.util.Scanner;

    public class cv_7_10
    {
        private static Scanner sc = new Scanner(System.in);
        public static void main(String[] args){
            sude();
        }

        public static void uhel() {
            double uhelCelkem = getDouble("Zadej uhel ve stupnich (napr. 12.34): ");
            
            // Získání celých stupňů
            int stupne = (int) uhelCelkem;
            
            // Výpočet zbytku pro minuty (použijeme absolutní hodnotu pro správné řešení záporných úhlů)
            double zbytek = Math.abs(uhelCelkem - stupne) * 60;
            int minuty = (int) zbytek;
            
            // Výpočet zbytku pro vteřiny
            double vteriny = (zbytek - minuty) * 60;
            
            // Zaokrouhlení vteřin na celá čísla
            int vterinyCele = (int) Math.round(vteriny);
            
            System.out.println(uhelCelkem + " stupnu je: " + stupne + "° " + minuty + "' " + vterinyCele + "''");
        }
        public static double getDouble(String zprava){
        double a = 0;
        boolean isDouble = false;
        System.out.print(zprava);
        do{
            Scanner sca = new Scanner(System.in);
            a = 0;
            try{
                a = sca.nextDouble();
                isDouble = true;
            }catch(Exception e){
                System.out.print("Zkus to znova: ");
                isDouble = false;
            }
        }while(isDouble == false);
        return a;
        }
        public static int getInt(String zprava){
            int a = 0;
            boolean isInt = false;
            System.out.print(zprava);
            do{
                Scanner sca = new Scanner(System.in);
                a = 0;
                try{
                    a = sca.nextInt();
                    isInt = true;
                }catch(Exception e){
                    System.out.print("Zkus to znova: ");
                    isInt = false;
                }
            }while(isInt == false);
            return a;
        }
}
