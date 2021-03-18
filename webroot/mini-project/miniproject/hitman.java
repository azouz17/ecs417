
/**
 * Write a description of class hitman here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */
public class hitman extends character

{
   private int gunshot;
    private int punch_combo;
    private int dog_attack;
    public hitman()
    {
        super();
        gunshot=25;
        punch_combo=20;
        dog_attack=0;
}
// there are three attack methods that each take an argument of an enemy and reduce its health by different amounts each
public void  attack1 (enemy e)
        {
            e.sethealth(gunshot);
            
            if( e.gethealth()<=0)
            {
                System.out.println("you have defeated your opponent");
            }
            else{
                System.out.println("you hit your opponent with "+gunshot+" damage");
                System.out.println("your enemy is now "+e.gethealth()+" health");
            }
        }
        public void  attack2 (enemy c)
        {
            
            c.sethealth(punch_combo);
            if( c.gethealth()<=0)
            {
                System.out.println("you have defeated your opponent");
            }
            else{
                System.out.println("you hit your opponent with 20 damage ");
                System.out.println("your enemy is now "+c.gethealth()+" health");
            }
            }
        public void  attack3 (enemy d)
        {
            // generates a random number
            double temp=Math.random();
            // multiply by 20 and add 5 to determine the damage the dog will deal
            dog_attack=(int) Math.round(temp*20+5);
            d.sethealth(dog_attack);
            // if enemy is dead print that he is dead else print damage dealt and enemy health
            if( d.gethealth()<=0)
            {
                System.out.println("you have defeated your opponent");
            }
            else{
                System.out.println("Your dog held on for "+(Math.round(temp*10))+" seconds, causing "+ dog_attack+" damage");
                System.out.println("your enemy is now "+d.gethealth()+" health");
            }
        }
        public String getattacks(){
            return "1-gunshot, 2-punch combo, and 3-dog bite(depends on how many second your dog holds on to the enemy)";
        }
        public void upgrade_attack()
        {
          System.out.println("Your Hitman just unlocked a Double Barrel shotgun!!");
          System.out.println("Your gunshot attack now shoots twice");
          gunshot=gunshot*2;
        }
    }
