
/**
 * Abstract class enemy - write a description of the class here
 *
 * @author (your name here)
 * @version (version number or date here)
 */
public abstract class enemy
{
    // each enemy will have different health so the superclass constuctor takes an argument
   private int health;
    public enemy(int health)
    {
        this.health=health;
    }
    // a get and set health methods are there to reduce enemy health and get his health
    public  int gethealth(){
        return health;
    }
    public  void sethealth(int damage){
        health=health-damage;
    }
    public abstract void attack(character c);
        
    public abstract String gettype();
    
    
   
}
