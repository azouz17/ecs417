
/**
 * Write a description of class potions here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */
public class potions
{
    public void Found_potion(character c)
    {
        double num= Math.random();
        if(num>0.9)
        {
        System.out.println("You found a healing potion !!");
        System.out.println("the potion increased your health by 50");
        c.sethealth(-50);
        System.out.println("New Health="+c.gethealth());
    }
    else if (num<0.1)
    {
        System.out.println("You found a healing potion!!");
       System.out.println("Oh No! The potion was harmful and decreased your health by 50");
       c.sethealth(50);
       System.out.println("New Health:"+c.gethealth());
}
        
    }
}
    
       
