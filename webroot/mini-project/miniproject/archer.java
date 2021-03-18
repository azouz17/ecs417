
/**
 * Write a description of class archer here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */
public class archer extends character
{
  private int arrow_shot;
  private int bow_attack;
  private int kick;
   public archer(){
       super();
       arrow_shot=35;
       bow_attack=25;
       kick=15;
    }
    // there are three attack methods that each take an argument of an enemy and reduce its health by different amounts each
    public void  attack1 (enemy e)
        {
            // decreases enemy health
            e.sethealth(arrow_shot);
            // if enemy is dead print that he is dead else print damage dealt and enemy health
            if( e.gethealth()<=0)
            {
                System.out.println("you have defeated your opponent");
            }
            else{
                System.out.println("you hit your opponent with 35 damage");
                System.out.println("your enemy is now "+e.gethealth()+" health");
            }
        }
        public void  attack2 (enemy c)
        {
            c.sethealth(bow_attack);
            if( c.gethealth()<=0)
            {
                System.out.println("you have defeated your opponent");
            }
            else{
                System.out.println("you hit your opponent with "+bow_attack+" damage ");
                System.out.println("your enemy is now "+c.gethealth()+" health");
            }
            }
        public void  attack3 (enemy d)
        {
            // if the enemy is a goblin then increase the kick attack by 7
            if(d instanceof goblin) d.sethealth(kick+7);
            else d.sethealth(kick);
            
            if( d.gethealth()<=0)
            {
                System.out.println("you have defeated your opponent");
            }
            // and if and else to print the correct damage dealt
            else{
                if(d instanceof goblin)System.out.println("you hit your opponent with "+(kick+7)+" damage ");
                else System.out.println("you hit your opponent with "+kick+" damage ");
                System.out.println("your enemy is now "+d.gethealth()+" health");
            }
        }
        public String getattacks(){
            return "1-arrow attack, 2-bow shot, and 3-kick(effective on goblins)";
        }
        // a method that increaes the bow attack damage
        public void upgrade_attack(){
            System.out.println("Your Archer unlocked the Flaming Bow!!");
            System.out.println("Your bow attack now does 20% more damage!");
            double temp=bow_attack*1.2;
            bow_attack=(int) Math.round(temp);
        }
    
}
