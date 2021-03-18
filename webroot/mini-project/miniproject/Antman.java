
/**
 * Write a description of class Antman here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */
public class Antman extends character 
{
    private int go_SuperLarge;
    private int flying_clothesline;
    private int electric_shock;
    private boolean shock;
    public Antman(){
        go_SuperLarge=30;
        flying_clothesline=25;
        electric_shock=15;
        shock=false;
    }
    // each attack method decreases the enemy health in different amounts
    public void  attack1 (enemy e) 
        {
            // decrease enemy health
            e.sethealth(go_SuperLarge);
            // if the enemy is dead then print he is dead else print the enemy health and damage dealt
            if( e.gethealth()<=0)
            {
                System.out.println("you have defeated your opponent");
            }
            else{
                System.out.println("you hit your opponent with 30 damage ");
                System.out.println("your enemy is now "+e.gethealth()+" health");
            }
        }
        public void  attack2 (enemy c)
        {
            c.sethealth(flying_clothesline);
            if( c.gethealth()<=0)
            {
                System.out.println("you have defeated your opponent");
            }
            else{
                System.out.println("you hit your opponent with "+flying_clothesline+" damage ");
                System.out.println("your enemy is now "+c.gethealth()+" health");
            }
        }
        public void  attack3 (enemy d)
        {
            if(shock){
            System.out.println("Your enemy is stunned, He wont attack");
            // sets enemy_attack to false so the enemy doesnt attack
            setboolean(false);
        }
        
            d.sethealth(electric_shock);
            
            if( d.gethealth()<=0)
            {
                System.out.println("you have defeated your opponent");
            }
            else{
                System.out.println("you hit your opponent with "+electric_shock+" damage ");
                System.out.println("your enemy is now "+d.gethealth()+" health");
            }
        }
        public String getattacks(){
            return "1-go Super Large, 2-flying clothesline, and 3-Electric shock";
        }
        // a method that increases the damage of the electric shock
        public void upgrade_attack()
        {
            if(shock)
            {
                System.out.println("you Unlocked a more powerful flying clothesline!!");
                System.out.println("it now does 20% more damage!");
                double temp=flying_clothesline*1.2;
            flying_clothesline=(int) Math.round(temp);
            }
            else{
                
          System.out.println("Antman just unlocked a more powerful electric shock");
          System.out.println("Your electric shock now stuns your enemy and prevents him from attacking for 1 time!");
          shock=true;
        }
          
        }
        
}
