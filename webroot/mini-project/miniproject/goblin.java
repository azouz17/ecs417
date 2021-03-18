
/**
 * Write a description of class goblin here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */
public class goblin extends enemy
{
    private int speer;
    private int blowdart;
    
     public goblin(){
         // sets enemy heath to 50
         super(50);
         speer=15;
         blowdart=8;
        }
        // a mthod that chooses an attack at random
        public void attack(character c){
            double temp= Math.random();
            if(temp<0.5)
            {
               c.sethealth(speer);
               System.out.println("The goblin threw a spear at you");
            }
            else{
                c.sethealth(blowdart);
                System.out.println("You got hit with a blow dart");
            }
            return;
        }
        // a method that returns the type of the enemy
        public String gettype()
        {
            return "goblin";
        }
}
