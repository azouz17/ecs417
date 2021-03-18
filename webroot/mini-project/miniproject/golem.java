
/**
 * Write a description of class golem here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */
public class golem extends enemy
{
    private int throw_rock;
    private int explode;
    
     public golem(){
         // sets the health to 100
         super(100);
         throw_rock=15;
         explode=70;
        }
        // a method that chooses an attack at random 
        public void attack(character c){
            double temp= Math.random();
            if(temp>0.2)
            {
               c.sethealth(throw_rock);
               System.out.println("The golem throwed a rock");
            }
            else{
                c.sethealth(explode);
                System.out.println("Oh No, the Golem exploded");
            }
            return ;
        }
        // a method that returns the type of the enemy
        public String gettype()
        {
            return "golem";
        }
}

    

