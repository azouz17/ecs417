
/**
 * Write a description of class wizard here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */
public class wizard extends character
{
    
    private int fire_attack;
    private int avadacadabra;
    private int tree_root;
   private boolean heal;
     public wizard()
     {
         super();
         fire_attack=25;
         avadacadabra=40;
         tree_root=15;
         heal=false;
         
        }
        // there are three attack methods that each take an argument of an enemy and reduce its health by different amounts each
        public void  attack1 (enemy e)
        {
            //decreases enemy health
            e.sethealth(fire_attack);
            // if enemy is dead print that he is dead else print damage dealt and enemy health health
            if( e.gethealth()<=0)
            {
                System.out.println("you have defeated your opponent");
            }
            else{
                System.out.println("you hit your opponent with 25 damage ");
                System.out.println("your enemy is now "+e.gethealth()+" health");
            }
        }
        public void  attack2 (enemy c)
        {
            c.sethealth(avadacadabra);
            // increases your health by 10 if heal is true 
            if(heal){
            sethealth(-10);
            System.out.println("Upgrading health: "+gethealth());
        }
            if( c.gethealth()<=0)
            {
                System.out.println("you have defeated your opponent");
            }
            else{
                System.out.println("you hit your opponent with "+avadacadabra+" damage ");
                System.out.println("your enemy is now "+c.gethealth()+" health");
            }
        }
        public void  attack3 (enemy d)
        {
            d.sethealth(tree_root);
            if( d.gethealth()<=0)
            {
                System.out.println("you have defeated your opponent");
            }
            else{
                System.out.println("you hit your opponent with 15 damage ");
                System.out.println("your enemy is now "+d.gethealth()+" health");
            }
        }
        public String getattacks(){
            return "1-fire attack, 2-avadacadabra, and 3-tree root";
        }
        // a method that increases the damage of the avadacadabra attack
        public void upgrade_attack(){
            if(heal){
                System.out.println("Your Unlocked a more powerful avadacadbra attack !!");
                System.out.println("It now does 20% more damage");
                double temp=avadacadabra*1.2;
            avadacadabra=(int) Math.round(temp);
        }
        else{
            System.out.println("You unlocked a more powerful wand!!");
            System.out.println("Your avadacadabra attack now heals you for 10 health every time you use it !!");
            heal=true;
        }
            
        }
        
        
            
    // instance variables - replace the example below with your own
} 
