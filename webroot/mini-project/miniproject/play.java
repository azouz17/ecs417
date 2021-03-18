import java.util.Scanner;
public class play extends Thread{
/**
 * Write a description of class play here.
 *
 * @author (your name)
 * @version (a version number or a date)
 */
public static void main(String [] args) throws InterruptedException
{
    execute();
    System.exit(0);

}
// a method to scan the users anwers and return it
public static String scanstr (String message)
      {
          String temp;
          Scanner Scanner= new Scanner (System.in);
          System.out.println(message);
          temp= Scanner.nextLine();
          return temp;
      }
      // a method that prints a string and stalls the program for a given time
      public static void printline (String message, int sleep_time) throws InterruptedException
      {
          System.out.println(message);
          sleep(sleep_time);
        }
        
public static void execute() throws java.lang.InterruptedException
{
    // we first declare variables of type character, enemy and two booleans to check for user input and check if the user is alive or not
    boolean alive=true;
    character c;
    enemy e;
    String temp;
    boolean choose=true;
    potions p= new potions();
    // a description of the game
    printline("Hello, Welcome to the Adventure Game!",2000);
    printline("In this game you will walk through the arenas and fight opponents to achive glory",2000);
    printline("There are 4 characters you can choose from:\n Wizard,Antman, Archer and Hitman",2000);
    printline("Each character has different attacks that can beat his opponent",2000);
    printline("There are two kinds of opponents: Goblins and Golems",2000);
    printline("Beware of the Golem he can explode and cause heavy damage",2000);
    printline("You can stumble upon spells that can ease or harm you battles with youe enemies",2000);
    printline("Each character can unlock new items that upgrades his attacks",2000);
    printline("Lets Begin",2000);
    // a do while loop to insure that the user chose a valid character
    do{
        temp=scanstr("Choose your character");
        if(temp.equalsIgnoreCase("WIZARD"))
        {
            c=new wizard();
            choose=true;
        }
       else if(temp.equalsIgnoreCase("ARCHER"))
       {
           c=new archer();
           choose=true;
        }
       else if(temp.equalsIgnoreCase("HITMAN"))
       {
           c= new hitman();
           choose=true;
        }
        else if(temp.equalsIgnoreCase("ANTMAN"))
       {
           c= new Antman();
           choose=true;
        }
        else if(temp.equalsIgnoreCase("wizardantmanarcherhitman"))
        {
            printline("You discovered an easter egg ! YOU WON!!",0);
            return;
        }
            
        else {
            printline("please choose a valid character",500);
            choose=false;
            c=new wizard();
        }
        }while(choose==false);
    printline("you chose "+temp+". Your attacks are \n"+c.getattacks()+" .Each attack does different damage. Figure them out as you go",2000);
printline("Each battle you will start with 100 health",1500);
printline(" When asked to attack,please enter the attack number not its name",1500);
// a for loop that runs 5 times for 5 battles
for(int counter=0;counter<5;counter++)
{
    // random enemy each time
       double enemy= Math.random();
        if(enemy<0.6)
        {
            e=new goblin();
        }
        else{
            e=new golem();
        }
   c.sethealth();
   
   if(alive==true)
   {
       printline("you are in arena "+(counter+1),1000);
       printline("Your opponent is a "+ e.gettype()+" health="+e.gethealth(),1500);
        double upgrade=Math.random();
        // random number to see if the character gets to upgrade his attack
        if(upgrade>0.85) c.upgrade_attack();
        // calls the method in the potion class to determine weather the character will find a potion or not
        p.Found_potion(c);
    }
    
// a while loop for the each battle
    while(alive==true && e.gethealth()>0)
    {
        temp=scanstr("how would you like to attack "+c.getattacks());
        if(temp.equals("1")) c.attack1(e);
        else if(temp.equals("2")) c.attack2(e);
        else if(temp.equals("3")) c.attack3(e);
        else printline("You have missed your chance to attack enter a valid attack next time",1000);
        // if the enemy is dead the while loop exits and moves on to the next battle
        
        if(e.gethealth()<=0) printline("your enemy is dead, well done",1000);
        // else continue with the battle and if the user is dead set alive to false
        // if the boolean enemy attack is true let the enemy attack
        else if(c.getboolean()==true){
            e.attack(c);
            if(c.gethealth()<=0){
                printline("Youre dead. Better luck next time",0);
                alive=false;
                }
            else printline("Your health is:"+ c.gethealth(),1500);
        }
        
        c.setboolean(true);
    }
    
}
sleep(1500);
if(alive==true)
    {
       printline("Congratilations!!! YOU WON!",0);
    }
    
}
}



        
            
        
            
            
        
        



    
