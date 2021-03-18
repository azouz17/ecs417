
/**
 * Abstract class character - write a description of the class here
 *
 * @author (your name here)
 * @version (version number or date here)
 */
public abstract  class character 
{
    
    private int health;
    // boolean varaible that determines if the enemy will attack
    private boolean enemy_attack;
    // every charcter will have 100 health
    
     public character()

    {
        enemy_attack=true;
         health=100;
     }
        public abstract void upgrade_attack();
        
        public void setboolean(boolean a)
        {
            enemy_attack=a;
        }
        public boolean getboolean()
        {
            return enemy_attack;
        }
            
        // attack methods will be overwritten by the subclasses
     public void attack1(enemy a)
     {
         int hit=10;
         a.sethealth(hit);
         } 
        public void attack2 (enemy b)
     {
         int hit=10;
         b.sethealth(hit);
         return;
        } 
        public void attack3 (enemy c)
        
     {
         int hit=10;
         c.sethealth(hit);
         return;
        }
        // a get and set health methods are there to reset the character health and reduce his health when the enemy attacks
        public int gethealth()
        {
            return health;
        }   
      public void sethealth(int hit)
      {
          health=health-hit;
    }
    public void sethealth()
      {
          health=100;
    }
    // a method that returns the attacks for each character
    public abstract String getattacks();

    
        
    

}

