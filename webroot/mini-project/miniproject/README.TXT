------------------------------------------------------------------------
This is the project README file. Here, you should describe your project.
Tell the reader (someone who does not know anything about this project)
all he/she needs to know. The comments should usually include at least:
------------------------------------------------------------------------

PROJECT TITLE: Adventure Game
PURPOSE OF PROJECT: Mini-project
VERSION or DATE: 1
HOW TO START THIS PROJECT: Run main method in play class
AUTHORS: Mostafa Abdelmaksoud
USER INSTRUCTIONS:
Student name:
Student number:

Now complete the statements below for each level you wish to be marked. Replace all text in square brackets.

LEVEL ONE

My code demonstrates inheritance in the following way...

I have a superclass called [character]

This superclass is extended into at least two subclasses called [wizard, archer,Antman,hitman]

For each of the named subclasses complete the following...

Subclass 1.

Subclass [wizard] extends the superclass by adding at least one property and its getters and setters. The name(s) of the added properties are [Boolean heal and int values for different attacks( tree_root, avadacadabra,fire_attack) .]

These/this new properties/property are used by the subclass in the following way: [heal(line 75, line 43) is used in the upgrade_attack method and determines if the attack avadacabra can heal the character.The different int values are used to decrease enemy health: (tree_root line 58)(fire_attack line 28) (avadacadabra 41,42,76,77).]

Subclass [wizard] extends the superclass by overriding the following methods (there must be atleast one): [get_attacks:68 attack2:39 upgrade_attack:72.]

These overridden methods are used in the working code in the following places: [class play: lines(85,118,108) respectivley.]

Subclass 2.

Subclass [Antman] extends the superclass by adding at least one property and its getters and setters. The name(s) of the added properties are [Boolean shock and different int values for attacks (electric_shock, go_Superlarge, flying_clothesline.]

These/this new properties/property are used by the subclass in the following way: [shock(lines 72,83) is used to determine if the electric shock attack will stun the enemy. The int values are used to decrease enemy health in different ammounts:(electric_shock 55,62)(go_SuperLarge line 24)(flying_clothesline 37 42 76 77).]

Subclass [Antman] extends the superclass by overriding the following methods (there must be atleast one): [attack3: line47  get_attacks: line 66 upgrade_attack:line70.]

These overridden methods are used in the working code in the following places: [class play: 119 85 108 respectivley.]


LEVEL TWO

Polymorphism consists of the use of the Substitution principle and Late Dynamic binding.

In my code, polymorphism is implemented in at least two places…

Example 1.

The substitution principle can be seen in use in [class play lines: 55,60,65,70]. The name of the superclass used this example is [character] and the subclasses used are [Antman,wizard,archer,hitman].

Late dynamic binding can be seen in [class play lines: either 55,60,65,70 depending on the user answer].

[The user needs to choose a character for him to play with. So a variable of type character is declared in the begining of the code and then there are a series of if and else if statments
to determine what instance will the variable be of eg character c = new wizard(). Each character has special features and attacks]

Example 2.

The substitution principle can be seen in use in [class play lines:95,98]. The name of the superclass used this example is [enemy] and the subclasses used are [goblin, golem].

Late dynamic binding can be seen in [class play lines either: 95,98 depending on the random number that is generated].

[There needs to be an  enemy in each battle the user enters. So a varaible of type enemy is declared in the begining of the code so each battle has a different type of enemy who has different features and attacks]
